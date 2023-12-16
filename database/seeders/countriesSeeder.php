<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class countriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries=[];

        $countries[]=[
            "id"=>1,
            "name"=>"Bahrein"
        ];
        $countries[]=[
            "id"=>2,
            "name"=>"Arabie Saoudite"
        ];
        $countries[]=[
            "id"=>3,
            "name"=>"Australie"
        ];
        $countries[]=[
            "id"=>4,
            "name"=>"Azerbaïdjan"
        ];
        $countries[]=[
            "id"=>5,
            "name"=>"États-Unis"
        ];
        $countries[]=[
            "id"=>6,
            "name"=>"Italie"
        ];
        $countries[]=[
            "id"=>7,
            "name"=>"Monaco"
        ];
        $countries[]=[
            "id"=>8,
            "name"=>"Espagne"
        ];
        $countries[]=[
            "id"=>9,
            "name"=>"Canada"
        ];
        $countries[]=[
            "id"=>10,
            "name"=>"Autriche"
        ];
        $countries[]=[
            "id"=>11,
            "name"=>"Royaume-Uni"
        ];
        $countries[]=[
            "id"=>12,
            "name"=>"Hongrie"
        ];
        $countries[]=[
            "id"=>13,
            "name"=>"Belgique"
        ];
        $countries[]=[
            "id"=>14,
            "name"=>"Pays-Bas"
        ];
        $countries[]=[
            "id"=>15,
            "name"=>"Singapour"
        ];
        $countries[]=[
            "id"=>16,
            "name"=>"Japon"
        ];
        $countries[]=[
            "id"=>17,
            "name"=>"Qatar"
        ];
        $countries[]=[
            "id"=>18,
            "name"=>"Mexique"
        ];
        $countries[]=[
            "id"=>19,
            "name"=>"Brésil"
        ];
        $countries[]=[
            "id"=>20,
            "name"=>"Abou Dabi"
        ];
        $countries[]=[
            "id"=>21,
            "name"=>"Finlande"
        ];
        $countries[]=[
            "id"=>22,
            "name"=>"France"
        ];
        $countries[]=[
            "id"=>23,
            "name"=>"Danemark"
        ];
        $countries[]=[
            "id"=>24,
            "name"=>"Thailande"
        ];
        $countries[]=[
            "id"=>25,
            "name"=>"Allemagne"
        ];
        $countries[]=[
            "id"=>26,
            "name"=>"Chine"
        ];
        $countries[]=[
            "id"=>27,
            "name"=>"Suisse"
        ];
        $countries[]=[
            "id"=>28,
            "name"=>"Nouvelle-Zélande"
        ];
        $countries[]=[
            "id"=>29,
            "name"=>"Luxembourg"
        ];
        $countries[]=[
            "id"=>30,
            "name"=>"Roumanie"
        ];

        DB::table("countries")->delete();
        DB::table("countries")->insert($countries);
    }
}
