<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Blog::create([
                'title' => "Blog Title $i",
                'content' => "This is the content of Blog Entry $i. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
