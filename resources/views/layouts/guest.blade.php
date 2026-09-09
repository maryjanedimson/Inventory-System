<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white font-['Manrope',sans-serif] text-slate-900 antialiased">
        <div class="flex min-h-screen flex-col items-center px-4 py-10 sm:justify-center sm:py-12">
            <header class="mb-8 text-center">
                <a href="/" class="inline-flex items-center gap-3 text-xl font-extrabold tracking-tight text-slate-900">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-amber-400 text-sm font-extrabold text-slate-950">HI</span>
                    Management Inventory
                </a>
            </header>

            <div class="w-full max-w-[430px] rounded-2xl border border-violet-800 bg-violet-700 px-6 py-7 text-white shadow-[0_18px_50px_rgba(109,93,252,0.25)] sm:px-9 sm:py-9">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
