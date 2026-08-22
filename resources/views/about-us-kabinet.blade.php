<div>
    <style>
        body { background-color: #EAE4E4 !important; }
    </style>
    <main>

        <section class="bg-white py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-center text-3xl font-bold text-slate-900 sm:text-4xl">Kabinet HMTI</h1>
                <p class="mt-3 text-center text-base text-slate-600 sm:text-lg">
                    Klik nama kabinet untuk menuju detailnya.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-3">
                    @foreach ($cabinets as $cabinet)
                        <a href="#{{ $cabinet->id }}"
                            class="rounded-full border border-[#B53737] px-4 py-2 text-sm font-semibold text-[#B53737] transition hover:bg-[#B53737] hover:text-white sm:text-base">
                            {{ $cabinet->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        @foreach ($cabinets as $cabinet)
            <section id="{{ $cabinet->id }}" class="border-t border-slate-200 bg-[#EAE4E4] py-14">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    
                    <!-- Judul Kabinet & Tombol UP -->
                    <div class="relative mx-auto max-w-4xl text-center">
                        <h2 class="text-3xl font-bold italic text-slate-900 sm:text-4xl">{{ $cabinet->name }}</h2>
                        @if (!$loop->first)
                            <a href="#{{ $cabinets[0]->id }}" 
                               class="absolute right-0 top-1/2 -translate-y-1/2 rounded-md bg-[#A55E5E] px-4 py-2 text-sm font-bold tracking-widest text-white shadow-sm transition hover:bg-[#8F4F4F] sm:text-base">
                                UP
                            </a>
                        @endif
                        <div class="mt-6 flex justify-center">
                            <img src="{{ str_contains($cabinet->logo, 'dummy') ? 'https://placehold.co/400x400/B53737/FFF?text=Logo+Kabinet' : asset('storage/' . $cabinet->logo) }}" alt="Logo {{ $cabinet->name }}"
                                class="h-28 w-28 object-contain sm:h-32 sm:w-32">
                        </div>
                    </div>

                    <div class="mt-10 space-y-10">
                        <div class="rounded-2xl bg-white p-8 shadow-sm">
                            <h3 class="text-center text-2xl font-bold text-[#B53737]">Visi</h3>
                            <p class="mt-4 text-center text-base leading-relaxed text-slate-700 sm:text-lg">
                                {{ $cabinet->vision }}
                            </p>
                        </div>

                        <div class="rounded-2xl bg-white p-8 shadow-sm">
                            <h3 class="text-center text-2xl font-bold text-[#B53737]">Misi</h3>
                            <ol class="mt-4 space-y-3 pl-5 text-base text-slate-700 sm:text-lg">
                                @foreach ($cabinet->mission as $mission)
                                    <li class="list-decimal">{{ $mission }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- KOLEKSI Section -->
                <div class="mt-16" x-data="{ 
                        scrollLeft() { $refs.scrollContainer.scrollBy({ left: -350, behavior: 'smooth' }); }, 
                        scrollRight() { $refs.scrollContainer.scrollBy({ left: 350, behavior: 'smooth' }); } 
                    }">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-4 flex items-center justify-between">
                        <h3 class="text-3xl font-bold italic tracking-wider text-black">KOLEKSI</h3>
                        
                        <!-- Navigation Buttons -->
                        <div class="flex gap-3">
                            <button @click="scrollLeft" 
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-white text-slate-800 shadow-md transition-colors hover:bg-slate-100 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button @click="scrollRight" 
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-[#9E3A3A] text-white shadow-md transition-colors hover:bg-[#832e2e] focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div class="relative w-full py-8 overflow-hidden">
                        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            
                            <!-- Left Vertical Bar & Horizontal Extension -->
                            <div class="absolute left-4 sm:left-6 lg:left-8 top-1/2 z-20 -translate-y-1/2">
                                <div class="absolute right-1/2 top-1/2 -translate-y-1/2 h-28 md:h-36 w-[50vw] bg-[#9E3A3A]"></div>
                                <div class="pointer-events-none relative h-64 md:h-80 w-10 md:w-12 rounded-md bg-[#9E3A3A] shadow-xl"></div>
                            </div>
                            
                            <!-- Right Vertical Bar & Horizontal Extension -->
                            <div class="absolute right-4 sm:right-6 lg:right-8 top-1/2 z-20 -translate-y-1/2">
                                <div class="absolute left-1/2 top-1/2 -translate-y-1/2 h-28 md:h-36 w-[50vw] bg-[#9E3A3A]"></div>
                                <div class="pointer-events-none relative h-64 md:h-80 w-10 md:w-12 rounded-md bg-[#9E3A3A] shadow-xl"></div>
                            </div>

                            <!-- Scrollable Photos -->
                            <div x-ref="scrollContainer" 
                                 class="relative z-10 flex snap-x snap-mandatory scroll-smooth gap-6 overflow-x-auto py-6 pl-16 pr-16 md:pl-20 md:pr-20 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                                @foreach ($cabinet->photo as $photo)
                                    <div class="snap-center shrink-0">
                                        <img src="{{ str_contains($photo, 'dummy') ? 'https://placehold.co/600x400/333/FFF?text=Foto' : asset('storage/' . $photo) }}" alt="Foto {{ $cabinet->name }}"
                                            class="h-56 w-auto object-cover sm:h-64 md:h-72 rounded-xl shadow-[0_8px_20px_rgba(0,0,0,0.3)]">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </main>
</div>
