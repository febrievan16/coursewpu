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
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'colour' => 'bg-red-200'
        ]);

        Category::create([
            'name' => 'Pemrograman WEB',
            'slug' => 'Pemrograman-web',
            'colour' => 'bg-green-200'
        ]);

        Category::create([
            'name' => 'Desain Grafis',
            'slug' => 'desain-grafis',
            'colour' => 'bg-blue-200'
        ]);


    }
}
