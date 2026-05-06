<div>
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
            <section id="{{ $cabinet->id }}" class="border-t border-slate-200 bg-[#F7F4F4] py-14">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-4xl text-center">
                        <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl">{{ $cabinet->name }}</h2>
                        <div class="mt-6 flex justify-center">
                            <img src="{{ asset('storage/' . $cabinet->logo) }}" alt="Logo {{ $cabinet->name }}"
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

                    <div class="mt-12">
                        <h3 class="text-center text-2xl font-bold text-slate-900">Foto Kabinet</h3>
                        <div class="mt-6">
                            <div
                                class="flex gap-4 overflow-x-auto pb-4 scroll-smooth snap-x snap-mandatory scrollbar-hide">
                                @foreach ($cabinet->photo as $photo)
                                    <div class="snap-start shrink-0">
                                        <img src="{{ asset('storage/' . $photo) }}" alt="Foto {{ $cabinet->name }}"
                                            class="h-52 w-60 rounded-2xl object-cover sm:h-60 sm:w-75 md:h-64 md:w-85">
                                    </div>
                                @endforeach
                            </div>
                            <p class="mt-2 text-center text-sm text-slate-500">Geser ke samping untuk melihat foto
                                lainnya.</p>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </main>
</div>
