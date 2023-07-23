<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Badge;
use App\Models\Recompense;
use App\Models\Reward;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reward::factory()
        ->count(11)
        ->create();
    }
}
