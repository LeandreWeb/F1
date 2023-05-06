<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class team_chiefsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team_chiefs=[];
        
        $team_chiefs[]=[
            "id"=>1,
            "team_id"=>1,
            "FirstName"=>"Frédéric",
            "LastName"=>"Vasseur",
        ];
        $team_chiefs[]=[
            "id"=>2,
            "team_id"=>2,
            "FirstName"=>"Christian",
            "LastName"=>"Horner",
        ];
        $team_chiefs[]=[
            "id"=>3,
            "team_id"=>3,
            "FirstName"=>"Mike",
            "LastName"=>"Krack",
        ];
        $team_chiefs[]=[
            "id"=>4,
            "team_id"=>4,
            "FirstName"=>"Toto",
            "LastName"=>"Wolf",
        ];$team_chiefs[]=[
            "id"=>5,
            "team_id"=>5,
            "FirstName"=>"Alessandro",
            "LastName"=>"Alunni Bravi",
        ];
        $team_chiefs[]=[
            "id"=>6,
            "team_id"=>6,
            "FirstName"=>"Otmar",
            "LastName"=>"Szafnauer",
        ];
        $team_chiefs[]=[
            "id"=>7,
            "team_id"=>7,
            "FirstName"=>"James",
            "LastName"=>"Vowles",
        ];
        $team_chiefs[]=[
            "id"=>8,
            "team_id"=>8,
            "FirstName"=>"Franz",
            "LastName"=>"Tost",
        ];
        $team_chiefs[]=[
            "id"=>9,
            "team_id"=>9,
            "FirstName"=>"Guenther",
            "LastName"=>"Steiner",
        ];
        $team_chiefs[]=[
            "id"=>10,
            "team_id"=>10,
            "FirstName"=>"Andrea",
            "LastName"=>"Stella",
        ];
        DB::table("team_chiefs")->delete();
        DB::table("team_chiefs")->insert($team_chiefs);

      }
}
