<?php

namespace Database\Seeders\Seeders2023\SprintsShootoutsSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutResult202303Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $sprintShootoutResults=[];
        $sprintShootoutResults[]=[
            "id"=>20231301,
            "driver_id"=>1,
            'sprint_shootout_id'=>202313,
            "q1"=>118.135,
            "q2"=>115.200,
            "q3"=>109.056,
            "position"=>1
        ];
        $sprintShootoutResults[]=[
            "id"=>20231302,
            "driver_id"=>81,
            'sprint_shootout_id'=>202313,
            "q1"=>120.056,
            "q2"=>116.392,
            "q3"=>109.067,
            "position"=>2
        ];
        $sprintShootoutResults[]=[
            "id"=>20231303,
            "driver_id"=>55,
            'sprint_shootout_id'=>202313,
            "q1"=>119.414,
            "q2"=>116.557,
            "q3"=>109.081,
            "position"=>3
        ];
        $sprintShootoutResults[]=[
            "id"=>20231304,
            "driver_id"=>16,
            'sprint_shootout_id'=>202313,
            "q1"=>119.575,
            "q2"=>116.265,
            "q3"=>109.251,
            "position"=>4
        ];
        $sprintShootoutResults[]=[
            "id"=>20231305,
            "driver_id"=>4,
            'sprint_shootout_id'=>202313,
            "q1"=>120.436,
            "q2"=>116.828,
            "q3"=>109.389,
            "position"=>5
        ];
        $sprintShootoutResults[]=[
            "id"=>20231306,
            "driver_id"=>10,
            'sprint_shootout_id'=>202313,
            "q1"=>120.032,
            "q2"=>116.137,
            "q3"=>109.700,
            "position"=>6
        ];
        $sprintShootoutResults[]=[
            "id"=>20231307,
            "driver_id"=>44,
            'sprint_shootout_id'=>202313,
            "q1"=> 118.939,
            "q2"=>115.823,
            "q3"=>109.900,
            "position"=>7
        ];
        $sprintShootoutResults[]=[
            "id"=>20231308,
            "driver_id"=>11,
            'sprint_shootout_id'=>202313,
            "q1"=>119.362,
            "q2"=>115.878,
            "q3"=>109.961,
            "position"=>8
        ];
        $sprintShootoutResults[]=[
            "id"=>20231309,
            "driver_id"=>31,
            'sprint_shootout_id'=>202313,
            "q1"=>119.362,
            "q2"=>117.051,
            "q3"=>110.494,
            "position"=>9
        ];
        $sprintShootoutResults[]=[
            "id"=>20231310,
            "driver_id"=>63,
            'sprint_shootout_id'=>202313,
            "q1"=>120.475,
            "q2"=>117.393,
            "q3"=>115.742,
            "position"=>10
        ];
        $sprintShootoutResults[]=[
            "id"=>20231311,
            "driver_id"=>3,
            'sprint_shootout_id'=>202313,
            "q1"=>120.177,
            "q2"=>117.687,
            "q3"=>null,
            "position"=>11
        ];
        $sprintShootoutResults[]=[
            "id"=>20231312,
            "driver_id"=>23,
            'sprint_shootout_id'=>202313,
            "q1"=>119.198,
            "q2"=>null,
            "q3"=>null,
            "position"=>12
        ];
        $sprintShootoutResults[]=[
            "id"=>20231313,
            "driver_id"=>2,
            'sprint_shootout_id'=>202313,
            "q1"=>120.031,
            "q2"=>null,
            "q3"=>null,
            "position"=>13
        ];
        $sprintShootoutResults[]=[
            "id"=>20231314,
            "driver_id"=>18,
            'sprint_shootout_id'=>202313,
            "q1"=>120.460,
            "q2"=>null,
            "q3"=>null,
            "position"=>14
        ];
        $sprintShootoutResults[]=[
            "id"=>20231315,
            "driver_id"=>14,
            'sprint_shootout_id'=>202313,
            "q1"=>119.038,
            "q2"=>null,
            "q3"=>null,
            "position"=>15
        ];
        $sprintShootoutResults[]=[
            "id"=>20231316,
            "driver_id"=>22,
            'sprint_shootout_id'=>202313,
            "q1"=>120.568,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $sprintShootoutResults[]=[
            "id"=>20231317,
            "driver_id"=>77,
            'sprint_shootout_id'=>202313,
            "q1"=>120.951,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $sprintShootoutResults[]=[
            "id"=>20231318,
            "driver_id"=>20,
            'sprint_shootout_id'=>202313,
            "q1"=>121.079,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $sprintShootoutResults[]=[
            "id"=>20231319,
            "driver_id"=>24,
            'sprint_shootout_id'=>202313,
            "q1"=>121.430,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $sprintShootoutResults[]=[
            "id"=>20231320,
            "driver_id"=>27,
            'sprint_shootout_id'=>202313,
            "q1"=>null,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];
        Db::table('sprint_shootout_results')->insert($sprintShootoutResults);
    }
}