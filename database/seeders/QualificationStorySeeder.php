<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QualificationStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationStory = [];


        $qualificationStory[] = [
            "id" => 1,
            "catchphrase" => "Write something",
            "intro" => "Write something",
            "q3" => "Write something",
            "q2" => "Write something",
            "q1" => "Write something",
            "conclusion" => "write something",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 2,
            "catchphrase" => "Write something",
            "intro" => "Write something",
            "q3" => "Write something",
            "q2" => "Write something",
            "q1" => "Write something",
            "conclusion" => "write something",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 3,
            "catchphrase" => "2 Mercedes dans le top 3",
            "intro" => "Après les pratiques, tout semble aller bien pour Verstappen qui a pris la tête lors des deux séances.
             Il est toujours le favori pour la pole position.
              Pendant ce temps, Alonso s'est de nouveau positionné dans le top trois lors des trois séances.
               De son côté, Perez va tenter d'oublier la séance de pratique numéro trois qui a été désastreuse pour lui.",
            "q1" => "Perez ne profite pas d'un bon weekend, après les difficultés rencontrées lors de la troisième séance,
             il n'a pas réussi à effectuer un bon tour de qualification.
              Il a verrouillé ses freins au virage 3 et a échoué dans le sable avec sa Red Bull.
               Quelque chose ne va pas bien pour Bottas après les pratiques,
                il semble avoir un problème avec sa voiture et se qualifie en P19.
                 Son coéquipier le rejoint en P17. Les deux rookies n'ont pas réussi à se qualifier pour le Q2.
                  Logan essaie encore de se qualifier pour une séance de Q2,
                   tandis que Piastry se positionne en P16 pour ses premières qualifications dans son pays.",
            "q2" => "La séance de Q2 était plutôt tranquille et rien de trop surprenant pour les conducteurs qui ont été expulsés de la Q2.
             Alpha Tauri ne possède pas encore une voiture assez performante pour atteindre la Q3.
              La plus grande surprise a été Gasly qui a réussi à se qualifier pour la Q3,
               tandis que son coéquipier Ocon s'est retrouvé en P11.
                Hulkenberg a impressionné une fois de plus en se positionnant mieux que Magnussen.",
            "q3" => "Sans trop de surprises, Verstappen a remporté la pole position,
             mais étant donné que Perez n'était pas en Q1,
              tout le monde s'attendait à ce qu'Alonso se qualifie pour la première ligne pour la course du dimanche.
               Mais non, les deux Mercedes ont surpris et se sont retrouvées en deuxième et troisième position,
                avec Russell qui a battu Hamilton. De son côté, Alonso s'est positionné en 4ème position suivi de Leclerc.",
            "conclusion" => "Avec les deux Mercedes, s'ils réalisent un bon départ,
             ils pourraient peut-être surprendre la Red Bull de Verstappen et concevoir une stratégie pour récolter une bonne quantité de points après un début de saison plus qu'ordinaire.
              Il faudra également surveiller Perez qui devra remonter le peloton pour sauver son weekend.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 4,
            "catchphrase" => "Ferrari de retour au sommet",
            "intro" => "Après une pause de plus de quatre semaines, la Formule 1 est de retour à Bakou pour le Grand Prix d'Azerbaïdjan.
             Les équipes et les pilotes sont prêts à en découdre sur le circuit urbain de la ville,
              qui promet des qualifications fortes en émotions.",
            "q1" => "La première séance de qualifications du Grand Prix d'Azerbaïdjan a commencé avec un accident de Nick de Vries,
             le rookie néerlandais d'Alpha Tauri.
              De Vries a perdu le contrôle de sa voiture dans le virage 3 et a heurté les barrières de sécurité, provoquant un drapeau rouge.
            Une fois la séance relancée, c'était au tour de Pierre Gasly, pilote d'Alpine, de faire la même erreur au même virage.
             Sa voiture a également heurté les barrières de sécurité, provoquant un deuxième drapeau rouge.,
                   tandis que Piastry se positionne en P16 pour ses premières qualifications dans son pays.",
            "q2" => "La deuxième séance de qualifications s'est déroulée sans incident majeur, contrairement à la Q1 qui a été interrompue deux fois par des accidents.
             Cependant, la Q2 a réservé quelques surprises pour les fans de F1. Tout d'abord, George Russell a été éliminé de la course à la pole position en se classant 11ème,
              tandis que son coéquipier Hamilton , a réussi à se qualifier pour la Q3 de justesse.
            D'autre part, nous avons assisté à la première présence de l'américain Logan Sargeant en Q2.
             Malheureusement, il n'a pas pu poursuivre jusqu'en Q3, mais cette performance prometteuse montre qu'il a le potentiel pour briller dans les prochaines courses.",
            "q3" => "La Q3 a été l'apogée des qualifications du Grand Prix d'Azerbaïdjan, avec une compétition féroce pour la pole position.
             Après leur première sortie, Charles Leclerc et Max Verstappen ont réalisé le même temps,
              mais Verstappen avait complété son tour en premier, ce qui lui a donné l'avantage.
            Cependant, lors de leur deuxième sortie,
             Leclerc a réussi à améliorer son temps et à décrocher la pole position.
              Le Monégasque a signé un temps de 1:40.203, battant Verstappen de 0.88 secondes.
               C'est la troisieme pole position consécutive pour Leclerc a Baku",
            "conclusion" => "En conclusion, les qualifications du Grand Prix d'Azerbaïdjan ont été marquées par des moments forts,
             tels que les accidents de Nick de Vries et Pierre Gasly en Q1,
              ainsi que la performance solide de Charles Leclerc en Q3,
               qui a réussi à décrocher la pole position devant Max Verstappen.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 5,
            "catchphrase" => "Surprise a Miami",
            "intro" => "Après une fin de semaine décevante à Baku et une réputation en berne pour le circuit de Miami, les attentes pour les qualifications de la F1 étaient plutôt faibles. Mais en F1, comme dans tout sport, rien n'est jamais joué d'avance.",
            "q1" => "La Q1 s'est déroulée dans une relative tranquillité, mais quelques incidents ont émaillé la séance. Hamilton, pourtant habitué aux premières places, a percuté la barrière au virage 17, causant des dégâts à son aileron avant. Zhou et Sainz ont quant à eux frôlé la catastrophe en évitant de justesse un contact au virage 8. Mais la surprise est venue de Stroll, qui s'est positionné en P18, signant ainsi le pire résultat de son écurie Aston Martin en 2023. ",
            "q2" => "La Q2 a été encore plus calme que la précédente, mais elle a réservé une surprise de taille : Hamilton, habituellement en haut du tableau, n'a pas réussi à se qualifier pour la Q3 et a signé son pire résultat aux États-Unis en se positionnant en 13ème position. Ce revers inattendu pour le septuple champion du monde de F1 est un coup dur pour son écurie, Mercedes, qui espérait sans doute mieux sur le circuit de Miami. D'un autre côté, Bottas a réussi à se qualifier pour la Q3 avec sa voiture Alfa Romeo, signant ainsi la meilleure séance de qualification de l'année pour cette écurie.",
            "q3" => "La Q3 a été marquée par plusieurs rebondissements, notamment dès la première sortie des stands. Verstappen a commis une erreur au virage 6, abandonnant son tour et hypothéquant ainsi ses chances de pole position. De son côté, Leclerc a mal négocié le virage 17, obtenant un mauvais résultat pour sa Ferrari. Perez se qualifi 1er pour la premiere sortie. Cependant, la session a été brutalement interrompue lorsque Leclerc a perdu le contrôle de sa voiture au virage 6, provoquant un accident qui a entraîné la sortie du drapeau rouge et la fin prématurée de la séance de qualifications. Avec sa performance décevante, Verstappen se retrouve relégué en 9ème position sur la grille de départ. C'est donc avec surprise que Perez gagne la  pole position.Il a été rejoint sur la première ligne par Alonso, qui a réussi à faire parler son expérience pour réaliser un temps remarquable.",
            "conclusion" => "En somme, les qualifications de la 2eme édition de F1 à Miami ont été riches en rebondissements et en surprises. Si les erreurs de Verstappen et Leclerc ont hypothéqué leurs chances de pole position, Perez et Alonso ont su tirer leur épingle du jeu pour se qualifier en tête de la grille. La fin de la session de qualifications, brutalement interrompue par l'accident de Leclerc, a ajouté une touche dramatique à l'événement. Tout est donc possible pour cette course inédite qui s'annonce pleine de suspense et d'émotions. Les fans de F1 sont impatients de voir ce que cette course à Miami leur réserve",
            "extra" => null
        ];


        Db::table('qualification_stories')->delete();
        Db::table('qualification_stories')->insert($qualificationStory);
    }
}
