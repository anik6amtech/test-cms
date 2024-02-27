<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'title' => "Product $i",
                'subtitle' => "Subtitle for Product $i",
                'details' => "Details about Product $i. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
