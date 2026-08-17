<section class="relative py-16 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div 
        class="absolute inset-0 z-0 bg-cover bg-center" 
        style="background-image: url('{{ asset('Assets/bg3.jpg') }}');"
    ></div>
    <!-- White overlay to wash out the image -->
    <div class="absolute inset-0 z-0 bg-white/75"></div>

    <div class="relative z-10 mb-16">
        <h2 class="inline-flex rounded-r-3xl border border-black/70 border-l-0 bg-[#e0dede] px-10 py-2 text-2xl md:text-3xl font-bold text-black shadow-[0_3px_6px_rgba(0,0,0,0.12)]" style="font-family: 'Times New Roman', Times, serif;">
            INFORMASI MAHASISWA
        </h2>
    </div>

    <!-- Informasi Mahasiswa Grid Container -->
    <div class="relative z-10 mx-auto max-w-5xl px-6 md:px-12 mb-24">
        <div class="bg-white p-6 md:p-10 shadow-lg flex flex-col gap-6 rounded-sm">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Top 3 Items -->
                <a href="https://docs.google.com/spreadsheets/d/13LFOoezlD7d0Z-YaHh_xXBON3iAFAXj5Exh-x3Rvcu0/edit?gid=1027305753#gid=1027305753" target="_blank" class="block aspect-[4/3] rounded-lg shadow overflow-hidden transition-transform duration-300 hover:scale-[1.03] hover:shadow-xl">
                    <img src="{{ asset('Assets/infolomba.png') }}" alt="Info Lomba" class="w-full h-full object-cover">
                </a>
                <a href="{{ route('corner') }}"  class="block aspect-[4/3] rounded-lg shadow overflow-hidden transition-transform duration-300 hover:scale-[1.03] hover:shadow-xl">
                    <img src="{{ asset('Assets/prestasi.png') }}" alt="Prestasi" class="w-full h-full object-cover">
                </a>
                <a href="https://drive.google.com/file/d/1PXqwneH-4GNCEz6qG_mZIswjr-ZeiKRq/view" target="_blank" class="block aspect-[4/3] rounded-lg shadow overflow-hidden transition-transform duration-300 hover:scale-[1.03] hover:shadow-xl">
                    <img src="{{ asset('Assets/kalender.png') }}" alt="Kalender Akademik" class="w-full h-full object-cover">
                </a>
                
                <!-- Bottom 3 Items -->
                <div class="aspect-[4/3] rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('Assets/platypus.png') }}" alt="Games/Event" class="w-full h-full object-cover">
                </div>
                <div class="aspect-[4/3] rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('Assets/platypus.png') }}" alt="Games/Event" class="w-full h-full object-cover">
                </div>
                <div class="aspect-[4/3] rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('Assets/platypus.png') }}" alt="Games/Event" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Event Information Section -->
    <div class="relative z-10 mx-auto max-w-6xl px-6 md:px-12">
        <div class="flex items-center justify-center mb-12">
            <div class="h-1 bg-black flex-1 max-w-[250px]"></div>
            <h2 class="text-3xl md:text-5xl font-bold italic text-black text-center px-8 leading-tight tracking-wide" style="font-family: 'Times New Roman', Times, serif;">
                EVENT<br>INFORMATION
            </h2>
            <div class="h-1 bg-black flex-1 max-w-[250px]"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Event 1 -->
            <div class="flex flex-col shadow-[0_8px_20px_rgba(0,0,0,0.15)] rounded-lg overflow-hidden border border-black/10">
                <div class="bg-white min-h-[220px] flex items-center justify-center p-6 text-center text-sm font-medium text-gray-700">
                    (Foto logo<br>eventnya atau<br>foto apa gitulah)
                </div>
                <div class="bg-[#bfbdbd] p-6 flex-1 flex flex-col">
                    <div class="text-right border-b border-black pb-2 mb-4 text-sm font-bold text-black">
                        tanggal pelaksanaan:<br>dd/mm/yyyy
                    </div>
                    <div class="text-[13px] text-black leading-relaxed text-justify font-medium">
                        Lorem ipsum sampe bawah.................................. (isinya penjelasan eventnya ngapain, tapi fontnya bisa dikecilin gitu sesuai kotakannya)
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="flex flex-col shadow-[0_8px_20px_rgba(0,0,0,0.15)] rounded-lg overflow-hidden border border-black/10">
                <div class="bg-white min-h-[220px] flex items-center justify-center p-6 text-center text-sm font-medium text-gray-700">
                    (Foto logo<br>eventnya atau<br>foto apa gitulah)
                </div>
                <div class="bg-[#bfbdbd] p-6 flex-1 flex flex-col">
                    <div class="text-right border-b border-black pb-2 mb-4 text-sm font-bold text-black">
                        tanggal pelaksanaan:<br>dd/mm/yyyy
                    </div>
                    <div class="text-[13px] text-black leading-relaxed text-justify font-medium">
                        Lorem ipsum sampe bawah.................................. (isinya penjelasan eventnya ngapain, tapi fontnya bisa dikecilin gitu sesuai kotakannya)
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="flex flex-col shadow-[0_8px_20px_rgba(0,0,0,0.15)] rounded-lg overflow-hidden border border-black/10">
                <div class="bg-white min-h-[220px] flex items-center justify-center p-6 text-center text-sm font-medium text-gray-700">
                    (Foto logo<br>eventnya atau<br>foto apa gitulah)
                </div>
                <div class="bg-[#bfbdbd] p-6 flex-1 flex flex-col">
                    <div class="text-right border-b border-black pb-2 mb-4 text-sm font-bold text-black">
                        tanggal pelaksanaan:<br>dd/mm/yyyy
                    </div>
                    <div class="text-[13px] text-black leading-relaxed text-justify font-medium">
                        Lorem ipsum sampe bawah.................................. (isinya penjelasan eventnya ngapain, tapi fontnya bisa dikecilin gitu sesuai kotakannya)
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
