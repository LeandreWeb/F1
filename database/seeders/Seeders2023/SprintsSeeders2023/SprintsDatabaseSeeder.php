<?php

namespace Database\Seeders\Seeders2023\SprintsSeeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SprintsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(SprintStorySeeder2023::class);
        $this->call(sprintsSeeder2023::class);
        $this->call(SprintResult202301Seeder::class);
        $this->call(SprintResult202302Seeder::class);
        $this->call(SprintResult202303Seeder::class);
        $this->call(SprintResult202304Seeder::class);
        $this->call(SprintResult202305Seeder::class);
        $this->call(SprintResult202306Seeder::class);

        
    }
}
