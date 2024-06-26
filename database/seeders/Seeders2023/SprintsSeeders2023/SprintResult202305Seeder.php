<?php

namespace Database\Seeders\Seeders2023\SprintsSeeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class SprintResult202305Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintResults=[];

        $sprintResults[]=[
            "id"=>20231901,
            "driver_id"=>1,
            "sprint_id"=>202319,
            "total_time"=>"00:31:30.849",
            "position"=>1,
            "points"=>8,
        ];
        $sprintResults[]=[
            "id"=>20231902,
            "driver_id"=>44,
            "sprint_id"=>202319,
            "total_time"=>"00:31:40.314",
            "position"=>2,
            "points"=>7,
        ];
        $sprintResults[]=[
            "id"=>20231903,
            "driver_id"=>16,
            "sprint_id"=>202319,
            "total_time"=>"00:31:48.836",
            "position"=>3,
            "points"=>6,
        ];
        $sprintResults[]=[
            "id"=>20231904,
            "driver_id"=>4,
            "sprint_id"=>202319,
            "total_time"=>"00:31:49.712", //+48.052
            "position"=>4,
            "points"=>5,
        ];
        $sprintResults[]=[
            "id"=>20231905,
            "driver_id"=>11,
            "sprint_id"=>202319,
            "total_time"=>"00:31:53.777", //+50.977
            "position"=>5,
            "points"=>4,
        ];
        $sprintResults[]=[
            "id"=>20231906,
            "driver_id"=>55,
            "sprint_id"=>202319,
            "total_time"=>"00:31:59.156", //+54.502
            "position"=>6,
            "points"=>3,
        ];
        $sprintResults[]=[
            "id"=>20231907,
            "driver_id"=>10,
            "sprint_id"=>202319,
            "total_time"=>"00:32:03.252 ", //+55.873
            "position"=>7,
            "points"=>2
        ];
        $sprintResults[]=[
            "id"=>20231908,
            "driver_id"=>63,
            "sprint_id"=>202319,
            "total_time"=>"00:32:05.099", //+72.647
            "position"=>8,
            "points"=>1
        ];
        $sprintResults[]=[
            "id"=>20231909,
            "driver_id"=>23,
            "sprint_id"=>202319,
            "total_time"=>"00:32:05.416", //+73.753
            "position"=>9,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231910,
            "driver_id"=>81,
            "sprint_id"=>202319,
            "total_time"=>"00:32:13.252", //+89.774
            "position"=>10,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231911,
            "driver_id"=>31,
            "sprint_id"=>202319,
            "total_time"=>"00:32:15.835", //+90.870
            "position"=>11,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231912,
            "driver_id"=>3,
            "sprint_id"=>202319,
            "total_time"=>"00:32:16.358", //+1
            "position"=>12,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231913,
            "driver_id"=>14,
            "sprint_id"=>202319,
            "total_time"=>"00:32:19.935", //+1
            "position"=>13,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231914,
            "driver_id"=>22,
            "sprint_id"=>202319,
            "total_time"=>"00:32:20.582", //+1
            "position"=>14,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231915,
            "driver_id"=>27,
            "sprint_id"=>202319,
            "total_time"=>"00:32:27.499", //+1
            "position"=>15,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231916,
            "driver_id"=>77,
            "sprint_id"=>202319,
            "total_time"=>"00:32:35.250", //+1
            "position"=>16,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231917,
            "driver_id"=>24,
            "sprint_id"=>202319,
            "total_time"=>"00:32:38.821", //+2
            "position"=>17,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20231918,
            "driver_id"=>20,
            "sprint_id"=>202319,
            "total_time"=>"00:32:41.971", //+1
            "position"=>18,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=>20231919,
            "driver_id"=>2,
            "sprint_id"=>202319,
            "total_time"=>"00:32:42.298", //+1
            "position"=>19,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=>20231920,
            "driver_id"=>18,
            "sprint_id"=>202319,
            "total_time"=>null, //+1
            "position"=>20,
            "points"=>null
        ];

        Db::table('sprint_results')->insert($sprintResults);
    }
}
