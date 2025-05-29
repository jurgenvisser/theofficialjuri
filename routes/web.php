<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\SitemapGenerator;

// Route for the 'Homepage' page
Route::get('/', function () {
    return view('homepage'); // Refer to homepage.blade.php
});

// Route for the 'Streaming' page
Route::get('/music', function () {
    return view('music'); // Refer to missie-visie.blade.php
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
    $adminPassword = 'TheSkySystem'; // Define your admin password

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
Route::get('/admin/logout', function () {
    session()->forget('admin_logged_in'); // Clear the session
    return redirect('/')->with('message', 'You have been logged out');
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