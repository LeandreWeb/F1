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
        $SprintShootoutStory[]=[
            "id"=>4,
            "catchphrase"=>"Et de 2 pour Charles",
            "intro"=>"Bienvenue à la première session du Sprint Shootout ! Cette nouvelle format de la Formule 1 est similaire aux qualifications,
             mais avec un temps réduit, et déterminera la grille de départ pour le sprint qui aura lieu un peu plus tard dans la journée",
            "q1"=>"Pierre Gasly a connu un week-end à oublier à Bakou, avec un autre abandon sur problème mécanique en Q3. À quelques minutes de la fin de la session, il a dû rentrer aux stands pour retirer sa voiture de la piste.
            De plus, la séance a également été marquée par l'accident de Logan Sargeant dans le virage 15, mais heureusement son temps précédent lui a permis de se qualifier en Q2.",
            "q2"=>"La Q2 a été une séance relativement calme, sans interruption de course.L'équipe Williams a confirmé que la voiture de Sargeant avait été trop endommagée lors de son accident en Q1 et qu'elle ne pourrait pas être réparée à temps pour la Q2.
             Par conséquent, il a été contraint de se qualifier en P15 pour la course.",
            "q3"=>"Pour les qualifications Q3 à Bakou, bien que Norris ait réussi à se qualifier pour cette étape, il n'avait pas les pneus nécessaires pour rivaliser avec les autres concurrents. Au début des qualifications, Charles Leclerc a établi le temps à battre avec un chrono de 1:41.697.

            Au cours des derniers tours, ni les pilotes de Red Bull ni Leclerc lui-même n'ont été en mesure de battre ce temps, car Leclerc a finalement terminé avec le meilleur temps. Cependant, il a malheureusement perdu le contrôle de sa Ferrari dans le virage 4 et a eu un accident.",
            "conclusion"=>"Bien que Charles Leclerc ait réussi à établir le temps le plus rapide lors des qualifications Q3 à Bakou, son accident dans le virage 4 a été un événement malheureux pour lui et son équipe. Cependant, cela n'a pas terni la performance exceptionnelle de Leclerc et de son équipe. Les qualifications ont été un spectacle fascinant pour les fans de Formule 1, et les résultats ont montré que la compétition sera intense pour la course à venir. ",
            "extra"=>null
        ];;


        Db::table('sprint_shootout_stories')->delete();
        Db::table('sprint_shootout_stories')->insert($SprintShootoutStory);

    }
}
