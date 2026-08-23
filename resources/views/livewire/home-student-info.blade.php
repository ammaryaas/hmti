<section class="relative py-16 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div 
        class="absolute inset-0 z-0 bg-cover bg-center" 
        style="background-image: url('{{ asset('Assets/bg3.jpg') }}');"
    ></div>
    <!-- White overlay to wash out the image -->
    <div class="absolute inset-0 z-0 bg-white/75"></div>

    <div class="relative z-10 mb-16">
        <h2 class="inline-flex rounded-r-3xl border border-black/70 border-l-0 bg-[#e0dede] px-10 py-2 text-2xl md:text-3xl font-bold text-black shadow-[0_3px_6px_rgba(0,0,0,0.12)]" style="font-family: 'Times New Roman', Times, serif;">
            INFORMASI MAHASISWA
        </h2>
    </div>

    <!-- Informasi Mahasiswa Grid Container -->
    <div class="relative z-10 mx-auto max-w-5xl px-6 md:px-12 mb-24">
        <div class="bg-white p-6 md:p-10 shadow-lg flex flex-col gap-6 rounded-sm">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse ($studentInfos as $info)
                    @if ($info->link)
                        <a href="{{ route('student-info.visit', $info->id) }}" target="_blank" rel="noopener noreferrer" class="block aspect-[4/3] rounded-lg shadow overflow-hidden transition-transform duration-300 hover:scale-[1.03] hover:shadow-xl">
                            @if ($info->photo)
                                <img src="{{ asset('storage/' . $info->photo) }}" alt="{{ $info->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-zinc-200 flex items-center justify-center p-4 text-center text-sm font-semibold text-zinc-700">
                                    {{ $info->title }}
                                </div>
                            @endif
                        </a>
                    @else
                        <div class="aspect-[4/3] rounded-lg shadow overflow-hidden">
                            @if ($info->photo)
                                <img src="{{ asset('storage/' . $info->photo) }}" alt="{{ $info->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-zinc-200 flex items-center justify-center p-4 text-center text-sm font-semibold text-zinc-700">
                                    {{ $info->title }}
                                </div>
                            @endif
                        </div>
                    @endif
                @empty
                    <div class="col-span-full py-8 text-center text-zinc-500 font-medium">
                        Belum ada informasi mahasiswa.
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Event Information Section -->
    <div class="relative z-10 mx-auto max-w-6xl px-6 md:px-12">
        <div class="flex items-center justify-center mb-12">
            <div class="h-1 bg-black flex-1 max-w-[250px]"></div>
            <h2 class="text-3xl md:text-5xl font-bold italic text-black text-center px-8 leading-tight tracking-wide" style="font-family: 'Times New Roman', Times, serif;">
                EVENT<br>INFORMATION
            </h2>
            <div class="h-1 bg-black flex-1 max-w-[250px]"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($events as $event)
                <div class="flex flex-col shadow-[0_8px_20px_rgba(0,0,0,0.15)] rounded-lg overflow-hidden border border-black/10 bg-[#bfbdbd]">
                    <div class="bg-white min-h-[220px] aspect-[4/3] flex items-center justify-center overflow-hidden">
                        @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="p-6 text-center text-sm font-medium text-gray-400">
                                Tanpa Gambar
                            </div>
                        @endif
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="text-right border-b border-black pb-2 mb-4 text-xs md:text-sm font-bold text-black">
                                Pelaksanaan:<br>
                                <span class="font-normal">{{ $event->formatted_date }}</span>
                            </div>
                            <h3 class="font-bold text-base text-black mb-2">{{ $event->title }}</h3>
                            <div class="text-[13px] text-black leading-relaxed text-justify font-medium line-clamp-4">
                                {{ $event->desc }}
                            </div>
                        </div>
                        @if($event->link)
                            <div class="mt-4 pt-2 border-t border-black/20 text-right">
                                <a href="{{ $event->link }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-bold text-[#B53737] hover:underline">
                                    Detail Event &rarr;
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10 bg-white/60 rounded-lg text-gray-600 font-medium">
                    Belum ada informasi event saat ini.
                </div>
            @endforelse
        </div>
    </div>
</section>
