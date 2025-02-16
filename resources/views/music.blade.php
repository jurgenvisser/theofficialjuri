@extends('layouts.app')

@section('title', 'Music')  <!-- Set the title for this page -->

@section('content')

<!-- Hero Content Section -->
<div class="h-[calc(100vh-4rem)] bg-v-backdrop-1 lg:bg-h-backdrop-1 bg-cover relative m-0">
    <div class="h-full bg-colorPrimary/40 mix-blend-hard flex flex-col">
        <div class="flex-1 flex items-center justify-center flex-col lg:flex-row mt-0 relative">

            <!-- Title Section -->
            <div class="bg-colorPrimary/60 flex flex-col justify-center items-center text-center p-8 lg:p-20 h-auto w-[85vw] lg:w-auto">
                <h1 class="text-4xl lg:text-9xl text-white font-bold uppercase font-lexend">Musical Stories</h1>
                <h2 class="text-xl lg:text-4xl text-white font-bold uppercase font-lexend">Meaning Behind The Notes</h2>
            </div>

        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="bg-colorPrimary/20 h-auto m-0 py-10 lg:py-24 flex justify-center items-center">
    <div class="responsive-width flex flex-col lg:grid grid-cols-1 lg:grid-cols-6 gap-10">


        <!-- First Section (6/6) -->
        <div class="h-auto lg:h-full col-span-6">
            <div class="bg-colorPrimary/60 text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
                
                <div class="">
                    <h2 class="px-4 lg:px-0 text-xl lg:text-4xl">
                        Explore the stories and the journey behind each track. Here, you’ll find the album covers of my singles, EPs, and albums, along with the personal backstories and creative processes that shaped the music. Every song has its own story, and I’m excited to share it with you.
                    </h2>
                </div>

            </div>
        </div>

        @include('music.juri-blue-butterfly-single')
        @include('music.empty-ep')
        @include('music.empty-album')


    </div>
</div>

{{-- @include('layouts.email-form') --}}
@endsection