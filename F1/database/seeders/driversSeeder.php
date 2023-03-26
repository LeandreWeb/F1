<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DriversSeeder extends Seeder
{   
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drivers=[];
        
        $drivers[]=[
            "teams_id"=>1,
            "FirstName"=>"Charles",
            "LastName"=>"Leclerc",
            "Country"=>"Monaco",
            "Number"=>16
        ];
        $drivers[]=[
            "teams_id"=>1,
            "FirstName"=>"Carlos",
            "LastName"=>"Sainz",
            "Country"=>"Espagne",
            "Number"=>55
        ];
        $drivers[]=[
            "teams_id"=>2,
            "FirstName"=>"Max",
            "LastName"=>"Verstapen",
            "Country"=>"Pays Bas",
            "Number"=>1
        ];
        $drivers[]=[
            "teams_id"=>2,
            "FirstName"=>"Sergio",
            "LastName"=>"Perez",
            "Country"=>"Mexique",
            "Number"=>11
        ];
        $drivers[]=[
            "teams_id"=>3,
            "FirstName"=>"Fernando",
            "LastName"=>"Alonso",
            "Country"=>"Espagne",
            "Number"=>14
        ];
        $drivers[]=[
            "teams_id"=>3,
            "FirstName"=>"Lance",
            "LastName"=>"Stroll",
            "Country"=>"Canada",
            "Number"=>18
        ];
        $drivers[]=[
            "teams_id"=>4,
            "FirstName"=>"Lewis",
            "LastName"=>"Hamilton",
            "Country"=>"Royaume-Uni",
            "Number"=>44
        ];
        $drivers[]=[
            "teams_id"=>4,
            "FirstName"=>"George",
            "LastName"=>"Russel",
            "Country"=>"Royaume-Uni",
            "Number"=>63
        ];
        $drivers[]=[
            "teams_id"=>5,
            "FirstName"=>"Valtteri",
            "LastName"=>"Bottas",
            "Country"=>"Finlande",
            "Number"=>77
        ];
        $drivers[]=[
            "teams_id"=>5,
            "FirstName"=>"Zhou",
            "LastName"=>"Guanyu",
            "Country"=>"Chine",
            "Number"=>24
        ];
        $drivers[]=[
            "teams_id"=>6,
            "FirstName"=>"Pierre",
            "LastName"=>"Gasly",
            "Country"=>"France",
            "Number"=>10
        ];
        $drivers[]=[
            "teams_id"=>6,
            "FirstName"=>"Esteban",
            "LastName"=>"Ocon",
            "Country"=>"France",
            "Number"=>31
        ];
        $drivers[]=[
            "teams_id"=>7,
            "FirstName"=>"Alexander",
            "LastName"=>"Albon",
            "Country"=>"Thailande",
            "Number"=>23
        ];
        $drivers[]=[
            "teams_id"=>7,
            "FirstName"=>"Logan",
            "LastName"=>"Sargeant",
            "Country"=>"États-Unis",
            "Number"=>2
        ];
        $drivers[]=[
            "teams_id"=>8,
            "FirstName"=>"Yuki",
            "LastName"=>"Tsunoda",
            "Country"=>"Japon",
            "Number"=>22
        ];
        $drivers[]=[
            "teams_id"=>8,
            "FirstName"=>"Nyck",
            "LastName"=>"De Vries",
            "Country"=>"Pays Bas",
            "Number"=>21
        ];
        $drivers[]=[
            "teams_id"=>9,
            "FirstName"=>"Nico",
            "LastName"=>"Hulkenberg",
            "Country"=>"Allemagne",
            "Number"=>27
        ];
        $drivers[]=[
            "teams_id"=>9,
            "FirstName"=>"Kevin",
            "LastName"=>"Magnussen",
            "Country"=>"Danemark",
            "Number"=>20
        ];
        $drivers[]=[
            "teams_id"=>10,
            "FirstName"=>"Lando",
            "LastName"=>"Norris",
            "Country"=>"Royaume-Uni",
            "Number"=>4
        ];
        $drivers[]=[
            "teams_id"=>10,
            "FirstName"=>"Oscar",
            "LastName"=>"Piastry",
            "Country"=>"Australie",
            "Number"=>81
        ];
        

        Db::table("drivers")->delete();
        Db::table("drivers")->insert($drivers);

    }
}
