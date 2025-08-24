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
            'name' => $this->faker->random(),
            'description' => $this->faker->text(50),
            'stock' => $this->faker->numberBetween(1, 99),
            'price' => $this->faker->numberBetween(10000, 99999999),
        ];
    }
}
