<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> fake()->randomDigitNotNull(),
            'categorie_id'=> fake()->randomDigitNotNull(),
            'name'=> fake()->word(),
            'description'=>fake()->paragraph(),
            'price'=>fake()->randomFloat(),
            'city'=>fake()->city(),
            'image'=>fake()->imageUrl(640, 480, 'house', true)
        ];
    }
}
