<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Создаём категорию
        $category = Category::create([
            'name' => 'Электроника',
            'slug' => 'electronika',
            'description' => 'Ноутбуки, смартфоны, аксессуары'
        ]);

        // Товары
        Product::create([
            'name' => 'Ноутбук',
            'slug' => 'noutbuk',
            'description' => 'Мощный ноутбук для работы и игр',
            'price' => 599.99,
            'stock' => 10,
            'category_id' => $category->id
        ]);

        Product::create([
            'name' => 'Мышь',
            'slug' => 'mysh',
            'description' => 'Беспроводная мышь',
            'price' => 19.99,
            'stock' => 50,
            'category_id' => $category->id
        ]);
    }
}
