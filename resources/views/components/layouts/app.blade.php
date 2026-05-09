@props([
    'title' => null,
    'bodyClass' => 'bg-white text-slate-900 antialiased',
    'activeNav' => 'home',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
        <style>
            #nprogress .bar {
                background: #f0f40b !important;
                height: 3px !important;
            }

            #nprogress .peg {
                box-shadow: 0 0 10px #a3ff23, 0 0 5px #a3ff23 !important;
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @fluxAppearance
        @livewireStyles
        @stack('head')
    </head>


    <body class="{{ $bodyClass }}">
        <x-navbar :active="$activeNav" />

        {{ $slot }}

        <x-footer />
        @fluxScripts
        @livewireScripts

        <script>
            NProgress.configure({
                showSpinner: false,
                trickleSpeed: 100,
                minimum: 0.15
            })

            document.addEventListener('livewire:navigate', () => {
                NProgress.start()
            })

            document.addEventListener('livewire:navigated', () => {
                NProgress.done()
            })

            // document.addEventListener('livewire:navigate', () => {
            //     console.log('navigate start')
            // })

            NProgress.start()
        </script>
    </body>
</html>
