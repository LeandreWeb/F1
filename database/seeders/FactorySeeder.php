<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory=[];

        $factory[]=[
            "id"=>1,
            "longitude"=>10.862881800444768,
            "lattitude"=>44.53224809926337,
            "map_link"=>'mapbox://styles/leandrebb/cljelhyf300av01p5cm7p76cv'
        ];

        DB::table('factories')->delete();
        DB::table('factories')->insert($factory);



    }
}
