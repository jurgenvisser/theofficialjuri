<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\SitemapGenerator;

View::share([
    'appVersion' => 'TOJ.1.0.0P',
]);

// Route for the 'Homepage' page
Route::get('/', function () {
    return view('homepage'); // Refer to homepage.blade.php
});

// Route for the 'Streaming' page
Route::get('/music', function () {
    $catalogPath = resource_path('data/music-releases.json');
    $catalog = [
        'singles' => [],
        'eps' => [],
        'albums' => [],
    ];

    if (File::exists($catalogPath)) {
        $decoded = json_decode(File::get($catalogPath), true);
        if (is_array($decoded)) {
            $catalog = array_merge($catalog, $decoded);
        }
    }

    $normalizePeople = static function ($value): array {
        if (is_string($value)) {
            $value = trim($value);
            return $value !== '' ? [$value] : [];
        }

        if (!is_array($value)) {
            return [];
        }

        return collect($value)
            ->filter(fn ($item) => is_string($item) && trim($item) !== '')
            ->map(fn ($item) => trim($item))
            ->values()
            ->all();
    };

    $normalizeVisible = static function ($value): bool {
        if (is_bool($value)) {
            return $value;
        }

        if (is_numeric($value)) {
            return (int) $value !== 0;
        }

        if (is_string($value)) {
            $normalized = strtolower(trim($value));
            if (in_array($normalized, ['false', '0', 'no', 'off'], true)) {
                return false;
            }
            if (in_array($normalized, ['true', '1', 'yes', 'on'], true)) {
                return true;
            }
        }

        return true;
    };

    $normalize = static function (array $release, string $type) use ($normalizePeople, $normalizeVisible): array {
        $releaseDate = $release['release_date'] ?? null;
        $parsedDate = null;

        if (!empty($releaseDate)) {
            try {
                $parsedDate = Carbon::parse($releaseDate);
            } catch (\Exception $e) {
                $parsedDate = null;
            }
        }

        $tracks = collect($release['tracks'] ?? [])
            ->filter(fn ($track) => is_array($track))
            ->map(static function (array $track) use ($normalizePeople): array {
                return [
                    'title' => $track['title'] ?? 'Untitled Track',
                    'subtitle' => $track['subtitle'] ?? null,
                    'duration' => $track['duration'] ?? null,
                    'featured_artists' => $normalizePeople($track['featured_artists'] ?? []),
                    'producers' => $normalizePeople($track['producers'] ?? []),
                ];
            })
            ->values()
            ->all();

        return [
            'type' => $type,
            'visible' => $normalizeVisible($release['visible'] ?? true),
            'title' => $release['title'] ?? 'Untitled Release',
            'label' => $release['label'] ?? 'JURI Bloom',
            'cover_image' => $release['cover_image'] ?? 'images/photos/alternative-profile-picture.PNG',
            'description' => $release['description'] ?? '',
            'featured_artists' => $normalizePeople($release['featured_artists'] ?? []),
            'producers' => $normalizePeople($release['producers'] ?? []),
            'tracks' => $tracks,
            'release_date_label' => $parsedDate ? $parsedDate->format('F j, Y') : ($release['release_date_label'] ?? 'TBA'),
            'release_timestamp' => $parsedDate ? $parsedDate->timestamp : 0,
        ];
    };

    $releases = collect()
        ->merge(
            collect($catalog['singles'] ?? [])
                ->filter(fn ($release) => is_array($release))
                ->map(fn (array $release) => $normalize($release, 'single'))
        )
        ->merge(
            collect($catalog['eps'] ?? [])
                ->filter(fn ($release) => is_array($release))
                ->map(fn (array $release) => $normalize($release, 'ep'))
        )
        ->merge(
            collect($catalog['albums'] ?? [])
                ->filter(fn ($release) => is_array($release))
                ->map(fn (array $release) => $normalize($release, 'album'))
        )
        ->filter(fn (array $release) => ($release['visible'] ?? true) === true)
        ->sortByDesc('release_timestamp')
        ->values()
        ->all();

    return view('music', [
        'releases' => $releases,
    ]);
});

// Route for the 'Streaming' page
Route::get('/streaming', function () {
    return view('streaming'); // Refer to missie-visie.blade.php
});

// Route for the 'Social Media' page
Route::get('/social-media', function () {
    return view('social-media'); // Refer to social-media.blade.php
});

// Route for the 'Company' page
Route::get('/company', function () {
    return view('company'); // Refer to missie-visie.blade.php
});

// Route for the 'Missie & Visie' page
Route::get('/contact', function () {
    return view('contact'); // Refer to missie-visie.blade.php
});


// Route to access the admin login page
Route::get('/admin', function () {
    // Check if the user is already logged in
    if (session('admin_logged_in')) {
        return redirect('/admin/dashboard'); // Redirect to dashboard if already logged in
    }

    // If not logged in, show login form (or handle the login query)
    return view('admin'); // You can create a view that shows the login form if needed.
});

Route::post('/admin/dashboard', function () {
    $adminPassword = 'QuanckerLtd.'; // Define your admin password

    // Use the facade to get the password from the request
    if (request()->input('password') === $adminPassword) {
        // Store the session to indicate the user is logged in
        session(['admin_logged_in' => true]);

        return redirect('/admin/dashboard'); // Redirect to the admin dashboard
    } else {
        // Redirect back to the login page with an error message
        return redirect('/admin')->with('error', 'Password is incorrect');
    }
});

Route::get('/admin/dashboard', function () {
    // Ensure the user is logged in before allowing access to the dashboard
    if (session('admin_logged_in')) {
        return view('admin-dashboard'); // Show the dashboard if logged in
    } else {
        return redirect('/admin')->with('error', 'Please log in first'); // Redirect to login if not logged in
    }
});


// Logout route to clear the session
Route::match(['get', 'post'], '/admin/logout', function () {
    $session = request()->session();
    $session->forget('admin_logged_in');
    $session->invalidate();
    $session->regenerateToken();

    return redirect('/admin')->with('message', 'You have been logged out');
});

// Route for the 'Test' page
Route::get('/admin/test', function () {
    // Check if the user is logged in
    if (!session('admin_logged_in')) {
        return redirect('/admin')->with('error', 'Please log in first'); // Redirect to login if not logged in
    }
    return view('test'); // Refer to test.blade.php
});



// Route for generating sitemap
Route::get('/generate-sitemap', function () {
    // Generate the sitemap manually
    $sitemap = Sitemap::create()
        ->add(Url::create('/')->setLastModificationDate(now())->setChangeFrequency('daily')->setPriority(1.0))
        ->add(Url::create('/about')->setLastModificationDate(now())->setChangeFrequency('weekly')->setPriority(0.8));
    
    // Write sitemap to public folder
    $sitemap->writeToFile(public_path('sitemap.xml'));
    
    return 'Sitemap has been generated!';
});

// Route for generating full sitemap using SitemapGenerator
Route::get('/generate-full-sitemap', function () {
    SitemapGenerator::create('https://thesystemoftheworld.com')
        ->writeToFile(public_path('sitemap.xml'));

    return 'Full sitemap has been generated!';
});
