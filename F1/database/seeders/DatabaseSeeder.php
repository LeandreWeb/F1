<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SprintShootout;
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
        $this->call(team_chiefsseeder::class);
        $this->call(RaceStorySeeder::class);
        $this->call(QualificationStorySeeder::class);
        $this->call(SprintShootoutStorySeeder::class);
        $this->call(SprintStorySeeder::class);
        $this->call(racesSeeder::class);
        $this->call(qualificationsSeeder::class);
        $this->call(SprintShootoutSeeder::class);
        $this->call(sprintsSeeder::class);
        $this->call(TrackSeeder::class);
        $this->call(GrandPrixWeekendSeeder::class);
        $this->call(qualification_results01Seeder::class);
        $this->call(qualification_results02Seeder::class);
        $this->call(qualification_results03Seeder::class);
        $this->call(qualification_results04Seeder::class);
        $this->call(race_results01Seeder::class);
        $this->call(race_results02Seeder::class);
        $this->call(race_results03Seeder::class);
        $this->call(SprintShootoutResult01Seeder::class);
        $this->call(pointsSeeder::class);
    }
}
