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
        ];
        $SprintShootoutStory[]=[
            "id"=>10,
            "catchphrase"=>"Misère pour Mercedes",
            "intro"=>"Alors que les qualifications d'hier bénéficiaient d'une météo clémente, le temps capricieux nous réserve aujourd'hui une ambiance différente. En effet, la pluie pourrait s'inviter à la fête, ajoutant une dose supplémentaire de suspense et de complexité à cette course tant attendue. Les pilotes devront faire preuve d'une concentration extrême, car non seulement ils devront affronter une piste rendue glissante par les averses, mais ils devront également être attentifs aux limites de la piste, qui pourraient s'avérer encore plus délicates à respecter dans ces conditions.",
            "q1"=>"Dans la première séance de Shootout Sprint (S1), l'action était déjà à son comble sur le circuit autrichien. Carlos Sainz, à peine sorti des stands, a rencontré des problèmes de freins, l'obligeant à retourner au garage pour résoudre cette difficulté inattendue. Malgré ces contretemps, Sainz a réussi à effectuer un seul tour chronométré, mais c'était suffisant pour se qualifier pour la S2. Une véritable prouesse pour le pilote qui a su tirer le meilleur parti de cette unique opportunité.
            Cependant, l'atmosphère était loin d'être festive dans le garage de l'écurie Mercedes. Lewis Hamilton a été victime des limites de la piste, ce qui a entraîné la suppression de son meilleur tour chronométré. Un coup dur pour Hamilton, qui a dû se contenter de la 18e place sur la grille de départ. ",
            "q2"=>"La deuxième session de Shootout Sprint (S2) a été marquée par de nouvelles péripéties et surprises sur le circuit autrichien. Alors que les pilotes se préparaient pour cette étape cruciale, George Russell a fait part de problèmes hydrauliques à son équipe via la radio. Malheureusement pour lui, l'équipe n'a pas pu résoudre ces soucis à temps, et sa voiture est restée clouée au garage. Cela signifiait la fin de la session de qualification pour Russell, qui se classe en 15e position. Une véritable déception pour le jeune pilote britannique, ainsi que pour l'écurie Mercedes dans son ensemble, qui n'a pas réussi à placer une seule de ses voitures en S3.
            En revanche, la séance de qualification a réservé une agréable surprise pour l'écurie Haas. Les deux pilotes de l'équipe ont réussi à se qualifier pour la S3, démontrant leur détermination et leur compétitivité sur ce tracé autrichien exigeant.",
            "q3"=>"La troisième et dernière session de qualification (Q3) des Sprint Shootout en Autriche a été relativement calme, avec un protagoniste dominant. Max Verstappen a rapidement imposé son rythme en enregistrant un temps impressionnant dès les premiers tours de piste. Personne n'a réussi à se rapprocher de son chrono, ce qui a confirmé la supériorité de Verstappen sur ce tracé autrichien exigeant.
            Son coéquipier chez Red Bull Racing, Sergio Perez, a également réalisé une performance solide en se qualifiant en deuxième position. L'équipe a ainsi réussi à monopoliser la première ligne de la grille de départ, donnant une indication claire de sa puissance et de son potentiel pour le sprint à venir. La compétitivité de Red Bull Racing a été mise en évidence, et il sera passionnant de voir si cette dynamique se poursuivra pendant le sprint.
            Derrière les pilotes de Red Bull, Lando Norris a également réalisé une prestation impressionnante en se qualifiant en troisième position. Le pilote de McLaren a montré une fois de plus son talent et sa constance, confirmant sa place parmi les meilleurs pilotes de la grille de départ.",
            "conclusion"=>"En conclusion, les Sprint Shootout en Autriche 2023 promettent une compétition palpitante et imprévisible. Des rebondissements dès la Q1, avec les problèmes de freins de Carlos Sainz et la déception de Lewis Hamilton, ont annoncé un déroulement intense de l'événement. La Q2 a été marquée par les soucis hydrauliques de George Russell et la surprise des deux pilotes Haas se qualifiant pour la Q3.
            Finalement, lors de la Q3, Max Verstappen s'est démarqué en réalisant un temps impressionnant, confirmant sa domination sur le circuit autrichien. Son coéquipier, Sergio Perez, s'est également qualifié en deuxième position, tandis que Lando Norris a brillamment complété le trio de tête.
            Ces qualifications ont montré l'importance de la maîtrise technique, de l'adaptabilité et de la persévérance dans des conditions météorologiques changeantes et sur une piste exigeante. Les pilotes ont dû se battre contre les éléments, les limites de la piste et les imprévus mécaniques pour obtenir les meilleures positions possibles sur la grille de départ.",
            "extra"=>null
        ];


        Db::table('sprint_shootout_stories')->delete();
        Db::table('sprint_shootout_stories')->insert($SprintShootoutStory);

    }
}
