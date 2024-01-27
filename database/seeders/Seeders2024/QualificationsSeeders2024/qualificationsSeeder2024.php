<?php

namespace Database\Seeders\Seeders2024\QualificationsSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class qualificationsSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualifications=[];
        $qualifications[]=[
            "id"=>202401,
            "date"=>'2024-03-01',
            "start"=>'09:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202402,
            "date"=>'2024-03-08',
            "start"=>'12:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202403,
            "date"=>'2024-03-23',
            "start"=>'01:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202404,
            "date"=>'2024-04-06',
            "start"=>'02:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202405,
            "date"=>'2024-04-19', 
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/China.html
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202406,
            "date"=>'2024-05-03', 
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Miami.html
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202407,
            "date"=>'2024-05-18',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202408,
            "date"=>'2024-05-25',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202409,
            "date"=>'2024-06-08',
            "start"=>'16:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202410,
            "date"=>'2024-06-22',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202411,
            "date"=>'2024-06-28',
            "start"=>'00:00:00',
            'qualification_story_id'=>null //TODO reverifier sur https://www.formula1.com/en/racing/2024/Austria.html
        ];
        $qualifications[]=[
            "id"=>202412,
            "date"=>'2024-07-06',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202413,
            "date"=>'2024-07-21',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202414,
            "date"=>'2024-07-27',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202415,
            "date"=>'2024-08-24',
            "start"=>'09:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202416,
            "date"=>'2024-08-31',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202417,
            "date"=>'2024-09-14',
            "start"=>'08:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202418,
            "date"=>'2024-09-21',
            "start"=>'09:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202419,
            "date"=>'2024-10-19',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/United_States.html
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202420,
            "date"=>'2024-10-26',
            "start"=>'17:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202421,
            "date"=>'2024-11-01',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Brazil.html
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202422,
            "date"=>'2024-11-24',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Las_Vegas.html
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202423,
            "date"=>'2024-11-29',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Qatar.html
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>202424,
            "date"=>'2024-12-07',
            "start"=>'09:00:00',
            'qualification_story_id'=>null
        ];

        Db::table('qualifications')->insert($qualifications);

    }
}
