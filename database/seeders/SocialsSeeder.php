<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socials=[];
        $socials[]=[
            'id'=>1,
            'twitterName'=>'@ScuderiaFerrari',
            'twitterLink'=>'https://twitter.com/ScuderiaFerrari?s=20',
            'instagramName'=>'@scuderiaferrari',
            'instagramLink'=>'https://www.instagram.com/scuderiaferrari/',
            'websiteName'=>'ferrari.com',
            'websiteLink'=>'https://www.ferrari.com/en-EN/formula1',
            'teamText'=>"L'équipe de Formule 1 Ferrari est connue dans le monde entier pour son héritage glorieux et ses performances exceptionnelles. Depuis sa création en 1950, Ferrari a été un acteur majeur dans le monde de la course automobile, accumulant un nombre impressionnant de titres et de victoires."
        ];

        DB::table('socials')->delete();
        DB::table('socials')->insert($socials);



    }
}
