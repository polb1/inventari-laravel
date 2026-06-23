<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['nom' => 'Ordinador', 'icon' => 'desktop'],
            ['nom' => 'Portàtil', 'icon' => 'laptop'],
            ['nom' => 'Mòbil', 'icon' => 'phone'],
            ['nom' => 'Pantalla', 'icon' => 'monitor'],
            ['nom' => 'Tablet', 'icon' => 'tablet'],
            ['nom' => 'Impresora', 'icon' => 'printer'],
            ['nom' => 'Periferics', 'icon' => 'box'],
        ];

        foreach($categories as $cat){
            Category::create($cat);
        };

    }
}
