<div
    title="{{ $news->title }} - HMTI"
    body-class="text-slate-900 antialiased bg-[#d8d3d3]"
    active-nav=""
>

    <section class="bg-[#d8d3d3] pb-14 pt-4 sm:pb-16 lg:pb-20">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-4xl shadow-[0_24px_50px_rgba(0,0,0,0.2)]">
                @if ($news->image)
                    <img
                        src="{{ '../storage/' . $news->image }}"
                        alt="{{ $news->title }}"
                        class="h-70 w-full object-cover sm:h-90 lg:h-115"
                    >
                @else
                    <div class="flex h-70 w-full items-center justify-center bg-slate-200 text-slate-500 sm:h-90 lg:h-115">
                        Gambar belum tersedia
                    </div>
                @endif
                <div class="absolute inset-0 bg-linear-to-t from-black/55 via-black/20 to-transparent" aria-hidden="true"></div>
            </div>

            <div class="rounded-4xl bg-white/80 px-6 py-8 shadow-[0_20px_45px_rgba(0,0,0,0.12)] backdrop-blur-sm sm:px-8 sm:py-10 lg:px-10">
                <div class="max-w-4xl">
                    <h1 class="text-3xl font-bold leading-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        {{ $news->title }}
                    </h1>
                    @if ($news->published_at)
                        <div class="mt-4 inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/90 px-4 py-2 text-sm font-semibold text-slate-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z" />
                            </svg>
                            {{ $news->published_at->translatedFormat('l, d M Y') }}
                        </div>
                    @endif
                </div>

                <div class="mt-8 border-t border-slate-200/80 pt-6">
                    <div class="max-w-4xl text-justify text-base leading-relaxed text-slate-700 sm:text-lg">
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
