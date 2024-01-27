<?php

namespace Database\Seeders\Seeders2023\SprintsSeeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintStorySeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SprintStory = [];
        $SprintStory[] = [
            "id" => 202304,
            "catchphrase" => "George et Max en chicane",
            "intro" => "Le grand jour est arrivé pour les fans de Formule 1 alors que la première course sprint de la saison se déroule à Baku. Avec Charles Leclerc en pole position, les yeux sont rivés sur le pilote monégasque pour voir s'il peut résister aux Red Bulls affamées qui se tiennent juste derrière lui sur la grille de départ.",

            "first_part" => "Le départ du sprint de Baku est donné et Charles Leclerc parvient à conserver sa position de poleman après les deux premiers virages. Mais derrière lui, George Russell profite d'un contact avec Max Verstappen au troisième virage pour dépasser le pilote Red Bull au quatrième virage et prendre la deuxième place. Toutefois, le début de course est rapidement perturbé par un accident de Yuki Tsunoda, qui perd le contrôle de sa monoplace AlphaTauri dans le virage 14, entraînant l'intervention de la voiture de sécurité.",

            "last_part" => "Pendant la voiture de sécurité, on peut entendre Max Verstappen exprimer sa frustration envers George Russell à la radio après leur contact au premier tour. Après la relance de la course, Verstappen réussit à dépasser Russell dès le premier virage.Sur la radio, Verstappen fait une remarque cinglante envers Russell, soulignant qu'il est capable de dépasser sans causer d'accrochage contrairement au pilote britannique.
            Au huitième tour, Sergio Perez parvient à dépasser Charles Leclerc pour prendre la première place,Perez réussit à conserver sa position de leader jusqu'à la fin de la course et remporte ainsi le premier sprint de la saison, suivi de près par Leclerc qui termine deuxième et Verstappen qui complète le podium.",

            "conclusion" => "Le premier sprint de la saison à Bakou a offert beaucoup d'excitation et de drame. Charles Leclerc a commencé en pole position mais n'a pas pu maintenir sa position de leader, car Sergio Perez l'a dépassé pour remporter la victoire. Max Verstappen a montré une vitesse impressionnante, dépassant George Russell tôt dans la course et terminant sur le podium à la troisième place. Cependant, la frustration de Verstappen envers Russell était claire, car les deux pilotes se sont touchés dans le premier tour, ce qui a fait perdre du temps à Verstappen.",

            "extra" => null,
        ];
        $SprintStory[] = [
            "id" => 202310,

            "catchphrase" => "Pluie et Stratégies",

            "intro" => "Alors que nous nous préparons pour une course pleine de rebondissements, les enjeux sont élevés pour certains pilotes qui devront effectuer une remontée spectaculaire. Parmi eux, George Russell et Lewis Hamilton, qui ont du travail à faire pour se frayer un chemin à travers le peloton.
            De plus, la météo a décidé de se mêler à la compétition en apportant la pluie sur le circuit autrichien. Cette variable imprévisible ajoute une dose supplémentaire d'incertitude et de complexité à la course. Toute la grille de départ a opté pour des pneus intermédiaires, à l'exception de Valtteri Bottas qui a choisi les pneus mediums, le plaçant à la 19e position sur la grille.",

            "first_part" => "
            La première partie du Sprint Shootout en Autriche a débuté de manière spectaculaire avec un départ impressionnant de Sergio Perez. Le pilote Red Bull a réussi à dépasser Max Verstappen pour prendre la tête de la course. Cependant, sa joie fut de courte durée, car Verstappen a rapidement riposté et repris la première position au virage 3. Mais les surprises ne s'arrêtent pas là.
            Au virage 6, Nico Hülkenberg, qui a réalisé une remarquable performance, a réussi à dépasser Perez pour s'emparer de la deuxième place. Les dépassements et les batailles intenses ont été le point d'orgue de cette première partie du Sprint Shootout. Une bataille féroce pour la 9e position a opposé Lando Norris à Charles Leclerc, tandis que Kevin Magnussen s'est disputé la 11e position avec les deux pilotes McLaren.
            Au tour 12, Perez a fait preuve d'une grande détermination et a réussi à rattraper Hülkenberg, reprenant ainsi la deuxième position. La lutte pour les premières positions reste donc ouverte, avec une compétition acharnée entre les pilotes qui ne reculent devant rien pour gagner des places et se rapprocher du leader, Max Verstappen.",

            "last_part" => "
            Dans la dernière partie du Sprint Shootout en Autriche, la piste commence à sécher progressivement, ce qui ajoute une nouvelle dynamique à la course. Au tour 15, Lando Norris parvient enfin à dépasser Charles Leclerc pour s'emparer de la 9e position, profitant d'une erreur de ce dernier au dernier virage. Les pilotes rivalisent ardemment pour gagner chaque position disponible.
            Au tour 17, George Russell décide de rentrer aux stands pour chausser des pneus tendres, effectuant ainsi un changement stratégique. Il en profite pour réaliser le meilleur tour de piste, ce qui incite plusieurs autres pilotes à suivre son exemple et à effectuer un arrêt aux stands pour changer de pneus. Parmi eux, Nico Hülkenberg parvient à rattraper les pilotes qui n'ont pas effectué de changement de pneus, lui permettant de sécuriser la 6e position. Russell, quant à lui, réalise également une impressionnante remontée, manquant de peu de ravir la 7e place à Esteban Ocon, avec seulement 0.009 seconde d'écart.
            Malgré les événements se déroulant en arrière-plan du classement, Max Verstappen confirme sa domination en remportant facilement le Sprint. Sa maîtrise et sa vitesse ont été remarquables tout au long de la course, lui permettant de franchir la ligne d'arrivée en première position sans être inquiété.",

            "conclusion" => "En conclusion, le Sprint Shootout en Autriche a offert un spectacle intense et captivant aux amateurs de Formule 1. Les pilotes ont fait face à des défis variés, allant des conditions météorologiques changeantes à la gestion stratégique des pneus. Malgré les rebondissements et les batailles serrées tout au long de la course, c'est Max Verstappen qui a brillé en remportant une victoire dominante.
            Les performances exceptionnelles de Verstappen soulignent sa maîtrise et sa détermination à maintenir sa position de leader. Cependant, il ne faut pas négliger les prouesses des autres pilotes qui ont rivalisé avec ténacité pour gagner des places et se frayer un chemin vers le haut du classement.
            Le Sprint Shootout en Autriche a également révélé l'importance des stratégies et des décisions tactiques dans la course. Les arrêts aux stands opportuns et les choix de pneus ont joué un rôle crucial dans la performance des pilotes. Les dépassements audacieux et les batailles acharnées ont créé une atmosphère palpitante et imprévisible tout au long de la course.",

            "extra" => null,
        ];
        $SprintStory[] = [
            "id" => 202313,

            "catchphrase" => "Podium surprenant",

            "intro" => "Alors que les nuages sombres continuent de verser leur pluie incessante sur le légendaire circuit de Spa-Francorchamps, le sprint tant attendu subit un délai inattendu. Les équipes scrutent anxieusement les cieux, cherchant une fenêtre pour lancer enfin cette course électrisante. Mais lorsque le moment arrivera enfin et que les feux s'éteindront, le premier virage s'annonce comme un moment véritablement électrisant.",

            "first_part" => "Le moment tant attendu est enfin arrivé, après un retard de plus de 35 minutes par rapport à son heure de départ prévue. La pluie incessante avait rendu les conditions extrêmement difficiles, mais après plusieurs tours derrière la voiture de sécurité pour évaluer la piste, la course démarre enfin avec un départ roulant.
            Pendant les tours derrière la voiture de sécurité, les conditions de la piste ont commencé à s'améliorer progressivement, offrant aux pilotes l'opportunité de changer de pneus pour des intermédiaires. C'est alors qu'Oscar Piastri de l'écurie McLaren prend une décision audacieuse en optant pour cette stratégie. Grâce à un arrêt anticipé aux stands pour les pneus intermédiaires, il parvient à dépasser le leader Max Verstappen, qui a choisi de pitter un tour plus tard.
            Plus loin dans le peloton, le vétéran de la F1, Fernando Alonso, n'a pas eu autant de chance. Dans des conditions toujours glissantes, il perd le contrôle de sa voiture et se retrouve piégé dans le sable, ce qui le contraint à abandonner la lutte pour le moment.
            Avec ce nouvel incident, la voiture de sécurité est déployée à nouveau, rapprochant les voitures et créant une situation tendue sur la piste.",

            "last_part" => "Après le retrait de la voiture de sécurité, l'affrontement entre les deux jeunes talents, Oscar Piastri et Max Verstappen, atteint son apogée. Juste après le virage Eau Rouge, Max trouve une opportunité et dépasse Piastri, reprenant ainsi la tête de la course. La bataille pour la première place continue de faire vibrer les fans présents et les téléspectateurs du monde entier.
            Plus loin dans le peloton, Lewis Hamilton, le champion du monde en titre, montre sa détermination à progresser dans le classement. Il réussit un superbe dépassement sur Sergio Perez pour s'emparer de la quatrième position. Cependant, lors du dépassement, leurs voitures se touchent et la monoplace de Perez subit d'importants dégâts, le contraignant à abandonner la course un tour plus tard. La déception est palpable dans le stand Red Bull alors que leur autre pilote est contraint à l'abandon.
            La direction de course examine attentivement le dépassement de Hamilton sur Perez et décide d'infliger une pénalité de 5 secondes à Hamilton pour l'incident. Cette sanction aura un impact sur le résultat final de la course, mettant en jeu la position de Hamilton dans le classement.
            Cependant, à l'avant de la course, Max Verstappen parvient à garder la tête malgré la pression exercée par Piastri. Le jeune prodige de McLaren donne tout ce qu'il a pour tenter de reprendre la première place, mais Verstappen se montre solide et finit par remporter le sprint de F1 en Belgique 2023.",

            "conclusion" => "En conclusion, le sprint de F1 en Belgique 2023 restera gravé dans les annales comme un événement mémorable et chargé en émotions. Malgré les retards dus aux conditions météorologiques difficiles, la course a finalement offert un spectacle captivant qui a mis en lumière tant la maîtrise des pilotes que l'incertitude inhérente à la compétition automobile.
            L'ascension fulgurante du jeune pilote McLaren, Oscar Piastri, qui a osé défier le leader Max Verstappen, a montré le courage et le talent nécessaires pour réussir dans ce sport exigeant. Les dépassements audacieux, les erreurs coûteuses et les stratégies variées ont ajouté une dose d'imprévisibilité à cette course déjà complexe.
            L'incident entre Lewis Hamilton et Sergio Perez, avec ses conséquences inattendues et la pénalité infligée à Hamilton, rappelle que même les champions chevronnés ne sont pas à l'abri d'erreurs et de décisions difficiles dans le feu de l'action.
            La victoire finale de Max Verstappen, malgré la détermination de ses rivaux, a souligné sa compétence et sa capacité à gérer les situations complexes. La troisième place de Pierre Gasly a été un moment fort pour l'écurie Alpine, signe d'une reprise en force après des défis récents.
            Ce sprint belge a mis en avant le caractère imprévisible et exigeant de la Formule 1, où chaque tour peut changer le destin d'une course et l'issue d'une saison. Les émotions intenses ressenties par les pilotes, les équipes et les fans témoignent de la passion inextinguible qui entoure ce sport automobile de haut niveau.",

            "extra" => null,
        ];
        $SprintStory[] = [
            "id" => 202318,

            "catchphrase" => "Super Rookie",

            "intro" => "Avec la pole position inattendue d'Oscar Piastri, le rookie sensationnel de McLaren, la grille de départ promet une compétition féroce et des dépassements audacieux. Les lumières prêtes à s'éteindre, les moteurs rugissants, chaque virage devient une opportunité d'écrire une nouvelle page de l'histoire de la Formule 1",

            "first_part" => "Le sprint au Qatar débute sur les chapeaux de roues, avec un départ éblouissant pour Oscar Piastri, qui réussit à conserver sa première position dans les premiers tours de cette course effrénée. Cependant, la course n'est pas sans tumultes, car son coéquipier chez McLaren perd plusieurs positions au départ, compromettant sa position initiale.
            Un peu plus loin sur la piste, le jeune prodige Liam Lawson perd le contrôle de son AlphaTauri, échouant dans le sable et déclenchant ainsi l'intervention de la voiture de sécurité. Au troisième tour, George Russell, après un départ exceptionnel où il a réussi à dépasser Norris et Verstappen, s'empare du contrôle du sprint en dépassant Piastri. L'action continue à s'intensifier lorsque, plus tard dans la course, Logan Sargeant répète l'incident de Lawson, entraînant une deuxième intervention de la voiture de sécurité.",

            "last_part" => "Au tour 9, Max Verstappen déclenche sa remontée impressionnante en dépassant Charles Leclerc et Carlos Sainz pour s'emparer de la troisième place. L'action continue à s'intensifier au tour 11 lorsque Piastri, équipé de pneus Medium en meilleur état que ceux de Russell en Soft, réussit à reprendre la tête de la course. Cependant, le spectacle prend une tournure dramatique plus loin sur la piste, alors que Perez, Hulkenberg et Ocon entrent en collision, provoquant leur retrait de la course et déclenchant une nouvelle intervention de la voiture de sécurité.
            Avec le malheur de Perez entraînant un abandon (DNF), Max Verstappen réussit à sécuriser son troisième titre mondial consécutif. Au tour 16, Verstappen continue son ascension en dépassant Russell pour prendre la deuxième position et commence à chasser Piastri en tête de course. Malgré la pression intense, Piastri conserve son sang-froid et réussit à franchir la ligne d'arrivée en tête, décrochant ainsi sa première victoire en Sprint en Formule 1.
            Une course émaillée d'actions, de dépassements et d'incidents imprévus a abouti à une conclusion époustouflante. Oscar Piastri, avec une performance exceptionnelle, écrit une nouvelle page de son ascension fulgurante dans le monde de la Formule 1.",

            "conclusion" => "Le Sprint au Qatar a tenu toutes ses promesses, offrant une course électrisante qui restera gravée dans les annales de la Formule 1. Les rebondissements constants, les dépassements audacieux et les incidents inattendus ont créé un spectacle captivant du début à la fin.
            Oscar Piastri, le jeune rookie de McLaren, a émerveillé le paddock en remportant sa première victoire en Sprint, démontrant une maîtrise exceptionnelle malgré la pression intense de ses concurrents. La remontée impressionnante de Max Verstappen et sa sécurisation du troisième titre mondial consécutif ont ajouté une dimension épique à cette course sprint.
            Cependant, la course n'a pas été exempte de drames, avec les incidents impliquant Perez, Hulkenberg et Ocon, qui ont entraîné leur retrait et suscité l'intervention de la voiture de sécurité à plusieurs reprises. Ces moments forts soulignent la nature imprévisible et impitoyable de la compétition en Formule 1.
            Le Sprint au Qatar a réaffirmé que chaque virage peut changer le cours d'une course, que chaque pilote, du rookie au vétéran, peut être le héros du jour. ",

            "extra" => null,
        ];
        $SprintStory[] = [
            "id" => 202319,

            "catchphrase" => "Heha Sprint Max",

            "intro" => "Les positions de départ ont été déterminées lors du Sprint Shootout, où Max Verstappen a brillé, s'octroyant la pole position. Cependant, la course sprint représente une opportunité pour les pilotes de gagner des points cruciaux.Les amateurs de Formule 1 attendent avec impatience de voir comment les stratégies se déploieront sur cette courte mais intense course.",

            "first_part" => "Le coup d'envoi du Sprint à Austin a été marqué par un départ fulgurant de Charles Leclerc, déterminé à prendre la tête de la course. Cependant, Max Verstappen a réagi de manière agressive, fermant la porte avec détermination et refusant à Leclerc la possibilité de s'emparer de la première place.
            Cette lutte féroce a profité à Lewis Hamilton, qui a su capitaliser sur la bataille en cours, s'insinuant entre Leclerc et Verstappen pour prendre la deuxième position. Pendant ce temps, Carlos Sainz a réalisé un dépassement spectaculaire sur Lando Norris un peu plus tard dans le tour, s'emparant de la quatrième place.
            L'intrigue s'est poursuivie au 10e tour, lorsque Norris a réussi à reprendre sa position à Sainz, grâce à une gestion plus efficace de ses pneus mediums, moins dégradés que les pneus softs de Sainz. ",

            "last_part" => "Austin a vu une bataille acharnée entre George Russell et Carlos Sainz, alors que Russell tentait de prendre la 6e place à Sainz, qui connaissait des difficultés avec des pneus en mauvais état. Malgré les efforts de Russell, Sainz a défendu sa position avec ténacité, repoussant les assauts du pilote britannique.
            Au tour 17, une ombre sombre a plané sur Aston Martin lorsque Lance Stroll a été contraint de retirer sa voiture de la course. Cet abandon est venu s'ajouter aux déceptions précédentes de l'équipe, marquant un nouveau revers dans un week-end difficile pour Aston Martin.
            Finalement, après 19 tours intenses, Max Verstappen a maintenu son leadership avec brio pour franchir la ligne d'arrivée en tête, ajoutant une victoire supplémentaire à sa saison déjà impressionnante.",

            "conclusion" => "Max Verstappen a brillé de bout en bout, maintenant une performance exceptionnelle pour remporter la victoire et s'assurer une position de départ de choix pour le Grand Prix.
            Cependant, la journée a été moins clémente pour l'équipe Aston Martin, confrontée à des déboires persistants. Lance Stroll a dû abandonner, ajoutant une touche amère à un week-end difficile pour l'écurie.
            La lutte acharnée entre les pilotes, les dépassements et les scénarios de stratégie ont offert aux fans un avant-goût excitant de ce qui les attend lors du Grand Prix proprement dit.",

            "extra" => null,
        ];

        Db::table('sprint_stories')->delete();
        Db::table('sprint_stories')->insert($SprintStory);
    }
}
