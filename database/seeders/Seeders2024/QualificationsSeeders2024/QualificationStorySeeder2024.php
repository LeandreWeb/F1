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
        $qualificationStory[] = [
            "id" => 202402,

            "catchphrase" => "Bearman Super",

            "intro" => "Le Grand Prix d'Arabie Saoudite s'annonce palpitant, mais un coup dur a frappé l'écurie Ferrari. Carlos Sainz, victime d'une appendicite, ne pourra pas participer aux qualifications. Ce forfait est un véritable bouleversement pour le pilote espagnol et son équipe, qui comptaient sur lui pour rivaliser avec les Red Bull de Max Verstappen et Sergio Pérez.",

            "q1" => "La première session de qualifications du Grand Prix d'Arabie Saoudite a été marquée par un accident majeur impliquant Guanyu Zhou lors des essais libres 3. Les mécaniciens de l'écurie Stake F1 ont travaillé d'arrache-pied pour réparer sa voiture à temps pour les qualifications, mais Zhou n'a pas pu franchir la ligne de départ et s'élancera en dernière position pour la course Outre Zhou, quatre autres pilotes ont été éliminés en Q1 : Logan Sargeant (Williams), Pierre Gasly (Alpine), Esteban Ocon (Alpine) et Valtteri Bottas (Stake F1).",

            "q2" => "La deuxième session de qualifications du Grand Prix d'Arabie Saoudite a été marquée par un drapeau rouge et plusieurs surprises. Nico Hulkenberg a été contraint d'abandonner en raison d'un problème électrique sur sa Haas, tandis que Daniel Ricciardo, Kevin Magnussen, Alex Albon et Oliver Bearman ont été éliminés.Oliver Bearman, qui disputait sa première qualification en Formule 1, a également réalisé une performance remarquable. Le jeune pilote britannique a pris la 11ème position",

            "q3" => "La troisième et dernière session de qualifications du Grand Prix d'Arabie Saoudite a été une véritable bataille pour la deuxième place. Max Verstappen, intouchable, a réalisé un tour extraordinaire en 1:28.171, s'assurant ainsi la pole position pour la course de dimanche.
            Charles Leclerc, Sergio Pérez et Fernando Alonso se sont livrés une lutte acharnée pour la deuxième place. Le Monégasque a finalement réussi à prendre l'avantage sur le Mexicain et l'Espagnol, s'assurant ainsi une place sur la première ligne pour la course.",

            "conclusion" => "Le Néerlandais a réalisé un tour extraordinaire en Q3 et semble intouchable. Il sera difficile pour ses adversaires de le battre dimanche, mais la course n'est jamais terminée avant le drapeau à damier.
            Le Monégasque et le Mexicain ont tous deux réalisé de belles performances en qualifications. Ils seront à l'affût de la moindre erreur de Verstappen pour tenter de lui ravir la victoire.Oliver Bearman, qui remplaçait Carlos Sainz, a réalisé une performance très remarquée en se qualifiant en 11ème position. Le jeune Britannique a montré qu'il avait le potentiel pour devenir un grand pilote de Formule 1.",

            "extra" => null
        ];

        $qualificationStory[] = [
            "id" => 202403,

            "catchphrase" => "Max Poleman",

            "intro" => "Le Grand Prix d'Australie 2024 a connu une semaine de préparation agitée.
            Un accident spectaculaire d'Alex Albon en essais libres a brisé son châssis. Williams, sans châssis de réserve, a placé Albon dans la voiture de Sargent, privant ce dernier de course.
            Sainz de retour, mais diminué.
            Carlos Sainz, de retour après une opération de l'appendicite, n'est pas encore à 100%.",

            "q1" => "Le premier incident notable a impliqué Sergio Pérez et Nico Hulkenberg.
            Alors que  l'Allemand  tentait de réaliser un tour rapide, il s'est retrouvé en face du Mexicain , qui était en train de se préparer pour son propre tour. Hulkenberg a été contraint de ralentir 
            Les commissaires de course ont décidé d'ouvrir une enquête après la séance pour déterminer si Pérez a effectivement bloqué Hulkenberg et s'il mérite une pénalité.
            Pierre Gasly a également attiré l'attention des commissaires de course. Le Français a franchi la ligne blanche à la sortie des stands, ce qui est une infraction passible d'une pénalité.
            Daniel Ricciardo avait réalisé un superbe dernier tour qui lui aurait permis de se qualifier en Q2. Cependant, son rêve a été brisé lorsque les commissaires ont décidé d'annuler son temps pour avoir dépassé les limites de la piste dans le virage 4. Une terrible déception pour le pilote australien, qui espérait briller devant son public.
            Zhou a pris le virage 10 un peu trops large et a pris la courbe violemment, détruisant son aileron avant et compromettant son dernier tour.",

            "q2" => " Le septuple champion du monde n'a pas réussi à trouver le rythme nécessaire pour se qualifier en Q3 et s'est classé 11ème. Une performance décevante pour le Britannique et Mercedes, qui devront se battre en course pour remonter dans le peloton.
            L'autre surprise de la Q2 est venue de Yuki Tsunoda. Le pilote japonais, au volant de sa RB, a réalisé un superbe dernier tour pour se hisser en Q3. Une performance impressionnante qui confirme le potentiel de Tsunoda et qui lui offre une belle opportunité de marquer des points lors de la course sprint.
            Outre Hamilton, les autres pilotes qui n'ont pas réussi à se qualifier en Q3 sont Alex Albon (Williams), Valtteri Bottas (Stake F1), Kevin Magnussen (Haas) et Esteban Ocon (Alpine).
            ",

            "q3" => "La Q3 du Grand Prix d'Australie 2024 a été une véritable bataille entre Red Bull et Ferrari. Les deux équipes se sont livrées à un duel acharné pour la pole position.
            La séance a été marquée par un incident impliquant Fernando Alonso. Le pilote Alpine a perdu le contrôle de sa voiture dans le virage 6 lors de son premier tour. Cela l'a contraint à abandonner son tour et à se contenter d'une 10ème place sur la grille de départ.
            Malgré la pression des Ferrari, Verstappen n'a pas tremblé et a réalisé un tour impeccable pour s'adjuger sa troisième pole position de la saison. Le Néerlandais semble en pleine forme et sera le favori pour la victoire lors de la course.
            Les Ferrari de Sainz et Pérez se sont classées deuxième et troisième, à quelques dixièmes de secondes de Verstappen. Les deux pilotes seront à l'affût du moindre faux pas du Néerlandais pour tenter de lui chiper la victoire.
            ",

            "conclusion" => "Oscar Piastry s'est illustré en signant une superbe performance. Le jeune Australien, au volant de sa Mclaren, a réalisé le sixième temps et se positionne comme une menace pour la course.
            Daniel Ricciardo, en revanche, a connu une journée difficile. Le pilote RB n'a pas réussi à trouver le rythme et s'est qualifié en 18ème position. Une performance décevante pour l'Australien qui devra se battre en course pour remonter dans le peloton.
            La lutte entre Red Bull et Ferrari a été l'un des moments forts de la séance. Max Verstappen a réalisé un tour impeccable pour s'adjuger sa troisième pole position de la saison. Le Néerlandais semble en pleine confiance et sera le favori pour la victoire.
            Cependant, les Ferrari de Carlos Sainz et Sergio Pérez ne sont pas loin. Les deux pilotes seront à l'affût du moindre faux pas de Verstappen pour tenter de lui voleer la victoire.",

            "extra" => "Après une enquête approfondie, la FIA a décidé de pénaliser Sergio Pérez de trois positions sur la grille de départ du Grand Prix d'Australie 2024. Le Mexicain a été reconnu coupable d'avoir entravé Nico Hülkenberg lors de la Q1, ce qui a eu un impact négatif sur le tour du pilote Haas.
            Lando Norris, Charles Leclerc et Oscar Piastri gagnent donc chacun une position sur la grille de départ. Norris passe de la quatrième à la troisième place, Leclerc de la cinquième à la quatrième et Piastri de la sixième à la cinquième.
            La pénalité de Pérez est un coup dur pour Red Bull, qui perd une place sur la grille de départ pour son deuxième pilote. Cela pourrait avoir un impact important sur la stratégie de l'équipe pour la course.
            "
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
