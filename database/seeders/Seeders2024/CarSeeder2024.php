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

        $cars=[];
        // $cars[]=[
        //     "id"=>202401,
        //     "name"=>"SF-23",
        //     "power_unit"=>"Ferrari",
        // ];
        // $cars[]=[
        //     "id"=>202402,
        //     "name"=>"RB19",
        //     "power_unit"=>"Honda RBPT",
        // ];$cars[]=[
        //     "id"=>202403,
        //     "name"=>"AMR23",
        //     "power_unit"=>"Mercedes",
        // ];$cars[]=[
        //     "id"=>202404,
        //     "name"=>"W14",
        //     "power_unit"=>"Mercedes",
        // ];$cars[]=[
        //     "id"=>202405,
        //     "name"=>"C43",
        //     "power_unit"=>"Ferrari",
        // ];$cars[]=[
        //     "id"=>202406,
        //     "name"=>"A523",
        //     "power_unit"=>"Renault",
        // ];$cars[]=[
        //     "id"=>202407,
        //     "name"=>"FW45",
        //     "power_unit"=>"Mercedes",
        // ];$cars[]=[
        //     "id"=>202408,
        //     "name"=>"AT04",
        //     "power_unit"=>"Honda RBPT",
        // ];$cars[]=[
        //     "id"=>202409,
        //     "name"=>"VF-23",
        //     "power_unit"=>"Ferrari",
        // ];$cars[]=[
        //     "id"=>202410,
        //     "name"=>"MCL60",
        //     "power_unit"=>"Mercedes",
        // ];



        DB::table("cars")->delete();
        DB::table("cars")->insert($cars);

    }
}
