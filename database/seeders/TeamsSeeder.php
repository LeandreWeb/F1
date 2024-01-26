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
            'factory_id'=>1,
        ];
        $teams[]= [
            "id"=>2,
            'Name'=>'Red Bull Racing',
            'country_id'=>11,
            'socials_id'=>2,
            'factory_id'=>2,
        ];
        $teams[]= [
            "id"=>3,
            'Name'=>'Aston Martin',
            'country_id'=>11,
            'socials_id'=>3,
            'factory_id'=>3,
        ];
        $teams[]= [
            "id"=>4,
            'Name'=>'Mercedes',
            'country_id'=>11,
            'socials_id'=>4,
            'factory_id'=>4,
        ];
        $teams[]= [
            "id"=>5,
            'Name'=>'Alfa Romeo',
            'country_id'=>27,
            'socials_id'=>5,
            'factory_id'=>5,
        ];
        $teams[]= [
            "id"=>6,
            'Name'=>'Alpine',
            'country_id'=>11,
            'socials_id'=>6,
            'factory_id'=>6,
        ];
        $teams[]= [
            "id"=>7,
            'Name'=>'Williams',
            'country_id'=>11,
            'socials_id'=>7,
            'factory_id'=>7,
        ];
        $teams[]= [
            "id"=>8,
            'Name'=>'AlphaTauri',
            'country_id'=>6,
            'socials_id'=>8,
            'factory_id'=>8,
        ];
        $teams[]= [
            "id"=>9,
            'Name'=>'Hass',
            'country_id'=>5,
            'socials_id'=>9,
            'factory_id'=>9,
        ];
        $teams[]= [
            "id"=>10,
            'Name'=>'McLaren',
            'country_id'=>11,
            'socials_id'=>10,
            'factory_id'=>10,
        ];
        $teams[]= [
            "id"=>11,
            'Name'=>'Stake F1',
            'country_id'=>27,
            'socials_id'=>11,
            'factory_id'=>5,
        ];$teams[]= [
            "id"=>12,
            'Name'=>'Visa RB',
            'country_id'=>27,
            'socials_id'=>8, //TODO a changer apres un changeement de leur socials
            'factory_id'=>8,
        ];
        DB::table('teams')->delete();
        DB::table('teams')->insert($teams);
    }
}
