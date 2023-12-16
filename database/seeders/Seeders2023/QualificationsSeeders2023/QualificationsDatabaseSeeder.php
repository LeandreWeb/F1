<?php

namespace Database\Seeders\Seeders2023\QualificationsSeeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class QualificationsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $this->call(QualificationStorySeeder2023::class);
        $this->call(qualificationsSeeder2023::class);
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
        
    }
}
