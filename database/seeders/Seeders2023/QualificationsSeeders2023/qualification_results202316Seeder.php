<?php

namespace Database\Seeders\Seeders2023\QualificationsSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results202316Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>20231601,
            "driver_id"=>55,
            'qualification_id'=>202316,
            "q1"=>92.339,
            "q2"=>91.439,
            "q3"=>90.984,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>20231602,
            "driver_id"=>63,
            'qualification_id'=>202316,
            "q1"=>92.331,
            "q2"=>91.743,
            "q3"=>91.056,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>20231603,
            "driver_id"=>16,
            'qualification_id'=>202316,
            "q1"=>92.406,
            "q2"=>92.012,
            "q3"=>91.063,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>20231604,
            "driver_id"=>4,
            'qualification_id'=>202316,
            "q1"=>92.483,
            "q2"=>91.951,
            "q3"=>91.270,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>20231605,
            "driver_id"=>44,
            'qualification_id'=>202316,
            "q1"=>92.651,
            "q2"=>92.019,
            "q3"=>91.485,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>20231606,
            "driver_id"=>20,
            'qualification_id'=>202316,
            "q1"=>92.242,
            "q2"=>91.892,
            "q3"=>91.575,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>20231607,
            "driver_id"=>14,
            'qualification_id'=>202316,
            "q1"=>92.584,
            "q2"=>91.835,
            "q3"=>91.615,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>20231608,
            "driver_id"=>31,
            'qualification_id'=>202316,
            "q1"=>92.369,
            "q2"=>92.089,
            "q3"=>91.673,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>20231609,
            "driver_id"=>31,
            'qualification_id'=>202316,
            "q1"=>92.100,
            "q2"=>91.994,
            "q3"=>91.808,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>20231610,
            "driver_id"=>40,
            'qualification_id'=>202316,
            "q1"=>92.215,
            "q2"=>92.166,
            "q3"=>92.268,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>20231611,
            "driver_id"=>1,
            'qualification_id'=>202316,
            "q1"=>92.398,
            "q2"=>92.173,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>20231612,
            "driver_id"=>10,
            'qualification_id'=>202316,
            "q1"=>92.452,
            "q2"=>92.274,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>20231613,
            "driver_id"=>11,
            'qualification_id'=>202316,
            "q1"=>92.099,
            "q2"=>92.310,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>20231614,
            "driver_id"=>23,
            'qualification_id'=>202316,
            "q1"=>92.668,
            "q2"=>93.719,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>20231615,
            "driver_id"=>22,
            'qualification_id'=>202316,
            "q1"=>91.991,
            "q2"=>null,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>20231616,
            "driver_id"=>77,
            'qualification_id'=>202316,
            "q1"=>92.809,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>20231617,
            "driver_id"=>81,
            'qualification_id'=>202316,
            "q1"=>92.902,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>20231618,
            "driver_id"=>2,
            'qualification_id'=>202316,
            "q1"=>93.252,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>20231619,
            "driver_id"=>24,
            'qualification_id'=>202316,
            "q1"=>93.258,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>20231620,
            "driver_id"=>18,
            'qualification_id'=>202316,
            "q1"=>93.397,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}