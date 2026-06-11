<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $category = Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Laptops, mice, keyboards'
        ]);

        Product::create([
            'name' => 'Laptop',
            'slug' => 'laptop',
            'description' => 'Powerful laptop',
            'price' => 599.99,
            'stock' => 10,
            'category_id' => $category->id
        ]);

        Product::create([
            'name' => 'Mouse',
            'slug' => 'mouse',
            'description' => 'Wireless mouse',
            'price' => 19.99,
            'stock' => 50,
            'category_id' => $category->id
        ]);
    }
}
