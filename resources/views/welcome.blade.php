<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Management Inventory') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-white">
    <main class="mx-auto flex min-h-screen max-w-7xl flex-col justify-between px-6 py-8 lg:px-12">
        <header class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-lg font-semibold tracking-tight">Management Inventory</a>
            <nav class="flex items-center gap-3 text-sm">
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded-md bg-amber-400 px-4 py-2 font-semibold text-slate-950 hover:bg-amber-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md border border-slate-700 px-4 py-2 font-medium text-slate-200 hover:border-slate-500">Log in</a>
                    <a href="{{ route('register') }}" class="rounded-md bg-amber-400 px-4 py-2 font-semibold text-slate-950 hover:bg-amber-300">Register</a>
                @endauth
            </nav>
        </header>

        <section class="grid gap-12 py-20 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
            <div>
                <p class="mb-5 text-sm font-semibold uppercase tracking-[0.25em] text-amber-400">Hardware operations</p>
                <h1 class="max-w-3xl text-5xl font-semibold tracking-tight text-white sm:text-7xl">Know what is on the shelf.</h1>
                <p class="mt-6 max-w-xl text-lg leading-8 text-slate-300">A focused inventory workspace for products, stock levels, suppliers, and reorder decisions.</p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('login') }}" class="rounded-md bg-amber-400 px-5 py-3 font-semibold text-slate-950 hover:bg-amber-300">Open inventory</a>
                    <a href="{{ route('register') }}" class="rounded-md border border-slate-700 px-5 py-3 font-semibold text-slate-200 hover:border-slate-500">Create an account</a>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-900 p-6 shadow-2xl">
                <div class="flex items-center justify-between border-b border-slate-800 pb-5">
                    <div><p class="text-sm text-slate-400">Inventory overview</p><p class="mt-1 text-xl font-semibold">Today at a glance</p></div>
                    <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-medium text-emerald-300">Live data</span>
                </div>
                <div class="grid grid-cols-2 gap-4 py-6">
                    <div class="rounded-lg bg-slate-800 p-4"><p class="text-sm text-slate-400">Track</p><p class="mt-2 text-2xl font-semibold">Products</p></div>
                    <div class="rounded-lg bg-slate-800 p-4"><p class="text-sm text-slate-400">Monitor</p><p class="mt-2 text-2xl font-semibold">Stock</p></div>
                    <div class="rounded-lg bg-slate-800 p-4"><p class="text-sm text-slate-400">Review</p><p class="mt-2 text-2xl font-semibold">Suppliers</p></div>
                    <div class="rounded-lg bg-slate-800 p-4"><p class="text-sm text-slate-400">Protect</p><p class="mt-2 text-2xl font-semibold">Access</p></div>
                </div>
                <p class="border-t border-slate-800 pt-5 text-sm text-slate-400">Log in to view your dashboard and manage the catalog.</p>
            </div>
        </section>

        <footer class="border-t border-slate-800 pt-5 text-sm text-slate-500">Management Inventory System</footer>
    </main>
</body>
</html>
