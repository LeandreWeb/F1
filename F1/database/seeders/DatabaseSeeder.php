<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(countriesSeeder::class);
        $this->call(teamsSeeder::class);
        $this->call(driversSeeder::class);
        $this->call(teams_chiefsseeder::class);
        $this->call(racesSeeder::class);
        $this->call(qualificationsSeeder::class);
        $this->call(sprintsSeeder::class);
        $this->call(grands_prixSeeder::class);
        $this->call(races_results01Seeder::class);
        $this->call(races_results02Seeder::class);
        $this->call(qualifications_results01Seeder::class);
        $this->call(qualifications_results02Seeder::class);
        $this->call(pointsSeeder::class);
    }
}
