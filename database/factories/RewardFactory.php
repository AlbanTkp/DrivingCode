<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Badge;
use App\Models\Reward;
use App\Models\Recompense;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reward>
 */
class RewardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = User::inRandomOrder()->first()->id;
        $badge_id = Badge::inRandomOrder()->first()->id;


        while (Reward::where('user_id', $user_id)->where('badge_id', $badge_id)->exists()) {
            // Si oui, obtenir de nouveaux IDs d'utilisateur et de badge
            $user_id = User::inRandomOrder()->first()->id;
            $badge_id = Badge::inRandomOrder()->first()->id;
        }
        return [
            'user_id'=>$user_id,
            'badge_id'=>$badge_id
        ];
    }
}
