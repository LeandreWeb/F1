<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $principals=[];

        $principals[]=[
            "id"=>1,
            "FirstName"=>"Frédéric",
            "LastName"=>"Vasseur",
            "country_id"=>22
        ];
        $principals[]=[
            "id"=>2,
            "FirstName"=>"Christian",
            "LastName"=>"Horner",
            "country_id"=>11
        ];
        $principals[]=[
            "id"=>3,
            "FirstName"=>"Mike",
            "LastName"=>"Krack",
            "country_id"=>29
        ];
        $principals[]=[
            "id"=>4,
            "FirstName"=>"Toto",
            "LastName"=>"Wolf",
            "country_id"=>10
        ];$principals[]=[
            "id"=>5,
            "FirstName"=>"Alessandro",
            "LastName"=>"Alunni Bravi",
            "country_id"=>6
        ];
        $principals[]=[
            "id"=>6,
            "FirstName"=>"Otmar",
            "LastName"=>"Szafnauer",
            "country_id"=>30
        ];
        $principals[]=[
            "id"=>7,
            "FirstName"=>"James",
            "LastName"=>"Vowles",
            "country_id"=>11
        ];
        $principals[]=[
            "id"=>8,
            "FirstName"=>"Franz",
            "LastName"=>"Tost",
            "country_id"=>10
        ];
        $principals[]=[
            "id"=>9,
            "FirstName"=>"Guenther",
            "LastName"=>"Steiner",
            "country_id"=>6
        ];
        $principals[]=[
            "id"=>10,
            "FirstName"=>"Andrea",
            "LastName"=>"Stella",
            "country_id"=>6
        ];
        $principals[]=[
            "id"=>11,
            "FirstName"=>"Bruno",
            "LastName"=>"Famin",
            "country_id"=>12
        ];
        DB::table("principals")->delete();
        DB::table("principals")->insert($principals);
    }
}
