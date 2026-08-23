<div
    title="{{ $news->title }} - HMTI"
    description="Str::limit(strip_tags($news->content), 150)"
    body-class="text-slate-900 antialiased bg-[#d8d3d3]"
    active-nav="corner"
>
    <section class="bg-[#d8d3d3] pb-14 pt-4 sm:pb-16 lg:pb-20">
        <div class="mx-auto flex max-w-6xl flex-col gap-6 px-4 sm:px-6 lg:px-8 relative">
            
            <!-- Close / Back Button -->
            <div class="flex justify-end">
                <a href="{{ route('corner') }}" class="bg-[#c26565] hover:bg-[#a85555] text-white px-4 py-2 font-bold rounded shadow transition flex items-center justify-center">
                    X
                </a>
            </div>

            <!-- Main Content Container (Original rounded-4xl bg-white/80) -->
            <div class="rounded-4xl bg-white/80 px-6 py-8 shadow-[0_20px_45px_rgba(0,0,0,0.12)] backdrop-blur-sm sm:px-8 sm:py-10 lg:px-10">
                
                <!-- 1. Judul Paling Atas -->
                <div class="max-w-4xl mb-8">
                    <h1 class="text-3xl font-bold leading-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        {{ $news->title }}
                    </h1>
                </div>

                <!-- 2. Gambar (Format Sebelumnya) -->
                <div class="relative overflow-hidden rounded-4xl shadow-[0_24px_50px_rgba(0,0,0,0.2)] mb-6">
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

                <!-- 3. Kategori dan Tanggal (Format Sebelumnya) -->
                <div class="flex flex-wrap items-center gap-3 mb-6">
                    <!-- Kategori -->
                    <div class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-[#E3A96E] px-4 py-2 text-sm font-semibold text-black">
                        {{ $news->category ?? 'Berita' }}
                    </div>

                    <!-- Tanggal -->
                    @if ($news->published_at)
                        <div class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/90 px-4 py-2 text-sm font-semibold text-slate-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z" />
                            </svg>
                            {{ $news->published_at->translatedFormat('l, d M Y') }}
                        </div>
                    @endif
                </div>

                <!-- 4. Deskripsi Berita -->
                <div class="mt-8 border-t border-slate-200/80 pt-6">
                    <div class="max-w-4xl text-justify text-base leading-relaxed text-slate-700 sm:text-lg">
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- 5. Foto Terkait (Koleksi) -->
        <div class="w-full bg-[#a39e9e] py-3 mt-12 mb-8">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold italic text-black uppercase tracking-wider">
                    KOLEKSI
                </h2>
            </div>
        </div>

        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 pb-4">
            @php
                $collections = [null, null, null]; 
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($collections as $index => $col)
                    <div class="aspect-[4/3] bg-[#b1a9a9] rounded flex items-center justify-center shadow">
                        <span class="text-black font-medium italic text-xl">Foto {{ $index + 1 }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
