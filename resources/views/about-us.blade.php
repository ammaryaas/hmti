<x-layouts.app
    title="About Us - HMTI UNSOED"
    body-class="bg-[#CBA4A4] text-slate-900 antialiased"
    active-nav="about"
    description="HMTI Unsoed adalah sebuah organisasi yang menghimpun, menampung, serta berusaha merealisasikan aspirasi mahasiswa Jurusan Teknik Industri Universitas Jenderal Soedirman berdasarkan asas dan sifat yang ditetapkan."
>
    <main class="bg-[#CBA4A4] pb-16 pt-10">
        <div class="mx-auto w-[90%] md:w-[95%] lg:w-[90%] space-y-10">
            
            <!-- First Card: HMTI UNSOED -->
            <div class="bg-[#F8F9FA] px-8 py-10 shadow-sm border border-slate-100">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="flex-1 order-2 md:order-1 px-4">
                        <h2 class="text-2xl font-bold text-black mb-6">HMTI UNSOED</h2>
                        <p class="text-base leading-relaxed text-slate-800 text-justify font-medium mb-6">
                            HMTI Unsoed berdiri pada tanggal 4 Maret 2017. HMTI Unsoed adalah sebuah organisasi yang menghimpun, menampung, serta berusaha merealisasikan aspirasi mahasiswa Jurusan Teknik Industri Universitas Jenderal Soedirman berdasarkan asas dan sifat yang ditetapkan
                        </p>
                        <p class="text-sm font-bold text-center mt-8 text-black leading-relaxed">
                            "PERANCANG MUDA, PENUH KARYA, UNTUK INDONESIA.<br>
                            TEKNIK INDUSTRI, JAYA JAYA KORSA!"
                        </p>
                    </div>
                    <div class="order-1 md:order-2 flex justify-center w-full md:w-auto pr-8">
                        <img src="{{ asset('assets/hmti.png') }}" alt="Logo HMTI" class="w-56 md:w-72 object-contain">
                    </div>
                </div>
            </div>

            <!-- Second Card: Visi Misi Container -->
            <div class="bg-[#F8F9FA] px-10 py-12 shadow-sm border border-slate-100">
                <h3 class="text-center text-4xl font-serif font-bold tracking-wide text-black mb-8">Visi</h3>
                
                <div class="border border-slate-200 bg-white p-8 shadow-md mb-12 rounded-md">
                    <p class="text-center text-base font-medium leading-relaxed text-slate-800">
                        Mewujudkan Mahasiswa Jurusan Teknik Industri Unsoed yang unggul dalam pengembangan
                        ipteks yang berorientasi pada Sumber Daya Pedesaan serta kearifan lokal guna berperan aktif
                        dalam pembangunan bangsa dengan berintegritas tinggi yang memiliki karakter, bertanggung
                        jawab, kritis, berwawasan luas, memiliki kreativitas tinggi, dan bertaqwa kepada Tuhan Yang
                        Maha Esa
                    </p>
                </div>

                <h3 class="text-center text-4xl font-serif font-bold tracking-wide text-black mb-8">Misi</h3>
                <div class="border border-slate-200 bg-white p-8 shadow-md rounded-md">
                    <ol class="list-decimal space-y-4 pl-6 text-base font-medium leading-relaxed text-slate-800 text-justify">
                        <li class="pl-2">Meningkatkan kemampuan mahasiswa dalam bidang akademis maupun non-akademis dengan cara berusaha merealisasikan aspirasi dari Mahasiswa Jurusan Teknik Industri Universitas Jenderal Soedirman.</li>
                        <li class="pl-2">Berperan aktif guna mengembangkan serta memajukan HMTI Unsoed dalam proses pembangunan bangsa.</li>
                        <li class="pl-2">Menghidupkan budaya ilmiah yang bertanggung jawab</li>
                        <li class="pl-2">Mempererat tali persaudaraan antar Mahasiswa Jurusan Teknik Industri dalam satu wadah Himpunan Mahasiswa Teknik Industri Universitas Jenderal Soedirman</li>
                        <li class="pl-2">Meningkatkan atmosfer akademik dengan mengikuti perkembangan ipteks sebagai sarana pengembangan keilmuan Jurusan Teknik Industri Universitas Jenderal Soedirman</li>
                    </ol>
                </div>
            </div>
            
        </div>

        <!-- Makna Logo Header -->
        <div class="bg-[#9E3A3A] py-4 mt-12 shadow-sm">
            <div class="mx-auto w-[90%] md:w-[95%] lg:w-[90%]">
                <h2 class="text-2xl font-bold text-white uppercase tracking-wider">MAKNA LOGO</h2>
            </div>
        </div>

        <!-- Makna Logo Content -->
        <div class="mx-auto w-[90%] md:w-[95%] lg:w-[90%] pt-8">
            <div class="bg-[#F8F9FA] px-10 py-12 shadow-sm border border-slate-100">
                <!-- Grid of items -->
                <div class="flex flex-col space-y-12">
                    <!-- Item 1 (Left) -->
                    <div class="flex justify-start">
                        <div class="border border-slate-200 bg-white p-8 shadow-md rounded-md w-full md:w-[60%] lg:w-[55%] flex flex-col items-center">
                            <img src="{{ asset('assets/detail1.png') }}" alt="Tulisan HMTI Unsoed" class="h-28 object-contain mb-8">
                            <p class="text-center text-sm font-medium text-slate-800">
                                Tulisan HMTI Unsoed melambangkan organisasi HMTI Unsoed
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 (Right) -->
                    <div class="flex justify-end">
                        <div class="border border-slate-200 bg-white p-8 shadow-md rounded-md w-full md:w-[60%] lg:w-[55%] flex flex-col items-center">
                            <img src="{{ asset('assets/detail2.png') }}" alt="Anak panah" class="h-32 object-contain mb-8">
                            <p class="text-center text-sm font-medium text-slate-800">
                                Anak panah melambangkan adanya pencapaian visi dan misi HMTI Unsoed dan berjumlah 3 yang berlandaskan Tri Dharma Perguruan Tinggi
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 (Left) -->
                    <div class="flex justify-start">
                        <div class="border border-slate-200 bg-white p-8 shadow-md rounded-md w-full md:w-[60%] lg:w-[55%] flex flex-col items-center">
                            <img src="{{ asset('assets/detail3.png') }}" alt="Konveyor dan gear" class="h-36 object-contain mb-8">
                            <p class="text-center text-sm font-medium text-slate-800">
                                Konveyor dan Gear Penggerak melambangkan HMTI Unsoed yang terus berjalan untuk mencapai suatu tujuan
                            </p>
                        </div>
                    </div>

                    <!-- Item 4 (Right) -->
                    <div class="flex justify-end">
                        <div class="border border-slate-200 bg-white p-8 shadow-md rounded-md w-full md:w-[60%] lg:w-[55%] flex flex-col items-center">
                            <img src="{{ asset('assets/detail4.png') }}" alt="Siluet Jenderal Soedirman" class="h-36 object-contain mb-8">
                            <p class="text-center text-sm font-medium text-slate-800">
                                Siluet Jenderal Soedirman melambangkan kedudukan HMTI Unsoed berada di Universitas Jenderal Soedirman
                            </p>
                        </div>
                    </div>

                    <!-- Item 5 (Left) -->
                    <div class="flex justify-start">
                        <div class="border border-slate-200 bg-white p-8 shadow-md rounded-md w-full md:w-[60%] lg:w-[55%] flex flex-col items-center">
                            <img src="{{ asset('assets/detail5.png') }}" alt="Plat besi dan gear" class="h-36 object-contain mb-8">
                            <p class="text-center text-sm font-medium text-slate-800">
                                Plat besi yang berjumlah 20 dan mata gear yang berjumlah 14 melambangkan angka 2014 yaitu tahun terbentuknya Teknik Industri Unsoed
                            </p>
                        </div>
                    </div>

                    <!-- Item 6 (Right for colors) -->
                    <div class="flex justify-end">
                        <div class="border border-slate-200 bg-white p-8 shadow-md rounded-md w-full md:w-[60%] lg:w-[55%] flex flex-col items-center">
                            <img src="{{ asset('assets/detail6(2).png') }}" alt="Warna merah dan abu" class="h-24 object-contain mb-6">
                            <p class="text-center text-sm font-medium text-slate-800 leading-relaxed">
                                <span class="font-bold">Warna merah</span> melambangkan keberanian serta semangat juang HMTI Unsoed dalam mewujudkan visi dan misi,<br>
                                <span class="font-bold">Warna abu-abu</span> melambangkan kesederhanaan dan keharmonisan,<br>
                                <span class="font-bold">Warna putih</span> sebagai warna dasar melambangkan kesetaraan seluruh keluarga besar mahasiswa Teknik Industri Unsoed tanpa memandang individu itu sendiri
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layouts.app>
