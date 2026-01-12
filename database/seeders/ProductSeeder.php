<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            'name' => Str::random(10),
            'SKU' => Str::random(10),
            'stock' => rand(0, 100),
            'details' => Str::random(50),
            'price' => rand(1000.00, 1200.00),
            'image' => 'images\noImage.jpg',
            'category_id' => rand(14, 16),

        ]);
    }
}
