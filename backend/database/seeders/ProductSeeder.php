<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $jute = Category::where('slug', 'jute-bags')->first();
        $leather = Category::where('slug', 'leather-bags')->first();

        Product::insert([
            [
                'category_id' => $jute->id,
                'name' => 'Jute Hand Bag',
                'slug' => 'jute-hand-bag',
                'description' => 'Eco-friendly jute bag with premium leather handles.',
                'price' => 45,
                'stock' => 50,
                'image' => 'products/jute-hand-bag.jpg',
                'status' => true,
            ],
            [
                'category_id' => $jute->id,
                'name' => 'Jute Shoulder Bag',
                'slug' => 'jute-shoulder-bag',
                'description' => 'Natural jute shoulder bag for daily use.',
                'price' => 55,
                'stock' => 40,
                'image' => 'products/jute-shoulder-bag.jpg',
                'status' => true,
            ],
            [
                'category_id' => $leather->id,
                'name' => 'Leather Office Bag',
                'slug' => 'leather-office-bag',
                'description' => 'Premium leather office bag with elegant finish.',
                'price' => 85,
                'stock' => 30,
                'image' => 'products/leather-office-bag.jpg',
                'status' => true,
            ],
        ]);
    }
} 
