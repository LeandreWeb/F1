<?php

namespace Database\Seeders\Seeders2023\QualificationsSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results202309Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>20230901,
            "driver_id"=>1,
            'qualification_id'=>202309,
            "q1"=>80.851,
            "q2"=>79.092,
            "q3"=>85.858,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>20230902,
            "driver_id"=>27,
            'qualification_id'=>202309,
            "q1"=>82.730,
            "q2"=>80.305,
            "q3"=>87.102,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>20230903,
            "driver_id"=>14,
            'qualification_id'=>202309,
            "q1"=>81.481,
            "q2"=>79.776,
            "q3"=>87.286,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>20230904,
            "driver_id"=>44,
            'qualification_id'=>202309,
            "q1"=>81.554,
            "q2"=>80.426,
            "q3"=>87.627,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>20230905,
            "driver_id"=>63,
            'qualification_id'=>202309,
            "q1"=>81.937,
            "q2"=>80.098,
            "q3"=>87.893,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>20230906,
            "driver_id"=>31,
            'qualification_id'=>202309,
            "q1"=>82.114,
            "q2"=>80.406,
            "q3"=>87.945,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>20230907,
            "driver_id"=>4,
            'qualification_id'=>202309,
            "q1"=>81.998,
            "q2"=>79.347,
            "q3"=>88.046,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>20230908,
            "driver_id"=>55,
            'qualification_id'=>202309,
            "q1"=>82.248,
            "q2"=>79.856,
            "q3"=>89.294,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>20230909,
            "driver_id"=>81,
            'qualification_id'=>202309,
            "q1"=>82.190,
            "q2"=>79.659,
            "q3"=>91.349,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>20230910,
            "driver_id"=>23,
            'qualification_id'=>202309,
            "q1"=>81.938,
            "q2"=>78.725,
            "q3"=>null,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>20230911,
            "driver_id"=>16,
            'qualification_id'=>202309,
            "q1"=>81.843,
            "q2"=>80.615,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>20230912,
            "driver_id"=>11,
            'qualification_id'=>202309,
            "q1"=>82.151,
            "q2"=>80.959,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>20230913,
            "driver_id"=>18,
            'qualification_id'=>202309,
            "q1"=>82.677,
            "q2"=>81.484,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>20230914,
            "driver_id"=>20,
            'qualification_id'=>202309,
            "q1"=>82.351,
            "q2"=>81.678,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>20230915,
            "driver_id"=>77,
            'qualification_id'=>202309,
            "q1"=>82.332,
            "q2"=>81.821,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>20230916,
            "driver_id"=>22,
            'qualification_id'=>202309,
            "q1"=>82.746,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>20230917,
            "driver_id"=>10,
            'qualification_id'=>202309,
            "q1"=>82.886,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>20230918,
            "driver_id"=>21,
            'qualification_id'=>202309,
            "q1"=>83.137,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>20230919,
            "driver_id"=>2,
            'qualification_id'=>202309,
            "q1"=>83.337,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>20230920,
            "driver_id"=>24,
            'qualification_id'=>202309,
            "q1"=>83.342,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}