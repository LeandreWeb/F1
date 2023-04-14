<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QualificationStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationStory=[];


        $qualificationStory[]=[
            "id"=>1,
            "catchphrase"=>"Write something",
            "intro"=>"Write something",
            "q3"=>"Write something",
            "q2"=>"Write something",
            "q1"=>"Write something",
            "conclusion"=>"write something",
            "extra"=>null
        ];
        $qualificationStory[]=[
            "id"=>2,
            "catchphrase"=>"Write something",
            "intro"=>"Write something",
            "q3"=>"Write something",
            "q2"=>"Write something",
            "q1"=>"Write something",
            "conclusion"=>"write something",
            "extra"=>null
        ];
        $qualificationStory[]=[
            "id"=>3,
            "catchphrase"=>"Write something for autralia",
            "intro"=>"Write something for autralia",
            "q3"=>"Write something for autralia",
            "q2"=>"Write something for autralia",
            "q1"=>"Write something for autralia",
            "conclusion"=>"write something for autralia",
            "extra"=>null
        ];


        Db::table('qualification_stories')->delete();
        Db::table('qualification_stories')->insert($qualificationStory);
    }
}
