<?php

namespace Database\Seeders\Seeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(\Database\Seeders\Seeders2024\QualificationsSeeders2024\QualificationsDatabaseSeeder::class);
        $this->call(\Database\Seeders\Seeders2024\RacesSeeders2024\RacesDatabaseSeeder::class);
        $this->call(\Database\Seeders\Seeders2024\SprintsSeeders2024\SprintsDatabaseSeeder::class);
        $this->call(\Database\Seeders\Seeders2024\SprintsShootoutsSeeders2024\SprintsShootoutsDatabaseSeeder::class);
        $this->call(GrandPrixWeekendSeeder2024::class);
        $this->call(ArticleSeeder2024::class);
        $this->call(CarSeeder2024::class);
        $this->call(SeasonTeamsSeeder2024::class);
        $this->call(TeamPrincipalsSeeder2024::class);
        $this->call(TeamDriversSeeder2024::class);
    }
}
