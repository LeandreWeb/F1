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
        $this->call(CarSeeder2023::class);
        $this->call(DriversSeeder::class);
        $this->call(TeamChiefsSeeder::class);
        $this->call(RaceStorySeeder2023::class);
        $this->call(QualificationStorySeeder2023::class);
        $this->call(SprintShootoutStorySeeder2023::class);
        $this->call(SprintStorySeeder2023::class);
        $this->call(racesSeeder2023::class);
        $this->call(qualificationsSeeder2023::class);
        $this->call(SprintShootoutSeeder2023::class);
        $this->call(sprintsSeeder2023::class);
        $this->call(TrackSeeder::class);
        $this->call(GrandPrixWeekendSeeder2023::class);
        $this->call(ArticleSeeder2023::class);
        $this->call(qualification_results202301Seeder::class);
        $this->call(qualification_results202302Seeder::class);
        $this->call(qualification_results202303Seeder::class);
        $this->call(qualification_results202304Seeder::class);
        $this->call(qualification_results202305Seeder::class);
        $this->call(qualification_results202307Seeder::class);
        $this->call(qualification_results202308Seeder::class);
        $this->call(qualification_results202309Seeder::class);
        $this->call(qualification_results202310Seeder::class);
        $this->call(qualification_results202311Seeder::class);
        $this->call(qualification_results202312Seeder::class);
        $this->call(qualification_results202313Seeder::class);
        $this->call(qualification_results202314Seeder::class);
        $this->call(qualification_results202315Seeder::class);
        $this->call(qualification_results202316Seeder::class);
        $this->call(qualification_results202317Seeder::class);
        $this->call(qualification_results202318Seeder::class);
        $this->call(qualification_results202319Seeder::class);
        $this->call(qualification_results202320Seeder::class);
        $this->call(qualification_results202321Seeder::class);
        $this->call(qualification_results202322Seeder::class);
        $this->call(qualification_results202323Seeder::class);
        $this->call(race_results202301Seeder::class);
        $this->call(race_results202302Seeder::class);
        $this->call(race_results202303Seeder::class);
        $this->call(race_results202304Seeder::class);
        $this->call(race_results202305Seeder::class);
        $this->call(race_results202307Seeder::class);
        $this->call(race_results202308Seeder::class);
        $this->call(race_results202309Seeder::class);
        $this->call(race_results202310Seeder::class);
        $this->call(race_results202311Seeder::class);
        $this->call(race_results202312Seeder::class);
        $this->call(race_results202313Seeder::class);
        $this->call(race_results202314Seeder::class);
        $this->call(race_results202315Seeder::class);
        $this->call(race_results202316Seeder::class);
        $this->call(race_results202317Seeder::class);
        $this->call(race_results202318Seeder::class);
        $this->call(race_results202319Seeder::class);
        $this->call(race_results202320Seeder::class);
        $this->call(race_results202321Seeder::class);
        $this->call(race_results202322Seeder::class);
        $this->call(race_results202323Seeder::class);
        $this->call(SprintResult202301Seeder::class);
        $this->call(SprintResult202302Seeder::class);
        $this->call(SprintResult202303Seeder::class);
        $this->call(SprintResult202304Seeder::class);
        $this->call(SprintResult202305Seeder::class);
        $this->call(SprintResult202306Seeder::class);
        $this->call(SprintShootoutResult202301Seeder::class);
        $this->call(SprintShootoutResult202302Seeder::class);
        $this->call(SprintShootoutResult202303Seeder::class);
        $this->call(SprintShootoutResult202304Seeder::class);
        $this->call(SprintShootoutResult202305Seeder::class);
        $this->call(SprintShootoutResult202306Seeder::class);
        //$this->call(pointsSeeder::class);
    }
}
