<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'subtitle' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'cover' => "formation/formation1.jpg",
            'cursuse_id' =>1,
            'video' => "https://www.youtube.com/watch?v=cqWgE4XS_oc",
        ];
    }
}
