@extends('layouts.app')

@section('title', 'Streaming Services')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-14%] top-[8%] h-[72vw] w-[72vw] sm:left-[-10%] sm:top-[-8%] sm:h-[46vw] sm:w-[46vw] rounded-full bg-turquoise/10 animate-pulse blur-[90px] sm:blur-[120px]"></div>
    <div class="absolute bottom-[-18%] right-[-12%] h-[48vw] w-[48vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Listening Platforms</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[7rem]">
            Stream<br>
            <span class="text-outline not-italic">It</span>
        </h1>
        <p class="mt-8 max-w-3xl text-lg text-paper/75 sm:text-2xl">
            Discover every place where you can stream JURI. Pick your platform and listen instantly.
        </p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-[1800px] grid-cols-1 gap-8 lg:grid-cols-12">
        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-7 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Where To Listen</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                You can find releases on Apple Music, Spotify, YouTube, and YouTube Music. New music rolls out across multiple platforms at the same time, so you can listen wherever you want.
            </p>
            <p class="mt-4 text-base leading-relaxed text-paper/75 sm:text-lg">
                Add tracks to your playlists, share them with friends, and stay up to date on new releases.
            </p>
        </article>

        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-5 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Direct Links</h2>
            <div class="mt-8 flex gap-4">
                <a href="https://music.apple.com/us/artist/juri/1777135807" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/Apple_Music_Icon_wht.svg') }}" alt="Apple Music" class="h-8 w-8 transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                    {{-- <p class="mt-3 text-xs font-black uppercase tracking-[0.25em] text-paper/80 group-hover:text-nike-volt">Apple Music</p> --}}
                </a>
                <a href="https://open.spotify.com/artist/6V5305M5J7Z8UXD9EVWMYj?si=acNfjgalRMON76ndy7xlOA" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/Spotify_Logo_White.png') }}" alt="Spotify" class="h-8 w-8 object-contain transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                    {{-- <p class="mt-3 text-xs font-black uppercase tracking-[0.25em] text-paper/80 group-hover:text-nike-volt">Spotify</p> --}}
                </a>
                <a href="https://www.youtube.com/@theofficialjuri" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/youtube_white.svg') }}" alt="YouTube" class="h-8 w-8 transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                    {{-- <p class="mt-3 text-xs font-black uppercase tracking-[0.25em] text-paper/80 group-hover:text-nike-volt">YouTube</p> --}}
                </a>
                <a href="https://music.youtube.com/channel/UCbbD2b6eD2sKjLC4FHfGmRw" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-turquoise/20 bg-deep-ocean/40 p-4 transition-all hover:scale-110 hover:border-nike-volt/50 hover:bg-deep-ocean/65">
                    <img src="{{ asset('images/icons/ytmusic_icon_white.svg') }}" alt="YouTube Music" class="h-8 w-8 transition duration-300 group-hover:drop-shadow-[0_0_14px_rgba(206,255,0,0.75)]">
                    {{-- <p class="mt-3 text-xs font-black uppercase tracking-[0.25em] text-paper/80 group-hover:text-nike-volt">YouTube Music</p> --}}
                </a>
            </div>
        </article>
    </div>
</section>
@endsection
