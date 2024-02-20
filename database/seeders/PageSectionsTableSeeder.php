<?php

namespace Database\Seeders;

use App\Models\PageSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the data to seed
        $sections = [
            [
                'name' => "Modern Sign In Page with Split Screen Format",
                'dragHtml' => '<img src="themes/icons/product.png">',
                'image' => "https://assets.startbootstrap.com/img/screenshots/snippets/sign-in-split.jpg",
                'html' => '<section data-name="sigin-split">
                                <!-- ... (your provided HTML content) ... -->
                           </section>',
            ],
            // Add more data entries as needed
        ];

        // Seed the data into the database
        foreach ($sections as $section) {
            PageSection::create($section);
        }
    }
}
