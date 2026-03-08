@extends('layouts.app')

@section('title', 'JURI Bloom Company')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-14%] top-[8%] h-[72vw] w-[72vw] sm:left-[-10%] sm:top-[-8%] sm:h-[46vw] sm:w-[46vw] rounded-full bg-turquoise/10 animate-pulse blur-[90px] sm:blur-[120px]"></div>
    <div class="absolute bottom-[-20%] right-[-12%] h-[50vw] w-[50vw] rounded-full bg-azure/20 blur-[150px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Label & Company</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[7rem]">
            JURI<br>
            <span class="text-outline not-italic">Bloom</span>
        </h1>
        <p class="mt-8 max-w-3xl text-lg text-paper/75 sm:text-2xl">
            The creative and business foundation behind every release, collaboration, and future plan.
        </p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-[1800px] grid-cols-1 gap-8 lg:grid-cols-12">
        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-6 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">The Company</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                JURI Bloom is more than a name. It is the structure that supports creativity, releases, and growth. That keeps the focus on music that truly resonates.
            </p>
            <p class="mt-4 text-base leading-relaxed text-paper/75 sm:text-lg">
                From planning to publication, each project is built with intention, quality, and a long-term vision.
            </p>
        </article>

        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-6 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Why Bloom</h2>
            <ul class="mt-6 space-y-4 text-base leading-relaxed text-paper/75 sm:text-lg">
                <li class="rounded-xl border border-turquoise/15 bg-deep-ocean/50 px-4 py-3">Strong artistic identity without compromise.</li>
                <li class="rounded-xl border border-turquoise/15 bg-deep-ocean/50 px-4 py-3">Consistent release strategy and catalog growth.</li>
                <li class="rounded-xl border border-turquoise/15 bg-deep-ocean/50 px-4 py-3">Room for collaborations with producers and featured artists.</li>
            </ul>
        </article>
    </div>
</section>
@endsection
