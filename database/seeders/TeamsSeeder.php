<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams=[];

        $teams[]= [
            "id"=>1,
            'Name'=>'Ferrari',
            'country_id'=>6,
            'socials_id'=>1,
            'Power-Unit'=>'Ferrari'
        ];
        $teams[]= [
            "id"=>2,
            'Name'=>'Red Bull Racing',
            'country_id'=>11,
            'socials_id'=>1,
            'Power-Unit'=>'Red Bull Powertrain'
        ];
        $teams[]= [
            "id"=>3,
            'Name'=>'Aston Martin',
            'country_id'=>11,
            'socials_id'=>1,
            'Power-Unit'=>'Mercedes'
        ];
        $teams[]= [
            "id"=>4,
            'Name'=>'Mercedes',
            'country_id'=>11,
            'socials_id'=>1,
            'Power-Unit'=>'Mercedes'
        ];
        $teams[]= [
            "id"=>5,
            'Name'=>'Alfa Romeo',
            'country_id'=>27,
            'socials_id'=>1,
            'Power-Unit'=>'Ferrari'
        ];
        $teams[]= [
            "id"=>6,
            'Name'=>'Alpine',
            'country_id'=>11,
            'socials_id'=>1,
            'Power-Unit'=>'Renauld'
        ];
        $teams[]= [
            "id"=>7,
            'Name'=>'Williams',
            'country_id'=>11,
            'socials_id'=>1,
            'Power-Unit'=>'Mercedes'
        ];
        $teams[]= [
            "id"=>8,
            'Name'=>'AlphaTauri',
            'country_id'=>6,
            'socials_id'=>1,
            'Power-Unit'=>'Red Bull Powertrain'
        ];
        $teams[]= [
            "id"=>9,
            'Name'=>'Hass',
            'country_id'=>5,
            'socials_id'=>1,
            'Power-Unit'=>'Ferrari'
        ];
        $teams[]= [
            "id"=>10,
            'Name'=>'McLaren',
            'country_id'=>11,
            'socials_id'=>1,
            'Power-Unit'=>'Mercedes'
        ];
        DB::table('teams')->delete();
        DB::table('teams')->insert($teams);
    }
}
