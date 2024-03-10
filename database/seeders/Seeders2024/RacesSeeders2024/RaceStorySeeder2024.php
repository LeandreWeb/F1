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
        $raceStories[] = [
            "id" => 202402,

            "catchphrase" => "Bearman Prodige",

            "intro" => "Après des qualifications intenses, le Grand Prix d'Arabie Saoudite s'annonce comme une course palpitante. Charles Leclerc, qualifié en deuxième position, aura-t-il les moyens de défier le leader du championnat, Max Verstappen, qui s'est élancé en pole position ? Tous les regards seront également tournés vers Oliver Bearman, qui remplace Carlos Sainz, forfait pour cause d'appendicite, et s'élancera de la 11ème place.",

            "first_part" => "Dès la fin du tour de formation, Pierre Gasly est contraint à l'abandon. Le Français rencontre des problèmes de transmission et ne peut prendre le départ de la course. Verstappen, en pole position, effectue un excellent départ et prend immédiatement la tête. Il devance Charles Leclerc et Sergio Pérez, qui se livrent à une bataille intense pour la deuxième place. La lutte entre les deux pilotes est serrée, mais Pérez finit par prendre l'avantage au quatrième tour. Deux tours plus tard, Lance Stroll perd le contrôle de sa voiture et heurte le mur. L'accident est spectaculaire, mais le Canadien s'en sort indemne. La voiture de sécurité est déployée pour permettre aux commissaires de piste d'évacuer la monoplace de Stroll.",

            "middle_part" => "La course est relancée et Norris, qui n'a pas effectué son arrêt aux stands, se retrouve en tête devant Verstappen. Le Britannique se défend bien, mais Verstappen finit par le dépasser au 13ème tour.
            Magnussen reçoit deux pénalités de 10 secondes  L'équipe Haas décide de tirer parti de cette situation en demandant à Magnussen de ralentir les pilotes derrière lui afin de permettre à son coéquipier Hülkenberg de faire un arrêt aux stands plus facilement. Bearman continue de montrer son talent en dépassant Hülkenberg pour prendre la 9ème position au 21ème tour. Le jeune Britannique impressionne par sa maturité et sa vitesse.",

            "last_part" => "La stratégie de Haas fonctionne à merveille. Hülkenberg s'arrête aux stands au 34ème tour et parvient à conserver sa 10ème position. Piastry tente de dépasser Hamilton, qui est plus lent en raison de pneus usés. Le jeune Australien met la pression sur le septuple champion du monde, mais Hamilton se défend avec brio et conserve sa position. Piastry ne parvient à prendre l'avantage lorsqu'Hamilton s'arrête enfin aux stands.
            La course se dirige vers son terme et Verstappen contrôle la situation. Il devance Pérez et Leclerc, qui ne semblent pas en mesure de le menacer. Verstappen franchit la ligne d'arrivée en vainqueur et signe sa deuxième victoire consécutive de la saison. Il est suivi par Pérez et Leclerc, qui complètent le podium.",

            "conclusion" => "Le Grand Prix d'Arabie Saoudite a été une course palpitante et pleine de surprises. Max Verstappen a confirmé sa domination en s'imposant pour la deuxième fois consécutive cette saison. Le Néerlandais a été intouchable du début à la fin et a parfaitement géré sa course.
            Derrière Verstappen, Sergio Pérez et Charles Leclerc ont complété le podium. Les deux pilotes ont réalisé une bonne course, mais ils n'ont pas pu rivaliser avec le rythme du leader du championnat.
            La surprise de la journée est venue de Frederik Bearman. Le jeune Britannique, qui remplaçait Carlos Sainz au pied levé, a réalisé une performance exceptionnelle en terminant à la 7ème place. Bearman a montré sa maturité et son talent en dépassant plusieurs pilotes expérimentés.
            L'équipe Haas a également réalisé une belle course. Grâce à une stratégie audacieuse, Hülkenberg a notamment profité de la stratégie de son coéquipier pour prendre la 10ème place.",

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
