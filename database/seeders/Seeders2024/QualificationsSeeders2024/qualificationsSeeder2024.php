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
        // $qualifications[]=[
        //     "id"=>202301,
        //     "date"=>'2023-03-04',
        //     "start"=>'09:00:00',
        //     'qualification_story_id'=>202301

        // ];
        // $qualifications[]=[
        //     "id"=>202302,
        //     "date"=>'2023-03-18',
        //     "start"=>'13:00:00',
        //     'qualification_story_id'=>202302

        // ];
        // $qualifications[]=[
        //     "id"=>202303,
        //     "date"=>'2023-04-01',
        //     "start"=>'01:00:00',
        //     'qualification_story_id'=>202303
        // ];
        // $qualifications[]=[
        //     "id"=>202304,
        //     "date"=>'2023-04-28',
        //     "start"=>'09:00:00',
        //     'qualification_story_id'=>202304
        // ];
        // $qualifications[]=[
        //     "id"=>202305,
        //     "date"=>'2023-05-06',
        //     "start"=>'16:00:00',
        //     'qualification_story_id'=>202305
        // ];
        // $qualifications[]=[
        //     "id"=>202306,
        //     "date"=>'2023-05-20',
        //     "start"=>'10:00:00',
        //     'qualification_story_id'=>null
        // ];
        // $qualifications[]=[
        //     "id"=>202307,
        //     "date"=>'2023-05-27',
        //     "start"=>'10:00:00',
        //     'qualification_story_id'=>202307
        // ];
        // $qualifications[]=[
        //     "id"=>202308,
        //     "date"=>'2023-06-03',
        //     "start"=>'10:00:00',
        //     'qualification_story_id'=>202308
        // ];
        // $qualifications[]=[
        //     "id"=>202309,
        //     "date"=>'2023-06-17',
        //     "start"=>'16:00:00',
        //     'qualification_story_id'=>202309
        // ];
        // $qualifications[]=[
        //     "id"=>202310,
        //     "date"=>'2023-06-30',
        //     "start"=>'11:00:00',
        //     'qualification_story_id'=>202310
        // ];
        // $qualifications[]=[
        //     "id"=>202311,
        //     "date"=>'2023-07-08',
        //     "start"=>'10:00:00',
        //     'qualification_story_id'=>202311
        // ];
        // $qualifications[]=[
        //     "id"=>202312,
        //     "date"=>'2023-07-22',
        //     "start"=>'10:00:00',
        //     'qualification_story_id'=>202312
        // ];
        // $qualifications[]=[
        //     "id"=>202313,
        //     "date"=>'2023-07-28',
        //     "start"=>'11:00:00',
        //     'qualification_story_id'=>202313
        // ];
        // $qualifications[]=[
        //     "id"=>202314,
        //     "date"=>'2023-08-26',
        //     "start"=>'09:00:00',
        //     'qualification_story_id'=>202314
        // ];
        // $qualifications[]=[
        //     "id"=>202315,
        //     "date"=>'2023-09-02',
        //     "start"=>'10:00:00',
        //     'qualification_story_id'=>202315
        // ];
        // $qualifications[]=[
        //     "id"=>202316,
        //     "date"=>'2023-09-16',
        //     "start"=>'09:00:00',
        //     'qualification_story_id'=>202316
        // ];
        // $qualifications[]=[
        //     "id"=>202317,
        //     "date"=>'2023-09-23',
        //     "start"=>'02:00:00',
        //     'qualification_story_id'=>202317
        // ];
        // $qualifications[]=[
        //     "id"=>202318,
        //     "date"=>'2023-10-07',
        //     "start"=>'13:30:00',
        //     'qualification_story_id'=>202318
        // ];
        // $qualifications[]=[
        //     "id"=>202319,
        //     "date"=>'2023-10-20',
        //     "start"=>'17:00:00',
        //     'qualification_story_id'=>202319
        // ];
        // $qualifications[]=[
        //     "id"=>202320,
        //     "date"=>'2023-10-28',
        //     "start"=>'17:00:00',
        //     'qualification_story_id'=>null
        // ];
        // $qualifications[]=[
        //     "id"=>202321,
        //     "date"=>'2023-11-03',
        //     "start"=>'14:00:00',
        //     'qualification_story_id'=>null
        // ];
        // $qualifications[]=[
        //     "id"=>202322,
        //     "date"=>'2023-11-18',
        //     "start"=>'03:00:00',
        //     'qualification_story_id'=>null
        // ];
        // $qualifications[]=[
        //     "id"=>202323,
        //     "date"=>'2023-11-25',
        //     "start"=>'09:00:00',
        //     'qualification_story_id'=>null
        // ];




        Db::table('qualifications')->delete();
        Db::table('qualifications')->insert($qualifications);

    }
}
