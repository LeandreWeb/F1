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
        $this->call(SeasonsSeeder::class);
        $this->call(countriesSeeder::class);
        $this->call(SocialsSeeder::class);
        $this->call(FactorySeeder::class);
        $this->call(TeamsSeeder::class);
        $this->call(TrackSeeder::class);
        $this->call(DriversSeeder::class);
        $this->call(PrincipalSeeder::class);

        $this->call(\Database\Seeders\Seeders2023\DatabaseSeeder2023::class);
        $this->call(\Database\Seeders\Seeders2024\DatabaseSeeder2024::class);

        
        //$this->call(pointsSeeder::class);
    }
}
