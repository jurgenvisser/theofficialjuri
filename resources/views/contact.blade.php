@extends('layouts.app')

@section('title', 'Contact')  <!-- Set the title for this page -->

@section('content')

<!-- Hero Content Section -->
<div class="h-[calc(100vh-4rem)] bg-v-backdrop-1 lg:bg-h-backdrop-1 bg-cover relative m-0">
    <div class="h-full bg-colorPrimary/40 mix-blend-hard flex flex-col">
        <div class="flex-1 flex items-center justify-center flex-col lg:flex-row mt-0 relative">

            <!-- Title Section -->
            <div class="bg-colorPrimary/60 rounded-3xl flex flex-col justify-center items-center text-center p-8 lg:p-20 h-auto w-[85vw] lg:w-auto">
                <h1 class="text-4xl lg:text-9xl text-white font-bold uppercase font-lexend">Concact Bloom</h1>
                <h2 class="text-xl lg:text-4xl text-white font-bold uppercase font-lexend">Send an Email to connect with a representative</h2>
            </div>

        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="bg-colorPrimary/20 h-auto m-0 py-24 flex justify-center items-center">
    <div class="responsive-width flex flex-col lg:grid grid-cols-1 lg:grid-cols-6 gap-10">


        <!-- First Section (4/6) -->
        <div class="h-auto lg:h-full col-span-4 flex">
            <div class="bg-colorPrimary/60 rounded-3xl text-sm lg:text-2xl flex flex-col justify-center items-center text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
                <!-- Content goes here -->
                <div class="">
                    <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">Efficiently Connect With Us</h1>
                    <p class="text-base lg:text-lg mb-6 px-4 lg:px-0">
                        Got a question or want to connect? Whether you’re interested in collaborations, sharing ideas, or just reaching out, I’d love to hear from you!
                    </p>
                    <p class="text-base lg:text-lg px-4 lg:px-0">
                        For general inquiries, questions, or to connect with JURI, feel free to email:<br>
                    </p>
                    <p class="text-base lg:text-lg mb-6 px-4 lg:px-0">
                        <span class="envelope-with-arrow"></span> <a href="mailto:contact@theofficialjuri.com" class="font-bold animate-underline animate-text-color theme-primary">contact@theofficialjuri.com</a>
                    </p>
                    <p class="text-base lg:text-lg px-4 lg:px-0">
                        For bookings, event details, or professional inquiries, please reach out to:
                    </p>
                    <p class="text-base lg:text-lg mb-6 px-4 lg:px-0">
                        <span class="envelope-with-arrow"></span> <a href="mailto:info@theofficialjuri.com" class="font-bold animate-underline animate-text-color theme-primary">info@theofficialjuri.com</a>
                    </p>
                    <h2 class="px-4 lg:px-0 text-2xl font-bold font-lexend">Prefer Direct Messaging?</h2>
                    <p class="text-base lg:text-lg px-4 lg:px-0">
                        If emailing isn’t your thing or you’d like a quicker way to get in touch, feel free to send me a direct message on Instagram or Facebook. Whether you have questions, want to share something, or just say hi, I’d love to hear from you there too!
                        You can find the links to my social media profiles on the <a href="/social-media" class="font-bold animate-underline animate-text-color theme-primary">Social Media</a> page.
                    </p>
                </div>

            </div>
        </div>

        <div class="bg-black col-span-2 hidden lg:block h-full flex relative overflow-hidden rounded-3xl">
            <!-- Blurred background -->
            <svg class="absolute inset-0 w-full h-full blur-lg scale-150" 
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <image id="theme-image-contact-logo-full-blur" href="{{ asset('images/photos/alternative-profile-picture.PNG') }}" 
                       class="w-full h-full object-cover" />
            </svg>
        
            <!-- Main image -->
            <svg class="w-full h-full relative z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <image id="theme-image-contact-logo-full" href="{{ asset('images/photos/alternative-profile-picture.PNG') }}" 
                       class="w-full h-full object-cover" />
            </svg>
        </div>
         <!-- Second Section (2/6) -->
         {{-- <div class="bg-black col-span-2 hidden lg:block h-full rounded-3xl">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <image id="theme-image-contact-logo-full" href="{{ asset('images/photos/alternative-profile-picture.PNG') }}" class="w-full h-full object-cover" />
            </svg>
        </div> --}}

        
    </div>
</div>

{{-- @include('layouts.email-form') --}}
@endsection