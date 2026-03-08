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
            <div class="bento-card group relative overflow-hidden flex min-h-[360px] flex-col justify-between bg-gradient-to-br from-[#07242B] to-deep-ocean md:col-span-4 lg:col-span-3 sm:min-h-[450px]">
                <div class="absolute -right-16 -top-20 h-56 w-56 rounded-full border border-nike-volt/10"></div>
                <div class="absolute right-16 top-12 h-20 w-20 rounded-full border border-turquoise/20"></div>
                <div class="absolute inset-y-0 right-0 w-28 bg-gradient-to-l from-turquoise/10 to-transparent transition-all duration-700 group-hover:w-44"></div>
                <div class="absolute -left-10 bottom-10 h-24 w-24 rotate-12 rounded-3xl border border-paper/10"></div>

                <div class="relative z-10 flex items-start justify-between">
                    <span class="rounded-full border border-turquoise/35 bg-turquoise/10 px-3 py-1 text-[10px] font-black uppercase tracking-[0.3em] text-turquoise">Label Focus</span>
                </div>
                <div class="relative z-10 space-y-6">
                    <h4 class="font-display text-5xl italic leading-none">Juri Releases</h4>
                    <p class="max-w-sm text-xs uppercase leading-loose tracking-[0.2em] text-paper/40">Explore the full catalog released under my own label, Juri Bloom.</p>
                    <a href="/music" class="inline-block rounded-full bg-nike-volt px-8 py-3 text-[10px] font-black uppercase tracking-widest text-deep-ocean transition-transform hover:scale-105">View Catalog</a>
                </div>
            </div>

            <a href="/streaming" class="bento-card group relative overflow-hidden border-none bg-gradient-to-br from-[#95c700] via-[#7ead00] to-[#5a7f00] text-paper md:col-span-2 lg:col-span-3">
                <div class="absolute -left-14 -top-16 h-40 w-40 rounded-full border border-paper/20"></div>
                <div class="absolute -right-10 bottom-10 h-32 w-32 rounded-full border border-paper/15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_15%,rgba(255,255,255,0.25),transparent_50%)]"></div>
                <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-deep-ocean/30 to-transparent transition-all duration-700 group-hover:w-40"></div>

                <div class="relative z-10 flex h-full min-h-[300px] flex-col justify-between gap-7 sm:min-h-[340px]">
                    <div class="flex items-center justify-between">
                        <span class="rounded-full border border-paper/35 bg-paper/10 px-3 py-1 text-[10px] font-black uppercase tracking-[0.3em] text-paper">Streaming</span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-paper/70">4 Platforms</span>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-display text-4xl font-black uppercase italic leading-[0.85] tracking-tighter sm:text-5xl md:text-6xl">
                            Stream<br>Now
                        </h4>
                        <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-paper/70">
                            Open the full listening hub.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 rounded-xl border border-paper/25 bg-paper/10 px-3 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-paper">
                            <img src="{{ asset('images/icons/Apple_Music_Icon_wht.svg') }}" alt="Apple Music" class="h-4 w-4">
                            <span>Apple Music</span>
                        </div>
                        <div class="flex items-center gap-2 rounded-xl border border-paper/25 bg-paper/10 px-3 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-paper">
                            <img src="{{ asset('images/icons/Spotify_Logo_White.png') }}" alt="Spotify" class="h-4 w-4 object-contain">
                            <span>Spotify</span>
                        </div>
                        <div class="flex items-center gap-2 rounded-xl border border-paper/25 bg-paper/10 px-3 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-paper">
                            <img src="{{ asset('images/icons/youtube_white.svg') }}" alt="YouTube" class="h-4 w-4">
                            <span>YouTube</span>
                        </div>
                        <div class="flex items-center gap-2 rounded-xl border border-paper/25 bg-paper/10 px-3 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-paper">
                            <img src="{{ asset('images/icons/ytmusic_icon_white.svg') }}" alt="YouTube Music" class="h-4 w-4">
                            <span>YT Music</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/social-media" class="bento-card group relative overflow-hidden md:col-span-2">
                <div class="absolute -left-10 top-10 h-36 w-36 rounded-full border border-turquoise/15"></div>
                <div class="absolute -right-8 bottom-8 h-24 w-24 rounded-full border border-nike-volt/15"></div>

                <div class="relative z-10 flex h-full flex-col justify-between gap-8">
                    <div class="flex items-center justify-between">
                        <span class="rounded-full border border-turquoise/35 bg-turquoise/10 px-3 py-1 text-[10px] font-black uppercase tracking-[0.3em] text-turquoise">Social Feed</span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-paper/40">Daily</span>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 rounded-xl border border-turquoise/20 bg-deep-ocean/55 px-3 py-2 transition-all duration-500 group-hover:border-nike-volt/35">
                            <img src="{{ asset('images/icons/Instagram_Glyph_White.svg') }}" alt="Instagram" class="h-4 w-4">
                            <span class="text-[10px] font-black uppercase tracking-[0.22em] text-paper/70">Instagram</span>
                        </div>
                        <div class="flex items-center gap-2 rounded-xl border border-turquoise/20 bg-deep-ocean/55 px-3 py-2 transition-all duration-500 group-hover:border-nike-volt/35">
                            <img src="{{ asset('images/icons/threads-logo-white-square.svg') }}" alt="Threads" class="h-4 w-4">
                            <span class="text-[10px] font-black uppercase tracking-[0.22em] text-paper/70">Threads</span>
                        </div>
                        <div class="flex items-center gap-2 rounded-xl border border-turquoise/20 bg-deep-ocean/55 px-3 py-2 transition-all duration-500 group-hover:border-nike-volt/35">
                            <img src="{{ asset('images/icons/x_logo_white.svg') }}" alt="X" class="h-3 w-4">
                            <span class="text-[10px] font-black uppercase tracking-[0.22em] text-paper/70">X</span>
                        </div>
                        <div class="flex items-center gap-2 rounded-xl border border-turquoise/20 bg-deep-ocean/55 px-3 py-2 transition-all duration-500 group-hover:border-nike-volt/35">
                            <img src="{{ asset('images/icons/Facebook_Logo_Secondary.png') }}" alt="Facebook" class="h-4 w-4 object-contain">
                            <span class="text-[10px] font-black uppercase tracking-[0.22em] text-paper/70">Facebook</span>
                        </div>
                    </div>

                    <div>
                        <p class="font-display text-3xl italic leading-none text-paper transition-colors group-hover:text-nike-volt">Follow JURI</p>
                        <p class="mt-2 text-[10px] font-bold uppercase tracking-[0.25em] text-paper/45">@theofficialjuri</p>
                    </div>
                </div>
            </a>

            <a href="/company" class="bento-card group relative overflow-hidden bg-gradient-to-br from-[#0a2e35] via-[#08272d] to-[#04161a] md:col-span-2 lg:col-span-4">
                <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full border border-nike-volt/10"></div>
                <div class="absolute right-14 top-16 h-28 w-28 rounded-full border border-turquoise/20"></div>
                <div class="absolute inset-y-0 right-0 w-36 bg-gradient-to-l from-nike-volt/10 to-transparent transition-all duration-700 group-hover:w-56"></div>

                <div class="relative z-10 flex h-full flex-col justify-between gap-8 md:flex-row md:items-end">
                    <span class="absolute left-0 top-0 rounded-full border border-turquoise/35 bg-turquoise/10 px-3 py-1 text-[10px] font-black uppercase tracking-[0.3em] text-turquoise">Independent Label</span>

                    <div class="max-w-xl pt-10">
                        <h4 class="mt-5 font-display text-5xl italic leading-none transition-colors group-hover:text-nike-volt">JURI Bloom</h4>
                        <p class="mt-4 text-sm uppercase leading-loose tracking-[0.2em] text-paper/55">
                            Creative direction, release strategy, and long-term catalog building.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-paper/15 bg-deep-ocean/40 px-5 py-4 text-right">
                        <p class="text-[10px] font-black uppercase tracking-[0.25em] text-paper/45">Open</p>
                        <p class="mt-2 text-xs font-black uppercase tracking-[0.25em] text-nike-volt">Company Page</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

@endsection
