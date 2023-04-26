<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SprintShootoutStory=[];

        Db::table('sprint_shootout_stories')->delete();
        Db::table('sprint_shootout_stories')->insert($SprintShootoutStory);

    }
}
