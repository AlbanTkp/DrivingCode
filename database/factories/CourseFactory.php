<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $plan = '<ol>';
        for ($i=0; $i < 4; $i++) {
            $plan .= '<li>' . implode(' ',fake()->words(5)) . '</li>';
        }

        $plan .= '</ol>';
        return [
            'duration' => fake()->numberBetween(30, 120), // Durée aléatoire entre 30 et 120 minutes
            'title' => fake()->unique()->sentence(),
            'description' => fake()->paragraph(),
            'plan' => $plan,
            'text' => fake()->paragraph(),
        ];
    }
}
