@push('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&display=swap" rel="stylesheet">

    <style>
        .font-kameron {
            font-family: 'Kameron', serif;
        }
    </style>
@endpush

<x-layouts.app
    title="HMTI - Himpunan Mahasiswa Teknik Industri"
    body-class="text-slate-900 antialiased bg-[#d8d3d3]"
    active-nav="home"
>
    <section class="relative isolate min-h-[60vh] overflow-hidden bg-[#B53737] text-white md:min-h-screen">
        <div class="absolute inset-0 -z-20 bg-[#B53737]"></div>
        <div class="absolute inset-0 -z-10 bg-[#B53737]/70 md:bg-[linear-gradient(180deg,rgba(181,55,55,0.36)_0%,rgba(95,27,27,0.28)_45%,rgba(35,16,16,0.42)_100%)]"></div>
        <div
            class="absolute inset-0 -z-10 bg-cover bg-center opacity-50 mix-blend-normal"
            style="background-image: url('{{ asset('assets/bg1.png') }}');"
        ></div>

        <main class="mx-auto flex w-full max-w-7xl min-h-[60vh] items-center justify-center px-6 py-0 sm:px-6 md:min-h-[calc(100vh-80px)] md:pt-24 md:pb-16 lg:px-8 lg:pt-16">
            <div class="mx-auto max-w-6xl text-center -translate-y-5 sm:translate-y-0">
                <h1 class="font-kameron mt-4 text-4xl font-bold leading-none text-white drop-shadow-[0_8px_16px_rgba(60,0,0,0.35)] sm:text-5xl md:text-6xl lg:text-[84px]">
                    HMTI
                </h1>
                <p class="font-kameron mt-3 text-xs font-medium uppercase leading-tight text-white whitespace-nowrap sm:text-xl md:text-2xl lg:text-[46px]">
                    Himpunan Mahasiswa Teknik Industri
                </p>
                <p class="font-kameron mt-2 text-sm font-medium uppercase tracking-wide text-white sm:text-xl lg:text-[42px]">
                    Universitas Jenderal Soedirman
                </p>
            </div>
        </main>
    </section>

    <livewire:home-latest-news />
    <livewire:home-cabinet-highlight />
</x-layouts.app>
