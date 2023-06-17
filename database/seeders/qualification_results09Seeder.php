<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results09Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>901,
            "driver_id"=>1,
            'qualification_id'=>9,
            "q1"=>73.615,
            "q2"=>72.760,
            "q3"=>85.858,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>902,
            "driver_id"=>27,
            'qualification_id'=>9,
            "q1"=>73.411,
            "q2"=>72.790,
            "q3"=>87.102,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>903,
            "driver_id"=>14,
            'qualification_id'=>9,
            "q1"=>73.295,
            "q2"=>72.776,
            "q3"=>87.286,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>904,
            "driver_id"=>44,
            'qualification_id'=>9,
            "q1"=>73.471,
            "q2"=>73.186,
            "q3"=>87.627,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>905,
            "driver_id"=>63,
            'qualification_id'=>9,
            "q1"=>72.937,
            "q2"=>72.999,
            "q3"=>87.893,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>906,
            "driver_id"=>31,
            'qualification_id'=>9,
            "q1"=>73.766,
            "q2"=>73.082,
            "q3"=>87.945,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>907,
            "driver_id"=>4,
            'qualification_id'=>9,
            "q1"=>73.433,
            "q2"=>73.001,
            "q3"=>88.046,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>908,
            "driver_id"=>55,
            'qualification_id'=>9,
            "q1"=>73.420,
            "q2"=>73.283,
            "q3"=>89.294,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>909,
            "driver_id"=>81,
            'qualification_id'=>9,
            "q1"=>73.747,
            "q2"=>73.098,
            "q3"=>91.349,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>910,
            "driver_id"=>23,
            'qualification_id'=>9,
            "q1"=>73.691,
            "q2"=>73.059,
            "q3"=>null,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>911,
            "driver_id"=>16,
            'qualification_id'=>9,
            "q1"=>73.874,
            "q2"=>80.615,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>912,
            "driver_id"=>11,
            'qualification_id'=>9,
            "q1"=>73.326,
            "q2"=>80.959,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>913,
            "driver_id"=>18,
            'qualification_id'=>9,
            "q1"=>73.667,
            "q2"=>81.484,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>914,
            "driver_id"=>20,
            'qualification_id'=>9,
            "q1"=>73.581,
            "q2"=>81.678,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>915,
            "driver_id"=>77,
            'qualification_id'=>9,
            "q1"=>73.862,
            "q2"=>81.821,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>916,
            "driver_id"=>22,
            'qualification_id'=>9,
            "q1"=>82.746,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>917,
            "driver_id"=>10,
            'qualification_id'=>9,
            "q1"=>82.886,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>918,
            "driver_id"=>21,
            'qualification_id'=>9,
            "q1"=>83.137,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>919,
            "driver_id"=>2,
            'qualification_id'=>9,
            "q1"=>83.337,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>920,
            "driver_id"=>24,
            'qualification_id'=>9,
            "q1"=>83.342,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}