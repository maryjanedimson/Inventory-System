@extends('layouts.app')

@section('title', 'Add Product | Management Inventory')

@section('content')
<div class="mx-auto max-w-4xl px-4 py-10 sm:px-6 lg:px-8">
    <a href="{{ route('products.index') }}" class="text-sm font-bold text-slate-500 hover:text-slate-900">← Back to products</a>
    <div class="mt-6"><p class="text-sm font-semibold uppercase tracking-[0.2em] text-green-600">Catalog</p><h1 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900">Add product</h1><p class="mt-2 text-sm text-slate-500">Add the details needed to keep this item visible and actionable.</p></div>

    <form action="{{ route('products.store') }}" method="POST" class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        @csrf
        @include('products._form')
        <div class="flex flex-col-reverse gap-3 border-t border-slate-200 bg-slate-50 px-6 py-5 sm:flex-row sm:justify-end"><a href="{{ route('products.index') }}" class="inline-flex justify-center rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm font-bold text-slate-700 hover:bg-slate-100">Cancel</a><button class="inline-flex justify-center rounded-lg bg-green-600 px-4 py-2.5 text-sm font-bold text-white hover:bg-green-700">Save product</button></div>
    </form>
</div>
@endsection
