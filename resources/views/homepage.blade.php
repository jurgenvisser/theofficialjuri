@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    <section class="relative flex min-h-screen flex-col justify-center overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-20 md:pb-0">
        <div class="absolute left-[-14%] top-[8%] h-[72vw] w-[72vw] sm:left-[-10%] sm:top-[-8%] sm:h-[46vw] sm:w-[46vw] rounded-full bg-turquoise/10 animate-pulse blur-[90px] sm:blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] h-[40vw] w-[40vw] rounded-full animate-pulse bg-azure/20 blur-[150px]"></div>

        <div class="relative z-10 max-w-6xl">
            <h2 class="reveal mb-8 text-[11px] font-black uppercase tracking-[0.45em] text-nike-volt sm:text-xs sm:tracking-[0.8em]">Professional Lead Vocalist & Founder of Juri Bloom</h2>
            <p class="reveal mb-10 font-display text-[20vw] font-black uppercase leading-[0.78] tracking-tighter sm:mb-12 sm:text-[16vw] md:text-[13rem]">
                VOICE<br>
                <span class="text-outline italic">BEYOND</span><br>
                <span class="volt-gradient">SOUND</span>
            </p>

            <div class="reveal grid grid-cols-1 items-end gap-10 sm:gap-14 md:grid-cols-2 md:gap-16">
                <p class="text-lg font-light leading-snug text-paper/70 sm:text-xl md:text-3xl">
                    Refined vocal performances and independent creativity, operating from <span class="italic text-turquoise">Groningen</span>.
                </p>
                <div class="flex items-center gap-6 border-t border-nike-volt/30 pt-6 md:border-l md:border-t-0 md:pl-8 md:pt-0">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-nike-volt">Now available for sessions & releases</span>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="border-y border-turquoise/10 bg-[#061e22] px-5 py-24 sm:px-6 sm:py-32 md:px-20 md:py-40">
        <div class="mx-auto grid max-w-[1800px] grid-cols-1 items-center gap-12 sm:gap-16 lg:grid-cols-12 lg:gap-20">
            <div class="reveal relative lg:col-span-5">
                <div class="glow-blue group relative z-10 aspect-[4/5] overflow-hidden rounded-[2.4rem] border border-turquoise/20 bg-[#082d33] sm:rounded-[3rem] md:rounded-[4rem]">
                    <img
                        src="{{ asset('images/photos/profile-picture.PNG') }}"
                        alt="Portrait of TheOfficialJuri"
                        class="h-full w-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-deep-ocean/80 to-transparent opacity-0 transition-all duration-700 group-hover:opacity-100"></div>
                </div>
                <div class="absolute -bottom-4 -right-4 -z-10 h-full w-full rounded-[2.4rem] border-2 border-nike-volt opacity-50 transition-all duration-500 group-hover:translate-x-3 group-hover:translate-y-3 sm:-bottom-5 sm:-right-5 sm:rounded-[3rem] md:-bottom-6 md:-right-6 md:rounded-[4rem]"></div>
            </div>

            <div class="reveal space-y-16 lg:col-span-7">
                <div>
                    <h3 class="mb-8 text-[10px] font-black uppercase tracking-[0.6em] text-turquoise">The Artist & Label</h3>
                    <h2 class="font-display text-5xl italic leading-[0.85] tracking-tighter sm:text-6xl md:text-9xl">
                        TheOfficial<span class="text-outline not-italic">Juri</span>
                    </h2>
                </div>

                <div class="max-w-2xl space-y-12">
                    <p class="text-xl font-light italic leading-relaxed text-paper/80 sm:text-2xl md:text-3xl">
                        "Under my own label, Juri Bloom, I create a world where my voice is central. No compromises, only pure expression from the north."
                    </p>

                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                        <div class="rounded-[2rem] border border-turquoise/10 bg-deep-ocean p-6 transition-colors hover:border-nike-volt/30 sm:p-8 md:rounded-[3rem] md:p-10">
                            <span class="mb-4 block text-2xl font-black tracking-tighter text-nike-volt">Vocal Artist</span>
                            <p class="text-xs uppercase leading-relaxed tracking-widest opacity-60">Lead vocalist specialized in unique textures and powerful harmonies.</p>
                        </div>
                        <div class="rounded-[2rem] border border-turquoise/10 bg-deep-ocean p-6 transition-colors hover:border-nike-volt/30 sm:p-8 md:rounded-[3rem] md:p-10">
                            <span class="mb-4 block text-2xl font-black tracking-tighter text-turquoise">Juri Bloom</span>
                            <p class="text-xs uppercase leading-relaxed tracking-widest opacity-60">My independent label; the home base for all of my creative output.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="relative overflow-x-clip overflow-y-visible bg-deep-ocean px-5 py-24 sm:px-6 sm:py-32 md:px-20 md:py-40">
        <div class="reveal relative z-10 mb-24 flex flex-col items-end justify-between gap-12 md:flex-row">
            <h2 class="font-display text-5xl uppercase italic leading-none tracking-tighter sm:text-7xl md:text-[10rem]">Work<span class="not-italic text-nike-volt">.</span></h2>
            <div class="flex flex-col items-end">
                <p class="mb-4 max-w-xs text-right text-[10px] font-black uppercase tracking-[0.4em] text-turquoise">TheOfficialJuri x Juri Bloom</p>
                <div class="h-1 w-32 bg-nike-volt"></div>
            </div>
        </div>

        <div class="reveal relative z-10 grid grid-cols-1 gap-6 md:grid-cols-4 lg:grid-cols-6">
            <div class="bento-card group flex min-h-[360px] flex-col justify-between bg-gradient-to-br from-[#07242B] to-deep-ocean md:col-span-4 lg:col-span-3 sm:min-h-[450px]">
                <div class="flex items-start justify-between">
                    <span class="rounded-full bg-turquoise px-4 py-2 text-[10px] font-black uppercase tracking-widest text-deep-ocean">Label Focus</span>
                    <span class="font-display text-5xl italic text-nike-volt opacity-20 transition-opacity group-hover:opacity-100">JB</span>
                </div>
                <div class="space-y-6">
                    <h4 class="font-display text-5xl italic leading-none">Juri Bloom Releases</h4>
                    <p class="max-w-sm text-xs uppercase leading-loose tracking-[0.2em] text-paper/40">Explore the full catalog released under my own label, Juri Bloom.</p>
                    <a href="/music" class="inline-block rounded-full bg-nike-volt px-8 py-3 text-[10px] font-black uppercase tracking-widest text-deep-ocean transition-transform hover:scale-105">View Catalog</a>
                </div>
            </div>

            <div class="bento-card group flex flex-col items-center justify-center border-none bg-nike-volt text-center text-deep-ocean md:col-span-2 lg:col-span-3">
                <h4 class="mb-4 font-display text-6xl font-black uppercase italic tracking-tighter transition-transform duration-700 group-hover:scale-110 sm:text-7xl md:text-8xl">Live<br>Groningen</h4>
                <p class="text-[10px] font-bold uppercase tracking-[0.4em] opacity-40">Local & International Bookings</p>
            </div>

            <div class="bento-card group flex flex-col items-center justify-between py-12 text-center md:col-span-2 md:py-16">
                <div class="mb-8 flex h-20 w-20 items-center justify-center rounded-full border border-turquoise/30 bg-turquoise/10 text-paper shadow-[0_0_40px_rgba(0,168,150,0.1)] transition-all duration-500 group-hover:bg-turquoise group-hover:text-deep-ocean">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                    </svg>
                </div>
                <span class="text-[10px] font-black uppercase tracking-[0.5em] text-turquoise">Vocal Services</span>
            </div>

            <div class="bento-card group flex items-center justify-between overflow-hidden bg-[#0a2e35] md:col-span-2 lg:col-span-4">
                <div class="p-4">
                    <h4 class="font-display text-4xl italic transition-colors group-hover:text-nike-volt">Collaboration</h4>
                    <p class="mt-2 text-[10px] font-bold uppercase tracking-widest opacity-30">From Groningen to the world...</p>
                </div>
                <div class="h-full w-1/3 translate-x-10 skew-x-12 border-l border-nike-volt/20 bg-azure/20 transition-transform duration-700 group-hover:translate-x-4"></div>
            </div>
        </div>
    </section>

@endsection
