@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-10%] top-[-8%] h-[44vw] w-[44vw] rounded-full bg-turquoise/10 blur-[120px]"></div>
    <div class="absolute bottom-[-18%] right-[-10%] h-[48vw] w-[48vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Contact & Bookings</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[7rem]">
            Start The<br>
            <span class="text-outline not-italic">Echo</span>
        </h1>
        <p class="mt-8 max-w-3xl text-lg text-paper/75 sm:text-2xl">
            For bookings, collaborations, or general questions, you can email directly.
        </p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-[1800px] grid-cols-1 gap-8 lg:grid-cols-12">
        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-7 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Email Direct</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                We respond as quickly as possible to serious requests and creative proposals.
            </p>
            <div class="mt-8 grid grid-cols-1 gap-4">
                <a href="mailto:contact@theofficialjuri.com" class="rounded-2xl border border-turquoise/20 bg-deep-ocean/45 px-5 py-4 text-sm font-bold uppercase tracking-[0.22em] text-paper/90 transition-colors hover:border-nike-volt/40 hover:text-nike-volt">
                    contact@theofficialjuri.com
                </a>
                <a href="mailto:info@theofficialjuri.com" class="rounded-2xl border border-turquoise/20 bg-deep-ocean/45 px-5 py-4 text-sm font-bold uppercase tracking-[0.22em] text-paper/90 transition-colors hover:border-nike-volt/40 hover:text-nike-volt">
                    info@theofficialjuri.com
                </a>
            </div>
        </article>

        <article class="reveal overflow-hidden rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-5 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Or DM</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                Prefer social media? Send a message through Instagram or Facebook for fast communication.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="https://www.instagram.com/theofficialjuri" target="_blank" rel="noopener noreferrer" class="rounded-full border border-turquoise/30 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-paper/90 transition-colors hover:border-nike-volt/50 hover:text-nike-volt">Instagram</a>
                <a href="https://www.facebook.com/people/JURI/61569421913916/" target="_blank" rel="noopener noreferrer" class="rounded-full border border-turquoise/30 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-paper/90 transition-colors hover:border-nike-volt/50 hover:text-nike-volt">Facebook</a>
                <a href="/social-media" class="rounded-full border border-turquoise/30 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] text-paper/90 transition-colors hover:border-nike-volt/50 hover:text-nike-volt">All Socials</a>
            </div>
        </article>
    </div>
</section>
@endsection
