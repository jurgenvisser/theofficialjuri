<div class="w-full flex justify-center items-center">
    <div class="bg-black h-16 responsive-width flex items-center justify-between text-white sticky top-0 z-50">
        <!-- Left Logo Section -->
        <a href="/" aria-label="Go to the homepage via the logo">
            <span class="font-lexend text-4xl xl:text-2xl 2xl:text-4xl">@theofficialjuri</span>
        </a>
    
        <!-- Links (Desktop) Positioned between the two logos -->
        <div class="hidden xl:flex justify-center items-center space-x-4 sm:space-x-8 mx-4 flex-1">
            @include('layouts.header-menu')
        </div>
    
        <!-- Right Logo Section (visible on desktop) -->
        <a href="/" aria-label="Go to the homepage via the logo" class="hidden xl:block visible xl:invisible">
            <span class="font-lexend text-4xl xl:text-2xl 2xl:text-4xl">@theofficialjuri</span>
        </a>
    
        <!-- Hamburger Menu Button (Visible on mobile) -->
        <div class="xl:hidden flex items-center">
            <button id="hamburger-icon" class="text-colorPrimary focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

{{-- # Mobile Menu is outside of the parent div from the navbar. This is intended and needs to stay this way. --}}
<!-- Mobile Menu (Hidden by default, toggled by hamburger) -->
<div id="mobile-menu" class="xl:hidden w-full bg-black text-white fixed top-16 left-0 hidden max-h-screen overflow-y-auto z-40">
    <div class="flex flex-col space-y-0 py-4">
        @include('layouts.header-menu')
    </div>
</div>