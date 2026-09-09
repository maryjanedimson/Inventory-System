<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
        ]);

        Product::insert([
            ['name' => 'Premium Pine 2x4', 'sku' => 'LUM-2401', 'description' => 'Kiln-dried construction lumber.', 'category' => 'Lumber', 'quantity' => 42, 'reorder_level' => 15, 'unit_price' => 8.95, 'supplier' => 'Northwood Supply', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Galvanized Wood Screws', 'sku' => 'HRD-1102', 'description' => '100-piece box of corrosion-resistant screws.', 'category' => 'Hardware', 'quantity' => 8, 'reorder_level' => 12, 'unit_price' => 6.50, 'supplier' => 'FastenPro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cordless Drill 20V', 'sku' => 'TLS-3203', 'description' => 'Compact drill with two-speed gearbox.', 'category' => 'Tools', 'quantity' => 0, 'reorder_level' => 5, 'unit_price' => 89.99, 'supplier' => 'ProTool Depot', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LED Work Light', 'sku' => 'ELE-4104', 'description' => 'Rechargeable portable work light.', 'category' => 'Electrical', 'quantity' => 18, 'reorder_level' => 6, 'unit_price' => 24.75, 'supplier' => 'Brightline', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PEX Tubing 1/2 inch', 'sku' => 'PLB-5205', 'description' => 'Flexible red PEX tubing, 100 feet.', 'category' => 'Plumbing', 'quantity' => 4, 'reorder_level' => 10, 'unit_price' => 32.00, 'supplier' => 'FlowRight', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Interior Wall Paint', 'sku' => 'PNT-6306', 'description' => 'Low-VOC satin finish, one gallon.', 'category' => 'Paint', 'quantity' => 25, 'reorder_level' => 8, 'unit_price' => 29.50, 'supplier' => 'ColorHouse', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
