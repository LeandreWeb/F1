<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cars=[];
        $cars[]=[
            "id"=>1,
            "name"=>"SF-23",
            "year"=>2023,
            "power_unit"=>"Ferrari",
            "team_id"=>1
        ];
        $cars[]=[
            "id"=>2,
            "name"=>"RB19",
            "year"=>2023,
            "power_unit"=>"Honda RBPT",
            "team_id"=>2
        ];$cars[]=[
            "id"=>3,
            "name"=>"AMR23",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>3
        ];$cars[]=[
            "id"=>4,
            "name"=>"W14",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>4
        ];$cars[]=[
            "id"=>5,
            "name"=>"C43",
            "year"=>2023,
            "power_unit"=>"Ferrari",
            "team_id"=>5
        ];$cars[]=[
            "id"=>6,
            "name"=>"A523",
            "year"=>2023,
            "power_unit"=>"Renault",
            "teams_id"=>6
        ];$cars[]=[
            "id"=>7,
            "name"=>"FW45",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>7
        ];$cars[]=[
            "id"=>8,
            "name"=>"AT04",
            "year"=>2023,
            "power_unit"=>"Honda RBPT",
            "team_id"=>8
        ];$cars[]=[
            "id"=>9,
            "name"=>"VF-23",
            "year"=>2023,
            "power_unit"=>"Ferrari",
            "team_id"=>9
        ];$cars[]=[
            "id"=>10,
            "name"=>"MCL60",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>10
        ];



        DB::table("cars")->delete();
        DB::table("cars")->insert($cars);

    }
}
