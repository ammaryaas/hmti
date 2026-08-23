<section class="relative py-16 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div 
        class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" 
        style="background-image: url('{{ asset('Assets/bg2.jpg') }}');"
    ></div>
    <!-- White overlay to wash out the image -->
    <div class="absolute inset-0 z-0 bg-white/80"></div>

    <div class="relative z-10 mb-16">
        <h2 class="inline-flex rounded-r-3xl border border-black/70 border-l-0 bg-[#e0dede] px-10 py-2 text-2xl md:text-3xl font-bold text-black shadow-[0_3px_6px_rgba(0,0,0,0.12)]" style="font-family: 'Times New Roman', Times, serif;">
            TENTANG HMTI
        </h2>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 md:px-12 lg:px-16 flex flex-col md:flex-row items-center gap-10 md:gap-16">
        <!-- Text Content -->
        <div class="flex-1 text-black">
            <h3 class="text-5xl md:text-6xl font-bold italic mb-6 leading-tight" style="font-family: 'Times New Roman', Times, serif;">
                Kabinet<br>{{ $activeCabinet->name }}
            </h3>
            <p class="text-base md:text-lg text-justify leading-relaxed">
                HMTI Unsoed berdiri pada tanggal 4 Maret 2017. HMTI Unsoed adalah sebuah organisasi yang menghimpun, menampung, serta berusaha merealisasikan aspirasi mahasiswa Jurusan Teknik Industri Universitas Jenderal Soedirman berdasarkan asas dan sifat yang ditetapkan
            </p>
        </div>

        <!-- Logo -->
        <div class="w-full md:w-5/12 lg:w-1/3 flex justify-center md:justify-end">
            <img src="{{ asset('storage/' . $activeCabinet->logo) }}" alt="Logo Kabinet {{ $activeCabinet->name }}" class="w-64 md:w-80 object-contain drop-shadow-xl">
        </div>
    </div>
</section>
