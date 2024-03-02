<?php

namespace Database\Seeders\Seeders2024\RacesSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RaceStorySeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceStories = [];

        $raceStories[] = [
            "id" => 202401,

            "catchphrase" => "Domination Verstappen",

            "intro" => "Après des qualifications serrées, Max Verstappen s'est élancé en pole position pour le Grand Prix de Bahreïn 2024. Le champion du monde en titre aura fort à faire face aux Ferrari de Charles Leclerc et Carlos Sainz Jr., qui semblent déterminés à lui contester la victoire.",

            "first_part" => "Max Verstappen a réalisé un excellent départ en conservant la tête de la course dès les premiers tours. Charles Leclerc, qui s'est élancé en deuxième position, a tenté de l'attaquer mais le Néerlandais a réussi à le repousser.
            Un peu plus loin dans le peloton, Lance Stroll a été victime d'un accrochage avec Nico Hulkenberg. Le Canadien a été contraint de se replier en dernière position tandis que Kevin Magnussen a subi des dégâts à son aileron avant.
            Au troisième tour, George Russell a réussi à prendre la deuxième position de Charles Leclerc. Le Monégasque souffrait de problèmes avec ses freins et perdait du temps à chaque freinage. Sergio Pérez en a profité pour le dépasser au tour 7.
            Au tour 14, Sergio Pérez a continué sa progression en dépassant George Russell pour s'emparer de la deuxième position.",

            "middle_part" => "Au 17ème tour, Carlos Sainz a réussi à dépasser son coéquipier Charles Leclerc malgré une défense agressive du Monégasque. Sainz a ensuite continué sa progression en dépassant George Russell pour prendre la troisième place du podium.
            Au 32ème tour, Valtteri Bottas a connu un problème lors de son arrêt au stand. Son pneu avant gauche ne s'est pas correctement fixé, ce qui lui a valu un arrêt de plus de 52 secondes.",

            "last_part" => "Dans la dernière partie de la course, Charles Leclerc a réussi à dépasser George Russell pour prendre la quatrième position.

            Plus loin dans le peloton, les deux pilotes AlphaTauri, Yuki Tsunoda et Daniel Ricciardo, étaient sur des stratégies différentes. Tsunoda était en pneus durs tandis que Ricciardo était en pneus tendres. Ricciardo était plus rapide et l'équipe lui a demandé de laisser passer Tsunoda pour qu'il puisse attaquer les autres pilotes. Deux tours après le message radio, Tsunoda a laissé passer Ricciardo avec réticence, ne lui laissant que trois tours pour attaquer les autres pilotes.
            Mais au final, personne n'a pu contester la domination de Red Bull. Max Verstappen a remporté sa première victoire de la saison et Sergio Pérez a confirmé sa deuxième place au championnat. Ferrari monte sur le podium avec Carlos Sainz Jr.",

            "conclusion" => "Le Grand Prix de Bahreïn 2024 a confirmé la domination de Max Verstappen et Red Bull. Le champion du monde en titre a remporté sa première victoire de la saison avec une avance confortable sur son coéquipier Sergio Pérez. Carlos Sainz Jr. a réalisé une superbe performance en terminant sur le podium pour Ferrari.
            Verstappen a été intouchable tout au long du week-end. Il a réalisé la pole position, a dominé les essais libres et a remporté la course avec une grande marge. Red Bull semble avoir une voiture beaucoup plus performante que ses concurrentes et Verstappen est en lice pour un quatrième titre mondial consécutif.
            Sainz a été le seul pilote à pouvoir contester la domination de Red Bull. Il a réalisé un excellent départ et a réussi à se maintenir en troisième position tout au long de la course. Ferrari semble avoir progressé par rapport à l'année dernière et Sainz pourrait être un prétendant au podium régulier cette saison.",

            "extra" => null,
        ];
        // $raceStories[] = [
        //     "id" => 202401,

        //     "catchphrase" => "",

        //     "intro" => "",

        //     "first_part" => "",

        //     "middle_part" => "",

        //     "last_part" => "",

        //     "conclusion" => "",

        //     "extra" => null,
        // ];

        Db::table('race_stories')->insert($raceStories);
    }
}
