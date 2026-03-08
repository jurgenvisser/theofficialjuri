@extends('layouts.app')

@section('title', 'Music Releases')

@section('content')
@php
    $releaseCollection = collect($releases ?? []);
    $totalSingles = $releaseCollection->where('type', 'single')->count();
    $totalEps = $releaseCollection->where('type', 'ep')->count();
    $totalAlbums = $releaseCollection->where('type', 'album')->count();
@endphp

<section class="relative overflow-x-clip overflow-y-visible px-5 pb-14 pt-28 sm:px-6 md:px-12 md:pt-36 lg:px-20">
    <div class="absolute left-[-15%] top-[-10%] h-[48vw] w-[48vw] rounded-full bg-turquoise/10 blur-[120px]"></div>
    <div class="absolute bottom-[-15%] right-[-10%] h-[45vw] w-[45vw] rounded-full bg-azure/20 blur-[140px]"></div>

    <div class="relative z-10 mx-auto max-w-[1800px]">
        <div class="reveal mb-8">
            <p class="mb-4 text-[10px] font-black uppercase tracking-[0.55em] text-nike-volt">JURI Discography</p>
            <h1 class="font-display text-5xl uppercase italic leading-[0.85] tracking-tighter sm:text-7xl lg:text-[7rem]">
                Music<br>
                <span class="text-outline not-italic">Releases</span>
            </h1>
        </div>

        <div class="reveal grid grid-cols-1 gap-6 lg:grid-cols-3">
            <div class="rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6">
                <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-paper/55">Catalog Total</p>
                <p class="mt-4 font-display text-6xl italic text-nike-volt">{{ $releaseCollection->count() }}</p>
            </div>
            <div class="rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6">
                <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-paper/55">Singles / EPs / Albums</p>
                <p class="mt-4 text-xl font-bold uppercase tracking-[0.2em] text-paper/85">{{ $totalSingles }} / {{ $totalEps }} / {{ $totalAlbums }}</p>
            </div>
            <div class="rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-6">
                <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-paper/55">Context</p>
                <p class="mt-4 text-sm leading-relaxed text-paper/75">Filter the catalog by type and browse the story behind each release.</p>
            </div>
        </div>
    </div>
</section>

<section class="px-5 pb-24 sm:px-6 md:px-12 lg:px-20">
    <div class="mx-auto max-w-[1800px]">
        <div class="reveal mb-10 rounded-[1.75rem] border border-turquoise/15 bg-[#07242B]/75 p-3 sm:p-4">
            <div class="grid grid-cols-2 gap-2 sm:grid-cols-4">
                <button type="button" data-release-filter="all" aria-pressed="true" class="release-filter-btn rounded-xl border border-nike-volt bg-nike-volt px-4 py-3 text-[11px] font-black uppercase tracking-[0.3em] text-deep-ocean transition-colors">
                    All
                </button>
                <button type="button" data-release-filter="single" aria-pressed="false" class="release-filter-btn rounded-xl border border-turquoise/20 bg-[#082127] px-4 py-3 text-[11px] font-black uppercase tracking-[0.3em] text-paper/75 transition-colors hover:border-nike-volt/35 hover:text-paper">
                    Singles
                </button>
                <button type="button" data-release-filter="ep" aria-pressed="false" class="release-filter-btn rounded-xl border border-turquoise/20 bg-[#082127] px-4 py-3 text-[11px] font-black uppercase tracking-[0.3em] text-paper/75 transition-colors hover:border-nike-volt/35 hover:text-paper">
                    EPs
                </button>
                <button type="button" data-release-filter="album" aria-pressed="false" class="release-filter-btn rounded-xl border border-turquoise/20 bg-[#082127] px-4 py-3 text-[11px] font-black uppercase tracking-[0.3em] text-paper/75 transition-colors hover:border-nike-volt/35 hover:text-paper">
                    Albums
                </button>
            </div>
        </div>

        <div id="release-grid" class="grid grid-cols-1 gap-8">
            @forelse ($releaseCollection as $release)
                @php
                    $type = $release['type'] ?? 'single';
                    $cover = asset($release['cover_image'] ?? 'images/photos/alternative-profile-picture.PNG');
                    $typeLabel = $type === 'ep' ? 'EP' : ($type === 'album' ? 'Album' : 'Single');
                    $typeClass = $type === 'album'
                        ? 'border-paper/25 bg-paper/10 text-paper'
                        : ($type === 'ep' ? 'border-turquoise/35 bg-turquoise/15 text-turquoise' : 'border-nike-volt/35 bg-nike-volt/15 text-nike-volt');
                    $label = $release['label'] ?? 'JURI Bloom';
                    $releaseFeaturedArtists = $release['featured_artists'] ?? [];
                    $releaseProducers = $release['producers'] ?? [];
                    $tracks = $release['tracks'] ?? [];
                @endphp

                <article data-release-type="{{ $type }}" class="release-card reveal overflow-hidden rounded-[2.4rem] border border-turquoise/15 bg-[#07242B]/65 p-5 sm:p-8 lg:p-10">
                    <div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-12 lg:gap-12">
                        <div class="lg:col-span-5">
                            <div class="mx-auto w-full">
                                <div class="relative mx-auto h-[230px] w-[280px] sm:h-[290px] sm:w-[370px] lg:h-[340px] lg:w-[430px]">
                                    <div class="absolute left-[10px] top-1/2 z-20 h-[190px] w-[190px] -translate-y-1/2 overflow-hidden shadow-[0_22px_35px_rgba(0,0,0,0.45),12px_0_24px_rgba(0,0,0,0.38)] sm:left-5 sm:h-[250px] sm:w-[250px] lg:left-6 lg:h-[288px] lg:w-[288px]">
                                        <img src="{{ $cover }}" alt="{{ $release['title'] ?? 'Release cover' }}" class="h-full w-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-tr from-deep-ocean/55 via-transparent to-turquoise/20"></div>
                                        <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-deep-ocean/60 to-transparent sm:h-20"></div>
                                    </div>

                                    <div class="absolute left-[88px] top-1/2 z-10 h-[182px] w-[182px] -translate-y-1/2 rounded-full border border-paper/20 bg-[radial-gradient(circle_at_center,#29373d_0%,#0f171b_54%,#05090b_100%)] shadow-[0_0_0_1px_rgba(255,255,255,0.05),0_14px_30px_rgba(0,0,0,0.45)] sm:left-[110px] sm:h-[236px] sm:w-[236px] lg:left-[160px] lg:h-[271px] lg:w-[271px]">
                                        <div class="absolute inset-0 rounded-full [background:repeating-radial-gradient(circle,#ffffff10_0_1px,#00000000_1px_5px)] opacity-70"></div>
                                        <div class="absolute inset-[10%] rounded-full border border-paper/12"></div>
                                        <div class="absolute inset-[20%] rounded-full border border-paper/12"></div>
                                        <div class="absolute inset-[30%] rounded-full border border-paper/12"></div>
                                        <div class="absolute inset-[40%] rounded-full border border-paper/12"></div>
                                    </div>

                                    <div class="absolute left-[142px] top-1/2 z-[11] h-[74px] w-[74px] -translate-y-1/2 overflow-hidden rounded-full border border-paper/35 shadow-[0_8px_18px_rgba(0,0,0,0.35)] sm:left-[183px] sm:h-[90px] sm:w-[90px] lg:left-[244px] lg:h-[104px] lg:w-[104px]">
                                        <img src="{{ $cover }}" alt="{{ $release['title'] ?? 'Release label' }}" class="h-full w-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-tr from-deep-ocean/35 to-transparent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-7">
                            <div class="mb-5 flex flex-wrap items-center gap-3">
                                <span class="rounded-full border px-3 py-1 text-[10px] font-black uppercase tracking-[0.28em] {{ $typeClass }}">{{ $typeLabel }}</span>
                                <span class="text-[10px] font-bold uppercase tracking-[0.28em] text-paper/50">Release Date: {{ $release['release_date_label'] ?? 'TBA' }}</span>
                                {{-- <span class="text-[10px] font-bold uppercase tracking-[0.28em] text-paper/50">Label: {{ $label }}</span> --}}
                                @if (!empty($label))
                                    <span class="text-[10px] font-bold uppercase tracking-[0.28em] text-paper/50">
                                        Label: {{ $label }}
                                    </span>
                                @endif
                            </div>

                            <h2 class="font-display text-4xl italic leading-[0.95] tracking-tight text-paper sm:text-5xl">{{ $release['title'] ?? 'Untitled Release' }}</h2>
                            <p class="mt-5 max-w-3xl text-base leading-relaxed text-paper/75 sm:text-lg">{{ $release['description'] ?? '' }}</p>

                            <div class="my-5 flex flex-col flex-wrap">
                                @if (!empty($releaseFeaturedArtists))
                                    <span class="text-[10px] font-bold uppercase tracking-[0.28em] text-paper/50">
                                        Feat: {{ implode(', ', $releaseFeaturedArtists) }}
                                    </span>
                                @endif
                                @if (!empty($releaseProducers))
                                    <span class="text-[10px] font-bold uppercase tracking-[0.28em] text-paper/50">
                                        Prod: {{ implode(', ', $releaseProducers) }}
                                    </span>
                                @endif
                            </div>

                            <div class="mt-8 rounded-[1.5rem] border border-turquoise/15 bg-deep-ocean/55 p-5 sm:p-6">
                                <p class="mb-4 text-[10px] font-black uppercase tracking-[0.35em] text-turquoise">Tracklist</p>
                                <ol class="space-y-2 text-sm text-paper/85 sm:text-base">
                                    @forelse ($tracks as $track)
                                        <li class="space-y-1">
                                            <div class="flex flex-wrap items-baseline gap-2">
                                                <span class="font-semibold">{{ $track['title'] ?? 'Untitled Track' }}</span>
                                                @if (!empty($track['subtitle']))
                                                    <span class="text-paper/55">({{ $track['subtitle'] }})</span>
                                                @endif
                                                @if (!empty($track['featured_artists']))
                                                    <span class="text-paper/55">ft. {{ implode(', ', $track['featured_artists']) }}</span>
                                                @endif
                                                @if (!empty($track['producers']))
                                                    <span class="text-paper/55">prod. {{ implode(', ', $track['producers']) }}</span>
                                                @endif
                                                @if (!empty($track['duration']))
                                                    <span class="text-paper/45">- {{ $track['duration'] }}</span>
                                                @endif
                                            </div>
                                        </li>
                                    @empty
                                        <li class="text-paper/55">Tracklist is not available yet.</li>
                                    @endforelse
                                </ol>
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <div class="rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-10 text-center">
                    <p class="text-lg text-paper/70">No releases found in the catalog yet.</p>
                </div>
            @endforelse
        </div>

        <div id="release-empty-state" class="hidden rounded-[2rem] border border-turquoise/15 bg-[#07242B]/70 p-10 text-center">
            <p class="text-lg text-paper/70">No results for this filter.</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = Array.from(document.querySelectorAll('[data-release-filter]'));
        const releaseCards = Array.from(document.querySelectorAll('[data-release-type]'));
        const emptyState = document.getElementById('release-empty-state');

        if (!filterButtons.length || !releaseCards.length) {
            return;
        }

        const setButtonState = (button, isActive) => {
            button.setAttribute('aria-pressed', isActive ? 'true' : 'false');

            if (isActive) {
                button.classList.add('bg-nike-volt', 'text-deep-ocean', 'border-nike-volt');
                button.classList.remove('bg-[#082127]', 'text-paper/75', 'border-turquoise/20');
            } else {
                button.classList.remove('bg-nike-volt', 'text-deep-ocean', 'border-nike-volt');
                button.classList.add('bg-[#082127]', 'text-paper/75', 'border-turquoise/20');
            }
        };

        const applyFilter = (filterValue) => {
            let visibleCount = 0;

            releaseCards.forEach((card) => {
                const cardType = card.dataset.releaseType;
                const isVisible = filterValue === 'all' || cardType === filterValue;

                card.classList.toggle('hidden', !isVisible);
                if (isVisible) {
                    visibleCount += 1;
                }
            });

            if (emptyState) {
                emptyState.classList.toggle('hidden', visibleCount > 0);
            }

            filterButtons.forEach((button) => {
                setButtonState(button, button.dataset.releaseFilter === filterValue);
            });
        };

        filterButtons.forEach((button) => {
            button.addEventListener('click', () => {
                applyFilter(button.dataset.releaseFilter || 'all');
            });
        });

        applyFilter('all');
    });
</script>
@endsection
