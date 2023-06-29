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
        $factory[]=[
            "id"=>2,
            "longitude"=>-0.6927812906168356,
            "lattitude"=>52.00839734775971,
            "map_link"=>'mapbox://styles/leandrebb/cljfzjb6c00i801ozcwii2nkm'
        ];
        $factory[]=[
            "id"=>3,
            "longitude"=>-1.0297058301028414,
            "lattitude"=>52.0759856589907,
            "map_link"=>'mapbox://styles/leandrebb/cljfzmugm00hd01qpfftj9pwp'
        ];
        $factory[]=[
            "id"=>4,
            "longitude"=>-1.146569492188263,
            "lattitude"=>52.0218330350223,
            "map_link"=>'mapbox://styles/leandrebb/cljfzl9sb00ih01pi8fcl6q41'
        ];
        $factory[]=[
            "id"=>5,
            "longitude"=>8.817306311547782,
            "lattitude"=>47.30814059355495,
            "map_link"=>'mapbox://styles/leandrebb/cljfzqtiy00ia01ozfhko6bqd'
        ];
        $factory[]=[
            "id"=>6,
            "longitude"=>-1.3904836337894437,
            "lattitude"=>51.92007254540647,
            "map_link"=>'mapbox://styles/leandrebb/cljfzpfd600i901oz6j4b6xto'
        ];
        $factory[]=[
            "id"=>7,
            "longitude"=>-1.411962247233447,
            "lattitude"=>51.618491863239484,
            "map_link"=>'mapbox://styles/leandrebb/cljfzsya9008501qrh09s2uel'
        ];
        $factory[]=[
            "id"=>8,
            "longitude"=>11.859000115571916,
            "lattitude"=>44.30227383223655,
            "map_link"=>'mapbox://styles/leandrebb/cljfzry5m00ig01qifh1r1ig8'
        ];
        $factory[]=[
            "id"=>9,
            "longitude"=> -1.3143401770863932,
            "lattitude"=>52.0636823984521,
            "map_link"=>'mapbox://styles/leandrebb/cljfzq5vq00hv01p5cy663a5d'
        ];
        $factory[]=[
            "id"=>10,
            "longitude"=> -0.5481124062479239,
            "lattitude"=>51.346280583571655,
            "map_link"=>'mapbox://styles/leandrebb/cljfzoguw00iv01pb8rm32wtt'
        ];

        DB::table('factories')->delete();
        DB::table('factories')->insert($factory);



    }
}
