<div>

    <section class="bg-[#c0736e] py-12 lg:py-16 min-h-screen">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <div class="w-full max-w-5xl mx-auto bg-[#f4f4f5] shadow-xl p-8 md:p-12 lg:p-16">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-5xl font-bold italic text-black leading-tight tracking-wide"
                        style="font-family: 'Times New Roman', Times, serif;">
                        EVENT<br>INFORMATION
                    </h1>
                </div>

                <!-- Event Template -->
                @forelse ($event as $item)
                    <div class="mb-8">
                        <!-- Event Title -->
                        <h2 class="text-3xl md:text-4xl font-bold italic text-black mb-6"
                            style="font-family: 'Times New Roman', Times, serif;">
                            {{ $item->title }}
                        </h2>

                        <div class="flex flex-col md:flex-row gap-6 mb-6">
                            <!-- Photo -->
                            <div
                                class="bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.08)] flex items-center justify-center min-h-62.5 md:w-1/3 lg:w-[30%] overflow-hidden">
                                @if ($item->image)
                                    <img
                                        src="{{ asset('storage/' . $item->image) }}"
                                        alt="{{ $item->title }}"
                                        class="object-cover w-full h-full">
                                @else
                                    <span class="text-gray-400 text-sm">No Image</span>
                                @endif
                            </div>

                            <!-- Description -->
                            <div class="bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.08)] p-8 flex-1">
                                <p class="text-base text-gray-700 leading-relaxed pb-2">
                                    {{ $item->desc }}
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.08)] px-6 py-3 flex flex-col sm:flex-row sm:items-center sm:divide-x divide-gray-200 gap-3 sm:gap-0 text-sm text-gray-700">
                            <!-- Location -->
                            <div class="flex items-center gap-2 sm:pr-6">
                                <x-heroicon-o-map-pin class="w-4 h-4 text-[#B53737] shrink-0" />
                                <span class="font-semibold">{{ $item->location }}</span>
                            </div>
                            <!-- Date -->
                            <div class="flex items-center gap-2 sm:pl-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#B53737] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>
                                </svg>
                                <span class="font-semibold">{{ $item->formatted_date }}</span>
                            </div>

                            <!-- Link -->
                            @if ($item->link)
                                <div class="flex items-center gap-2 sm:pl-6 hover:text-[#B53737]">
                                    <x-heroicon-o-link class="w-4 h-4 text-[#B53737] shrink-0" />
                                    <a href="{{ $item->link }}" target="_blank" class="font-semibold">{{ $item->link }}</a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- red divider, if data more than one -->
                    @if (!$loop->last)
                        <div class="bg-[#B53737] h-1 w-full my-10"></div>
                    @endif

                @empty
                    <p class="text-center text-gray-500 py-12">Belum ada event yang dipublikasikan.</p>
                @endforelse
            </div>

        </div>
    </section>

</div>
