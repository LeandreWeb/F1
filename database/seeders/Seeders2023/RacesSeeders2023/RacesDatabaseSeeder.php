<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RacesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(RaceStorySeeder2023::class);
        $this->call(racesSeeder2023::class);
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
    }
}
