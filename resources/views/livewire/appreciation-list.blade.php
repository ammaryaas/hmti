<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
    @forelse ($appreciations as $item)
        <div class="rounded-xl bg-white shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden flex flex-col border border-black/10">
            <!-- Image Section -->
            <div class="relative aspect-[4/3] sm:aspect-video md:aspect-[4/3] bg-zinc-500 w-full overflow-hidden">
                @if ($item->photo)
                    <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                @else
                    <div class="flex h-full w-full items-center justify-center text-white font-medium px-4 text-center">
                        Foto Delegasi / Prestasi
                    </div>
                @endif
                
                <!-- Date Tag Overlapping -->
                <div class="absolute bottom-0 right-0 bg-[#E3A96E] text-black px-4 py-1 text-sm font-bold">
                    tgl:{{ $item->date ? $item->date->format('d/m/Y') : '-' }}
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-6 flex-1 flex flex-col">
                <h3 class="font-bold text-[15px] sm:text-base text-black mb-4 leading-snug">
                    {{ $item->title }}
                </h3>
                
                <div class="mt-auto">
                    <p class="text-[13px] sm:text-sm font-semibold text-black mb-1.5">Delegasi :</p>
                    <ul class="list-disc list-inside text-[13px] sm:text-sm text-black ml-1 space-y-0.5">
                        @if ($item->mahasiswa)
                            <li>
                                {{ $item->mahasiswa->nama }}
                                @if ($item->mahasiswa->angkatan)
                                    ({{ $item->mahasiswa->angkatan }})
                                @endif
                            </li>
                        @else
                            <li class="italic text-zinc-500">-</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full py-12 text-center text-zinc-500">
            <p class="text-base font-medium">Belum ada data apresiasi.</p>
        </div>
    @endforelse
</div>
