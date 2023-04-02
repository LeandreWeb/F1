<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stories=[];
        $stories[]=[
            "id"=>1,
            "title"=>"Alonso et Aston Surprise !!!",
            "quali_story"=>"Premières qualifications de la saison.
            Après les tests et les essais libres, tout semble être en faveur des Red Bulls.
            Max Verstappen sécurise la première pole de la saison suivi par Sergio Perez.
            Les Red Bulls occupent la première ligne de la grille de départ.",
            "race_story"=>"Alonso !!! Première course de la saison extrêmement divertissante.
            Après une collision avec son coéquipier au premier tour, Fernando profite de sa voiture pour dépasser les Mercedes-Benz et Carlos Sainz et ainsi se procurer un podium.
            Le vainqueur de la course est Max Verstappen avec une longueur d'avance énorme, suivi par Perez qui n'a pas pu rivaliser en raison d'un mauvais départ et d'une longue lutte avec Charles Leclerc.
            Leclerc, de son côté, se fait priver de son podium à cause d'un problème électrique sur sa Ferrari ",
            "photo"=>"News1"
        ];

        $stories[]=[
            "id"=>2,
            "title"=>"Red Bulls dominant",
            "quali_story"=>"Même après les prévisions de plusieurs, Max Verstappen n'a pas réussi à sécuriser sa première pole position.
            Un problème mécanique en Q2 l'a positionné en 15ème position sur la grille de départ pour la course.
            Le gagnant de la pole position est Perez pour sa deuxième année d'affilée, suivi de près par Leclerc, qui a écopé d'une pénalité de 10 positions après le changement de pièces sur sa voiture.
             Cela permet à Alonso de partir au côté de Perez sur la grille de départ.",
            "race_story"=>"Départ très intéressant, au premier virage Alonso prend la première position et les McLaren subissent des dommages pour se retrouver en dernière position.
            En revanche, les Red Bulls sont beaucoup trop rapides pour l'Aston Martin et la dépassent dès le 2ème tour.
            Même si Max est parti de la 15ème position, il dépasse rapidement les autres voitures pour se positionner en 2ème position après 25 tours.
            Les Red Bulls prennent ensuite la poudre d'escampette pour faire un 1 (Perez) 2 (Verstappen), avec plus de 20 secondes d'avance sur Alonso.",
            "photo"=>"News2"
        ];

        Db::table("stories")->delete();
        Db::table("stories")->insert($stories);


    }
}
