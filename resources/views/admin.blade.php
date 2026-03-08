@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-24 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-10%] top-[-10%] h-[42vw] w-[42vw] rounded-full bg-turquoise/10 blur-[110px]"></div>
    <div class="absolute bottom-[-12%] right-[-10%] h-[45vw] w-[45vw] rounded-full bg-azure/20 blur-[130px]"></div>

    <div class="relative z-10 mx-auto max-w-[780px] reveal">
        <div class="rounded-[2rem] border border-turquoise/20 bg-[#07242B]/80 p-6 sm:p-8 md:p-10">
            <p class="mb-3 text-[10px] font-black uppercase tracking-[0.5em] text-nike-volt">Secure Access</p>
            <h1 class="font-display text-4xl italic tracking-tight sm:text-5xl">Admin Login</h1>
            <p class="mt-4 text-sm text-paper/70 sm:text-base">Enter the admin password to open the dashboard.</p>

            <form action="/admin/dashboard" method="POST" class="mt-8 space-y-5">
                @csrf

                <div>
                    <label for="password" class="mb-2 block text-xs font-black uppercase tracking-[0.25em] text-paper/75">
                        @if (session('error'))
                            Password <span class="text-rose-400">({{ session('error') }})</span>
                        @else
                            Password
                        @endif
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        class="w-full rounded-2xl border border-turquoise/25 bg-deep-ocean/60 px-4 py-3 text-paper outline-none transition-colors focus:border-nike-volt/60"
                    />
                </div>

                <button type="submit" class="inline-flex items-center rounded-full bg-nike-volt px-6 py-3 text-xs font-black uppercase tracking-[0.3em] text-deep-ocean transition-transform hover:scale-[1.02]">
                    Login
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
