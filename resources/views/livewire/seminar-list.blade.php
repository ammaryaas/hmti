<div class="space-y-10">
    @forelse ($seminars as $seminar)
        <article class="group relative overflow-hidden rounded-[28px] border border-white/10 shadow-[0_22px_45px_rgba(0,0,0,0.22)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_30px_60px_rgba(0,0,0,0.28)]">
            <div
                class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('assets/bgseminar.png') }}');"
                aria-hidden="true"
            ></div>
            <div class="absolute inset-0 bg-linear-to-br from-purple-950/60 via-purple-700/40 to-purple-900/70" aria-hidden="true"></div>

            <div class="relative px-6 py-8 text-white sm:px-10 sm:py-10">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                    <div class="rounded-2xl bg-white/15 px-4 py-3 backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-widest text-white/75">Nama Mahasiswa</p>
                        <p class="mt-2 text-lg font-semibold">{{ $seminar->mahasiswa->nama }}</p>
                    </div>
                    <div class="rounded-2xl bg-white/15 px-4 py-3 backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-widest text-white/75">Tanggal Seminar</p>
                        <div class="flex justify-between">
                            <p class="mt-2 text-lg font-semibold">{{ $seminar->schedule->translatedFormat('l, d M Y') }}</p>
                            <p class="mt-2 text-lg font-semibold">{{ $seminar->schedule->format('H:i') }}</p>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-white/15 px-4 py-3 backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-widest text-white/75">Tempat Seminar</p>
                        <p class="mt-2 text-lg font-semibold">{{ $seminar->location }}</p>
                    </div>
                </div>

                <div class="mt-8 border-t border-white/20 pt-6">
                    <p class="{{ $seminar->type_color }} w-1/7 h-5 flex justify-center items-center rounded-md text-xs font-semibold uppercase tracking-widest text-white/75">
                        {{ $seminar->type_label }}
                    </p>
                    <h2 class="mt-3 text-2xl font-bold leading-snug sm:text-3xl">
                        {{ $seminar->title }}
                    </h2>
                </div>
            </div>
        </article>
    @empty
        <div class="rounded-2xl border border-black/10 bg-white/70 px-6 py-10 text-center text-zinc-700">
            Data seminar belum tersedia.
        </div>
    @endforelse
</div>
