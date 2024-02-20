<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'adresse' => fake()->address(),
            'ville' => fake()->city(),
            'pays' => fake()->country(),
            'telephone' => fake()->phoneNumber(),
            'email' => fake()->email(),
        ];
    }
}
