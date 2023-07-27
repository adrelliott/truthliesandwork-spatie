@props(['hideNav' => false, 'hideFooter' => false, 'pageHeader' => false])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Truth Lies and Work Podcast') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts & Styles-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- Livewire? --}}
    </head>
<body class="antialiased">

    <x-header :hideNav="$hideNav" :pageHeader="$pageHeader" />

    <main>
        {{ $slot }}
    </main>

    <x-footer :hideFooter="$hideFooter" />
</body>
</html>
