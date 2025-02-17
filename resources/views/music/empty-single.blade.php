<!-- Image Section (2/6) -->
<div class="bg-black col-span-2 hidden lg:block h-full flex relative overflow-hidden rounded-3xl">
    <!-- Blurred background -->
    <div class="absolute inset-0 w-full h-full bg-cover bg-center blur-lg scale-110" 
         style="background-image: url('{{ asset('images/photos/alternative-profile-picture.PNG') }}');">
    </div>

    <!-- Main image -->
    <svg class="w-full h-full relative z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
        <image href="{{ asset('images/photos/alternative-profile-picture.PNG') }}" class="w-full h-full object-cover" />
    </svg>
</div>

<!-- Text Section (4/6) -->
<div class="h-auto lg:h-full col-span-4 flex">
    <div class="bg-colorPrimary/60 rounded-3xl text-sm lg:text-2xl flex flex-col lg:flex-row justify-center items-start text-white p-8 lg:p-20 py-20 text-left lg:text-justify">
        
        <div class="block lg:hidden h-full pb-10 lg:p-0">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <image href="{{ asset('images/photos/alternative-profile-picture.PNG') }}" class="w-full h-full object-cover" />
            </svg>
        </div>

        <!-- Left Section (Album Description) -->
        <div class="lg:w-1/2">
            <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">Single Name</h1>
            <p class="text-base lg:text-lg mb-6 px-4 lg:px-0">
                Release Date: [Insert Date]
            </p>
            <p class="text-base lg:text-lg mb-6 px-4 lg:px-0">
                [Meaning behind the song, what it means to you, the influences, and the creative direction behind it. Make sure that the text is long enough to fill the space, but not too long that it becomes overwhelming.]
            </p>
        </div>

        <!-- Divider Line -->
        <div class="hidden lg:block w-px h-full bg-white mx-8 mr-16"></div>

        <!-- Right Section (Numbered List of Songs) -->
        <div class="lg:w-1/2">
            <!-- Numbered List of Songs -->
            <ol class="list-decimal mb-6 px-4 lg:px-0">
                <li class="mb-2">
                    <strong>Midnight Dreams</strong> (feat. Luna Sky) – 3:45
                </li>
                <li class="mb-2">
                    <strong>Midnight Dreams</strong> (Intrumental) – 3:45
                </li>
                <!-- Add more songs as needed -->
            </ol>
        </div>
    </div>
</div>

{{-- <!-- Image Section (2/6) -->
<div class="bg-black col-span-2 hidden lg:block h-full flex relative overflow-hidden rounded-3xl">
    <!-- Blurred background -->
    <div class="absolute inset-0 w-full h-full bg-cover bg-center blur-lg scale-110" 
         style="background-image: url('{{ asset('images/photos/alternative-profile-picture.PNG') }}');">
    </div>

    <!-- Main image -->
    <svg class="w-full h-full relative z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
        <image href="{{ asset('images/photos/alternative-profile-picture.PNG') }}" class="w-full h-full object-cover" />
    </svg>
</div> --}}