@if($activeCabinet)
<div class="w-full max-w-7xl mx-auto space-y-6">
    <!-- Top Box -->
    <div class="bg-[#f0f2f4] p-8 md:p-12 shadow flex flex-col md:flex-row items-center gap-8 justify-center">
        <div class="shrink-0 w-48 h-48 sm:w-60 sm:h-60 flex items-center justify-center">
            <img src="{{ $activeCabinet->logo ? Storage::url($activeCabinet->logo) : asset('Assets/kabinetsin.png') }}" alt="{{ $activeCabinet->name }}" class="w-full h-full object-contain">
        </div>
        <div class="flex-1 text-center md:text-left">
            <h1 class="text-3xl md:text-[2.75rem] leading-tight font-bold italic tracking-wide text-black mb-3" style="font-family: 'Times New Roman', Times, serif;">
                KABINET<br>
                {{ $activeCabinet->name }}
            </h1>
            <p class="text-lg md:text-2xl font-bold text-gray-900 tracking-wide mt-4">
                Himpunan Mahasiswa Teknik Industri tahun {{ $activeCabinet->period }}
            </p>
        </div>
    </div>

    <!-- Bottom Box -->
    <div class="bg-[#f0f2f4] py-12 px-8 md:px-12 shadow">
        <!-- Visi Section -->
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-6" style="font-family: 'Times New Roman', Times, serif;">
                Visi
            </h2>
            <div class="bg-white rounded-md shadow-[0_2px_10px_rgba(0,0,0,0.08)] p-6 md:p-8 w-full">
                <p class="text-base md:text-lg font-semibold tracking-wider text-gray-800 uppercase leading-relaxed text-center">
                    {{ $activeCabinet->vision }}
                </p>
            </div>
        </div>

        <!-- Misi Section -->
        <div class="flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-6" style="font-family: 'Times New Roman', Times, serif;">
                Misi
            </h2>
            <div class="bg-white rounded-md shadow-[0_2px_10px_rgba(0,0,0,0.08)] p-6 md:p-10 w-full">
                <ol class="list-decimal list-outside ml-4 md:ml-6 space-y-3 text-base md:text-lg font-medium text-gray-800 leading-relaxed text-justify">
                    @foreach($activeCabinet->mission ?? [] as $mission)
                        <li>
                            {{ $mission }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>

    <!-- Filosofi Section -->
    @if($activeCabinet->pl_name || !empty($activeCabinet->pl_logo) || !empty($activeCabinet->pl_color))
    <div class="pt-8">
        <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-8 uppercase tracking-widest">
            FILOSOFI
        </h2>
        
        <div class="bg-[#f0f2f4] py-12 px-8 md:px-16 shadow">
            
            <!-- KABINET -->
            @if($activeCabinet->pl_name)
            <div class="mb-14">
                <h3 class="text-2xl md:text-3xl font-bold text-black mb-4 uppercase">KABINET</h3>
                <div class="flex flex-col md:flex-row items-center gap-8 md:gap-16">
                    <div class="flex-1 text-base md:text-lg text-gray-800 leading-relaxed text-justify">
                        <p class="whitespace-pre-line">
                            {{ $activeCabinet->pl_name }}
                        </p>
                    </div>
                    <div class="shrink-0">
                        <div class="bg-white p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.08)] w-56 h-56 md:w-72 md:h-72 flex items-center justify-center">
                            <img src="{{ $activeCabinet->logo ? Storage::url($activeCabinet->logo) : asset('Assets/kabinetsin.png') }}" alt="Logo Kabinet" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- LOGO -->
            @if(!empty($activeCabinet->pl_logo))
            <div class="mb-14">
                <h3 class="text-2xl md:text-3xl font-bold text-black mb-6 uppercase">LOGO</h3>
                <div class="text-base md:text-lg text-gray-800 leading-relaxed text-justify pl-4 md:pl-0">
                    <ol class="list-decimal list-outside ml-4 space-y-4">
                        @foreach($activeCabinet->pl_logo as $logoPoint)
                            <li>{{ $logoPoint }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            @endif

            <!-- WARNA -->
            @if(!empty($activeCabinet->pl_color))
            <div>
                <h3 class="text-2xl md:text-3xl font-bold text-black mb-12 uppercase">WARNA</h3>
                <div class="grid grid-cols-1 md:grid-cols-{{ min(count($activeCabinet->pl_color), 3) }} gap-8 md:gap-16">
                    @foreach($activeCabinet->pl_color as $colorItem)
                        @php
                            $hexColor = is_array($colorItem) ? ($colorItem['color'] ?? '#878684') : '#878684';
                            $descText = is_array($colorItem) ? ($colorItem['desc'] ?? '') : $colorItem;
                        @endphp
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full shadow-[0_4px_15px_rgba(0,0,0,0.25)] mb-8"
                                 style="background-color: {{ $hexColor }};"></div>
                            <p class="text-base md:text-lg text-gray-800 leading-relaxed text-justify w-full">
                                {{ $descText }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </div>
    @endif

    <!-- Struktur Kepengurusan Section -->
    <div class="pt-16 pb-12 w-full">
        <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-10 uppercase tracking-widest">
            STRUKTUR KEPENGURUSAN
        </h2>
        
        <div class="w-full">
            <!-- Decorative Top Line -->
            <div class="w-full h-4 bg-[#415e6e] mb-6"></div>
            
            <!-- White Box -->
            <div class="bg-[#f0f2f4] py-12 px-4 md:px-12 shadow flex justify-center w-full">
                    <img src="{{ asset('Assets/struktur.png') }}" alt="Struktur Kepengurusan" class="w-full h-auto object-contain">
            </div>

            <!-- Decorative Bottom Line -->
            <div class="w-full h-4 bg-[#415e6e] mt-6"></div>
        </div>
    </div>

    <!-- Departemen Section -->
    @if(!empty($activeCabinet->divisions) && $activeCabinet->divisions->isNotEmpty())
    <div class="pt-16 pb-20 w-full">
        <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12 uppercase tracking-widest">
            DEPARTEMEN
        </h2>

        @foreach($activeCabinet->divisions as $division)
            @php
                $membersPayload = ($division->members ?? collect())->map(function($m) {
                    return [
                        'role'  => $m->position ?? 'Anggota',
                        'photo' => $m->photo ? Storage::url($m->photo) : ($m->mahasiswa?->foto ? Storage::url($m->mahasiswa->foto) : asset('Assets/detail1.png')),
                        'name'  => $m->mahasiswa?->nama ?? 'Nama Anggota',
                    ];
                })->values();
            @endphp
            <div class="relative mb-16">
                <!-- White block (tall) -->
                <div class="bg-[#f0f2f4] pt-12 pb-80 px-6 md:px-12 shadow w-full">
                    <h3 class="text-2xl md:text-3xl font-bold font-serif mb-8 text-black">
                        {{ $division->name }}
                    </h3>
                    <div class="flex flex-col md:flex-row gap-8 md:gap-12">
                        @if($division->image)
                            <img src="{{ Storage::url($division->image) }}" alt="{{ $division->name }}" class="w-full md:w-[40%] h-64 md:h-80 object-cover shadow-sm">
                        @else
                            <img src="{{ asset('Assets/bg1.png') }}" alt="{{ $division->name }}" class="w-full md:w-[40%] h-64 md:h-80 object-cover shadow-sm">
                        @endif
                        <div class="flex-1 text-base md:text-lg text-gray-800 text-justify">
                            <p class="whitespace-pre-line leading-relaxed">{{ $division->desc }}</p>
                        </div>
                    </div>
                </div>

                <!-- Member Carousel -->
                @if($membersPayload->isNotEmpty())
                <div class="w-full -mt-64 px-4 md:px-12 relative z-10">
                    <div class="relative" x-data="memberCarousel({{ Js::from($membersPayload) }})">
                        <!-- Prev Button -->
                        <button @click="prev()" :class="{ 'opacity-30 cursor-not-allowed': currentPage === 0 }" :disabled="currentPage === 0" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-20 bg-white/80 hover:bg-white shadow-md rounded-full w-10 h-10 flex items-center justify-center transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-gray-700"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                        </button>

                        <!-- Cards -->
                        <div class="overflow-hidden">
                            <div class="flex transition-transform duration-500 ease-in-out gap-4 md:gap-8" :style="`transform: translateX(-${currentPage * 100}%)`">
                                <template x-for="(member, i) in members" :key="i">
                                    <div class="shrink-0 w-[calc(50%-0.5rem)] sm:w-[calc(33.333%-0.75rem)] md:w-[calc(25%-1.5rem)] flex flex-col items-center">
                                        <span class="text-sm md:text-base font-bold font-serif mb-2 text-center text-black leading-tight" x-text="member.role"></span>
                                        <div class="bg-[#c2c5c6] p-1.5 md:p-2.5 rounded-lg shadow-md w-full aspect-3/4">
                                            <img :src="member.photo" class="w-full h-full object-cover rounded-md">
                                        </div>
                                        <span class="text-sm md:text-base font-bold font-serif mt-3 text-center text-black leading-tight" x-html="member.name"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Next Button -->
                        <button @click="next()" :class="{ 'opacity-30 cursor-not-allowed': currentPage >= maxPage }" :disabled="currentPage >= maxPage" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-20 bg-white/80 hover:bg-white shadow-md rounded-full w-10 h-10 flex items-center justify-center transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-gray-700"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                        </button>

                        <!-- Dots -->
                        <div class="flex justify-center gap-2 mt-6" x-show="maxPage > 0">
                            <template x-for="p in (maxPage + 1)" :key="p">
                                <button @click="currentPage = p - 1" :class="currentPage === p - 1 ? 'bg-gray-600 w-5' : 'bg-gray-300 w-2.5'" class="h-2.5 rounded-full transition-all duration-300"></button>
                            </template>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        @endforeach
    </div>
    @endif
</div>

<script>
    function memberCarousel(membersList = []) {
        return {
            perPage: 4,
            currentPage: 0,
            members: membersList,
            get maxPage() {
                return Math.max(0, Math.ceil(this.members.length / this.perPage) - 1);
            },
            prev() { if (this.currentPage > 0) this.currentPage--; },
            next() { if (this.currentPage < this.maxPage) this.currentPage++; },
        }
    }
</script>
@else
<div class="w-full max-w-7xl mx-auto p-12 text-center bg-[#f0f2f4] shadow rounded-xl">
    <h2 class="text-2xl font-bold text-gray-700">Belum ada kabinet aktif.</h2>
</div>
@endif



