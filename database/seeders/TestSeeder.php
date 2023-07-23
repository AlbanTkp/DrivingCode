<?php

namespace Database\Seeders;

use App\Models\Test;
use App\Models\Evaluation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::factory()
        ->count(15)
        ->create();
    }
}
