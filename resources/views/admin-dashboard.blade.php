@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-10%] top-[-8%] h-[42vw] w-[42vw] rounded-full bg-turquoise/10 blur-[120px]"></div>
    <div class="absolute bottom-[-14%] right-[-10%] h-[45vw] w-[45vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Admin Area</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[6.2rem]">
            Dashboard
        </h1>
        <p class="mt-6 max-w-2xl text-lg text-paper/75">You are logged in. Use the admin links in the header or the shortcuts below.</p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-[1800px] grid-cols-1 gap-6 md:grid-cols-3">
        <a href="/admin/dashboard" class="reveal rounded-[2rem] border border-nike-volt/35 bg-[#07242B]/70 p-8 transition-colors hover:border-nike-volt hover:bg-[#07242B]/90">
            <p class="text-[10px] font-black uppercase tracking-[0.4em] text-nike-volt">Admin</p>
            <h2 class="mt-4 font-display text-4xl italic">Dashboard</h2>
        </a>
        <a href="/admin/test" class="reveal rounded-[2rem] border border-turquoise/25 bg-[#07242B]/70 p-8 transition-colors hover:border-nike-volt/45 hover:bg-[#07242B]/90">
            <p class="text-[10px] font-black uppercase tracking-[0.4em] text-turquoise">Admin</p>
            <h2 class="mt-4 font-display text-4xl italic">Test Page</h2>
        </a>
        <form action="/admin/logout" method="POST" class="reveal">
            @csrf
            <button type="submit" class="w-full rounded-[2rem] border border-rose-500/35 bg-[#07242B]/70 p-8 text-left transition-colors hover:border-rose-400 hover:bg-[#07242B]/90">
                <p class="text-[10px] font-black uppercase tracking-[0.4em] text-rose-300">Session</p>
                <h2 class="mt-4 font-display text-4xl italic">Logout</h2>
            </button>
        </form>
    </div>
</section>
@endsection
