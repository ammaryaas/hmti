@if ($newsItems->isEmpty())
    <div class="rounded-2xl border border-black/10 bg-white/70 px-6 py-10 text-center text-zinc-700">
        Data berita belum tersedia.
    </div>
@else
    <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
        @foreach ($newsItems as $news)
            <article class="group overflow-hidden rounded-2xl border border-black/10 bg-white shadow-[0_10px_25px_rgba(0,0,0,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <div class="aspect-16/10 overflow-hidden bg-zinc-200">
                    @if ($news->image)
                        <img
                            src="{{ 'storage/' . $news->image }}"
                            alt="{{ $news->title }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    @else
                        <div class="flex h-full w-full items-center justify-center bg-zinc-200 text-zinc-500">
                            Tanpa Gambar
                        </div>
                    @endif
                </div>

                <div class="px-5 py-4">
                    <h3 class="news-title-clamp text-lg font-semibold leading-snug text-zinc-900 sm:text-xl">
                        {{ $news->title }}
                    </h3>
                </div>
            </article>
        @endforeach
    </div>
@endif

<style>
    .news-title-clamp {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
