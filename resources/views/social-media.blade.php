@extends('layouts.app')

@section('title', 'Social Media')  <!-- Set the title for this page -->

@section('content')

<!-- Hero Content Section -->
<div class="h-[calc(100vh)] bg-v-backdrop-1 lg:bg-h-backdrop-2 bg-cover relative m-0">
    <div class="h-full bg-colorPrimary/40 mix-blend-hard flex flex-col">
        <div class="flex-1 flex items-center justify-center flex-col lg:flex-row mt-0 relative">

            <!-- Title Section -->
            <div class="bg-colorPrimary/60 rounded-3xl flex flex-col justify-center items-center text-center p-8 lg:p-20 h-auto w-[85vw] lg:w-auto">
                <h1 class="text-4xl lg:text-9xl text-white font-bold uppercase font-lexend">Follow It</h1>
                <h2 class="text-xl lg:text-4xl text-white font-bold uppercase font-lexend">Connect With JURI On Social Media</h2>
            </div>

        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="bg-colorPrimary/20 h-auto m-0 py-24 flex justify-center items-center">
    <div class="responsive-width flex flex-col lg:grid grid-cols-1 lg:grid-cols-6 gap-10">

        <!-- First Section (3/6) -->
        <div class="h-auto lg:h-full col-span-3 flex">
            <div class="bg-colorPrimary/60 rounded-3xl text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
            
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">Social Media</h1>
    
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        Stay in the loop with everything happening in my musical journey by following me on social media! <span class="musical-notes"></span>
                    </p>
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        On my socials, you’ll find behind-the-scenes updates, sneak peeks at upcoming projects, and exclusive looks into the creative process. Whether it’s the first glimpse of a new song, moments from the studio, or exciting announcements about releases, I love sharing these moments with you.
                    </p>
                    <p class="text-base lg:text-2xl px-4 lg:px-0">
                        But it’s not just about the music! You’ll also find other fun content that gives you a deeper look into who I am as an artist and as a person.
                    </p>

                </div>

            </div>
        </div>


        <!-- Second Section (3/6) -->
        <div class="h-auto lg:h-full col-span-3 flex">
            <div class="bg-colorPrimary/20 rounded-3xl text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
            
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">Follow them all</h1>
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        Follow me to stay updated and be part of this amazing journey as we grow together! <span class="glowing-star"></span>
                    </p>
                    <p class="text-base lg:text-2xl mb-8 px-4 lg:px-0">
                        You can find me <span class="font-bold">@theofficialjuri</span> on <span class="font-bold">Instagram</span>, <span class="font-bold">Threads</span>, <span class="font-bold">Twitter</span>, and <span class="font-bold">Facebook</span>. You can also send me an email. you'll find more about email in the <a href="/contact" class="animate-underline animate-text-color theme-primary"">contact</a> page.
                    </p>
                    <div class="flex space-x-4 justify-center lg:justify-start w-full">
                        <a href="https://www.instagram.com/theofficialjuri" class="w-12 lg:w-16 h-12 lg:h-16 bg-instagram-white bg-cover rounded-lg flex items-center justify-center">
                            <!-- Instagram Icon -->
                        </a>
                        <a href="https://www.threads.com/@theofficialjuri" class="w-12 lg:w-16 h-12 lg:h-16 bg-threads-white bg-cover rounded-lg flex items-center justify-center">
                            <!-- Threads Icon -->
                        </a>
                        <a href="https://x.com/theofficialjuri" class="w-12 lg:w-16 h-12 lg:h-16 bg-x-white bg-contain bg-center bg-no-repeat rounded-lg flex items-center justify-center">
                            <!-- X / Twitter Icon -->
                        </a>
                        <a href="https://www.facebook.com/people/JURI/61569421913916/" class="w-12 lg:w-16 h-12 lg:h-16 bg-facebook-white bg-cover rounded-lg flex items-center justify-center">
                            <!-- Facebook Icon -->
                        </a>
                    </div>
                </div>

            </div>
        </div>

        
    </div>
</div>

@endsection