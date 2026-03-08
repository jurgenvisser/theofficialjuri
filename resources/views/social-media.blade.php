@extends('layouts.app')

@section('title', 'Social Media')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-14%] top-[8%] h-[72vw] w-[72vw] sm:left-[-10%] sm:top-[-8%] sm:h-[46vw] sm:w-[46vw] rounded-full bg-turquoise/10 animate-pulse blur-[90px] sm:blur-[120px]"></div>
    <div class="absolute bottom-[-16%] right-[-10%] h-[45vw] w-[45vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Community & Updates</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[7rem]">
            Follow<br>
            <span class="text-outline not-italic">JURI</span>
        </h1>
        <p class="mt-8 max-w-3xl text-lg text-paper/75 sm:text-2xl">
            Follow the journey on social channels for sneak peeks, studio updates, and new releases.
        </p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-[1800px] grid-cols-1 gap-8 lg:grid-cols-12">
        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-7 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Behind The Scenes</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                On social media, I share the creative process, snippets of new tracks, and updates from Groningen. You get a behind-the-scenes view before releases go live.
            </p>
            <p class="mt-4 text-base leading-relaxed text-paper/75 sm:text-lg">
                Follow <span class="text-nike-volt">@theofficialjuri</span> and stay connected to everything around JURI and JURI Bloom.
            </p>
        </article>

        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-5 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Channels</h2>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="https://www.instagram.com/theofficialjuri" target="_blank" rel="noopener noreferrer" class="group flex h-16 w-16 items-center justify-center rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/Instagram_Glyph_White.svg') }}" alt="Instagram" class="h-8 w-8 transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                </a>
                <a href="https://www.threads.com/@theofficialjuri" target="_blank" rel="noopener noreferrer" class="group flex h-16 w-16 items-center justify-center rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/threads-logo-white-square.svg') }}" alt="Threads" class="h-8 w-8 transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                </a>
                <a href="https://x.com/theofficialjuri" target="_blank" rel="noopener noreferrer" class="group flex h-16 w-16 items-center justify-center rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/x_logo_white.svg') }}" alt="X" class="h-8 w-8 transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                </a>
                <a href="https://www.facebook.com/people/JURI/61569421913916/" target="_blank" rel="noopener noreferrer" class="group flex h-16 w-16 items-center justify-center rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/Facebook_Logo_Secondary.png') }}" alt="Facebook" class="h-8 w-8 object-contain transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                </a>
            </div>
        </article>
    </div>
</section>
@endsection
