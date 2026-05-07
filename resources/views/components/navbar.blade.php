@props(['active' => 'home'])

@php
    $homeActive = $active === 'home';
    $aboutActive = $active === 'about';
    $arteryActive = $active === 'artery';
    $cornerActive = $active === 'corner';
    $eventActive = $active === 'seminar' || $active === 'wisudaan';
    $seminarActive = $active === 'seminar';
    $wisudaActive = $active === 'wisudaan';
@endphp

<header class="fixed inset-x-0 top-0 z-9999 border-b border-white/15 bg-[#B53737] shadow-lg">
    <nav class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 sm:gap-4">
            <img src="{{ asset('assets/logounsoed.png') }}" alt="Logo Universitas" class="h-10 w-10 object-contain sm:h-12 sm:w-12">
            <img src="{{ asset('assets/logoti.png') }}" alt="Logo Teknik Industri" class="h-10 w-10 object-contain sm:h-12 sm:w-12">
            <img src="{{ asset('assets/logohmti.png') }}" alt="Logo Himpunan" class="h-10 w-10 object-contain sm:h-12 sm:w-12">
        </div>

        <div class="hidden items-center gap-1 lg:flex" data-dropdown-group="desktop-nav">
            <a href="{{ route('home') }}" class="{{ $homeActive ? 'rounded-lg bg-white/10 text-white px-4 py-2 text-[18px] font-semibold leading-none' : 'rounded-lg px-4 py-2 text-[18px] font-semibold leading-none text-white/95 transition hover:bg-white/10 hover:text-white' }}">Home</a>

            <details class="group relative">
                <summary class="{{ $aboutActive ? 'flex cursor-pointer items-center gap-2 rounded-lg bg-white/10 px-4 py-2 text-[18px] font-semibold leading-none text-white' : 'flex cursor-pointer items-center gap-2 rounded-lg px-4 py-2 text-[18px] font-semibold leading-none text-white/95 transition hover:bg-white/10 hover:text-white' }}">
                    About Us
                    <svg class="h-4 w-4 transition duration-200 group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="pointer-events-none absolute right-0 top-full mt-2 w-44 overflow-hidden rounded-xl border border-white/20 bg-[#B53737] text-white opacity-0 shadow-2xl transition duration-200 ease-out group-open:pointer-events-auto group-open:opacity-100">
                    <a href="{{ route('about-us') }}" class="block px-4 py-2.5 text-sm transition hover:bg-white/10" data-close-dropdown>HMTI</a>
                    <a href="{{ route('about-us-kabinet') }}" class="block px-4 py-2.5 text-sm transition hover:bg-white/10" data-close-dropdown>Kabinet</a>
                    <a href="{{ route('about-us-ikati') }}" class="block px-4 py-2.5 text-sm transition hover:bg-white/10" data-close-dropdown>IKATI</a>
                </div>
            </details>

            <a href="{{ route('artery') }}" class="{{ $arteryActive ? 'rounded-lg bg-white/10 text-white px-4 py-2 text-[18px] font-semibold leading-none' : 'rounded-lg px-4 py-2 text-[18px] font-semibold leading-none text-white/95 transition hover:bg-white/10 hover:text-white' }}">Artery</a>
            <a href="{{ route('corner') }}" class="{{ $cornerActive ? 'rounded-lg bg-white/10 text-white px-4 py-2 text-[18px] font-semibold leading-none' : 'rounded-lg px-4 py-2 text-[18px] font-semibold leading-none text-white/95 transition hover:bg-white/10 hover:text-white' }}">Corner</a>

            <details class="group relative">
                <summary class="{{ $eventActive ? 'flex cursor-pointer items-center gap-2 rounded-lg bg-white/10 px-4 py-2 text-[18px] font-semibold leading-none text-white' : 'flex cursor-pointer items-center gap-2 rounded-lg px-4 py-2 text-[18px] font-semibold leading-none text-white/95 transition hover:bg-white/10 hover:text-white' }}">
                    Event
                    <svg class="h-4 w-4 transition duration-200 group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="pointer-events-none absolute right-0 top-full mt-2 w-44 overflow-hidden rounded-xl border border-white/20 bg-[#B53737] text-white opacity-0 shadow-2xl transition duration-200 ease-out group-open:pointer-events-auto group-open:opacity-100">
                    <a href="{{ route('seminar') }}" class="{{ $seminarActive ? 'block bg-white/10 px-4 py-2.5 text-sm font-semibold' : 'block px-4 py-2.5 text-sm transition hover:bg-white/10' }}" data-close-dropdown>Seminar</a>
                    <a href="{{ route('wisuda') }}" class="{{ $wisudaActive ? 'block bg-white/10 px-4 py-2.5 text-sm font-semibold' : 'block px-4 py-2.5 text-sm transition hover:bg-white/10' }}" data-close-dropdown>Wisudaan</a>
                </div>
            </details>
        </div>

        <details class="group relative lg:hidden">
            <summary class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-lg border border-white/25 bg-white/10 text-white transition hover:bg-white/20">
                <svg class="h-5 w-5 group-open:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="hidden h-5 w-5 group-open:block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </summary>
            <div class="absolute right-0 top-full mt-2 w-64 rounded-xl border border-white/20 bg-[#B53737]/95 p-4 shadow-2xl backdrop-blur-sm" data-dropdown-group="mobile-nav">
                <a href="{{ route('home') }}" class="{{ $homeActive ? 'block rounded-lg bg-white/10 px-3 py-2 text-sm font-semibold text-white' : 'block rounded-lg px-3 py-2 text-sm text-white/90 transition hover:bg-white/10' }}">Home</a>

                <details class="group mt-2">
                    <summary class="{{ $aboutActive ? 'flex cursor-pointer items-center justify-between rounded-lg bg-white/10 px-3 py-2 text-sm font-semibold text-white' : 'flex cursor-pointer items-center justify-between rounded-lg px-3 py-2 text-sm text-white/90 transition hover:bg-white/10' }}">
                        About Us
                        <svg class="h-4 w-4 transition duration-200 group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </summary>
                    <div class="grid grid-rows-[0fr] transition-all duration-200 group-open:grid-rows-[1fr]">
                        <div class="overflow-hidden">
                            <a href="{{ route('about-us') }}" class="mt-1 block rounded-lg px-3 py-2 text-sm text-white/80 transition hover:bg-white/10" data-close-dropdown>HMTI</a>
                            <a href="#" class="block rounded-lg px-3 py-2 text-sm text-white/80 transition hover:bg-white/10" data-close-dropdown>Kabinet</a>
                            <a href="#" class="block rounded-lg px-3 py-2 text-sm text-white/80 transition hover:bg-white/10" data-close-dropdown>IKATI</a>
                        </div>
                    </div>
                </details>

                <a href="{{ route('artery') }}" class="{{ $arteryActive ? 'mt-2 block rounded-lg bg-white/10 px-3 py-2 text-sm font-semibold text-white' : 'mt-2 block rounded-lg px-3 py-2 text-sm text-white/90 transition hover:bg-white/10' }}">Artery</a>
                <a href="{{ route('corner') }}" class="{{ $cornerActive ? 'mt-1 block rounded-lg bg-white/10 px-3 py-2 text-sm font-semibold text-white' : 'mt-1 block rounded-lg px-3 py-2 text-sm text-white/90 transition hover:bg-white/10' }}">Corner</a>

                <details class="group mt-2">
                    <summary class="{{ $eventActive ? 'flex cursor-pointer items-center justify-between rounded-lg bg-white/10 px-3 py-2 text-sm font-semibold text-white' : 'flex cursor-pointer items-center justify-between rounded-lg px-3 py-2 text-sm text-white/90 transition hover:bg-white/10' }}">
                        Event
                        <svg class="h-4 w-4 transition duration-200 group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </summary>
                    <div class="grid grid-rows-[0fr] transition-all duration-200 group-open:grid-rows-[1fr]">
                        <div class="overflow-hidden">
                            <a href="{{ route('seminar') }}" class="{{ $seminarActive ? 'mt-1 block rounded-lg bg-white/10 px-3 py-2 text-sm font-semibold text-white' : 'mt-1 block rounded-lg px-3 py-2 text-sm text-white/80 transition hover:bg-white/10' }}" data-close-dropdown>Seminar</a>
                            <a href="{{ route('wisuda') }}" class="{{ $wisudaActive ? 'block rounded-lg bg-white/10 px-3 py-2 text-sm font-semibold text-white' : 'block rounded-lg px-3 py-2 text-sm text-white/80 transition hover:bg-white/10' }}" data-close-dropdown>Wisudaan</a>
                        </div>
                    </div>
                </details>
            </div>
        </details>
    </nav>
</header>

<div aria-hidden="true" class="h-16 sm:h-18"></div>

<style>
    summary {
        list-style: none;
    }

    summary::-webkit-details-marker {
        display: none;
    }
</style>

<script>
    if (!window.__navbarDropdownInitialized) {
        window.__navbarDropdownInitialized = true;

        document.querySelectorAll('[data-dropdown-group]').forEach(function (group) {
            var dropdowns = group.querySelectorAll('details');

            dropdowns.forEach(function (dropdown) {
                dropdown.addEventListener('toggle', function () {
                    if (!dropdown.open) {
                        return;
                    }

                    dropdowns.forEach(function (other) {
                        if (other !== dropdown) {
                            other.open = false;
                        }
                    });
                });
            });
        });

        document.querySelectorAll('[data-close-dropdown]').forEach(function (link) {
            link.addEventListener('click', function () {
                var parentDetails = link.closest('details');

                while (parentDetails) {
                    parentDetails.open = false;
                    parentDetails = parentDetails.parentElement ? parentDetails.parentElement.closest('details') : null;
                }

                document.querySelectorAll('[data-dropdown-group] details').forEach(function (dropdown) {
                    dropdown.open = false;
                });
            });
        });
    }
</script>
