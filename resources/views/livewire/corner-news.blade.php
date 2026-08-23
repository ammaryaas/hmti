@if ($newsItems->isEmpty())
    <div class="rounded-2xl border border-black/10 bg-white/70 px-6 py-10 text-center text-zinc-700">
        Data berita belum tersedia.
    </div>
@else
    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-6 lg:[&>*:nth-child(5n+4)]:col-start-2 lg:[&>*:nth-child(5n+1)]:col-start-1">
        @foreach ($newsItems as $news)
            <a href="{{ route('corner-show', $news->slug) }}"
                wire:navigate
                class="col-span-1 sm:col-span-1 lg:col-span-2 group overflow-hidden rounded-2xl border border-black/10 bg-white shadow-[0_10px_25px_rgba(0,0,0,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                aria-label="{{ $news->title }}">
                <div class="aspect-[4/3] sm:aspect-16/10 overflow-hidden bg-zinc-400">
                    @if ($news->image)
                        <img 
                            src="{{ asset('storage/' . $news->image) }}" 
                            alt="{{ $news->title }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                    @else
                        <div class="flex h-full w-full items-center justify-center bg-zinc-400 text-zinc-600">
                            Tanpa Gambar
                        </div>
                    @endif
                </div>

                <div class="px-5 py-4">
                    <div class="mb-2.5 flex items-center justify-between">
                        <span class="rounded px-2 py-0.5 text-[11px] font-bold"
                            style="color: {{ $news->news_category->color ?? '#a8a8a8ff' }}80; background: {{ $news->news_category->color ?? '#a8a8a8ff' }}30; border: 1px solid {{ $news->news_category->color ?? '#a8a8a8ff' }}">
                            {{ $news->news_category->name ?? 'Kategori tidak tersedia' }}
                        </span>
                        <span class="text-[11px] font-semibold text-black">
                            {{ ($news->published_at ?? $news->created_at)?->format('d/m/Y') ?? 'dd/mm/yyyy' }}
                        </span>
                    </div>
                    <h3 class="news-title-clamp text-[15px] font-bold leading-snug text-black sm:text-base">
                        {{ $news->title }}
                    </h3>
                </div>
            </a>
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
