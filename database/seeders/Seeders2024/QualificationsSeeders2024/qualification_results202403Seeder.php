<?php

namespace Database\Seeders\Seeders2024\QualificationsSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class qualification_results202403Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $qualificationResults = [];

        $qualificationResults[] = [
            "id" => 20240301,
            "driver_id" => 1,
            'qualification_id' => 202403,
            "q1" => 76.819, //91.295
            "q2" => 76.387,
            "q3" => 75.915,
            "position" => 1
        ];
        $qualificationResults[] = [
            "id" => 20240302,
            "driver_id" => 55,
            'qualification_id' => 202403,
            "q1" => 76.731,
            "q2" => 76.189,
            "q3" => 76.185,
            "position" => 2
        ];
        $qualificationResults[] = [
            "id" => 20240303,
            "driver_id" => 11,
            'qualification_id' => 202403,
            "q1" => 76.805,
            "q2" => 76.631,
            "q3" => 76.274,
            "position" => 3
        ];
        $qualificationResults[] = [
            "id" => 20240304,
            "driver_id" => 4,
            'qualification_id' => 202403,
            "q1" => 77.430,
            "q2" => 76.750,
            "q3" => 76.315,
            "position" => 4
        ];
        $qualificationResults[] = [
            "id" => 20240305,
            "driver_id" => 16,
            'qualification_id' => 202403,
            "q1" => 76.984,
            "q2" => 76.304,
            "q3" => 76.435,
            "position" => 5
        ];
        $qualificationResults[] = [
            "id" => 20240306,
            "driver_id" => 81,
            'qualification_id' => 202403,
            "q1" => 77.369,
            "q2" => 76.601,
            "q3" => 76.572,
            "position" => 6
        ];
        $qualificationResults[] = [
            "id" => 20240307,
            "driver_id" => 63,
            'qualification_id' => 202403,
            "q1" => 77.062,
            "q2" => 76.901,
            "q3" => 76.724,
            "position" => 7
        ];
        $qualificationResults[] = [
            "id" => 20240308,
            "driver_id" => 22,
            'qualification_id' => 202403,
            "q1" => 77.356,
            "q2" => 76.791,
            "q3" => 76.788,
            "position" => 8
        ];
        $qualificationResults[] = [
            "id" => 20240309,
            "driver_id" => 18,
            'qualification_id' => 202403,
            "q1" => 77.376,
            "q2" => 76.780,
            "q3" => 77.072,
            "position" => 9
        ];
        $qualificationResults[] = [
            "id" => 20240310,
            "driver_id" => 14,
            'qualification_id' => 202403,
            "q1" => 76.991,
            "q2" => 76.710,
            "q3" => 77.552,
            "position" => 10
        ];
        $qualificationResults[] = [
            "id" => 20240311,
            "driver_id" => 44,
            'qualification_id' => 202403,
            "q1" => 77.499,
            "q2" => 76.960,
            "q3" => null,
            "position" => 11
        ];
        $qualificationResults[] = [
            "id" => 20240312,
            "driver_id" => 23,
            'qualification_id' => 202403,
            "q1" => 77.130,
            "q2" => 77.167,
            "q3" => null,
            "position" => 12
        ];
        $qualificationResults[] = [
            "id" => 20240313,
            "driver_id" => 77,
            'qualification_id' => 202403,
            "q1" => 77.543,
            "q2" => 77.340,
            "q3" => null,
            "position" => 13
        ];
        $qualificationResults[] = [
            "id" => 20240314,
            "driver_id" => 20,
            'qualification_id' => 202403,
            "q1" => 77.709,
            "q2" => 77.427,
            "q3" => null,
            "position" => 14
        ];
        $qualificationResults[] = [
            "id" => 20240315,
            "driver_id" => 31,
            'qualification_id' => 202403,
            "q1" => 77.617,
            "q2" => 77.697,
            "q3" => null,
            "position" => 15
        ];
        $qualificationResults[] = [
            "id" => 20240316,
            "driver_id" => 27,
            'qualification_id' => 202403,
            "q1" => 77.976,
            "q2" => null,
            "q3" => null,
            "position" => 16
        ];
        $qualificationResults[] = [
            "id" => 20240317,
            "driver_id" => 10,
            'qualification_id' => 202403,
            "q1" => 77.982,
            "q2" => null,
            "q3" => null,
            "position" => 17
        ];
        $qualificationResults[] = [
            "id" => 20240318,
            "driver_id" => 3,
            'qualification_id' => 202403,
            "q1" => 78.085,
            "q2" => null,
            "q3" => null,
            "position" => 18
        ];
        $qualificationResults[] = [
            "id" => 20240319,
            "driver_id" => 24,
            'qualification_id' => 202403,
            "q1" => 78.188,
            "q2" => null,
            "q3" => null,
            "position" => 19
        ];
        $qualificationResults[] = [
            "id" => 20240320,
            "driver_id" => 2,
            'qualification_id' => 202403,
            "q1" => null,
            "q2" => null,
            "q3" => null,
            "position" => 20
        ];

        Db::table('qualification_results')->insert($qualificationResults);
    }
}
