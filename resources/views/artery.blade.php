<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Artery</title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f5f5] text-slate-900 antialiased">
	<x-navbar active="artery" />

	<main>
		<section class="relative overflow-hidden bg-[radial-gradient(circle_at_top,#F3E6E6_0%,#FFFFFF_55%)] py-14">
			<div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-[#B53737]/10 blur-3xl"></div>
			<div class="pointer-events-none absolute -left-28 bottom-0 h-72 w-72 rounded-full bg-[#C98689]/20 blur-3xl"></div>

			<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
				<div class="relative overflow-hidden rounded-[32px] border border-[#E6D6D6] bg-white/95 p-8 shadow-[0_30px_70px_rgba(181,55,55,0.12)] backdrop-blur-sm sm:p-12">
					<div class="absolute inset-y-0 left-0 w-1.5 bg-gradient-to-b from-[#B53737] via-[#C98689] to-transparent"></div>
					<div class="absolute right-10 top-10 h-24 w-24 rounded-full border border-[#B53737]/20 bg-white/60"></div>

					<h1 class="relative text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Artery</h1>
					<p class="relative mt-4 text-justify text-base leading-relaxed text-slate-800 sm:text-lg">
						Artery merupakan agenda kerja berkelanjutan yang dijalankan oleh Divisi RnD sebagai sarana bagi mahasiswa dalam memperoleh referensi akademik. Program ini memberikan kemudahan akses terhadap materi perkuliahan di setiap semester, referensi laporan kerja praktik, serta kumpulan soal ujian dari tahun-tahun sebelumnya. Dengan demikian, Artery dapat membantu mahasiswa dalam memahami materi sekaligus mempersiapkan diri menghadapi perkuliahan dan ujian. Sebagai upaya untuk meningkatkan kualitas pembelajaran, seluruh sumber belajar yang disediakan telah melalui proses kurasi dan dapat diakses melalui website resmi HMTI Unsoed dan juga Google Drive.
					</p>

					<div class="relative mt-8 flex flex-wrap items-center gap-3 text-base font-semibold text-slate-900">
						<span>Drive Artery :</span>
						<a
							href="#"
							class="group inline-flex items-center gap-2 rounded-full bg-[#B53737] px-5 py-2.5 text-white shadow-[0_12px_26px_rgba(181,55,55,0.35)] transition hover:-translate-y-0.5 hover:bg-[#8A2E2E]"
						>
							Klik Link disini!
							<span class="text-lg transition group-hover:translate-x-0.5">&#8594;</span>
						</a>
					</div>

					<div class="relative mt-10 flex justify-end">
						<span class="rounded-full border border-[#B53737]/30 bg-[#B53737]/10 px-5 py-2 text-sm font-semibold text-[#B53737] shadow-[0_10px_18px_rgba(181,55,55,0.18)]">
							CP : 08156988933
						</span>
					</div>
				</div>
			</div>
		</section>
	</main>

	<section class="mt-20 bg-gradient-to-r from-[#8ECB91] to-[#CC605B] pt-10 sm:pt-12 lg:pt-14">
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="contact-fade-up grid grid-cols-1 gap-10 pb-10 lg:grid-cols-[1.05fr_1fr] lg:gap-14">
				<div>
					<h2 class="text-3xl font-extrabold text-white sm:text-4xl">Contact Details</h2>

					<div class="mt-5 overflow-hidden rounded-3xl border-4 border-[#C98689] shadow-[0_14px_30px_rgba(0,0,0,0.2)] transition duration-300 hover:scale-[1.01]">
						<iframe
							title="Lokasi Fakultas Teknik Universitas Jenderal Soedirman"
							src="https://www.google.com/maps?q=Fakultas+Teknik+Universitas+Jenderal+Soedirman&output=embed"
							class="h-[220px] w-full sm:h-[260px] lg:h-[300px]"
							loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"
						></iframe>
					</div>
				</div>

				<div class="text-white">
					<h3 class="text-2xl font-medium leading-tight lg:text-2xl">
						Himpunan Mahasiswa Teknik Industri UNSOED
					</h3>
					<p class="mt-3 text-lg font-medium leading-tight text-white/95 lg:text-1xl">
						Jl. Raya Mayjen Sungkono No.KM 5, Dusun 2, Blater, Kec. Kalimanah, Kabupaten Purbalingga, Jawa Tengah 53371
					</p>

					<div class="mt-7 grid grid-cols-1 gap-8 md:grid-cols-2">
						<ul class="space-y-10 text-lg font-semibold lg:text-xl">
							<li class="flex items-center gap-4">
								<svg class="h-7 w-7 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
									viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M3.6 9h16.8M3.6 15h16.8M12 3a15.3 15.3 0 010 18M12 3a15.3 15.3 0 000 18" />
								</svg>
								<a href="https://hmti.ft.unsoed.ac.id" target="_blank"
									class="hover:text-white/80 whitespace-nowrap">
									: hmti.ft.unsoed.ac.id
								</a>
							</li>

							<li class="flex items-center gap-4">
								<svg class="h-7 w-7 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
									viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M21.75 8.25v7.5A2.25 2.25 0 0119.5 18h-15a2.25 2.25 0 01-2.25-2.25v-7.5m19.5 0A2.25 2.25 0 0019.5 6h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 10.41A2.25 2.25 0 012.25 8.493V8.25" />
							</svg>
							<a href="mailto:hmti@unsoed.ac.id"
								class="hover:text-white/80 whitespace-nowrap">
								: hmti@unsoed.ac.id
							</a>
							</li>

							<li class="flex items-center gap-4">
								<svg class="h-7 w-7 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
									viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M2.25 6.75c0 7.042 5.708 12.75 12.75 12.75h1.5a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106a1.125 1.125 0 00-1.173.417l-.97 1.293a1.125 1.125 0 01-1.21.387 10.53 10.53 0 01-6.605-6.605 1.125 1.125 0 01.387-1.21l1.293-.97c.347-.26.498-.705.417-1.173L4.462 2.352A1.125 1.125 0 003.37 1.5H2.25A2.25 2.25 0 000 3.75v3z" />
							</svg>
							<a href="tel:081286928223"
								class="hover:text-white/80 whitespace-nowrap">
								: 0812-8692-8223
							</a>
							</li>

							<li class="flex items-center gap-4">
								<svg class="h-7 w-7 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
									viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M12 21s7.5-4.35 7.5-10.5a7.5 7.5 0 10-15 0C4.5 16.65 12 21 12 21z" />
									<circle cx="12" cy="10.5" r="2.5" />
								</svg>
								<a href="https://maps.google.com/?q=-7.4289061,109.3343546"
									target="_blank"
									class="hover:text-white/80 whitespace-nowrap text-base lg:text-xl">
									: -7.4289061,109.3343546,17.07
								</a>
							</li>
						</ul>

						<ul class="space-y-10 text-lg font-semibold lg:text-xl md:ml-10">
							<li class="grid grid-cols-[52px_auto] items-center gap-4">
								<div class="flex justify-center">
									<svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
										<path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2C0 8.2 0 12 0 12s0 3.8.5 5.8a3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1c.5-2 .5-5.8.5-5.8s0-3.8-.5-5.8zM9.6 15.6V8.4L15.8 12l-6.2 3.6z"/>
									</svg>
								</div>

								<a href="#" class="hover:text-white/80 whitespace-nowrap">
									: HMTI UNSOED
								</a>
							</li>

							<li class="grid grid-cols-[52px_auto] items-center gap-4">
								<div class="relative w-[52px] h-7 flex items-center justify-center">
									<svg class="h-6 w-6 absolute left-0 opacity-90"
										viewBox="0 0 24 24" fill="currentColor">
										<path d="M16.8 3.5A5.2 5.2 0 0012 8.3v7.5a2.8 2.8 0 11-2.8-2.8h.8v-3h-.8a5.8 5.8 0 105.8 5.8V8.3a2.2 2.2 0 012.2-2.2h1.3v-2.6h-1.7z"/>
									</svg>

									<svg class="h-7 w-7 absolute right-0"
										viewBox="0 0 24 24" fill="currentColor">
										<path d="M7.5 2h9A5.5 5.5 0 0122 7.5v9a5.5 5.5 0 01-5.5 5.5h-9A5.5 5.5 0 012 16.5v-9A5.5 5.5 0 017.5 2zm8.9 1.7a1.3 1.3 0 101.3 1.3 1.3 1.3 0 00-1.3-1.3zM12 7a5 5 0 105 5 5 0 00-5-5zm0 1.8A3.2 3.2 0 118.8 12 3.2 3.2 0 0112 8.8z"/>
									</svg>
								</div>

								<a href="#" class="hover:text-white/80 whitespace-nowrap">
									: hmti.unsoed
								</a>
							</li>

							<li class="grid grid-cols-[52px_auto] items-center gap-4">
								<div class="flex justify-center">
									<svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
										<path d="M3 4h3.6l4.2 5.4L16 4h4l-7.1 8.2L21 20h-3.7l-4.8-6.1L7.3 20H3.2l7.5-8.7L3 4z"/>
									</svg>
								</div>

								<a href="https://x.com/hmti_unsoed" target="_blank"
									class="hover:text-white/80 whitespace-nowrap">
									: hmti_unsoed
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="border-t border-white/30 py-5 text-center text-sm font-medium text-white/90">
				&copy; 2026 HMTI UNSOED. All Rights Reserved.
			</div>
		</div>

		<style>
			.contact-fade-up {
				opacity: 0;
				transform: translateY(20px);
				transition: opacity 700ms ease, transform 700ms ease;
			}

			.contact-fade-up.is-visible {
				opacity: 1;
				transform: translateY(0);
			}
		</style>

		<script>
			if (!window.__contactFooterObserverInitialized) {
				window.__contactFooterObserverInitialized = true;

				var contactObserver = new IntersectionObserver(function (entries) {
					entries.forEach(function (entry) {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							contactObserver.unobserve(entry.target);
						}
					});
				}, {
					threshold: 0.2,
				});

				document.querySelectorAll('.contact-fade-up').forEach(function (element) {
					contactObserver.observe(element);
				});
			}
		</script>
	</section>
</body>
</html>
