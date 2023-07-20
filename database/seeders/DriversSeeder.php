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
            "id"=>16,
            "team_id"=>1,
            "FirstName"=>"Charles",
            "LastName"=>"Leclerc",
            "country_id"=>7,
            "Number"=>16,
            "status"=>'active'
        ];
        $drivers[]=[
            "id"=>55,
            "team_id"=>1,
            "FirstName"=>"Carlos",
            "LastName"=>"Sainz",
            "country_id"=>8,
            "Number"=>55,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>1,
            "team_id"=>2,
            "FirstName"=>"Max",
            "LastName"=>"Verstappen",
            "country_id"=>14,
            "Number"=>1,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>11,
            "team_id"=>2,
            "FirstName"=>"Sergio",
            "LastName"=>"Perez",
            "country_id"=>18,
            "Number"=>11,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>14,
            "team_id"=>3,
            "FirstName"=>"Fernando",
            "LastName"=>"Alonso",
            "country_id"=>8,
            "Number"=>14,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>18,
            "team_id"=>3,
            "FirstName"=>"Lance",
            "LastName"=>"Stroll",
            "country_id"=>9,
            "Number"=>18,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>44,
            "team_id"=>4,
            "FirstName"=>"Lewis",
            "LastName"=>"Hamilton",
            "country_id"=>11,
            "Number"=>44,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>63,
            "team_id"=>4,
            "FirstName"=>"George",
            "LastName"=>"Russel",
            "country_id"=>11,
            "Number"=>63,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>77,
            "team_id"=>5,
            "FirstName"=>"Valtteri",
            "LastName"=>"Bottas",
            "country_id"=>21,
            "Number"=>77,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>24,
            "team_id"=>5,
            "FirstName"=>"Zhou",
            "LastName"=>"Guanyu",
            "country_id"=>26,
            "Number"=>24,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>10,
            "team_id"=>6,
            "FirstName"=>"Pierre",
            "LastName"=>"Gasly",
            "country_id"=>22,
            "Number"=>10,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>31,
            "team_id"=>6,
            "FirstName"=>"Esteban",
            "LastName"=>"Ocon",
            "country_id"=>22,
            "Number"=>31,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>23,
            "team_id"=>7,
            "FirstName"=>"Alexander",
            "LastName"=>"Albon",
            "country_id"=>24,
            "Number"=>23,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>2,
            "team_id"=>7,
            "FirstName"=>"Logan",
            "LastName"=>"Sargeant",
            "country_id"=>5,
            "Number"=>2,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>22,
            "team_id"=>8,
            "FirstName"=>"Yuki",
            "LastName"=>"Tsunoda",
            "country_id"=>16,
            "Number"=>22,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>21,
            "team_id"=>8,
            "FirstName"=>"Nyck",
            "LastName"=>"De Vries",
            "country_id"=>14,
            "Number"=>21,
            "status"=>'replaced'

        ];
        $drivers[]=[
            "id"=>27,
            "team_id"=>9,
            "FirstName"=>"Nico",
            "LastName"=>"Hulkenberg",
            "country_id"=>25,
            "Number"=>27,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>20,
            "team_id"=>9,
            "FirstName"=>"Kevin",
            "LastName"=>"Magnussen",
            "country_id"=>23,
            "Number"=>20,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>4,
            "team_id"=>10,
            "FirstName"=>"Lando",
            "LastName"=>"Norris",
            "country_id"=>11,
            "Number"=>4,
            "status"=>'active'

        ];
        $drivers[]=[
            "id"=>81,
            "team_id"=>10,
            "FirstName"=>"Oscar",
            "LastName"=>"Piastry",
            "country_id"=>3,
            "Number"=>81,
            "status"=>'active'
        ];
        $drivers[]=[
            "id"=>3,
            "team_id"=>8,
            "FirstName"=>"Daniel",
            "LastName"=>"Ricciardo",
            "country_id"=>3,
            "Number"=>3,
            "status"=>'active'
        ];


        Db::table("drivers")->delete();
        Db::table("drivers")->insert($drivers);

    }
}
