<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Beras Premium 5kg', 'category' => 'Sembako', 'stock' => 45, 'price' => 65000],
            ['name' => 'Minyak Goreng 2L', 'category' => 'Sembako', 'stock' => 8, 'price' => 32000],
            ['name' => 'Gula Pasir 1kg', 'category' => 'Sembako', 'stock' => 60, 'price' => 15000],
            ['name' => 'Kopi Bubuk 200g', 'category' => 'Minuman', 'stock' => 5, 'price' => 18000],
            ['name' => 'Teh Celup Isi 25', 'category' => 'Minuman', 'stock' => 30, 'price' => 12000],
            ['name' => 'Sabun Mandi Batang', 'category' => 'Perawatan', 'stock' => 25, 'price' => 5000],
            ['name' => 'Pasta Gigi 150g', 'category' => 'Perawatan', 'stock' => 4, 'price' => 14000],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}