<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'order' => 1,
                'slug' => 'home',
                'page_title' => 'First Page',
                'html' => '<p>This is the HTML content for the first page.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order' => 2,
                'slug' => 'second-page',
                'page_title' => 'Second Page',
                'html' => '<p>This is the HTML content for the second page.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more seed data as needed
        ]);
    }
}
