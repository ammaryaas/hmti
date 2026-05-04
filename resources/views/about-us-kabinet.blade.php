<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kabinet HMTI</title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@livewireStyles
	<style>
		.scrollbar-hide {
			scrollbar-width: none;
			-ms-overflow-style: none;
		}
		.scrollbar-hide::-webkit-scrollbar {
			display: none;
		}
	</style>
</head>
<body class="bg-white text-slate-900 antialiased scroll-smooth">
	<x-navbar active="about" />

	@php
		// Dummy data for cabinet sections. Ready to be replaced by DB data.
		$cabinets = [
			[
				'id' => 'gerigi-bersinergi',
				'name' => 'Gerigi Bersinergi',
				'logo' => 'assets/kabinetsin.png',
				'vision' => 'MEWUJUDKAN HMTI UNSOED YANG HARMONIS, INKLUSIF, DAN BERINTEGRITAS SEBAGAI WADAH
                            PENGEMBANGAN KBMTI YANG RELEVAN TERHADAP PERKEMBANGAN ZAMAN SERTA BERDAMPAK BAGI
                            INTERNAL DAN EKSTERNAL.',
				'missions' => [
					'MEMBANGUN HARMONI DAN KEKELUARGAAN INTERNAL HMTI MELALUI KOMUNIKASI TERBUKA, BUDAYA SALING MENGHARGAI, SERTA LINGKUNGAN KERJA YANG SUPORTIF BAGI SELURUH FUNGSIONARIS HMTI.',
					'MENJADIKAN HMTI SEBAGAI ORGANISASI YANG KOMUNIKATIF DAN TERBUKA TERHADAP ASPIRASI KBMTI, SERTA MENGINTEGRASIKAN SETIAP MASUKAN SECARA NYATA KE DALAM KEBIJAKAN DAN PROGRAM KERJA ORGANISASI.',
					'MEWUJUDKAN ORGANISASI YANG RESPONSIF DAN ADAPTIF TERHADAP DINAMIKA PERKEMBANGAN ZAMAN MELALUI EVALUASI KINERJA PENGURUS SECARA BERKALA DAN PERBAIKAN BERKELANJUTAN.',
					'MENJADIKAN HMTI SEBAGAI WADAH PENGEMBANGAN MINAT, BAKAT, DAN PRESTASI KBMTI, BAIK DALAM BIDANG AKADEMIK MAUPUN NONAKADEMIK, MELALUI PROGRAM YANG TERARAH DAN INKLUSIF.',
					'MENINGKATKAN RELEVANSI DAN KEBERMANFAATAN HMTI TERHADAP PERKEMBANGAN ZAMAN MELALUI INOVASI PROGRAM, KOLABORASI STRATEGIS, PENGABDIAN MASYARAKAT, SERTA PENGUATAN HUBUNGAN DENGAN ALUMNI.',
				],
				'photos' => [
					'assets/konten3.png',
					'assets/bg1.png',
					'assets/detail1.png',
                    'assets/konten3.png',
					'assets/bg1.png',
					'assets/detail1.png',
				],
			],
		];
	@endphp

	<main>
		<section class="bg-white py-10">
			<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
				<h1 class="text-center text-3xl font-bold text-slate-900 sm:text-4xl">Kabinet HMTI</h1>
				<p class="mt-3 text-center text-base text-slate-600 sm:text-lg">
					Klik nama kabinet untuk menuju detailnya.
				</p>

				<div class="mt-8 flex flex-wrap justify-center gap-3">
					@foreach ($cabinets as $cabinet)
						<a
							href="#{{ $cabinet['id'] }}"
							class="rounded-full border border-[#B53737] px-4 py-2 text-sm font-semibold text-[#B53737] transition hover:bg-[#B53737] hover:text-white sm:text-base"
						>
							{{ $cabinet['name'] }}
						</a>
					@endforeach
				</div>
			</div>
		</section>

		@foreach ($cabinets as $cabinet)
			<section id="{{ $cabinet['id'] }}" class="border-t border-slate-200 bg-[#F7F4F4] py-14">
				<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
					<div class="mx-auto max-w-4xl text-center">
						<h2 class="text-3xl font-bold text-slate-900 sm:text-4xl">{{ $cabinet['name'] }}</h2>
						<div class="mt-6 flex justify-center">
							<img
								src="{{ asset($cabinet['logo']) }}"
								alt="Logo {{ $cabinet['name'] }}"
								class="h-28 w-28 object-contain sm:h-32 sm:w-32"
							>
						</div>
					</div>

					<div class="mt-10 space-y-10">
						<div class="rounded-2xl bg-white p-8 shadow-sm">
							<h3 class="text-center text-2xl font-bold text-[#B53737]">Visi</h3>
							<p class="mt-4 text-center text-base leading-relaxed text-slate-700 sm:text-lg">
								{{ $cabinet['vision'] }}
							</p>
						</div>

						<div class="rounded-2xl bg-white p-8 shadow-sm">
							<h3 class="text-center text-2xl font-bold text-[#B53737]">Misi</h3>
							<ol class="mt-4 space-y-3 pl-5 text-base text-slate-700 sm:text-lg">
								@foreach ($cabinet['missions'] as $mission)
									<li class="list-decimal">{{ $mission }}</li>
								@endforeach
							</ol>
						</div>
					</div>

					<div class="mt-12">
						<h3 class="text-center text-2xl font-bold text-slate-900">Foto Kabinet</h3>
						<div class="mt-6">
							<div class="flex gap-4 overflow-x-auto pb-4 scroll-smooth snap-x snap-mandatory scrollbar-hide">
								@foreach ($cabinet['photos'] as $photo)
									<div class="snap-start shrink-0">
										<img
											src="{{ asset($photo) }}"
											alt="Foto {{ $cabinet['name'] }}"
											class="h-52 w-[240px] rounded-2xl object-cover sm:h-60 sm:w-[300px] md:h-64 md:w-[340px]"
										>
									</div>
								@endforeach
							</div>
							<p class="mt-2 text-center text-sm text-slate-500">Geser ke samping untuk melihat foto lainnya.</p>
						</div>
					</div>
				</div>
			</section>
		@endforeach
	</main>

	<x-footer />

	@livewireScripts
</body>
</html>
