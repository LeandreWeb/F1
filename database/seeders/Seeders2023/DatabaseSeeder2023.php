<?php

namespace Database\Seeders\Seeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(\Database\Seeders\Seeders2023\QualificationsSeeders2023\QualificationsDatabaseSeeder::class);
        $this->call(\Database\Seeders\Seeders2023\RacesSeeders2023\RacesDatabaseSeeder::class);
        $this->call(\Database\Seeders\Seeders2023\SprintsSeeders2023\SprintsDatabaseSeeder::class);
        $this->call(\Database\Seeders\Seeders2023\SprintsShootoutsSeeders2023\SprintsShootoutsDatabaseSeeder::class);
        $this->call(GrandPrixWeekendSeeder2023::class);
        $this->call(ArticleSeeder2023::class);
        $this->call(CarSeeder2023::class);
        
        
    
    }
}
