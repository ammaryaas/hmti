<x-layouts.app
    title="IKATI Unsoed"
    body-class="bg-white text-slate-900 antialiased"
    active-nav="about"
>
    <main>
        <section class="bg-white py-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-slate-900 sm:text-4xl">IKATI Unsoed</h1>
            </div>
        </section>

        <section class="bg-[#E9E2E2] py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-2">
                    <div class="order-2 space-y-5 text-justify text-base leading-relaxed text-slate-800 sm:order-1 sm:text-lg">
                        <p>
                            IKATI (Ikatan Alumni Teknik Industri Unsoed) hadir untuk menghubungkan kembali,
                            memperkuat jaringan, dan membuka peluang kolaborasi antar alumni Teknik Industri
                            Universitas Jenderal Soedirman.
                        </p>
                        <p>
                            Logo IKATI merepresentasikan identitas Industrial Engineering yang menekankan
                            keseimbangan antara manusia, sistem, dan teknologi, dengan semangat Unity Beyond Infinity.
                        </p>
                    </div>
                    <div class="order-1 flex justify-center sm:order-2 lg:justify-end">
                        <img
                            src="{{ asset('assets/logoikati.png') }}"
                            alt="Logo IKATI"
                            class="h-36 w-36 rounded-xl object-contain shadow-sm sm:h-44 sm:w-44"
                        >
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[linear-gradient(90deg,#B2534F_0%,#FFB7B4_100%)] py-10">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <p class="text-center text-base font-semibold italic leading-relaxed text-white sm:text-lg">
                    "Dari satu almamater, kita melangkah ke berbagai arah-namun tetap dalam satu tujuan.
                    Ini adalah awal dari perjalanan baru kita bersama."
                </p>
            </div>
        </section>

        <section class="bg-white py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="space-y-6 text-slate-800">
                    <div>
                        <h2 class="text-lg font-bold">Sosial Media</h2>
                        <div class="mt-3 flex items-center gap-3 text-base font-medium">
                            <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7.5 2h9A5.5 5.5 0 0122 7.5v9a5.5 5.5 0 01-5.5 5.5h-9A5.5 5.5 0 012 16.5v-9A5.5 5.5 0 017.5 2zm8.9 1.7a1.3 1.3 0 101.3 1.3 1.3 1.3 0 00-1.3-1.3zM12 7a5 5 0 105 5 5 5 0 00-5-5zm0 1.8A3.2 3.2 0 118.8 12 3.2 3.2 0 0112 8.8z"/>
                            </svg>
                            <span>IKATI Unsoed</span>
                        </div>
                    </div>

                    <div>
                        <p class="text-base font-semibold">
                            Grup LinkedIn seputar informasi kerja dan jejaring lainnya:
                        </p>
                        <div class="mt-3 flex items-center gap-3 text-base font-medium">
                            <svg class="h-5 w-5 text-slate-700" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4.98 3.5a2.5 2.5 0 11-.01 5.001A2.5 2.5 0 014.98 3.5zM3 9h4v12H3zM9 9h3.8v1.7h.1c.5-.9 1.9-1.9 3.9-1.9 4.2 0 5 2.7 5 6.2V21h-4v-5.2c0-1.2 0-2.8-1.8-2.8-1.8 0-2.1 1.3-2.1 2.7V21H9z"/>
                            </svg>
                            <span>LinkedIn IKATI Unsoed (belum ada linknya)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>
