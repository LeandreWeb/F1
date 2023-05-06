<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class SprintResult01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintResults=[];

        $sprintResults[]=[
            "id"=>141,
            "driver_id"=>11,
            "sprint_id"=>4,
            "total_time"=>"00:33:17.667",
            "position"=>1,
            "points"=>8,
        ];
        $sprintResults[]=[
            "id"=>142,
            "driver_id"=>16,
            "sprint_id"=>4,
            "total_time"=>"00:33:22.130",
            "position"=>2,
            "points"=>7,
        ];
        $sprintResults[]=[
            "id"=>143,
            "driver_id"=>1,
            "sprint_id"=>4,
            "total_time"=>"00:33:22.732",
            "position"=>3,
            "points"=>6,
        ];
        $sprintResults[]=[
            "id"=>144,
            "driver_id"=>63,
            "sprint_id"=>4,
            "total_time"=>"00:33:26.199", //+48.052
            "position"=>4,
            "points"=>5,
        ];
        $sprintResults[]=[
            "id"=>145,
            "driver_id"=>55,
            "sprint_id"=>4,
            "total_time"=>"00:33:28.055", //+50.977
            "position"=>5,
            "points"=>4,
        ];
        $sprintResults[]=[
            "id"=>146,
            "driver_id"=>14,
            "sprint_id"=>4,
            "total_time"=>"00:33:29.280", //+54.502
            "position"=>6,
            "points"=>3,
        ];
        $sprintResults[]=[
            "id"=>147,
            "driver_id"=>44,
            "sprint_id"=>4,
            "total_time"=>"00:33:34.170", //+55.873
            "position"=>7,
            "points"=>2
        ];
        $sprintResults[]=[
            "id"=> 408,
            "driver_id"=>18,
            "sprint_id"=>4,
            "total_time"=>"00:33:35.084", //+72.647
            "position"=>8,
            "points"=>1
        ];
        $sprintResults[]=[
            "id"=> 409,
            "driver_id"=>23,
            "sprint_id"=>4,
            "total_time"=>"00:33:38.424", //+73.753
            "position"=>9,
            "points"=>2
        ];
        $sprintResults[]=[
            "id"=> 410,
            "driver_id"=>81,
            "sprint_id"=>4,
            "total_time"=>"00:33:40.518", //+89.774
            "position"=>10,
            "points"=>1
        ];
        $sprintResults[]=[
            "id"=> 411,
            "driver_id"=>20,
            "sprint_id"=>4,
            "total_time"=>"00:33:45.657", //+90.870
            "position"=>11,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 412,
            "driver_id"=>24,
            "sprint_id"=>4,
            "total_time"=>"00:33:52.269", //+1
            "position"=>12,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 413,
            "driver_id"=>10,
            "sprint_id"=>4,
            "total_time"=>"00:33:54.586", //+1
            "position"=>13,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 414,
            "driver_id"=>21,
            "sprint_id"=>4,
            "total_time"=>"00:34:01.254", //+1
            "position"=>14,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 415,
            "driver_id"=>27,
            "sprint_id"=>4,
            "total_time"=>"00:34:06.254", //+1
            "position"=>15,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 416,
            "driver_id"=>77,
            "sprint_id"=>4,
            "total_time"=>"00:34:07.584", //+1
            "position"=>16,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 417,
            "driver_id"=>4,
            "sprint_id"=>4,
            "total_time"=>"00:34:09.771", //+2
            "position"=>17,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 418,
            "driver_id"=>31,
            "sprint_id"=>4,
            "total_time"=>"00:34:18.288", //+1
            "position"=>null,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=> 419,
            "driver_id"=>22,
            "sprint_id"=>4,
            "total_time"=>null, //+1
            "position"=>null,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=> 420,
            "driver_id"=>2,
            "sprint_id"=>4,
            "total_time"=>null, //+1
            "position"=>null,
            "points"=>null
        ];


        Db::table('sprint_results')->delete();
        Db::table('sprint_results')->insert($sprintResults);
    }
}
