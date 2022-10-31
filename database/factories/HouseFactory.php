<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => "https://source.unsplash.com/640x480/?person?/1",
            'location' => fake()->sentence(4),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(5),
            'price' => fake()->numberBetween(90000, 4000000),
            'ref' => fake()->numberBetween(0, 999),
            'created_at' => now(),
        ];
    }
}
