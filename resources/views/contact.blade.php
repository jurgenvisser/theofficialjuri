@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="relative overflow-x-clip overflow-y-visible px-5 pb-16 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-14%] top-[8%] h-[72vw] w-[72vw] sm:left-[-10%] sm:top-[-8%] sm:h-[46vw] sm:w-[46vw] rounded-full bg-turquoise/10 animate-pulse blur-[90px] sm:blur-[120px]"></div>
    <div class="absolute bottom-[-18%] right-[-10%] h-[48vw] w-[48vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px] reveal">
        <p class="mb-4 text-[10px] font-black uppercase tracking-[0.6em] text-nike-volt">Contact & Bookings</p>
        <h1 class="font-display text-5xl uppercase italic leading-[0.84] tracking-tighter sm:text-7xl lg:text-[7rem]">
            Start The<br>
            <span class="text-outline not-italic">Echo</span>
        </h1>
        <p class="mt-8 max-w-3xl text-lg text-paper/75 sm:text-2xl">
            Send your message directly through the form below and we will get back to you soon.
        </p>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-[1800px] grid-cols-1 gap-8 lg:grid-cols-12">
        <article class="reveal rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6 sm:p-8 lg:col-span-7 lg:p-10">
            <h2 class="font-display text-4xl italic tracking-tight sm:text-5xl">Send A Message</h2>
            <p class="mt-6 text-base leading-relaxed text-paper/75 sm:text-lg">
                Use this form for bookings, collaborations, and general inquiries.
            </p>

            <form action="https://formsubmit.co/contact@theofficialjuri.com" method="POST" class="mt-8 space-y-6">
                <input type="hidden" name="_autoresponse" value="Thank you for your message to TheOfficialJuri. We will respond as soon as possible.">
                <input type="hidden" name="_next" value="https://theofficialjuri.com/contact">
                <input type="hidden" name="_template" value="basic">
                <input type="text" name="_honey" style="display: none;">

                <div>
                    <label for="name" class="mb-2 block text-sm font-medium text-paper/80">Your Full Name</label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        placeholder="Name and surname"
                        required
                        class="w-full rounded-xl border border-turquoise/20 bg-deep-ocean px-4 py-3 text-paper placeholder:text-paper/35 outline-none transition-colors focus:border-nike-volt/60"
                    >
                </div>

                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-paper/80">Your Email Address</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="john.doe@example.com"
                        required
                        class="w-full rounded-xl border border-turquoise/20 bg-deep-ocean px-4 py-3 text-paper placeholder:text-paper/35 outline-none transition-colors focus:border-nike-volt/60"
                    >
                </div>

                <div>
                    <label for="subject" class="mb-2 block text-sm font-medium text-paper/80">Subject</label>
                    <select
                        id="subject"
                        name="_subject"
                        required
                        class="w-full appearance-none rounded-xl border border-turquoise/20 bg-deep-ocean px-4 py-3 text-paper outline-none transition-colors focus:border-nike-volt/60"
                    >
                        <option value="" disabled selected>Select a relevant subject</option>
                        <option value="Booking Request">Booking Request</option>
                        <option value="Music Collaboration">Music Collaboration</option>
                        <option value="Press / Media">Press / Media</option>
                        <option value="General Question">General Question</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="mb-2 block text-sm font-medium text-paper/80">Your Message</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        placeholder="Write your message as clearly as possible."
                        required
                        class="w-full rounded-xl border border-turquoise/20 bg-deep-ocean px-4 py-3 text-paper placeholder:text-paper/35 outline-none transition-colors focus:border-nike-volt/60"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-nike-volt px-6 py-4 text-sm font-black uppercase tracking-[0.2em] text-deep-ocean transition hover:scale-[1.01]"
                >
                    Send Message
                </button>
            </form>
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
