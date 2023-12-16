<?php

namespace Database\Seeders\Seeders2023\SprintsShootoutsSeeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SprintsShootoutsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(SprintShootoutStorySeeder2023::class);
        $this->call(SprintShootoutSeeder2023::class);
        $this->call(SprintShootoutResult202301Seeder::class);
        $this->call(SprintShootoutResult202302Seeder::class);
        $this->call(SprintShootoutResult202303Seeder::class);
        $this->call(SprintShootoutResult202304Seeder::class);
        $this->call(SprintShootoutResult202305Seeder::class);
        $this->call(SprintShootoutResult202306Seeder::class);
    }
}
