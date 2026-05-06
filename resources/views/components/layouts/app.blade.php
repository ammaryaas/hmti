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
    </body>
</html>
