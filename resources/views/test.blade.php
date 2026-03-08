@extends('layouts.app')

@section('title', 'Admin Test')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-14%] top-[8%] h-[72vw] w-[72vw] sm:left-[-10%] sm:top-[-8%] sm:h-[46vw] sm:w-[46vw] rounded-full bg-turquoise/10 animate-pulse blur-[90px] sm:blur-[120px]"></div>
    <div class="absolute bottom-[-14%] right-[-10%] h-[45vw] w-[45vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Admin Tools</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[6rem]">Test Environment</h1>
        <p class="mt-6 max-w-2xl text-lg text-paper/75">Use this page for internal checks and fast experiments.</p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-[1800px] grid-cols-1 gap-8 lg:grid-cols-12">
        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/75 p-8 lg:col-span-8">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Status</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                This is a protected admin test page. Add temporary components, test output, or internal content here without affecting the public site.
            </p>
            <p class="mt-4 text-base leading-relaxed text-paper/75 sm:text-lg">
                Navigation to admin pages is now available directly in the header while your session is active.
            </p>
        </article>

        <aside class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/75 p-8 lg:col-span-4">
            <p class="text-[10px] font-black uppercase tracking-[0.4em] text-turquoise">Quick Actions</p>
            <div class="mt-5 flex flex-col gap-3">
                <a href="/admin/dashboard" class="rounded-xl border border-turquoise/30 px-4 py-3 text-xs font-black uppercase tracking-[0.25em] text-paper/90 transition-colors hover:border-nike-volt/45 hover:text-nike-volt">Back To Dashboard</a>
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="w-full rounded-xl border border-rose-500/40 px-4 py-3 text-left text-xs font-black uppercase tracking-[0.25em] text-rose-300 transition-colors hover:border-rose-400">Logout</button>
                </form>
            </div>
        </aside>
    </div>
</section>
@endsection
