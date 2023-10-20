<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class SprintResult04Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintResults=[];

        $sprintResults[]=[
            "id"=>1801,
            "driver_id"=>81,
            "sprint_id"=>18,
            "total_time"=>"00:24:58.433",
            "position"=>1,
            "points"=>8,
        ];
        $sprintResults[]=[
            "id"=>1802,
            "driver_id"=>1,
            "sprint_id"=>18,
            "total_time"=>"00:25:05.110",
            "position"=>2,
            "points"=>7,
        ];
        $sprintResults[]=[
            "id"=>1803,
            "driver_id"=>4,
            "sprint_id"=>18,
            "total_time"=>"00:25:09.166",
            "position"=>3,
            "points"=>6,
        ];
        $sprintResults[]=[
            "id"=>1804,
            "driver_id"=>63,
            "sprint_id"=>18,
            "total_time"=>"00:25:11.081", //+48.052
            "position"=>4,
            "points"=>5,
        ];
        $sprintResults[]=[
            "id"=>1805,
            "driver_id"=>44,
            "sprint_id"=>18,
            "total_time"=>"00:25:13.449", //+50.977
            "position"=>5,
            "points"=>4,
        ];
        $sprintResults[]=[
            "id"=>1806,
            "driver_id"=>55,
            "sprint_id"=>18,
            "total_time"=>"00:25:14.485", //+54.502
            "position"=>6,
            "points"=>3,
        ];
        $sprintResults[]=[
            "id"=>1807,
            "driver_id"=>23,
            "sprint_id"=>18,
            "total_time"=>"00:25:15.190", //+55.873
            "position"=>7,
            "points"=>2
        ];
        $sprintResults[]=[
            "id"=> 1808,
            "driver_id"=>14,
            "sprint_id"=>18,
            "total_time"=>"00:25:15.255", //+72.647
            "position"=>8,
            "points"=>1
        ];
        $sprintResults[]=[
            "id"=> 1809,
            "driver_id"=>10,
            "sprint_id"=>18,
            "total_time"=>"00:25:21.843", //+73.753
            "position"=>9,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1810,
            "driver_id"=>77,
            "sprint_id"=>18,
            "total_time"=>"00:25:22.239", //+89.774
            "position"=>10,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1811,
            "driver_id"=>22,
            "sprint_id"=>18,
            "total_time"=>"00:25:23.440", //+90.870
            "position"=>11,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1812,
            "driver_id"=>16,
            "sprint_id"=>18,
            "total_time"=>"00:25:24.736", //+1
            "position"=>12,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1813,
            "driver_id"=>20,
            "sprint_id"=>18,
            "total_time"=>"00:25:25.439", //+1
            "position"=>13,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1814,
            "driver_id"=>24,
            "sprint_id"=>18,
            "total_time"=>"00:25:31.419", //+1
            "position"=>14,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1815,
            "driver_id"=>18,
            "sprint_id"=>18,
            "total_time"=>"00:25:34.775", //+1
            "position"=>15,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1816,
            "driver_id"=>27,
            "sprint_id"=>18,
            "total_time"=>"00:25:35.004", //+1
            "position"=>16,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1817,
            "driver_id"=>31,
            "sprint_id"=>18,
            "total_time"=>"00:25:35.260", //+2
            "position"=>17,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1818,
            "driver_id"=>11,
            "sprint_id"=>18,
            "total_time"=>"00:25:37.700", //+1
            "position"=>18,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=> 1819,
            "driver_id"=>2,
            "sprint_id"=>18,
            "total_time"=>null, //+1
            "position"=>19,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=> 1820,
            "driver_id"=>40,
            "sprint_id"=>18,
            "total_time"=>null, //+1
            "position"=>20,
            "points"=>null
        ];

        Db::table('sprint_results')->insert($sprintResults);
    }
}
