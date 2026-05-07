<x-layouts.app
	title="Wisudaan - HMTI"
	body-class="text-slate-900 antialiased bg-[#d8d3d3]"
	active-nav="wisudaan"
>
	<section class="bg-[#d8d3d3] py-12 lg:py-16">
		<div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
			<div class="mb-8 flex flex-col gap-4">
				<h1 class="text-3xl font-bold text-slate-900 sm:text-4xl">
					Wisudaan
				</h1>
				<div class="inline-flex w-fit items-center gap-2 rounded-full border border-black/10 bg-white/70 px-5 py-2 text-base font-semibold text-slate-800 shadow-sm">
					Hari/Tanggal : Jumat, 12 Agustus 2026
				</div>
			</div>

			<livewire:wisuda-page />
		</div>
	</section>
</x-layouts.app>
