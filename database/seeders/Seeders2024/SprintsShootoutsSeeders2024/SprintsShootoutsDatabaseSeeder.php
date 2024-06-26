<?php

namespace Database\Seeders\Seeders2024\SprintsShootoutsSeeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SprintsShootoutsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(SprintShootoutStorySeeder2024::class);
        $this->call(SprintShootoutSeeder2024::class);
        //$this->call(SprintShootoutResult202405Seeder::class);
    }
}
