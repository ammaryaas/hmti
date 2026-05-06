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
    <section class="relative isolate min-h-screen overflow-hidden bg-[#B53737] text-white">
        <div class="absolute inset-0 -z-20 bg-[#B53737]"></div>
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(180deg,rgba(181,55,55,0.36)_0%,rgba(95,27,27,0.28)_45%,rgba(35,16,16,0.42)_100%)]"></div>
        <div
            class="absolute inset-0 -z-10 bg-cover bg-center opacity-50 mix-blend-normal"
            style="background-image: url('{{ asset('assets/bg1.png') }}');"
        ></div>

        <main class="mx-auto flex w-full max-w-7xl px-4 pb-12 pt-20 sm:px-6 md:pt-24 lg:min-h-[calc(100vh-80px)] lg:items-center lg:px-8 lg:pb-16 lg:pt-16">
            <div class="mx-auto max-w-6xl text-center">
                <h1 class="font-kameron mt-4 text-4xl font-bold leading-none text-white drop-shadow-[0_8px_16px_rgba(60,0,0,0.35)] sm:text-5xl md:text-6xl lg:text-[84px]">
                    HMTI
                </h1>
                <p class="font-kameron mt-4 text-lg font-bold uppercase leading-tight text-white sm:text-xl md:text-2xl lg:text-[46px]">
                    Himpunan Mahasiswa Teknik Industri
                </p>
                <p class="font-kameron mt-4 text-lg font-bold uppercase tracking-wide text-white sm:text-xl lg:text-[42px]">
                    Universitas Jenderal Soedirman
                </p>
            </div>
        </main>
    </section>

    <livewire:home-latest-news />
    <livewire:home-cabinet-highlight />
</x-layouts.app>
