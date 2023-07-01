<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SprintStory=[];
        $SprintStory[]=[
            "id"=>4,
            "catchphrase"=>"George et Max en chicane",
            "intro"=>"Le grand jour est arrivé pour les fans de Formule 1 alors que la première course sprint de la saison se déroule à Baku. Avec Charles Leclerc en pole position, les yeux sont rivés sur le pilote monégasque pour voir s'il peut résister aux Red Bulls affamées qui se tiennent juste derrière lui sur la grille de départ.",

            "first_part"=>"Le départ du sprint de Baku est donné et Charles Leclerc parvient à conserver sa position de poleman après les deux premiers virages. Mais derrière lui, George Russell profite d'un contact avec Max Verstappen au troisième virage pour dépasser le pilote Red Bull au quatrième virage et prendre la deuxième place. Toutefois, le début de course est rapidement perturbé par un accident de Yuki Tsunoda, qui perd le contrôle de sa monoplace AlphaTauri dans le virage 14, entraînant l'intervention de la voiture de sécurité.",

            "last_part"=>"Pendant la voiture de sécurité, on peut entendre Max Verstappen exprimer sa frustration envers George Russell à la radio après leur contact au premier tour. Après la relance de la course, Verstappen réussit à dépasser Russell dès le premier virage.Sur la radio, Verstappen fait une remarque cinglante envers Russell, soulignant qu'il est capable de dépasser sans causer d'accrochage contrairement au pilote britannique.
            Au huitième tour, Sergio Perez parvient à dépasser Charles Leclerc pour prendre la première place,Perez réussit à conserver sa position de leader jusqu'à la fin de la course et remporte ainsi le premier sprint de la saison, suivi de près par Leclerc qui termine deuxième et Verstappen qui complète le podium.",

            "conclusion"=>"Le premier sprint de la saison à Bakou a offert beaucoup d'excitation et de drame. Charles Leclerc a commencé en pole position mais n'a pas pu maintenir sa position de leader, car Sergio Perez l'a dépassé pour remporter la victoire. Max Verstappen a montré une vitesse impressionnante, dépassant George Russell tôt dans la course et terminant sur le podium à la troisième place. Cependant, la frustration de Verstappen envers Russell était claire, car les deux pilotes se sont touchés dans le premier tour, ce qui a fait perdre du temps à Verstappen.",

            "extra"=>null,
        ];
        $SprintStory[]=[
            "id"=>10,
            "catchphrase"=>"",
            "first_part"=>"",
            "last_part"=>"",
            "conclusion"=>"",
            "extra"=>null,
        ];

        Db::table('sprint_stories')->delete();
        Db::table('sprint_stories')->insert($SprintStory);

    }
}
