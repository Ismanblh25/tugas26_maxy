<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Mengisi data dummy
         Product::create([
            'name' => 'Product 1',
            'price' => 10000,
            'description' => 'Description for product 1',
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 20000,
            'description' => 'Description for product 2',
        ]);

        Product::create([
            'name' => 'Product 3',
            'price' => 30000,
            'description' => 'Description for product 3',
        ]);
    }
}
