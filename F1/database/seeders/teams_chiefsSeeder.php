<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class teams_chiefsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams_chiefs=[];
        
        $teams_chiefs[]=[
            "id"=>1,
            "teams_id"=>1,
            "FirstName"=>"Frédéric",
            "LastName"=>"Vasseur",
        ];
        $teams_chiefs[]=[
            "id"=>2,
            "teams_id"=>2,
            "FirstName"=>"Christian",
            "LastName"=>"Horner",
        ];
        $teams_chiefs[]=[
            "id"=>3,
            "teams_id"=>3,
            "FirstName"=>"Mike",
            "LastName"=>"Krack",
        ];
        $teams_chiefs[]=[
            "id"=>4,
            "teams_id"=>4,
            "FirstName"=>"Toto",
            "LastName"=>"Wolf",
        ];$teams_chiefs[]=[
            "id"=>5,
            "teams_id"=>5,
            "FirstName"=>"Alessandro",
            "LastName"=>"Alunni Bravi",
        ];
        $teams_chiefs[]=[
            "id"=>6,
            "teams_id"=>6,
            "FirstName"=>"Otmar",
            "LastName"=>"Szafnauer",
        ];
        $teams_chiefs[]=[
            "id"=>7,
            "teams_id"=>7,
            "FirstName"=>"James",
            "LastName"=>"Vowles",
        ];
        $teams_chiefs[]=[
            "id"=>8,
            "teams_id"=>8,
            "FirstName"=>"Franz",
            "LastName"=>"Tost",
        ];
        $teams_chiefs[]=[
            "id"=>9,
            "teams_id"=>9,
            "FirstName"=>"Guenther",
            "LastName"=>"Steiner",
        ];
        $teams_chiefs[]=[
            "id"=>10,
            "teams_id"=>10,
            "FirstName"=>"Andrea",
            "LastName"=>"Stella",
        ];
        DB::table("teams_chiefs")->delete();
        DB::table("teams_chiefs")->insert($teams_chiefs);

      }
}
