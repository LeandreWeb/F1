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
        $qualificationStory=[];


        $qualificationStory[]=[
            "id"=>1,
            "catchphrase"=>"Write something",
            "intro"=>"Write something",
            "q3"=>"Write something",
            "q2"=>"Write something",
            "q1"=>"Write something",
            "conclusion"=>"write something",
            "extra"=>null
        ];
        $qualificationStory[]=[
            "id"=>2,
            "catchphrase"=>"Write something",
            "intro"=>"Write something",
            "q3"=>"Write something",
            "q2"=>"Write something",
            "q1"=>"Write something",
            "conclusion"=>"write something",
            "extra"=>null
        ];
        $qualificationStory[]=[
            "id"=>3,
            "catchphrase"=>"2 Mercedes dans le top 3",
            "intro"=>"Après les pratiques, tout semble aller bien pour Verstappen qui a pris la tête lors des deux séances.
             Il est toujours le favori pour la pole position.
              Pendant ce temps, Alonso s'est de nouveau positionné dans le top trois lors des trois séances.
               De son côté, Perez va tenter d'oublier la séance de pratique numéro trois qui a été désastreuse pour lui.",
            "q3"=>"Perez ne profite pas d'un bon weekend, après les difficultés rencontrées lors de la troisième séance,
             il n'a pas réussi à effectuer un bon tour de qualification.
              Il a verrouillé ses freins au virage 3 et a échoué dans le sable avec sa Red Bull.
               Quelque chose ne va pas bien pour Bottas après les pratiques,
                il semble avoir un problème avec sa voiture et se qualifie en P19.
                 Son coéquipier le rejoint en P17. Les deux rookies n'ont pas réussi à se qualifier pour le Q2.
                  Logan essaie encore de se qualifier pour une séance de Q2,
                   tandis que Piastry se positionne en P16 pour ses premières qualifications dans son pays.",
            "q2"=>"La séance de Q2 était plutôt tranquille et rien de trop surprenant pour les conducteurs qui ont été expulsés de la Q2.
             Alpha Tauri ne possède pas encore une voiture assez performante pour atteindre la Q3.
              La plus grande surprise a été Gasly qui a réussi à se qualifier pour la Q3,
               tandis que son coéquipier Ocon s'est retrouvé en P11.
                Hulkenberg a impressionné une fois de plus en se positionnant mieux que Magnussen.",
            "q1"=>"Sans trop de surprises, Verstappen a remporté la pole position,
             mais étant donné que Perez n'était pas en Q1,
              tout le monde s'attendait à ce qu'Alonso se qualifie pour la première ligne pour la course du dimanche.
               Mais non, les deux Mercedes ont surpris et se sont retrouvées en deuxième et troisième position,
                avec Russell qui a battu Hamilton. De son côté, Alonso s'est positionné en 4ème position suivi de Leclerc.",
            "conclusion"=>"Avec les deux Mercedes, s'ils réalisent un bon départ,
             ils pourraient peut-être surprendre la Red Bull de Verstappen et concevoir une stratégie pour récolter une bonne quantité de points après un début de saison plus qu'ordinaire.
              Il faudra également surveiller Perez qui devra remonter le peloton pour sauver son weekend.",
            "extra"=>null
        ];


        Db::table('qualification_stories')->delete();
        Db::table('qualification_stories')->insert($qualificationStory);
    }
}
