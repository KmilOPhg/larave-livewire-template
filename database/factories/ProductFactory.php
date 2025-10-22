<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => fake()->word(),
            'description' => fake()->sentence(8),
            'stock' => fake()->numberBetween(0, 100),
            'price' => fake()->randomFloat(2, 1, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
