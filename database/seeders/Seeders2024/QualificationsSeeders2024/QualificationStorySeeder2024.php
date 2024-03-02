<?php

namespace Database\Seeders\Seeders2024\QualificationsSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QualificationStorySeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationStory = [];

        $qualificationStory[] = [
            "id" => 202401,

            "catchphrase" => "Duel au sommet",

            "intro" => "Après une longue trêve hivernale, la Formule 1 est enfin de retour ! Le coup d'envoi de la saison 2024 sera donné ce week-end sur le circuit international de Sakhir à Bahreïn. Les essais hivernaux nous ont donné un aperçu des forces en présence, mais il est encore trop tôt pour tirer des conclusions hâtives. Red Bull, championne du monde en titre, semble toujours être l'équipe à battre, mais la concurrence s'annonce plus féroce que jamais.",

            "q1" => "Le premier coup d'oeil sur la hiérarchie de la saison 2024 a été donné lors de la Q1 du Grand Prix de Bahreïn. Si Red Bull et Ferrari ont confirmé leur statut de favoris, la surprise est venue de l'écurie Alpine.
            Esteban Ocon et Pierre Gasly n'ont pas réussi à se qualifier pour la Q2, terminant respectivement en 19ème et 20ème position. Un véritable coup dur pour l'équipe française qui nourrissait de grandes ambitions pour cette saison.
            Logan Sargent, le rookie chez Williams, n'a pas non plus été en mesure de passer en Q2, tout comme les deux pilotes Sauber, Zhou Guanyu et Valtteri Bottas",

            "q2" => "La Q2 du Grand Prix de Bahreïn a été le théâtre d'une surprise de taille : la qualification de Nico Hulkenberg en Q3 avec sa Haas. Le pilote allemand, qui n'était attendu que dans le fond de grille, a réalisé un tour exceptionnel pour se hisser à la 10ème place.
            Yuki Tsunoda (AlphaTauri), Lance Stroll (Aston Martin), Alex Albon (Williams), Daniel Ricciardo (McLaren) et Kevin Magnussen (Haas) n'ont pas été en mesure de se qualifier pour la Q3.",

            "q3" => "La Q3 du Grand Prix de Bahreïn a été le théâtre d'une lutte intense pour la pole position. Max Verstappen, le champion du monde en titre, a finalement réalisé le meilleur temps pour s'emparer de la première place sur la grille de départ.
            Charles Leclerc (Ferrari), George Russell (Mercedes) et Carlos Sainz Jr. (Ferrari) ont également réalisé de belles performances et se sont qualifiés en deuxième, troisième et quatrième position.",

            "conclusion" => "Max Verstappen a réalisé une performance impressionnante lors des qualifications du Grand Prix de Bahreïn en s'emparant de la pole position. Le champion du monde en titre a devancé Charles Leclerc, George Russell et Carlos Sainz Jr., qui se sont qualifiés en deuxième, troisième et quatrième position.
            La surprise de la journée est venue de Nico Hulkenberg qui a qualifié sa Haas en Q3. Le pilote allemand a réalisé une performance exceptionnelle pour se hisser à la 10ème place.
            La performance d'Alpine est en revanche décevante. Esteban Ocon et Pierre Gasly n'ont pas réussi à se qualifier pour la Q2 et s'élanceront respectivement en 19ème et 20ème position.",

            "extra" => null
        ];




        // $qualificationStory[] = [
        //     "id" => 202401,

        //     "catchphrase" => "",

        //     "intro" => "",

        //     "q1" => "",

        //     "q2" => "",

        //     "q3" => "",

        //     "conclusion" => "",

        //     "extra" => null
        // ];




        Db::table('qualification_stories')->insert($qualificationStory);
    }
}
