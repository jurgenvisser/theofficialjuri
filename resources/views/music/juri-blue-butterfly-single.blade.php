<!-- Image Section (2/6) -->
<div class="bg-black col-span-2 hidden lg:block h-full flex relative overflow-hidden rounded-3xl">
    <!-- Blurred background -->
    <div class="absolute inset-0 w-full h-full bg-cover bg-center blur-lg scale-110" 
         style="background-image: url('{{ asset('images/album-covers/juri-blue-butterfly-single.jpeg') }}');">
    </div>

    <!-- Main image -->
    <svg class="w-full h-full relative z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
        <image href="{{ asset('images/album-covers/juri-blue-butterfly-single.jpeg') }}" class="w-full h-full object-cover" />
    </svg>
</div>

<!-- Text Section (4/6) -->
<div class="h-auto lg:h-full col-span-4 flex">
    <div class="bg-colorPrimary/60 rounded-3xl text-sm lg:text-2xl flex flex-col lg:flex-row justify-center items-start text-white p-8 lg:p-20 py-10 lg:py-20 text-left lg:text-justify">

        <div class="block lg:hidden h-full pb-10 lg:p-0">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <image href="{{ asset('images/album-covers/juri-blue-butterfly-single.jpeg') }}" class="w-full h-full object-cover" />
            </svg>
        </div>
        
        <!-- Left Section (Album Description) -->
        <div class="lg:w-1/2">
            <h1 class="mb-4 lg:mb-6 px-4 lg:px-0 text-4xl font-bold font-lexend">JURI - Blue Butterfly</h1>
            <p class="text-base lg:text-lg mb-2 lg:mb-6 px-4 lg:px-0">
                Release Date: October 30, 2024
            </p>
            <!-- Numbered List of Songs -->
            <ol class=" block lg:hidden list-decimal px-4">
                <li class="mb-2">
                    <strong>Blue Butterfly</strong> – 2:31
                </li>
            </ol>
            <p class="text-base lg:text-lg mb-4 px-4 lg:px-0">
                “Blue Butterfly” celebrates resilience and personal transformation, symbolized by a butterfly soaring through storms. It inspires courage and staying true to oneself, even in the darkest moments.
            </p>
        </div>

        <!-- Divider Line -->
        <div class="hidden lg:block w-px h-full bg-white mx-8 mr-16"></div>

        <!-- Right Section (Numbered List of Songs) -->
        <div class="lg:w-1/2">
            <!-- Numbered List of Songs -->
            <ol class="hidden lg:block list-decimal">
                <li class="mb-2">
                    <strong>Blue Butterfly</strong> – 2:31
                </li>
            </ol>
        </div>
    </div>
</div>