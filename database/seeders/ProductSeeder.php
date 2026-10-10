<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Hoodie',
            'slug' => 'hoodie',
            'category' => 'tops',
            'price' => 599000,
            'image' => '../images/hoodiee.jpg',
            'description' => 'Casual hoodie for everyday streetwear.',
        ]);

        Product::create([
            'name' => 'Long Sleeve',
            'slug' => 'long-sleeve',
            'category' => 'tops',
            'price' => 299000,
            'image' => '../images/longSlevve.jpg',
            'description' => 'Long sleeve shirt with a clean everyday look.',
        ]);

        Product::create([
            'name' => 'Cargo Pants',
            'slug' => 'cargo-pants',
            'category' => 'bottoms',
            'price' => 449000,
            'image' => '../images/cargoPants.jpg',
            'description' => 'Relaxed cargo pants inspired by streetwear style.',
        ]);

        Product::create([
            'name' => 'Jeans Shorts',
            'slug' => 'jeans-shorts',
            'category' => 'bottoms',
            'price' => 399000,
            'image' => '../images/jorts.jpg',
            'description' => 'Casual denim shorts for everyday outfits.',
        ]);

        Product::create([
            'name' => 'Graphic Tee',
            'slug' => 'graphic-tee',
            'category' => 'tops',
            'price' => 649000,
            'image' => '../images/men.jpg',
            'description' => 'Graphic tee with a bold streetwear aesthetic.',
        ]);

        Product::create([
            'name' => 'Signature Rings',
            'slug' => 'signature-rings',
            'category' => 'accessories',
            'price' => 199000,
            'image' => '../images/rings.jpg',
            'description' => 'Minimal rings designed to complete your everyday look.',
        ]);
    }
}
