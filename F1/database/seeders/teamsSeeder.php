<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams=[];

        $teams[]= [
            "id"=>1,
            'Name'=>'Ferrari',
            'Country'=>'Italie',
            'Team-Chief'=>'Frederick Vaseur',
            'Power-Unit'=>'Ferrari'
        ];
        $teams[]= [
            "id"=>2,
            'Name'=>'Red Bull',
            'Country'=>'Royaume-Uni',
            'Team-Chief'=>'Christian Horner',
            'Power-Unit'=>'Red Bull Powertrain'
        ];
        $teams[]= [
            "id"=>3,
            'Name'=>'Aston Martin',
            'Country'=>'Royaume-Uni',
            'Team-Chief'=>'Mike Krack',
            'Power-Unit'=>'Mercedes'
        ];
        $teams[]= [
            "id"=>4,
            'Name'=>'Mercedes',
            'Country'=>'Royaume-Uni',
            'Team-Chief'=>'Toto Wolff',
            'Power-Unit'=>'Mercedes'
        ];
        $teams[]= [
            "id"=>5,
            'Name'=>'Alfa Romeo',
            'Country'=>'Suisse',
            'Team-Chief'=>'Alessandro Alunni Bravi',
            'Power-Unit'=>'Ferrari'
        ];
        $teams[]= [
            "id"=>6,
            'Name'=>'Alpine',
            'Country'=>'Royaume-Uni',
            'Team-Chief'=>'Otmar Szafnauer',
            'Power-Unit'=>'Renauld'
        ];
        $teams[]= [
            "id"=>7,
            'Name'=>'Williams',
            'Country'=>'Royaume-Uni',
            'Team-Chief'=>'James Vowles',
            'Power-Unit'=>'Mercedes'
        ];
        $teams[]= [
            "id"=>8,
            'Name'=>'AlphaTauri',
            'Country'=>'Italie',
            'Team-Chief'=>'Franz Tost',
            'Power-Unit'=>'Red Bull Powertrain'
        ];
        $teams[]= [
            "id"=>9,
            'Name'=>'Hass',
            'Country'=>'États-Unis',
            'Team-Chief'=>'Guenther Steiner',
            'Power-Unit'=>'Ferrari'
        ];
        $teams[]= [
            "id"=>10,
            'Name'=>'McLaren',
            'Country'=>'Royaume-Uni',
            'Team-Chief'=>'Andrea Stella',
            'Power-Unit'=>'Mercedes'
        ];
        DB::table('teams')->delete();
        DB::table('teams')->insert($teams);
    }
}
