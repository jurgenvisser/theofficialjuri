@extends('layouts.app')

@section('title', 'Template Page')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-14%] top-[8%] h-[72vw] w-[72vw] sm:left-[-10%] sm:top-[-8%] sm:h-[46vw] sm:w-[46vw] rounded-full bg-turquoise/10 animate-pulse blur-[90px] sm:blur-[120px]"></div>
    <div class="absolute bottom-[-14%] right-[-10%] h-[45vw] w-[45vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Template</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[6rem]">TITLE</h1>
        <p class="mt-6 max-w-2xl text-lg text-paper/75">Use this page as a base for new content sections.</p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto max-w-[1800px]">
        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/75 p-8 sm:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Content Block</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                Body of text.
            </p>
        </article>
    </div>
</section>
@endsection
