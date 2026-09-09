<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    $products = Product::latest()->get();

    return view('dashboard', [
        'totalProducts' => $products->count(),
        'lowStockProducts' => $products->filter(fn ($product) => $product->isLowStock())->count(),
        'outOfStockProducts' => $products->where('quantity', 0)->count(),
        'inventoryValue' => $products->sum(fn ($product) => $product->quantity * (float) $product->unit_price),
        'recentProducts' => $products->take(5),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', ProductController::class);
});

require __DIR__.'/auth.php';
