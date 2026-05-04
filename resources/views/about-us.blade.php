<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - HMTI UNSOED</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-slate-900 antialiased">
    <x-navbar active="about" />

    <main>
        <section>
            <div class="bg-white py-6">
                <h1 class="text-center text-3xl font-bold text-slate-900">Apa itu HMTI?</h1>
            </div>

            <div class="bg-[#E9DCDC] py-12">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 items-center gap-6 md:grid-cols-2">
                        <div>
                            <p class="text-2xl leading-relaxed text-slate-800 text-justify">
                                HMTI Unsoed adalah sebuah organisasi yang menghimpun, menampung, serta berusaha
                                merealisasikan aspirasi mahasiswa Jurusan Teknik Industri Universitas Jenderal Soedirman
                                berdasarkan asas dan sifat yang ditetapkan.
                            </p>
                            <p class="mt-3 text-2xl leading-relaxed text-slate-800 text-justify">
                                HMTI Unsoed berdiri pada tanggal 4 Maret 2017.
                            </p>
                        </div>

                        <div class="flex justify-center md:justify-end">
                            <img src="{{ asset('assets/hmti.png') }}" alt="Logo HMTI" class="w-80 max-w-full object-contain lg:w-96">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-[#B53737]">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-white">Visi &amp; Misi HMTI</h2>
                </div>
            </div>

            <div class="bg-[#F2F2F2] py-16">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h3 class="text-center text-4xl font-bold text-slate-900">Visi</h3>
                    <p class="mx-auto mt-6 max-w-5xl text-center text-lg font-semibold leading-9 text-slate-800">
                        Mewujudkan Mahasiswa Jurusan Teknik Industri Unsoed yang unggul dalam pengembangan ipteks
                        yang berorientasi pada Sumber Daya Pedesaan serta kearifan lokal guna berperan aktif dalam
                        pembangunan bangsa dengan berintegritas tinggi yang memiliki karakter, bertanggung jawab,
                        kritis, berwawasan luas, memiliki kreativitas tinggi, dan bertaqwa kepada Tuhan Yang Maha Esa.
                    </p>

                    <h3 class="mt-14 text-center text-4xl font-bold text-slate-900">Misi</h3>
                    <ol class="mx-auto mt-8 max-w-6xl list-decimal space-y-5 pl-8 text-lg font-semibold leading-9 text-slate-800">
                        <li>Meningkatkan kemampuan mahasiswa dalam bidang akademis maupun non-akademis dengan cara berusaha merealisasikan aspirasi dari Mahasiswa Jurusan Teknik Industri Universitas Jenderal Soedirman.</li>
                        <li>Berperan aktif guna mengembangkan serta memajukan HMTI Unsoed dalam proses pembangunan bangsa.</li>
                        <li>Menghidupkan budaya ilmiah yang bertanggung jawab.</li>
                        <li>Mempererat tali persaudaraan antar Mahasiswa Jurusan Teknik Industri dalam satu wadah Himpunan Mahasiswa Teknik Industri Universitas Jenderal Soedirman.</li>
                        <li>Meningkatkan atmosfer akademik dengan mengikuti perkembangan ipteks sebagai sarana pengembangan keilmuan Jurusan Teknik Industri Universitas Jenderal Soedirman.</li>
                    </ol>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-[#B53737]">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-white">Unsur dan makna lambang</h2>
                </div>
            </div>

            <div class="bg-white py-16">
                <div class="mx-auto max-w-7xl space-y-16 px-4 sm:px-6 lg:px-8">
                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="mx-auto max-w-2xl text-center md:col-start-1">
                            <img src="{{ asset('assets/detail1.png') }}" alt="Tulisan HMTI Unsoed" class="w-64 mx-auto">
                            <p class="mt-5 text-center text-lg font-semibold leading-9 text-slate-800">
                                Tulisan HMTI Unsoed melambangkan organisasi HMTI Unsoed.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="mx-auto max-w-2xl text-center md:col-start-2">
                            <img src="{{ asset('assets/detail2.png') }}" alt="Anak panah" class="w-64 mx-auto">
                            <p class="mt-5 text-center text-lg font-semibold leading-9 text-slate-800">
                                Anak panah melambangkan adanya pencapaian visi dan misi HMTI Unsoed dan berjumlah 3
                                yang berlandaskan Tri Dharma Perguruan Tinggi.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="mx-auto max-w-2xl text-center md:col-start-1">
                            <img src="{{ asset('assets/detail3.png') }}" alt="Konveyor dan gear" class="w-64 mx-auto">
                            <p class="mt-5 text-center text-lg font-semibold leading-9 text-slate-800">
                                Konveyor dan Gear Penggerak melambangkan HMTI Unsoed yang terus berjalan untuk
                                mencapai suatu tujuan.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="mx-auto max-w-2xl text-center md:col-start-2">
                            <img src="{{ asset('assets/detail4.png') }}" alt="Siluet Jenderal Soedirman" class="w-64 mx-auto">
                            <p class="mt-5 text-center text-lg font-semibold leading-9 text-slate-800">
                                Siluet Jenderal Soedirman melambangkan kedudukan HMTI Unsoed berada di Universitas
                                Jenderal Soedirman.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="mx-auto max-w-2xl text-center md:col-start-1">
                            <img src="{{ asset('assets/detail5.png') }}" alt="Plat besi dan gear" class="w-64 mx-auto">
                            <p class="mt-5 text-center text-lg font-semibold leading-9 text-slate-800">
                                Plat besi yang berjumlah 20 dan mata gear yang berjumlah 14 melambangkan angka 2014
                                yaitu tahun terbentuknya Teknik Industri Unsoed.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="mx-auto max-w-2xl text-center md:col-start-2">
                            <img src="{{ asset('assets/detail6.png') }}" alt="Warna merah dan abu" class="w-64 mx-auto">
                            <p class="mt-5 text-center text-lg font-semibold leading-9 text-slate-800">
                                Warna merah melambangkan keberanian serta semangat juang HMTI Unsoed dalam mewujudkan
                                visi dan misi, warna abu-abu melambangkan kesederhanaan dan keharmonisan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />

    @livewireScripts
</body>
</html>
