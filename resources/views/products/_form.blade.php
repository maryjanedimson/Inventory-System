@php
    $categories = ['Lumber', 'Hardware', 'Tools', 'Electrical', 'Plumbing', 'Paint'];
@endphp

@if($errors->any())
    <div class="border-b border-red-200 bg-red-50 px-6 py-4 text-sm text-red-700">
        <p class="font-bold">Please check the highlighted details.</p>
        <ul class="mt-1 list-disc pl-5">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<div class="grid gap-6 p-6 sm:grid-cols-2">
    <div>
        <label for="name" class="text-sm font-bold text-slate-700">Product name</label>
        <input id="name" type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required class="mt-2 block h-11 w-full rounded-lg border-slate-300 text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">
    </div>
    <div>
        <label for="sku" class="text-sm font-bold text-slate-700">SKU</label>
        <input id="sku" type="text" name="sku" value="{{ old('sku', $product->sku ?? '') }}" required class="mt-2 block h-11 w-full rounded-lg border-slate-300 text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">
    </div>
    <div>
        <label for="category" class="text-sm font-bold text-slate-700">Category</label>
        <select id="category" name="category" required class="mt-2 block h-11 w-full rounded-lg border-slate-300 bg-white text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">
            <option value="">Select category</option>
            @foreach($categories as $category)<option value="{{ $category }}" @selected(old('category', $product->category ?? '') === $category)>{{ $category }}</option>@endforeach
        </select>
    </div>
    <div>
        <label for="supplier" class="text-sm font-bold text-slate-700">Supplier <span class="font-normal text-slate-400">(optional)</span></label>
        <input id="supplier" type="text" name="supplier" value="{{ old('supplier', $product->supplier ?? '') }}" class="mt-2 block h-11 w-full rounded-lg border-slate-300 text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">
    </div>
    <div>
        <label for="quantity" class="text-sm font-bold text-slate-700">Quantity</label>
        <input id="quantity" type="number" name="quantity" min="0" value="{{ old('quantity', $product->quantity ?? 0) }}" required class="mt-2 block h-11 w-full rounded-lg border-slate-300 text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">
    </div>
    <div>
        <label for="reorder_level" class="text-sm font-bold text-slate-700">Reorder level</label>
        <input id="reorder_level" type="number" name="reorder_level" min="0" value="{{ old('reorder_level', $product->reorder_level ?? 10) }}" required class="mt-2 block h-11 w-full rounded-lg border-slate-300 text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">
    </div>
    <div>
        <label for="unit_price" class="text-sm font-bold text-slate-700">Unit price</label>
        <input id="unit_price" type="number" name="unit_price" min="0" step="0.01" value="{{ old('unit_price', $product->unit_price ?? '') }}" required class="mt-2 block h-11 w-full rounded-lg border-slate-300 text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">
    </div>
    <div class="sm:col-span-2">
        <label for="description" class="text-sm font-bold text-slate-700">Description <span class="font-normal text-slate-400">(optional)</span></label>
        <textarea id="description" name="description" rows="4" class="mt-2 block w-full rounded-lg border-slate-300 text-sm text-black shadow-sm focus:border-green-500 focus:ring-green-500">{{ old('description', $product->description ?? '') }}</textarea>
    </div>
</div>
