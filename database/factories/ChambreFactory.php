<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chambre>
 */
class ChambreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prix' => fake()->numberBetween(100, 1000),
            'capacite' => fake()->numberBetween(1, 5),
            'etage' => fake()->numberBetween(1, 10),
            'hotel_id' => fake()->numberBetween(1, 100),
            'is_reserved' => fake()->boolean(),
        ];
    }
}
