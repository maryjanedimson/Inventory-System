<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'description',
        'category',
        'quantity',
        'reorder_level',
        'unit_price',
        'supplier',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'reorder_level' => 'integer',
        'unit_price' => 'decimal:2',
    ];

    public function isLowStock()
    {
        return $this->quantity <= $this->reorder_level;
    }

    public function isOutOfStock()
    {
        return $this->quantity == 0;
    }
}
