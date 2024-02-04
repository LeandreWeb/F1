<?php
namespace Database\Seeders\Seeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TODO update Cars
        $cars=[];
        $cars[]=[
            "id"=>202401,
            "name"=>"SF-24",
            "power_unit"=>"Ferrari",
        ];
        $cars[]=[
            "id"=>202402,
            "name"=>"RB20",
            "power_unit"=>"Honda RBPT",
        ];$cars[]=[
            "id"=>202403,
            "name"=>"AMR24",
            "power_unit"=>"Mercedes",
        ];$cars[]=[
            "id"=>202404,
            "name"=>"W15",
            "power_unit"=>"Mercedes",
        ];$cars[]=[
            "id"=>202405,
            "name"=>"C44",
            "power_unit"=>"Ferrari",
        ];$cars[]=[
            "id"=>202406,
            "name"=>"A524",
            "power_unit"=>"Renault",
        ];$cars[]=[
            "id"=>202407,
            "name"=>"FW46",
            "power_unit"=>"Mercedes",
        ];$cars[]=[
            "id"=>202408,
            "name"=>"RB01",
            "power_unit"=>"Honda RBPT",
        ];$cars[]=[
            "id"=>202409,
            "name"=>"VF-24",
            "power_unit"=>"Ferrari",
        ];$cars[]=[
            "id"=>202410,
            "name"=>"MCL38",
            "power_unit"=>"Mercedes",
        ];

        DB::table("cars")->insert($cars);

    }
}
