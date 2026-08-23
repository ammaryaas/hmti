<div class="space-y-8">
    @if ($graduates)
        <div
            class="inline-flex w-fit items-center gap-2 rounded-full border border-black/10 bg-white/70 px-5 py-2 text-base font-semibold text-slate-800 shadow-sm">
            Hari/Tanggal : {{ $graduates->schedule->translatedFormat('l, d M Y') }}
        </div>
        
        <h1 class="text-2xl text-center font-bold font-serif">
            Merayakan Keberhasilan dan Dedikasi Para Lulusan Terbaik
        </h1>

        <div class="relative overflow-hidden min-h-80 rounded-[28px] shadow-[0_22px_45px_rgba(0,0,0,0.22)]">
            @if ($graduates->photo)
                <img src="{{ 'storage/' . $graduates->photo }}" alt="Foto Bersama Wisuda"
                    class="h-full w-full object-cover transition duration-300 group-hover:scale-[1.03]">
            @else
                <div class="flex flex-col items-center justify-center h-full w-full min-h-80 bg-linear-to-br from-slate-100 to-slate-200 transition duration-300 group-hover:scale-[1.03]">
                    <div class="rounded-full bg-white/70 p-5 mb-3 shadow-sm">
                        <x-heroicon-o-photo class="h-12 w-12 text-slate-400"/>
                    </div>
                </div>
            @endif
            <div class="absolute inset-0 bg-linear-to-t from-black/55 via-black/10 to-transparent" aria-hidden="true"></div>
            <div class="absolute bottom-5 left-6 rounded-full bg-white/85 px-4 py-2 text-sm font-semibold text-slate-800 shadow-sm">
                Foto Bersama Wisuda
            </div>
        </div>

        <section
            class="rounded-4xl bg-linear-to-br from-white/90 via-white/70 to-white/40 px-6 py-10 shadow-[0_20px_45px_rgba(0,0,0,0.1)] backdrop-blur-sm sm:px-8">
            <div class="mb-6 flex items-center justify-between">
                <h2 class="text-2xl font-bold text-slate-900">Daftar Mahasiswa Wisuda</h2>
                <span
                    class="rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-semibold text-slate-600">{{ $graduates->mahasiswa->count() }}
                    Mahasiswa</span>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($graduates->mahasiswa as $mahasiswa)
                    <article
                        class="group flex flex-col items-center rounded-3xl border border-slate-200/70 bg-white/90 px-6 py-7 text-center shadow-[0_16px_30px_rgba(15,23,42,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_22px_40px_rgba(15,23,42,0.15)]">
                        <div class="relative">
                            @if ($mahasiswa->foto)
                                <img src="{{ 'storage/' . $mahasiswa->foto }}" alt="{{ $mahasiswa->nama }}"
                                    class="h-28 w-28 rounded-2xl object-cover ring-2 ring-white/80 transition duration-300 group-hover:scale-[1.03]">
                            @else
                                {{-- <img src="{{ 'storage/default' }}" alt=""> --}}
                                <x-heroicon-s-user class="h-24 text-slate-200"/>
                            @endif
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-slate-200/70" aria-hidden="true"></div>
                        </div>

                        <h3 class="mt-4 text-lg font-bold text-slate-900">
                            {{ $mahasiswa->nama }}
                        </h3>
                        <p class="mt-1 text-sm font-semibold text-slate-500">
                            NIM {{ $mahasiswa->NIM }}
                        </p>
                        <p class="text-sm text-slate-500">
                            Angkatan {{ $mahasiswa->angkatan }}
                        </p>
                    </article>
                @empty
                    <div class="rounded-2xl border border-black/10 bg-white/70 px-6 py-10 text-center text-zinc-700">
                        Data mahasiswa belum terupdate
                    </div>
                @endforelse
            </div>
        </section>
    @else
        <div class="rounded-2xl border border-black/10 bg-white/70 px-6 py-10 text-center text-zinc-700">
            Belum ada wisuda terdekat
        </div>
    @endif
</div>
