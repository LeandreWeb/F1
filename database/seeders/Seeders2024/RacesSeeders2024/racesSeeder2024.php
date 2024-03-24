<?php

namespace Database\Seeders\Seeders2024\RacesSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class racesSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $races=[];
        $races[]=[
            "id"=>202401,
            "date"=>'2024-03-02',
            "start"=>'10:00:00',
            'race_story_id'=>202401
        ];
        $races[]=[
            "id"=>202402,
            "date"=>'2024-03-09',
            "start"=>'12:00:00',
            'race_story_id'=>202402
        ];
        $races[]=[
            "id"=>202403,
            "date"=>'2024-03-24',
            "start"=>'00:00:00',
            'race_story_id'=>202403
        ];
        $races[]=[
            "id"=>202404,
            "date"=>'2024-04-07',
            "start"=>'01:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202405,
            "date"=>'2024-04-21',
            "start"=>'03:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202406,
            "date"=>'2024-05-05',
            "start"=>'16:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202407,
            "date"=>'2024-05-19',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202408,
            "date"=>'2024-05-26',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202409,
            "date"=>'2024-06-09',
            "start"=>'14:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202410,
            "date"=>'2024-06-23',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202411,
            "date"=>'2024-06-30',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202412,
            "date"=>'2024-07-07',
            "start"=>'10:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202413,
            "date"=>'2024-07-21',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202414,
            "date"=>'2024-07-28',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202415,
            "date"=>'2024-08-25',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202416,
            "date"=>'2024-09-01',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202417,
            "date"=>'2024-09-15',
            "start"=>'07:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202418,
            "date"=>'2024-09-22',
            "start"=>'08:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202419,
            "date"=>'2024-10-20',
            "start"=>'15:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202420,
            "date"=>'2024-10-27',
            "start"=>'16:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202421,
            "date"=>'2024-11-03',
            "start"=>'12:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202422,
            "date"=>'2024-11-24',
            "start"=>'01:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202423,
            "date"=>'2024-12-01',
            "start"=>'12:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202424,
            "date"=>'2024-12-08',
            "start"=>'08:00:00',
            'race_story_id'=>null
        ];

        Db::table('races')->insert($races);

    }
}
