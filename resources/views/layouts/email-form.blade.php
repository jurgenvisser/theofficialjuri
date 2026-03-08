<div class="flex-1 flex items-center justify-center flex-col lg:flex-row mt-0 relative lg:space-x-10">
    <!-- Text and Form Section -->
    <div class="bg-juriPrimary/60 text-sm lg:text-2xl flex flex-col lg:flex-col justify-between text-white p-8 lg:p-20 py-20 h-auto w-[85vw] lg:w-[40.9vw] text-justify leading-loose relative">

        <!-- Introductory Text -->
        <div class="mb-8 text-justify">
            <h2 class="mb-6 px-4 lg:px-0 text-4xl font-bold uppercase font-times">Contact Us</h2>
            <p class="text-base lg:text-lg">
                Do you have questions, suggestions, or do you just want to connect with us?
                Use the form below to reach us.
                We aim to reply within 24 hours. We would love to hear from you.
            </p>
        </div>

        <!-- Email Form -->
        <form action="/submit" method="POST" class="space-y-4 flex-1">
            <input
                type="text"
                name="name"
                placeholder="Your Name"
                class="w-full p-2 border border-juriPrimary rounded focus:outline-none focus:ring focus:ring-juriPrimary bg-black/40"
            />
            <input
                type="email"
                name="email"
                placeholder="Your Email"
                class="w-full p-2 border border-juriPrimary rounded focus:outline-none focus:ring focus:ring-juriPrimary bg-black/40"
            />
            <textarea
                name="message"
                placeholder="Your Message"
                rows="4"
                class="w-full p-2 border border-juriPrimary rounded focus:outline-none focus:ring focus:ring-juriPrimary bg-black/40"
            ></textarea>
            <button
                type="submit"
                class="bg-black text-white rounded hover:ring hover:ring-juriPrimary py-2 px-4 hover:bg-gray-800"
            >
                Send
            </button>
        </form>
    </div>
</div>
