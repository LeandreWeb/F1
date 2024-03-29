<?php

namespace Database\Seeders\Seeders2023\QualificationsSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results202321Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>20232101,
            "driver_id"=>1,
            'qualification_id'=>202321,
            "q1"=>70.436,
            "q2"=>70.162,
            "q3"=>70.727,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>20232102,
            "driver_id"=>16,
            'qualification_id'=>202321,
            "q1"=>70.472,
            "q2"=>70.303,
            "q3"=>91.344,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>20232103,
            "driver_id"=>18,
            'qualification_id'=>202321,
            "q1"=>70.551,
            "q2"=>70.375,
            "q3"=>71.344,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>20232104,
            "driver_id"=>14,
            'qualification_id'=>202321,
            "q1"=>70.557,
            "q2"=>70.237,
            "q3"=>71.387,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>20232105,
            "driver_id"=>44,
            'qualification_id'=>202321,
            "q1"=>70.604,
            "q2"=>70.266,
            "q3"=>71.387,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>20232106,
            "driver_id"=>63,
            'qualification_id'=>202321,
            "q1"=>70.340,
            "q2"=>70.316,
            "q3"=>71.590,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>20232107,
            "driver_id"=>4,
            'qualification_id'=>202321,
            "q1"=>70.623,
            "q2"=>70.021,
            "q3"=>71.590,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>20232108,
            "driver_id"=>55,
            'qualification_id'=>202321,
            "q1"=>70.624,
            "q2"=>70.254,
            "q3"=>71.989,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>20232109,
            "driver_id"=>11,
            'qualification_id'=>202321,
            "q1"=>70.668,
            "q2"=>70.254,
            "q3"=>72.321,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>20232110,
            "driver_id"=>81,
            'qualification_id'=>202321,
            "q1"=>70.519,
            "q2"=>70.330,
            "q3"=>null,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>20232111,
            "driver_id"=>27,
            'qualification_id'=>202321,
            "q1"=>70.475,
            "q2"=>70.547,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>20232112,
            "driver_id"=>31,
            'qualification_id'=>202321,
            "q1"=>70.763,
            "q2"=>70.562,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>20232113,
            "driver_id"=>10,
            'qualification_id'=>202321,
            "q1"=>70.793,
            "q2"=>70.567,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>20232114,
            "driver_id"=>20,
            'qualification_id'=>202321,
            "q1"=>70.602,
            "q2"=>70.723,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>20232115,
            "driver_id"=>23,
            'qualification_id'=>202321,
            "q1"=>70.621,
            "q2"=>70.840,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>20232116,
            "driver_id"=>22,
            'qualification_id'=>202321,
            "q1"=>70.837,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>20232117,
            "driver_id"=>3,
            'qualification_id'=>202321,
            "q1"=>70.843,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>20232118,
            "driver_id"=>77,
            'qualification_id'=>202321,
            "q1"=>70.955,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>20232119,
            "driver_id"=>2,
            'qualification_id'=>202321,
            "q1"=>71.035,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>20232120,
            "driver_id"=>24,
            'qualification_id'=>202321,
            "q1"=>71.275,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
