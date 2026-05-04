<section class="bg-gradient-to-r from-[#B2534F] to-[#FFB7B4] py-6 sm:py-8 lg:py-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:items-stretch lg:gap-20 ">
            <div class="cabinet-fade-up flex items-center justify-center ">
                <img
                    src="{{ asset('assets/konten3.png') }}"
                    alt="Dokumentasi kegiatan kabinet HMTI"
                    class="h-auto w-full object-contain transition duration-500 hover:scale-[1.02]"
                >
            </div>

            <div class="cabinet-fade-up flex h-full flex-col justify-center lg:pl-2">
                <h2 class="text-2xl font-extrabold leading-tight text-white sm:text-3xl lg:text-center lg:text-[34px] lg:leading-[1.2] xl:text-[25px] xl:whitespace-nowrap">
                    “Menyatukan langkah, menguatkan dampak”
                </h2>

                <p class="mt-5 text-justify text-sm font-semibold leading-relaxed text-white/90 sm:text-base lg:text-lg lg:leading-[1.4]">
                    Slogan ini pada kabinet sinkronisasi memiliki arti bahwa kita harus memiliki kebersamaan untuk melangkah kedepan secara bersama-sama. Bukan hanya sekedar mencapai tujuan yang diinginkan saja, tapi juga bersama-sama untuk menyatukan pikiran dan melangkah bersama agar dampak yang diberikan lebih terasa dan kuat
                </p>

                <div class="mt-8 flex justify-center">
                    <a
                        href="{{ url('/about-us/kabinet') }}"
                        class="inline-flex rounded-full bg-[#D9D9D9]/90 px-9 py-3 text-lg font-extrabold text-white transition duration-300 hover:scale-105 hover:bg-[#ececec]"
                    >
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cabinet-fade-up {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 700ms ease, transform 700ms ease;
        }

        .cabinet-fade-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        if (!window.__cabinetHighlightObserverInitialized) {
            window.__cabinetHighlightObserverInitialized = true;

            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2,
            });

            document.querySelectorAll('.cabinet-fade-up').forEach(function (element) {
                observer.observe(element);
            });
        }
    </script>
</section>
