@extends('layouts.app')

@section('title', 'Streaming Services')  <!-- Set the title for this page -->

@section('content')

<!-- Hero Content Section -->
<div class="h-[calc(100vh-4rem)] bg-v-backdrop-1 lg:bg-h-backdrop-2 bg-cover relative m-0">
    <div class="h-full bg-colorPrimary/40 mix-blend-hard flex flex-col">
        <div class="flex-1 flex items-center justify-center flex-col lg:flex-row mt-0 relative">

            <!-- Title Section -->
            <div class="bg-colorPrimary/60 rounded-3xl flex flex-col justify-center items-center text-center p-8 lg:p-20 h-auto w-[85vw] lg:w-auto">
                <h1 class="text-4xl lg:text-9xl text-white font-bold uppercase font-lexend">Stream It</h1>
                <h2 class="text-xl lg:text-4xl text-white font-bold uppercase font-lexend">Listen on Apple Music and Spotify</h2>

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
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold  font-lexend">Streaming Services</h1>
    
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        Discover and enjoy my music across your favorite platforms! 🎶
                    </p>
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        You can stream my tracks on Apple Music, Spotify, YouTube Music, and YouTube. Each platform offers a unique way to experience my songs, whether you’re adding them to your playlists, watching music videos, or exploring my latest releases.
                    </p>
                    <p class="text-base lg:text-2xl px-4 lg:px-0">
                        I’m always working on expanding to more streaming services, so you’ll have even more ways to listen in the future. Stay tuned for updates as my music becomes available on new platforms!
                    </p>

                </div>

            </div>
        </div>


        <!-- Second Section (3/6) -->
        <div class="h-auto lg:h-full col-span-3 flex">
            <div class="bg-colorPrimary/20 rounded-3xl text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">Listen To It All</h1>
    
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        You can now listen to my music on <span class="font-bold">Apple Music</span>, <span class="font-bold">Spotify</span>, <span class="font-bold">YouTube Music</span>, and <span class="font-bold">YouTube</span>. I’m constantly expanding, so stay tuned for more platforms coming soon!
                    </p>
                    <p class="text-base lg:text-2xl mb-8 px-4 lg:px-0">
                        Click the links below to stream my first single, Blue Butterfly, and more as they release. Join me on this incredible musical journey. <span class="glowing-star"></span>
                    </p>
                    <div class="flex space-x-4 justify-center lg:justify-start w-full">
                        <a href="https://music.apple.com/us/artist/juri/1777135807" class="w-12 lg:w-16 h-12 lg:h-16 bg-apple-music-white bg-cover rounded-lg flex items-center justify-center">
                            <!-- Apple Music Icon -->
                        </a>
                        <a href="https://open.spotify.com/artist/6V5305M5J7Z8UXD9EVWMYj?si=acNfjgalRMON76ndy7xlOA" class="w-12 lg:w-16 h-12 lg:h-16 bg-spotify-white bg-cover rounded-lg flex items-center justify-center">
                            <!-- Spotify Icon -->
                        </a>
                        <a href="https://www.youtube.com/@JURI-Bloom" class="w-12 lg:w-16 h-12 lg:h-16 bg-youtube-white bg-contain bg-center bg-no-repeat rounded-lg flex items-center justify-center">
                            <!-- YouTube Icon -->
                        </a>
                        <a href="https://music.youtube.com/channel/UCpS0XdY_5L7IE7AOUEWaAyg" class="w-12 lg:w-16 h-12 lg:h-16 bg-youtube-music-white bg-cover rounded-lg flex items-center justify-center">
                            <!-- YouTube Music Icon -->
                        </a>
                    </div>
                </div>

            </div>
        </div>

        
    </div>
</div>

@endsection