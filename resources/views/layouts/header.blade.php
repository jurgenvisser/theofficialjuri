<div class="w-full flex justify-center xl:items-between fixed top-0 z-50 pt-0 xl:pt-12">
    <div class="responsive-width flex items-center justify-between">
        <!-- Left Logo Section -->
        <div class="absolute translate-x-0 left-6 pt-24 xl:pt-0">
            @include('layouts.header-logo')
        </div>
    
        <!-- Links (Desktop) Positioned between the two logos -->
        <div class="hidden xl:flex absolute right-6 2xl:left-1/2 2xl:-translate-x-1/2">
            @include('layouts.header-menu')
            {{-- @include('layouts.animated-navbar') --}}
        </div>
    
        <!-- Hamburger Menu Button (Visible on mobile) -->
        <div class="xl:hidden flex items-center absolute right-6 pt-24 xl:pt-0">
            <div class="relative h-[64px] flex items-center justify-between rounded-full px-0.5">
            <div class="absolute inset-0 rounded-full bg-gradient-to-b from-neutral-700 to-neutral-800 shadow-[0_8px_32px_rgba(0,0,0,0.6),0_2px_8px_rgba(0,0,0,0.4),inset_0_1px_0_rgba(255,255,255,0.1),inset_0_-1px_2px_rgba(0,0,0,0.5)]"></div>
            <div class="absolute inset-[3px] rounded-full bg-gradient-to-b from-neutral-800 to-neutral-900 shadow-[inset_0_2px_4px_rgba(0,0,0,0.8),inset_0_-1px_2px_rgba(255,255,255,0.05)]"></div>
            <div class="fixed h-[48px] transition-all duration-200 bg-gradient-to-b from-white/10 to-white/5 rounded-full shadow-[inset_0_1px_2px_rgba(255,255,255,0.2)] backdrop-blur-sm" style="top:8px"></div>
                <nav class="flex m-1.5 fit-content">
                    <button id="hamburger-icon" class="bubblePrimary-hover relative px-5 cursor-pointer py-3 rounded-full flex justify-center items-center z-10 text-white font-lexend text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- # Mobile Menu is outside of the parent div from the navbar. This is intended and needs to stay this way. --}}
<!-- Mobile Menu (Hidden by default, toggled by hamburger) -->
<div id="mobile-menu" class="xl:hidden w-full text-white fixed top-24 left-0 hidden max-h-screen overflow-y-auto z-40">
    <div class="flex flex-col space-y-0 rounded-[32px] px-6">
        @include('layouts.header-menu')
        {{-- @include('layouts.animated-navbar') --}}
    </div>
</div>