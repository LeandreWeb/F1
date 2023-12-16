<?php
namespace Database\Seeders\Seeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cars=[];
        $cars[]=[
            "id"=>202301,
            "name"=>"SF-23",
            "year"=>2023,
            "power_unit"=>"Ferrari",
            "team_id"=>1
        ];
        $cars[]=[
            "id"=>202302,
            "name"=>"RB19",
            "year"=>2023,
            "power_unit"=>"Honda RBPT",
            "team_id"=>2
        ];$cars[]=[
            "id"=>202303,
            "name"=>"AMR23",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>3
        ];$cars[]=[
            "id"=>202304,
            "name"=>"W14",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>4
        ];$cars[]=[
            "id"=>202305,
            "name"=>"C43",
            "year"=>2023,
            "power_unit"=>"Ferrari",
            "team_id"=>5
        ];$cars[]=[
            "id"=>202306,
            "name"=>"A523",
            "year"=>2023,
            "power_unit"=>"Renault",
            "teams_id"=>6
        ];$cars[]=[
            "id"=>202307,
            "name"=>"FW45",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>7
        ];$cars[]=[
            "id"=>202308,
            "name"=>"AT04",
            "year"=>2023,
            "power_unit"=>"Honda RBPT",
            "team_id"=>8
        ];$cars[]=[
            "id"=>202309,
            "name"=>"VF-23",
            "year"=>2023,
            "power_unit"=>"Ferrari",
            "team_id"=>9
        ];$cars[]=[
            "id"=>202310,
            "name"=>"MCL60",
            "year"=>2023,
            "power_unit"=>"Mercedes",
            "team_id"=>10
        ];



        DB::table("cars")->delete();
        DB::table("cars")->insert($cars);

    }
}
