<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-extrabold tracking-tight text-slate-900">
            {{ __('Inventory Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-[calc(100vh-65px)] bg-pink-100 py-10">
        <div class="mx-auto max-w-7xl space-y-8 px-4 sm:px-6 lg:px-8">
            <div>
                <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900">Inventory dashboard</h1>
            </div>
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-xl border border-sky-200 bg-sky-100 p-4 shadow-sm">
                    <p class="text-sm font-semibold text-slate-500">Total products</p>
                    <p class="mt-2 text-2xl font-extrabold text-slate-900">{{ $totalProducts }}</p>
                </div>
                <div class="rounded-xl border border-sky-200 bg-sky-100 p-4 shadow-sm">
                    <p class="text-sm font-semibold text-slate-500">Low stock</p>
                    <p class="mt-2 text-2xl font-extrabold text-amber-600">{{ $lowStockProducts }}</p>
                </div>
                <div class="rounded-xl border border-sky-200 bg-sky-100 p-4 shadow-sm">
                    <p class="text-sm font-semibold text-slate-500">Out of stock</p>
                    <p class="mt-2 text-2xl font-extrabold text-red-600">{{ $outOfStockProducts }}</p>
                </div>
                <div class="rounded-xl border border-sky-200 bg-sky-100 p-4 shadow-sm">
                    <p class="text-sm font-semibold text-slate-500">Inventory value</p>
                    <p class="mt-2 text-2xl font-extrabold text-green-600">{{ number_format($inventoryValue, 2) }}</p>
                </div>
            </div>

            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="flex items-center justify-between border-b border-slate-200 px-6 py-5">
                    <h3 class="text-lg font-extrabold text-slate-900">Recent products</h3>
                    <a href="{{ route('products.index') }}" class="text-sm font-bold text-green-600 hover:text-green-700">View all</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Product</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Category</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Quantity</th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse($recentProducts as $product)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">{{ $product->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{{ $product->category }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{{ $product->quantity }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm">
                                        @if($product->isOutOfStock())
                                            <span class="font-medium text-red-600">Out of stock</span>
                                        @elseif($product->isLowStock())
                                            <span class="font-medium text-amber-600">Low stock</span>
                                        @else
                                            <span class="font-medium text-emerald-600">In stock</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="px-6 py-8 text-center text-sm text-gray-500">No products have been added yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
