<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class qualificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualifications=[];
        $qualifications[]=[
            "id"=>1,
            "date"=>'2023-03-04',
            "start"=>'09:00:00',
            'qualification_story_id'=>1

        ];
        $qualifications[]=[
            "id"=>2,
            "date"=>'2023-03-18',
            "start"=>'13:00:00',
            'qualification_story_id'=>2

        ];
        $qualifications[]=[
            "id"=>3,
            "date"=>'2023-04-01',
            "start"=>'01:00:00',
            'qualification_story_id'=>3
        ];
        $qualifications[]=[
            "id"=>4,
            "date"=>'2023-04-28',
            "start"=>'09:00:00',
            'qualification_story_id'=>4
        ];
        $qualifications[]=[
            "id"=>5,
            "date"=>'2023-05-06',
            "start"=>'16:00:00',
            'qualification_story_id'=>5
        ];
        $qualifications[]=[
            "id"=>6,
            "date"=>'2023-05-20',
            "start"=>'10:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>7,
            "date"=>'2023-05-27',
            "start"=>'10:00:00',
            'qualification_story_id'=>7
        ];
        $qualifications[]=[
            "id"=>8,
            "date"=>'2023-06-03',
            "start"=>'10:00:00',
            'qualification_story_id'=>8
        ];
        $qualifications[]=[
            "id"=>9,
            "date"=>'2023-06-17',
            "start"=>'16:00:00',
            'qualification_story_id'=>9
        ];
        $qualifications[]=[
            "id"=>10,
            "date"=>'2023-06-30',
            "start"=>'11:00:00',
            'qualification_story_id'=>10
        ];
        $qualifications[]=[
            "id"=>11,
            "date"=>'2023-07-08',
            "start"=>'10:00:00',
            'qualification_story_id'=>11
        ];
        $qualifications[]=[
            "id"=>12,
            "date"=>'2023-07-22',
            "start"=>'10:00:00',
            'qualification_story_id'=>12
        ];
        $qualifications[]=[
            "id"=>13,
            "date"=>'2023-07-28',
            "start"=>'11:00:00',
            'qualification_story_id'=>13
        ];
        $qualifications[]=[
            "id"=>14,
            "date"=>'2023-08-26',
            "start"=>'09:00:00',
            'qualification_story_id'=>14
        ];
        $qualifications[]=[
            "id"=>15,
            "date"=>'2023-09-02',
            "start"=>'10:00:00',
            'qualification_story_id'=>15
        ];
        $qualifications[]=[
            "id"=>16,
            "date"=>'2023-09-16',
            "start"=>'09:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>17,
            "date"=>'2023-09-23',
            "start"=>'02:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>18,
            "date"=>'2023-10-07',
            "start"=>'13:30:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>19,
            "date"=>'2023-10-20',
            "start"=>'17:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>20,
            "date"=>'2023-10-28',
            "start"=>'17:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>21,
            "date"=>'2023-11-03',
            "start"=>'14:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>22,
            "date"=>'2023-11-18',
            "start"=>'03:00:00',
            'qualification_story_id'=>null
        ];
        $qualifications[]=[
            "id"=>23,
            "date"=>'2023-11-25',
            "start"=>'09:00:00',
            'qualification_story_id'=>null
        ];




        Db::table('qualifications')->delete();
        Db::table('qualifications')->insert($qualifications);

    }
}
