<x-layouts.app 
	title="Apresiasi - HMTI" 
	body-class="text-slate-900 antialiased bg-[#d8d3d3]" 
	active-nav="corner">

    <section class="bg-[#d8d3d3] py-12 lg:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 border-b-[5px] border-[#817272] pb-2 inline-block">
                <h1 class="text-4xl font-bold italic text-black sm:text-5xl uppercase tracking-wider">
                    APPRECIATION
                </h1>
            </div>

            <div class="rounded-xl bg-[#F2F2F2] p-6 shadow-sm lg:p-10">
                <livewire:appreciation-list />
            </div>

        </div>
    </section>
</x-layouts.app>
