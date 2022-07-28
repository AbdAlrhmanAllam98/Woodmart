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
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description'=> fake()->paragraph($nb =8),
            'type' => fake()->word(),
            'colors' => 'red,green,black',
            'price' => fake()->numberBetween($min = 500, $max = 8000),
        ];
    }
}
