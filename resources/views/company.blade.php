@extends('layouts.app')

@section('title', 'JURI Bloom - Company')  <!-- Set the title for this page -->

@section('content')

<!-- Hero Content Section -->
<div class="h-[calc(100vh-4rem)] bg-v-backdrop-1 lg:bg-h-backdrop-2 bg-cover relative m-0">
    <div class="h-full bg-colorPrimary/40 mix-blend-hard flex flex-col">
        <div class="flex-1 flex items-center justify-center flex-col lg:flex-row mt-0 relative">

            <!-- Title Section -->
            <div class="bg-colorPrimary/60 rounded-3xl flex flex-col justify-center items-center text-center p-8 lg:p-20 h-auto w-[85vw] lg:w-auto">
                <h1 class="text-4xl lg:text-9xl text-white font-bold uppercase font-lexend">Bloom the Company</h1>
                <h2 class="text-xl lg:text-4xl text-white font-bold uppercase font-lexend">The Foundation Of JURI's Music</h2>

            </div>

        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="bg-colorPrimary/20 h-auto m-0 py-24 flex justify-center items-center">
    <div class="responsive-width flex flex-col lg:grid grid-cols-1 lg:grid-cols-6 gap-10">


         <!-- First Section (3/6) -->
         <div class="h-auto lg:h-full col-span-3 flex">
            <div class="bg-colorPrimary/20 rounded-3xl text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
            
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold  font-lexend">The Company</h1>
    
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        Welcome to the heart of what drives my musical journey. JURI Bloom is more than just a name—it’s the foundation that supports everything I do as JURI, the lead vocalist.
                    </p>
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        At JURI Bloom, the focus is on ensuring that every aspect of my growth, both creatively and professionally, is seamless and purposeful. From managing the release of new music to planning for an exciting future, JURI Bloom is the structure that keeps everything running smoothly behind the scenes.
                    </p>

                </div>

            </div>
        </div>


        <!-- Second Section (3/6) -->
        <div class="h-auto lg:h-full col-span-3 flex">
            <div class="bg-colorPrimary/60 rounded-3xl text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">Why Bloom?</h1>
    
                    <p class="text-base lg:text-2xl mb-6 px-4 lg:px-0">
                        This company exists to allow JURI to focus on what truly matters: creating meaningful music that resonates deeply with listeners. JURI Bloom is the backbone that helps turn vision into reality, making sure every step forward is intentional and impactful.
                    </p>
                    <p class="text-base lg:text-2xl mb-8 px-4 lg:px-0">
                        Whether it’s managing day-to-day operations or planning for long-term goals, JURI Bloom is here to ensure my music and connection with listeners remain at the forefront.
                    </p>
                    
                </div>

            </div>
        </div>

        
    </div>
</div>

@endsection