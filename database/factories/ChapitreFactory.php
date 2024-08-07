<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\chapitre>
 */
class ChapitreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'titre' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->paragraph,
            'cover' => "chapitres/02.jpg",
            'datePublication' => now(),
            'nbrHeure' => $this->faker->time(),
            'formation_id' => $this->faker->numberBetween(1, 5),
            'video' => "https://www.youtube.com/watch?v=cqWgE4XS_oc",
        ];
    }
}
