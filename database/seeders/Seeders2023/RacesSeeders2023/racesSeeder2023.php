<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class racesSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $races=[];
        $races[]=[
            "id"=>202301,
            "date"=>'2023-03-05',
            "start"=>'09:00:00',
            'race_story_id'=>202301
        ];
        $races[]=[
            "id"=>202302,
            "date"=>'2023-03-19',
            "start"=>'13:00:00',
            'race_story_id'=>202302
        ];
        $races[]=[
            "id"=>202303,
            "date"=>'2023-04-02',
            "start"=>'01:00:00',
            'race_story_id'=>202303
        ];
        $races[]=[
            "id"=>202304,
            "date"=>'2023-04-30',
            "start"=>'07:00:00',
            'race_story_id'=>202304
        ];
        $races[]=[
            "id"=>202305,
            "date"=>'2023-05-07',
            "start"=>'15:30:00',
            'race_story_id'=>202305
        ];
        $races[]=[
            "id"=>202306,
            "date"=>'2023-05-21',
            "start"=>'09:00:00',
            'race_story_id'=>null
        ];
        $races[]=[
            "id"=>202307,
            "date"=>'2023-05-28',
            "start"=>'09:00:00',
            'race_story_id'=>202307
        ];
        $races[]=[
            "id"=>202308,
            "date"=>'2023-06-04',
            "start"=>'09:00:00',
            'race_story_id'=>202308
        ];
        $races[]=[
            "id"=>202309,
            "date"=>'2023-06-18',
            "start"=>'14:00:00',
            'race_story_id'=>202309
        ];
        $races[]=[
            "id"=>202310,
            "date"=>'2023-07-02',
            "start"=>'09:00:00',
            'race_story_id'=>202310
        ];
        $races[]=[
            "id"=>202311,
            "date"=>'2023-07-09',
            "start"=>'10:00:00',
            'race_story_id'=>202311
        ];
        $races[]=[
            "id"=>202312,
            "date"=>'2023-07-23',
            "start"=>'09:00:00',
            'race_story_id'=>202312
        ];
        $races[]=[
            "id"=>202313,
            "date"=>'2023-07-30',
            "start"=>'09:00:00',
            'race_story_id'=>202313
        ];
        $races[]=[
            "id"=>202314,
            "date"=>'2023-08-27',
            "start"=>'09:00:00',
            'race_story_id'=>202314
        ];
        $races[]=[
            "id"=>202315,
            "date"=>'2023-09-03',
            "start"=>'09:00:00',
            'race_story_id'=>202315
        ];
        $races[]=[
            "id"=>202316,
            "date"=>'2023-09-17',
            "start"=>'08:00:00',
            'race_story_id'=>202316
        ];
        $races[]=[
            "id"=>202317,
            "date"=>'2023-09-24',
            "start"=>'01:00:00',
            'race_story_id'=>202317
        ];
        $races[]=[
            "id"=>202318,
            "date"=>'2023-10-08',
            "start"=>'13:00:00',
            'race_story_id'=>202318
        ];
        $races[]=[
            "id"=>202319,
            "date"=>'2023-10-22',
            "start"=>'15:00:00',
            'race_story_id'=>202319
        ];
        $races[]=[
            "id"=>202320,
            "date"=>'2023-10-29',
            "start"=>'16:00:00',
            'race_story_id'=>202320
        ];
        $races[]=[
            "id"=>202321,
            "date"=>'2023-11-05',
            "start"=>'12:00:00',
            'race_story_id'=>202321
        ];
        $races[]=[
            "id"=>202322,
            "date"=>'2023-11-19',
            "start"=>'01:00:00',
            'race_story_id'=>202322
        ];
        $races[]=[
            "id"=>202323,
            "date"=>'2023-11-26',
            "start"=>'08:00:00',
            'race_story_id'=>202323
        ];




        Db::table('races')->delete();
        Db::table('races')->insert($races);

    }
}
