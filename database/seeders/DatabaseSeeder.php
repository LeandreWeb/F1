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
        $this->call(SocialsSeeder::class);
        $this->call(FactorySeeder::class);
        $this->call(TeamsSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(DriversSeeder::class);
        $this->call(TeamChiefsSeeder::class);
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
        $this->call(ArticleSeeder::class);
        $this->call(qualification_results01Seeder::class);
        $this->call(qualification_results02Seeder::class);
        $this->call(qualification_results03Seeder::class);
        $this->call(qualification_results04Seeder::class);
        $this->call(qualification_results05Seeder::class);
        $this->call(qualification_results07Seeder::class);
        $this->call(qualification_results08Seeder::class);
        $this->call(qualification_results09Seeder::class);
        $this->call(qualification_results10Seeder::class);
        $this->call(qualification_results11Seeder::class);
        $this->call(qualification_results12Seeder::class);
        $this->call(qualification_results13Seeder::class);
        $this->call(qualification_results14Seeder::class);
        $this->call(qualification_results15Seeder::class);
        $this->call(race_results01Seeder::class);
        $this->call(race_results02Seeder::class);
        $this->call(race_results03Seeder::class);
        $this->call(race_results04Seeder::class);
        $this->call(race_results05Seeder::class);
        $this->call(race_results07Seeder::class);
        $this->call(race_results08Seeder::class);
        $this->call(race_results09Seeder::class);
        $this->call(race_results10Seeder::class);
        $this->call(race_results11Seeder::class);
        $this->call(race_results12Seeder::class);
        $this->call(race_results13Seeder::class);
        $this->call(race_results14Seeder::class);
        $this->call(race_results15Seeder::class);
        $this->call(race_results16Seeder::class);
        $this->call(race_results17Seeder::class);
        $this->call(race_results18Seeder::class);
        $this->call(SprintResult01Seeder::class);
        $this->call(SprintResult02Seeder::class);
        $this->call(SprintResult03Seeder::class);
        $this->call(SprintResult04Seeder::class);
        $this->call(SprintResult05Seeder::class);
        $this->call(SprintShootoutResult01Seeder::class);
        $this->call(SprintShootoutResult02Seeder::class);
        $this->call(SprintShootoutResult03Seeder::class);
        $this->call(pointsSeeder::class);
    }
}
