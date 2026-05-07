<section class="bg-[#d8d3d3] py-12 lg:py-16">
    <div class="mb-20">
        <h2 class="inline-flex rounded-r-3xl border border-black/70 border-l-0 bg-[#d8d3d3] px-10 py-2 text-3xl font-bold text-black shadow-[0_3px_6px_rgba(0,0,0,0.12)]">
            Berita Terbaru
        </h2>
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="relative">
            @if ($showSliderControls && $canGoPrev)
                <button
                    type="button"
                    wire:click="prevSlide"
                    class="absolute -left-3 top-1/2 z-10 hidden -translate-y-1/2 rounded-full border border-black/20 bg-white/70 p-2 text-zinc-700 transition hover:bg-white hover:text-black lg:inline-flex"
                    aria-label="Berita sebelumnya"
                >
                    <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            @endif

            @if ($showSliderControls && $canGoNext)
                <button
                    type="button"
                    wire:click="nextSlide"
                    class="absolute -right-3 top-1/2 z-10 hidden -translate-y-1/2 rounded-full border border-black/20 bg-white/70 p-2 text-zinc-700 transition hover:bg-white hover:text-black lg:inline-flex"
                    aria-label="Berita berikutnya"
                >
                    <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            @endif

            @if ($newsItems->isEmpty())
                <div class="rounded-2xl border border-black/10 bg-white/40 px-6 py-10 text-center text-zinc-700">
                    Data berita belum tersedia.
                </div>
            @else
                <div wire:key="slide-{{ $currentPage }}" class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
                    @foreach ($newsItems as $news)
                        <a
                            href="{{ route('news.show', $news->slug) }}"
                            class="group overflow-hidden rounded-2xl border border-black/10 bg-white/70 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                            aria-label="{{ $news->title }}"
                        >
                            <div class="aspect-16/10 overflow-hidden bg-zinc-200">
                                @if ($news->image_url)
                                    <img
                                        src="{{ $news->image_url }}"
                                        alt="{{ $news->title }}"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                    >
                                @else
                                    <div class="flex h-full w-full items-center justify-center bg-zinc-200 text-zinc-500">
                                        Tanpa Gambar
                                    </div>
                                @endif
                            </div>

                            <div class="space-y-2 px-4 pb-5 pt-4">
                                <h3 class="news-title-clamp text-xl font-bold leading-tight text-zinc-900">
                                    {{ $news->title }}
                                </h3>

                                @if ($news->excerpt)
                                    <p class="line-clamp-2 text-sm text-zinc-700">
                                        {{ $news->excerpt }}
                                    </p>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

            @if ($showSliderControls)
                <div class="mt-6 flex items-center justify-center gap-3 lg:hidden">
                    <button
                        type="button"
                        wire:click="prevSlide"
                        @disabled(!$canGoPrev)
                        class="inline-flex items-center justify-center rounded-full border border-black/20 bg-white/70 p-2 text-zinc-700 transition hover:bg-white disabled:cursor-not-allowed disabled:opacity-40"
                        aria-label="Berita sebelumnya"
                    >
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button
                        type="button"
                        wire:click="nextSlide"
                        @disabled(!$canGoNext)
                        class="inline-flex items-center justify-center rounded-full border border-black/20 bg-white/70 p-2 text-zinc-700 transition hover:bg-white disabled:cursor-not-allowed disabled:opacity-40"
                        aria-label="Berita berikutnya"
                    >
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <style>
        .news-title-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</section>
