<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles=[];


        $articles[]=[
            "id"=>202301,
            "title"=>"Grand Prix d'Émilie-Romagne annulé",
            "catchphrase"=>"Inondations dans la region d'Émilie-Romagne ",
            "text"=>"Le Grand Prix d'Émilie-Romagne est malheureusement annulé. La région autour du circuit est inondée et ne pourra pas accueillir le Grand Prix. La FIA et les dirigeants ont pris la décision d'annuler l'événement afin de ne pas entraver les efforts de secours dans la région.",
            "grand_prix_weekend_id"=>202306,
            "created_time"=>"2023-05-20"
        ];

        DB::table("articles")->delete();
        Db::table("articles")->insert($articles);
    }
}
