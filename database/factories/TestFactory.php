<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Lesson;
use App\Models\Chapter;
use App\Models\Chapitre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = User::inRandomOrder()->first()->id;
        $chapitre_id = Chapter::inRandomOrder()->first()->id;
        return [
            'user_id' => $user_id,
            'chapter_id' => $chapitre_id,
            'note' => $this->faker->numberBetween(0, 100),
        ];
    }
}
