<footer id="contact" class="relative overflow-hidden border-t border-turquoise/10 bg-[#031012] px-6 py-12 md:px-20">
    <div class="absolute right-[-5%] top-[-5%] h-[30vw] w-[30vw] rounded-full border border-nike-volt/5"></div>

    <div class="relative z-10 grid grid-cols-1 gap-10 md:grid-cols-2 reveal">
        <div class="flex flex-col justify-between">
            <h1 class="font-display text-4xl font-black italic tracking-tighter">THEOFFICIALJURI<span class="text-nike-volt">.</span></h1>
            <div>
                <p class="text-[10px] uppercase tracking-[0.3em] text-paper/70">
                    &copy; {{ now()->year }} <span class="text-nike-volt">JURI Bloom</span>. All rights reserved.
                </p>
                <p class="text-[10px] font-black uppercase tracking-[0.5em] text-paper/40">Website Version: {{ $appVersion }}</p>
            </div>
        </div>

        <div class="">
            <div class="grid grid-cols-1 gap-4 text-xs font-bold uppercase tracking-[0.25em] md:grid-cols-2">
                <div class="border-l border-nike-volt pl-4">
                    <span class="mb-4 block text-[10px] font-black uppercase tracking-[0.4em] text-turquoise">Streaming</span>
                    <ul class="grid grid-cols-2 gap-4 text-xs font-bold uppercase tracking-[0.25em]">
                        <li><a href="https://music.apple.com/us/artist/juri/1777135807" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">Apple Music</a></li>
                        <li><a href="https://open.spotify.com/artist/6V5305M5J7Z8UXD9EVWMYj?si=acNfjgalRMON76ndy7xlOA" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">Spotify</a></li>
                        <li><a href="https://music.youtube.com/channel/UCbbD2b6eD2sKjLC4FHfGmRw" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">YouTube Music</a></li>
                        <li><a href="https://www.youtube.com/@theofficialjuri" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">YouTube</a></li>
                    </ul>
                </div>
                <div class="border-l border-nike-volt pl-4 mt-8 md:mt-0">
                    <span class="mb-4 block text-[10px] font-black uppercase tracking-[0.4em] text-turquoise">Socials</span>
                    <ul class="grid grid-cols-2 gap-4 text-xs font-bold uppercase tracking-[0.25em]">
                        <li><a href="https://www.instagram.com/theofficialjuri" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">Instagram</a></li>
                        <li><a href="https://www.threads.com/@theofficialjuri" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">Threads</a></li>
                        <li><a href="https://x.com/theofficialjuri" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">X / Twitter</a></li>
                        <li><a href="https://www.facebook.com/people/JURI/61569421913916/" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-nike-volt">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>