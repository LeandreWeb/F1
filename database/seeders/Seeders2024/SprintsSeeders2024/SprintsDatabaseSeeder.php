<?php

namespace Database\Seeders\Seeders2024\SprintsSeeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SprintsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(SprintStorySeeder2024::class);
        $this->call(sprintsSeeder2024::class);
        // $this->call(SprintResult202401Seeder::class);
        // $this->call(SprintResult202402Seeder::class);
        // $this->call(SprintResult202403Seeder::class);
        // $this->call(SprintResult202404Seeder::class);
        // $this->call(SprintResult202405Seeder::class);
        // $this->call(SprintResult202406Seeder::class);

        
    }
}
