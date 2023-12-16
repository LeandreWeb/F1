<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class racesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $races=[];
        $races[]=[
            "id"=>1,
            "date"=>'2023-03-05',
            "start"=>'09:00:00',
            'race_story_id'=>1
        ];
        $races[]=[
            "id"=>2,
            "date"=>'2023-03-19',
            "start"=>'13:00:00',
            'race_story_id'=>2
        ];
        $races[]=[
            "id"=>3,
            "date"=>'2023-04-02',
            "start"=>'01:00:00',
            'race_story_id'=>3
        ];
        $races[]=[
            "id"=>4,
            "date"=>'2023-04-30',
            "start"=>'07:00:00',
            'race_story_id'=>4
        ];
        $races[]=[
            "id"=>5,
            "date"=>'2023-05-07',
            "start"=>'15:30:00',
            'race_story_id'=>5
        ];
        $races[]=[
            "id"=>6,
            "date"=>'2023-05-21',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>7,
            "date"=>'2023-05-28',
            "start"=>'09:00:00',
            'race_story_id'=>7
        ];
        $races[]=[
            "id"=>8,
            "date"=>'2023-06-04',
            "start"=>'09:00:00',
            'race_story_id'=>8
        ];
        $races[]=[
            "id"=>9,
            "date"=>'2023-06-18',
            "start"=>'14:00:00',
            'race_story_id'=>9
        ];
        $races[]=[
            "id"=>10,
            "date"=>'2023-07-02',
            "start"=>'09:00:00',
            'race_story_id'=>10
        ];
        $races[]=[
            "id"=>11,
            "date"=>'2023-07-09',
            "start"=>'10:00:00',
            'race_story_id'=>11
        ];
        $races[]=[
            "id"=>12,
            "date"=>'2023-07-23',
            "start"=>'09:00:00',
            'race_story_id'=>12
        ];
        $races[]=[
            "id"=>13,
            "date"=>'2023-07-30',
            "start"=>'09:00:00',
            'race_story_id'=>13
        ];
        $races[]=[
            "id"=>14,
            "date"=>'2023-08-27',
            "start"=>'09:00:00',
            'race_story_id'=>14
        ];
        $races[]=[
            "id"=>15,
            "date"=>'2023-09-03',
            "start"=>'09:00:00',
            'race_story_id'=>15
        ];
        $races[]=[
            "id"=>16,
            "date"=>'2023-09-17',
            "start"=>'08:00:00',
            'race_story_id'=>16
        ];
        $races[]=[
            "id"=>17,
            "date"=>'2023-09-24',
            "start"=>'01:00:00',
            'race_story_id'=>17
        ];
        $races[]=[
            "id"=>18,
            "date"=>'2023-10-08',
            "start"=>'13:00:00',
            'race_story_id'=>18
        ];
        $races[]=[
            "id"=>19,
            "date"=>'2023-10-22',
            "start"=>'15:00:00',
            'race_story_id'=>19
        ];
        $races[]=[
            "id"=>20,
            "date"=>'2023-10-29',
            "start"=>'16:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>21,
            "date"=>'2023-11-05',
            "start"=>'12:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>22,
            "date"=>'2023-11-19',
            "start"=>'01:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>23,
            "date"=>'2023-11-26',
            "start"=>'08:00:00',
            'race_story_id'=>null
        ];




        Db::table('races')->delete();
        Db::table('races')->insert($races);

    }
}
