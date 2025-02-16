@extends('layouts.app')

@section('title', 'JURI - Homepage')  <!-- Set the title for this page -->

@section('content')

<!-- Hero Content Section -->
<div class="h-[calc(100vh-4rem)] bg-v-backdrop-1 lg:bg-h-backdrop-1 bg-cover relative m-0">
    <div class="h-full bg-colorPrimary/40 mix-blend-hard flex flex-col">
        <div class="flex-1 flex items-center justify-center flex-col lg:flex-row mt-0 relative">

            <!-- Title Section -->
            <div class="bg-colorPrimary/60 flex flex-col justify-center items-center text-center p-8 lg:p-20 h-auto w-[85vw] lg:w-auto">
                <h1 class="text-4xl lg:text-9xl text-white font-bold uppercase font-lexend">JURI</h1>
                <h2 class="text-xl lg:text-4xl text-white font-bold uppercase font-lexend">Feel The Music</h2>
            </div>

        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="bg-colorPrimary/20 h-auto m-0 py-24 flex justify-center items-center">
    <div class="responsive-width flex flex-col lg:grid grid-cols-1 lg:grid-cols-6 gap-10">
       
        <!-- First Section (2/6) -->
        <div class="bg-black col-span-2 hidden lg:block h-full">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <image id="theme-image-homepage-logo-full" href="{{ asset('images/photos/profile-picture.PNG') }}" class="w-full h-full object-cover" />
            </svg>
        </div>

        <!-- Second Section (4/6) -->
        <div class="h-full col-span-4 flex">
            <div class="bg-colorPrimary/60 text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
            <!-- Content goes here -->

                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">🌟 Welcome to my official artist page! 🌟</h1>
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        I’m excited to share my musical journey with you. From a young age, I’ve loved singing and challenging myself vocally—layering harmonies on popular songs while singing in the car or in the shower. This passion grew into something more serious, and it has led to my first single, Blue Butterfly, now available on major streaming platforms! 🎶
                    </p>
                </div>

            </div>
        </div>


        <!-- Third Section (3/6) -->
        <div class="h-auto lg:h-full col-span-3 flex">
            <div class="bg-colorPrimary/20 text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
            
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">The Artist</h1>
                    <p class="text-base lg:text-2xl px-4 lg:px-0">
                        As a lead vocalist, my goal is to create music that feels true and authentic—crafting songs that connect deeply with listeners by expressing real emotions and stories. This is just the beginning, so follow me to stay updated on upcoming releases, behind-the-scenes moments, and much more. Let’s embark on this journey together!
                    </p>
                </div>

            </div>
        </div>


        <!-- Fourth Section (3/6) -->
        <div class="h-auto lg:h-full col-span-3 flex">
            <div class="bg-colorPrimary/20 text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
            
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">The Music</h1>
                    <p class="text-base lg:text-2xl px-4 lg:px-0">
                        With each track, I focus on creating something fresh, with melodies that stick with you. My creative process involves a lot of repetition—I’m constantly redoing my vocals until they sound just right. I love the workflow of making music, pushing myself to improve with each song, and bringing new ideas to life.
                    </p>
                </div>

            </div>
        </div>

        <!-- Fifth Section (6/6) -->
        <div class="h-auto lg:h-full col-span-6">
            <div class="bg-colorPrimary/60 text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
                
                <div class="">
                    <h2 class="mb-2 px-4 lg:px-0 text-xl lg:text-4xl uppercase">
                        You can find links to my <span class="font-bold">music</span> on all streaming platforms and <span class="font-bold">connect with me</span> on my socials right here on my website!
                    </h2>
                    <p class="text-base lg:text-2xl px-4 lg:px-0">Follow <a href="/streaming" class="font-bold animate-underline animate-text-color theme-primary"">JURI</a> and <a href="/social-media" class="font-bold animate-underline animate-text-color theme-primary"">@theofficialjuri</a> for my music and updates!</p>
                </div>

            </div>
        </div>


    </div>
</div>

@endsection