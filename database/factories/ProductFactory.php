<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'details' => fake()->sentence(),
            'stock' => rand(0, 100),
            'SKU' => strtoupper(Str::random(10)),
            'price' => fake()->randomFloat(2, 1000, 1200),
            'image' => 'images\noImage.jpg',
            'category_id' => rand(14, 16),
        ];
    }
}
