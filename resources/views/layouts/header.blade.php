@php
    $mainLinks = [
        ['label' => 'Homepage', 'href' => '/'],
        ['label' => 'Music', 'href' => '/music'],
        ['label' => 'Streaming', 'href' => '/streaming'],
        ['label' => 'Social Media', 'href' => '/social-media'],
        ['label' => 'JURI Bloom', 'href' => '/company'],
        ['label' => 'Contact', 'href' => '/contact'],
    ];

    $adminLinks = [
        ['label' => 'Admin Dashboard', 'href' => '/admin/dashboard'],
        ['label' => 'Admin Test', 'href' => '/admin/test'],
        ['label' => 'Admin Logout', 'href' => '/admin/logout', 'isLogout' => true],
    ];

    $adminLoggedIn = (bool) session('admin_logged_in');
@endphp

<header class="fixed inset-x-0 top-0 z-50 border-b border-turquoise/15 bg-deep-ocean/90 backdrop-blur-xl">
    <div class="mx-auto flex max-w-[1800px] items-center justify-between px-4 py-4 sm:px-6 md:px-10 md:py-6">
        <a href="/" class="font-display text-2xl font-black italic tracking-tighter sm:text-3xl md:text-4xl">
            THEOFFICIALJURI<span class="text-nike-volt">.</span>
        </a>

        <div class="hidden md:flex md:flex-col md:items-end md:gap-2">
            <nav class="flex items-center gap-5 text-[10px] font-bold uppercase tracking-[0.28em] lg:gap-7 lg:tracking-[0.34em]">
                @foreach ($mainLinks as $link)
                    @php
                        $path = trim($link['href'], '/');
                        $isActive = $path === '' ? request()->path() === '/' : request()->is($path) || request()->is($path . '/*');
                    @endphp
                    <a
                        href="{{ $link['href'] }}"
                        class="transition-colors {{ $isActive ? 'text-nike-volt' : 'text-paper hover:text-nike-volt' }}"
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            @if ($adminLoggedIn)
                <nav class="flex items-center gap-5 text-[10px] font-bold uppercase tracking-[0.28em] lg:gap-7 lg:tracking-[0.34em]">
                    @foreach ($adminLinks as $link)
                        @php
                            $path = trim($link['href'], '/');
                            $isActive = request()->is($path) || request()->is($path . '/*');
                            $isLogout = (bool) ($link['isLogout'] ?? false);
                        @endphp
                        @if ($isLogout)
                            <form action="/admin/logout" method="POST" class="inline">
                                @csrf
                                <button
                                    type="submit"
                                    class="transition-colors text-rose-400 uppercase hover:text-rose-600"
                                >
                                    {{ $link['label'] }}
                                </button>
                            </form>
                        @else
                            <a
                                href="{{ $link['href'] }}"
                                class="transition-colors {{ $isActive ? 'text-nike-volt' : 'text-paper hover:text-nike-volt' }}"
                            >
                                {{ $link['label'] }}
                            </a>
                        @endif
                    @endforeach
                </nav>
            @endif
        </div>

        <button
            id="hamburger-icon"
            type="button"
            aria-controls="mobile-menu"
            aria-expanded="false"
            class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-turquoise/30 bg-[#07242B]/90 text-paper transition-colors hover:border-nike-volt hover:text-nike-volt focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-nike-volt/60 md:hidden"
        >
            <span class="sr-only">Open mobile menu</span>
            <span class="mobile-menu-icon" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
</header>

<div id="mobile-menu" aria-hidden="true" class="fixed inset-0 z-40 hidden pointer-events-none opacity-0 transition-opacity duration-300 md:hidden">
    <button
        type="button"
        data-mobile-menu-backdrop
        tabindex="-1"
        aria-label="Close mobile menu"
        class="absolute inset-0 bg-deep-ocean/80 backdrop-blur-sm"
    ></button>

    <nav
        id="mobile-menu-panel"
        class="relative mx-4 mt-24 origin-top translate-y-4 scale-[0.98] rounded-[2rem] border border-turquoise/20 bg-[#07242B]/95 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.45)] transition-transform duration-300"
    >
        <ul class="space-y-2 text-sm font-bold uppercase tracking-[0.24em]">
            @foreach ($mainLinks as $link)
                @php
                    $path = trim($link['href'], '/');
                    $isActive = $path === '' ? request()->path() === '/' : request()->is($path) || request()->is($path . '/*');
                @endphp
                <li>
                    <a
                        href="{{ $link['href'] }}"
                        class="block rounded-2xl border px-4 py-3 transition-colors {{ $isActive ? 'border-nike-volt/50 bg-nike-volt/10 text-nike-volt' : 'border-transparent hover:border-nike-volt/30 hover:bg-deep-ocean/40 hover:text-nike-volt' }}"
                    >
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        @if ($adminLoggedIn)
            <div class="my-5 h-px w-full bg-turquoise/20"></div>
            <ul class="space-y-2 text-xs font-black uppercase tracking-[0.22em]">
                @foreach ($adminLinks as $link)
                    @php
                        $path = trim($link['href'], '/');
                        $isActive = request()->is($path) || request()->is($path . '/*');
                        $isLogout = (bool) ($link['isLogout'] ?? false);
                    @endphp
                    <li>
                        @if ($isLogout)
                            <form action="/admin/logout" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="block w-full rounded-2xl border border-rose-500/45 px-4 py-3 text-left text-rose-300 transition-colors hover:border-rose-400"
                                >
                                    {{ $link['label'] }}
                                </button>
                            </form>
                        @else
                            <a
                                href="{{ $link['href'] }}"
                                class="block rounded-2xl border px-4 py-3 transition-colors {{ $isActive ? 'border-nike-volt/50 bg-nike-volt/10 text-nike-volt' : 'border-turquoise/30 text-turquoise hover:border-nike-volt/35 hover:text-nike-volt' }}"
                            >
                                {{ $link['label'] }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </nav>
</div>
