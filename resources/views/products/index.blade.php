@extends('layouts.app')

@section('title', 'Products | Management Inventory')

@section('content')
<div class="w-full px-6 py-12 sm:px-8 lg:px-12 lg:py-14">
    <div class="flex items-end justify-between gap-6">
        <div>
            <h1 class="font-serif text-4xl font-bold tracking-tight text-[#2b2118]">Products</h1>
            <p class="mt-2 text-xs text-[#8b8175]">Manage stock, pricing, and supplier details in one place.</p>
        </div>
        <a href="{{ route('products.create') }}" class="shrink-0 rounded-[3px] bg-[#a36e2e] px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-[#895a23]">+ Add product</a>
    </div>

    @if(session('success'))
        <div class="mt-6 border border-[#d8c7ac] bg-[#fffaf0] px-4 py-3 text-xs text-[#72521f]">{{ session('success') }}</div>
    @endif

    <div class="mt-8 flex items-center justify-between border-b border-[#e5ded2] pb-3">
        <label class="relative block w-52">
            <span class="sr-only">Search products</span>
            <span class="pointer-events-none absolute inset-y-0 left-2.5 flex items-center text-[#b5aa9c]">⌕</span>
            <input type="search" placeholder="Search products..." class="h-7 w-full rounded-[3px] border border-[#ded6ca] bg-white pl-7 pr-2 text-[11px] text-black placeholder:text-[#aaa095] focus:border-[#a36e2e] focus:ring-[#a36e2e]">
        </label>
        <span class="text-[11px] text-[#a49a8e]">{{ $products->count() }} products</span>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse">
            <thead>
                <tr class="border-b border-[#e5ded2] text-left text-[10px] text-[#998e81]">
                    <th class="px-3 py-3 font-medium">Product</th>
                    <th class="px-3 py-3 font-medium">SKU</th>
                    <th class="px-3 py-3 font-medium">Category</th>
                    <th class="px-3 py-3 font-medium">Stock</th>
                    <th class="px-3 py-3 font-medium">Price</th>
                    <th class="px-3 py-3 font-medium">Status</th>
                    <th class="px-3 py-3 text-right font-medium">Actions</th>
                </tr>
            </thead>
            <tbody class="text-xs font-semibold text-[#625a51]">
                @forelse($products as $product)
                    @php
                        $stockPercent = $product->reorder_level > 0 ? min(100, ($product->quantity / $product->reorder_level) * 100) : 100;
                    @endphp
                    <tr class="border-b border-[#e9e3d9] transition hover:bg-[#fbf8f2]">
                        <td class="px-3 py-3.5"><a href="{{ route('products.show', $product) }}" class="font-serif text-sm font-bold text-[#2b2118] hover:text-[#a36e2e]">{{ $product->name }}</a><p class="mt-0.5 text-[10px] font-semibold text-[#aaa095]">{{ $product->supplier ?: 'No supplier listed' }}</p></td>
                        <td class="px-3 py-3.5"><span class="rounded-[2px] bg-[#f1e7d4] px-2 py-1 text-[10px] font-bold text-[#936628]">{{ $product->sku }}</span></td>
                        <td class="px-3 py-3.5">{{ $product->category }}</td>
                        <td class="px-3 py-3.5"><span class="font-semibold text-[#3f382f]">{{ $product->quantity }}</span><span class="text-[10px] text-[#a49a8e]"> / {{ $product->reorder_level }} reorder</span><div class="mt-1 h-0.5 w-[90px] bg-[#e8e1d6]"><div class="h-0.5 {{ $product->isOutOfStock() ? 'bg-[#b54a39]' : ($product->isLowStock() ? 'bg-[#b27a19]' : 'bg-[#5d8060]') }}" style="width: {{ $stockPercent }}%"></div></div></td>
                        <td class="whitespace-nowrap px-3 py-3.5 font-semibold text-[#302921]">{{ number_format($product->unit_price, 2) }}</td>
                        <td class="whitespace-nowrap px-3 py-3.5">@if($product->isOutOfStock())<span class="text-[#b54a39]">● &nbsp;Out of stock</span>@elseif($product->isLowStock())<span class="text-[#b27a19]">● &nbsp;Low stock</span>@else<span class="text-[#5d8060]">● &nbsp;In stock</span>@endif</td>
                        <td class="whitespace-nowrap px-3 py-3.5 text-right"><a href="{{ route('products.edit', $product) }}" class="text-[#a36e2e] hover:underline">Edit</a><form action="{{ route('products.destroy', $product) }}" method="POST" class="ml-3 inline">@csrf @method('DELETE')<button type="submit" class="text-[#b54a39] hover:underline" onclick="return confirm('Delete this product?')">Delete</button></form></td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="px-3 py-14 text-center text-xs text-[#8b8175]">No products yet. <a href="{{ route('products.create') }}" class="font-semibold text-[#a36e2e]">Add your first product.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
