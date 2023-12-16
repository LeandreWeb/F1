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
            "power_unit"=>"Ferrari",
        ];
        $cars[]=[
            "id"=>202302,
            "name"=>"RB19",
            "power_unit"=>"Honda RBPT",
        ];$cars[]=[
            "id"=>202303,
            "name"=>"AMR23",
            "power_unit"=>"Mercedes",
        ];$cars[]=[
            "id"=>202304,
            "name"=>"W14",
            "power_unit"=>"Mercedes",
        ];$cars[]=[
            "id"=>202305,
            "name"=>"C43",
            "power_unit"=>"Ferrari",
        ];$cars[]=[
            "id"=>202306,
            "name"=>"A523",
            "power_unit"=>"Renault",
        ];$cars[]=[
            "id"=>202307,
            "name"=>"FW45",
            "power_unit"=>"Mercedes",
        ];$cars[]=[
            "id"=>202308,
            "name"=>"AT04",
            "power_unit"=>"Honda RBPT",
        ];$cars[]=[
            "id"=>202309,
            "name"=>"VF-23",
            "power_unit"=>"Ferrari",
        ];$cars[]=[
            "id"=>202310,
            "name"=>"MCL60",
            "power_unit"=>"Mercedes",
        ];



        DB::table("cars")->delete();
        DB::table("cars")->insert($cars);

    }
}
