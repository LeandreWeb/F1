<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RaceStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceStories = [];

        $raceStories[] = [
            "id" => 1,
            "catchphrase" => "Aston Martin Surprenant",
            "intro" => "Première course de la saison après les essais hivernaux et les sessions d'essais,
            tous les yeux sont tournés vers Fernando Alonso et Aston Martin.
            Cependant, l'avantage semble être chez Red Bull avec Max Verstappen en pole position.
            Les essais hivernaux et les sessions d'essais ont permis aux équipes de tester leurs voitures
            et il est maintenant de voir le fruit de leurs efforts.
            Il sera intéressant de voir comment Alonso et Aston Martin se comportent par rapport à leurs concurrents,
            en particulier Red Bull et Verstappen.",

            "first_part" => "Le premier départ de la saison a été intense.
            Max Verstappen a réussi à garder sa première position au premier virage,
            tandis que Charles Leclerc a réussi à dépasser Sergio Perez.
            Cependant, au troisième virage, Sroll a tenté de prendre le virage et a malheureusement frappé la voiture de son coéquipier Fernando Alonso,
            ce qui l'a fait reculer à la 7ème position.
            Heureusement, il n'y a eu aucun dommage pour les deux voitures d'Aston Martin,
            contrairement à la voiture de Hulkenberg chez Haas,
            dont l'aileron avant a été endommagé lors d'un contact avec Ocon.
            C'était malheureux pour Hulkenberg, qui avait réussi à se qualifier assez bien pour la course et aurait pu espérer un bon résultat sans cet incident.",

            "middle_part" => "Au tour 14, c'était malheureux pour la première course du jeune Piastri car sa transmission a sauté,
             le forçant à abandonner la course.
              Au 26ème tour, après avoir effectué un arrêt aux stands,
               Sergio Perez a réussi à dépasser Charles Leclerc pour obtenir la 2ème position.
                Plus tard, au tour 32, après un dépassement de Fernando Alonso sur George Russell,
                 Lance Stroll a également réussi à le dépasser pour prendre la 7eme position",

            "last_part" => "
            Au tour 37, Fernando Alonso a réussi à rattraper Lewis Hamilton,
             et a essayé de le dépasser au virage 4,
              mais en raison d'un sur-virage, Hamilton a repris sa position.
               Cependant, Alonso a continué à pousser et a finalement réussi à dépasser Hamilton de manière spectaculaire par l'intérieur du virage 10 au tour 38.

               Au tour 41, c'était un désastre pour Charles Leclerc, tranquille en 3ème position,
                car sa Ferrari s'est éteinte en raison d'un problème électrique, le forçant à se retirer de la course.
                 Avec le DNF de Leclerc, Alonso a senti la possibilité d'un podium s'il parvenait à dépasser le coéquipier de Leclerc, Carlos Sainz,
                  qui occupait la 3ème position. Et il a réussi à le faire au tour 46,
                   après un dépassement similaire à celui qu'il avait fait sur Hamilton plus tôt.

                Max Verstappen a eu une course tranquille et a finalement gagné avec une différence de plus de 11 secondes sur le deuxième
            ",

            "conclusion" => "La course a été très excitante avec de nombreux dépassements et des moments intenses,
             mais au final, Verstappen a montré sa domination dès le début de la saison.

            Le milieu de peloton a été plutôt tranquille avec quelques exceptions comme Pierre Gasly qui a réussi à remonter de la 20ème à la 9ème place et Alexander Albon qui a marqué un point pour Williams en terminant 10ème.

            Cependant, la star du week-end a été Fernando Alonso,
             avec ses nombreuses manoeuvres de dépassement impressionnantes. Sa remontée sur le terrain a été très appréciée des fans et il a clairement montré qu'il était de retour en forme.
              On attend avec impatience les prochaines courses pour voir comment les choses vont se dérouler pour les différents pilotes et équipes.",

            "extra" => null,
        ];
        $raceStories[] = [
            "id" => 2,
            "catchphrase" => "Domination Red Bulls ",
            "intro" => "Please write an Intro  you lazy ",
            "first_part" => "Please Write a firstpart you lazy",
            "middle_part" => "Please Write a middlepart you lazy",
            "last_part" => "Please Write a firstpart you lazy",
            "conclusion" => "Please Write a conclusion you lazy",
            "extra" => null,
        ];
        $raceStories[] = [
            "id" => 3,
            "catchphrase" => "Chaos a Melbourne",
            "intro" => "Ronde 3, Nous sommes maintenant en Australie,
             le pays des kangourous.
              Après les qualifications, il est surprenant de voir les Mercedes-Benz à la deuxième et à la troisième place sur la grille de départ.",
            "first_part" => "Départ mouvementé, dès le premier virage, Russell dépasse Verstappen.
             Au troisième virage, c'est maintenant Hamilton qui dépasse Verstappen,
              plaçant ainsi les deux Mercedes en tête du peloton.
               Hamilton réussit son dépassement, mais au virage 3,
                Charles Leclerc a un impact avec Lance Stroll, ce qui le fait finir dans le bac à sable et met fin à sa course.
                 La voiture de Leclerc reste échouée dans un endroit dangereux, ce qui déclenche la voiture de sécurité pour trois tours.
                  Au tour 7, Albon, qui était en 6e position, a un accident au virage 6.
                   L'accident provoque la présence de graviers sur la piste et entraîne un drapeau rouge.",
            "middle_part" => "La course reprend, et dès le 3e virage, De Vries est expulsé dans les airs après un contact avec Ocon.
             Au tour suivant, Carlos Sainz dépasse son ancien coéquipier Norris au même virage.
              Au tour 12, Verstappen prend la tête du Grand Prix en dépassant Hamilton grâce au deuxième DRS.
               Au tour 15, Sainz effectue un autre dépassement au virage 3, cette fois-ci sur Stroll, et Perez dépasse Magnussen au virage 9.
                Perez tente de remonter après des qualifications difficiles.
                 Au tour 18, Russell s'arrête à la sortie des stands car son moteur est en feu.
                  Après les deux premières rondes, les Ferrari semblent enfin être en forme,
                   avec un autre dépassement de Carlos Sainz au tour 25 sur Gasly.
                    Perez continue sa remontée en passant Norris au tour 43, puis Hulkenberg au tour 44.
                    Au tour 56, Magnussen heurte la barrière avec son pneu arrière et arrache celui-ci. Son crash entraîne de nombreux débris sur la piste,
                     ce qui provoque un deuxième drapeau rouge.",
            "last_part" => "Au 3ème départ de la course, c'est le chaos total.
             Dès le premier virage, Sainz heurte Alonso, le faisant tourner et le reléguant en queue de peloton.
              En outre, Logan Sergeant freine brusquement, bloquant ses pneus, ce qui entraîne une collision avec Nick de Vries.
               Gasly, après une magnifique course, évite les accidents devant lui, mais en rejoignant le circuit au 2ème virage, il entre en collision avec son coéquipier et les deux voitures Alpines sont éliminées.
                Au virage 3, c'est maintenant Stroll qui bloque ses pneus et passe dans le bac à sable, mais réussit à en sortir.
                 Suite à l'accident des deux voitures Alpines, un troisième drapeau rouge est déployé.
                  Les directeurs de course décident d'arrêter la course pour délibérer sur les résultats finaux.
                   Après plusieurs minutes, il est décidé que les positions avant le drapeau rouge seront conservées, mais uniquement pour les voitures encore en course,
                    ce qui signifie qu'Alonso reprend la 3ème position. Sainz écope d'une pénalité de 5 secondes qui le place en dernière position.
                     Après tout le chaos, c'est Verstappen qui triomphe.",
            "conclusion" => "En conclusion, la course a été marquée par de nombreux incidents dès le début,
             avec des collisions et des accidents qui ont entraîné plusieurs drapeaux rouges.
              Les voitures des équipes Alpines ont été éliminées dans un accident impliquant leur coéquipier Gasly.
               Les directeurs de course ont pris la décision de conserver les positions avant le dernier drapeau rouge pour les voitures encore en course,
                ce qui a permis à Alonso de reprendre la 3ème position malgré son spin initial. Sainz a écopé d'une pénalité de 5 secondes pour son implication dans un accident.
                 Finalement, c'est Verstappen qui a remporté la course, profitant des circonstances chaotiques pour monter sur la plus haute marche du podium.
                  Cette course a été pleine de rebondissements et de surprises, confirmant que la Formule 1 peut être imprévisible et pleine d'action à chaque tour de piste.",
            "extra" => null,
        ];
        $raceStories[] = [
            "id" => 4,
            "catchphrase" => "Calme a Bakou",
            "intro" => "Après une première tentative plus ou moins réussie avec le nouveau format de course sprint en F1, il est maintenant temps pour les pilotes de se préparer pour l'événement principal. La ville de Baku en Azerbaïdjan accueille la quatrième manche du championnat, avec une piste rapide et technique qui promet des sensations fortes pour les fans de F1. ",
            "first_part" => "La course de Baku a débuté avec une relative tranquillité pour un circuit réputé pour son imprévisibilité. Charles Leclerc a conservé sa position en tête de la course au départ.Cependant, Leclerc n'a pas pu garder sa position pendant longtemps, car Max Verstappen a utilisé la supériorité de sa voiture en vitesse pour le dépasser sur la longue ligne droite. Verstappen a alors pris la tête de la course, sous les encouragements de ses fans. Quelques tours plus tard, c'était au tour de son coéquipier chez Red Bull, Sergio Perez, de dépasser Leclerc au même endroit, le reléguant à la troisième place.",
            "middle_part" => "La course a connu un tournant au 11ème tour, lorsque Nyck De Vries a perdu le contrôle de sa voiture au virage 5 et a violemment heurté le mur, endommageant sa suspension avant. Sa voiture est restée bloquée au virage 6, obligeant la direction de course à faire sortir la voiture de sécurité pour dégager la piste. Pendant ce temps, Max Verstappen a sauté aux stands pour un changement de pneus prévu. Cependant, juste après sa sortie des stands, la voiture de sécurité a été déployée, profitant à Sergio Perez, qui a pu faire son changement de pneus et prendre la tête de la course. Cette intervention de la voiture de sécurité a été un véritable avantage pour Perez, qui a su tirer profit de cette situation pour prendre l'avantage sur Verstappen",
            "last_part" => "Le reste de la course a été relativement calme, avec Sergio Perez qui a pu creuser un écart confortable entre lui et Max Verstappen. Malgré cela, il y a eu quelques dépassements notables, comme celui d'Alonso sur Sainz et de Norris sur Hulkenberg. Cependant, un événement surprenant s'est produit au dernier tour. Plusieurs photographes se sont précipités vers les stands pour prendre en photo le vainqueur à la ligne d'arrivée, mais ils ont failli causer un accident en bloquant la voie des stands. Heureusement, cela n'a pas eu de conséquences dramatiques, même si cela a rappelé la nécessité de respecter les règles de sécurité en tout temps. En fin de compte, Sergio Perez a contrôlé la course avec brio et a remporté une victoire bien méritée, sous les applaudissements du public et de son équipe",
            "conclusion" => "
            Bien que la course de Baku ait été réputée pour son imprévisibilité et ses nombreux incidents au fil des ans, l'édition de cette année a été étonnamment calme. Malgré cela, Sergio Perez a su tirer profit de la situation pour remporter une victoire solide et méritée, tandis que Max Verstappen a dû se contenter de la deuxième place. Les dépassements notables de Fernando Alonso et Lando Norris ont ajouté une touche d'excitation à la course, tandis que l'incident avec les photographes a rappelé l'importance de la sécurité en Formule 1. ",
            "extra" => null,
        ];
        $raceStories[] = [
            "id" => 5,
            "catchphrase" => "Course surprenante a Miami",
            "intro" => "Le Grand Prix de Miami F1 de cette année s'annonce palpitant avec une grille de départ surprenante, qui a vu les pilotes habituellement en tête de peloton se retrouver plus loin. Max Verstappen en P9 et Charles Leclerc en P7. Ils vont devoir réaliser une remontée spectaculaire s'ils veulent se battre pour la victoire. Mais avec leur talent et leur expérience, nul doute qu'ils sauront relever le défi et nous offrir une course riche en rebondissements.",
            "first_part" => "La première partie de la course est pleine de rebondissements, notamment en ce qui concerne les stratégies pneumatiques des pilotes. Certains ont opté pour les pneus medium, qui offrent un bon équilibre entre la performance et la durabilité, tandis que d'autres ont préféré les pneus hards, qui sont plus résistants mais moins rapides.

            Dès le troisième tour, Max Verstappen commence à remonter le peloton avec une grande agressivité, effectuant un double dépassement spectaculaire sur Charles Leclerc et Kevin Magnussen pour s'installer à la sixième position. Il continue sur sa lancée et réalise un nouveau dépassement éblouissant sur George Russell au tour 8, avant de s'emparer de la quatrième place en dépassant successivement Pierre Gasly et Carlos Sainz au tour 14.",
            "middle_part" => "Au tour 15, Max Verstappen réalise un autre dépassement impressionnant sur Fernando Alonso pour prendre la deuxième position. Avec un retard de seulement quelques secondes sur son coéquipier Sergio Perez, qui a opté pour les pneus medium, Verstappen peut encore espérer la victoire s'il parvient à maintenir son rythme sur les pneus hards.
            Cependant, la stratégie pneumatique pourrait s'avérer difficile à tenir sur la durée, car les pneus hards ont une durabilité limitée et risquent de se dégrader rapidement. Verstappen devra donc gérer ses pneus avec soin tout en conservant un rythme soutenu pour espérer l'emporter.
            En revanche, la course est plus compliquée pour les pilotes Ferrari, avec Carlos Sainz qui écope d'une pénalité pour excès de vitesse dans les stands. Charles Leclerc, quant à lui, se trouve coincé derrière la Haas de Kevin Magnussen, ce qui l'empêche de progresser dans le classement.",
            "last_part" => "Après plus de 46 tours sur les pneus hards, Max Verstappen décide de s'arrêter aux stands pour chausser des pneus plus frais. Cela donne enfin l'opportunité de voir un véritable duel entre lui et son coéquipier Sergio Perez pour la première place.

            Un tour après son arrêt, Verstappen réalise un superbe dépassement sur Perez dans le virage 1 pour prendre la tête de la course. La bataille entre les deux pilotes de Red Bull est intense, mais Verstappen réussit à maintenir son avance grâce à une gestion impeccable de ses pneus.

            Pendant ce temps, Lewis Hamilton poursuit sa remontée impressionnante depuis la 13ème position sur la grille de départ. Il réussit à dépasser Charles Leclerc pour prendre la 6ème position aux 55ème tours de la course.

            Finalement, Max Verstappen parvient à s'imposer à l'arrivée avec une belle maîtrise de ses pneus et quelques dépassements spectaculaires.",
            "conclusion" => "La course de Formule 1 de Miami 2023 a été riche en rebondissements et en actions spectaculaires. Malgré une position de départ difficile, Max Verstappen a su prendre le contrôle de la course grâce à une stratégie pneumatique agressive et une gestion impeccable de ses pneus. Son coéquipier Sergio Perez a également été un concurrent redoutable, mais Verstappen a finalement réussi à le dépasser pour remporter la victoire.

            Lewis Hamilton a quant à lui effectué une remontée impressionnante depuis la 13ème position sur la grille de départ, mais n'a pu faire mieux qu'une 6ème place. Les pilotes Ferrari ont eu une course difficile, avec Carlos Sainz qui a écopé d'une pénalité pour excès de vitesse dans les stands et Charles Leclerc qui a été bloqué derrière la voiture de Kevin Magnussen pendant une grande partie de la course.

            En somme, cette course a confirmé la domination de Red Bull sur le circuit de Miami et la position de favori de Max Verstappen pour le championnat du monde. Cependant, il reste encore de nombreuses courses à venir dans la saison, et tout peut encore arriver dans le monde de la Formule 1.",
            "extra" => null,
        ];

        Db::table('race_stories')->delete();
        Db::table('race_stories')->insert($raceStories);
    }
}
