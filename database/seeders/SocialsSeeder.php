<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socials=[];
        $socials[]=[
            'id'=>1,
            'twitterName'=>'@ScuderiaFerrari',
            'twitterLink'=>'https://twitter.com/ScuderiaFerrari?s=20',
            'instagramName'=>'@scuderiaferrari',
            'instagramLink'=>'https://www.instagram.com/scuderiaferrari/',
            'websiteName'=>'ferrari.com',
            'websiteLink'=>'https://www.ferrari.com/en-EN/formula1',
            'teamText'=>"L'équipe de Formule 1 Ferrari est connue dans le monde entier pour son héritage glorieux et ses performances exceptionnelles. Depuis sa création en 1950, Ferrari a été un acteur majeur dans le monde de la course automobile, accumulant un nombre impressionnant de titres et de victoires."
        ];
        $socials[]=[
            'id'=>2,
            'twitterName'=>'@redbullracing',
            'twitterLink'=>'https://twitter.com/redbullracing?s=20',
            'instagramName'=>'@redbullracing',
            'instagramLink'=>'https://www.instagram.com/redbullracing/',
            'websiteName'=>'redbullracing.com',
            'websiteLink'=>'https://www.redbullracing.com/',
            'teamText'=>"L'équipe de Formule 1 Red Bull Racing est reconnue comme l'une des forces dominantes de la course automobile moderne. Depuis son arrivée en Formule 1 en 2005, Red Bull Racing a acquis une réputation de performance exceptionnelle et d'innovation audacieuse"
        ];
        $socials[]=[
            'id'=>3,
            'twitterName'=>'@AstonMartinF1',
            'twitterLink'=>'https://twitter.com/AstonMartinF1?s=20',
            'instagramName'=>'@astonMartinF1',
            'instagramLink'=>'https://www.instagram.com/astonmartinf1/',
            'websiteName'=>'astonmartinf1.com',
            'websiteLink'=>'https://www.astonmartinf1.com/',
            'teamText'=>"L'équipe de Formule 1 Aston Martin est synonyme de luxe, d'élégance et de performances de classe mondiale. Après une absence de plus de 60 ans, Aston Martin a fait son retour sur la grille de départ de la Formule 1 en tant qu'équipe à part entière. "
        ];
        $socials[]=[
            'id'=>4,
            'twitterName'=>'@MercedesAMGF1',
            'twitterLink'=>'https://twitter.com/MercedesAMGF1?s=20',
            'instagramName'=>'@mercedesamgf1',
            'instagramLink'=>'https://www.instagram.com/mercedesamgf1/',
            'websiteName'=>'mercedesamgf1.com',
            'websiteLink'=>'https://www.mercedesamgf1.com/',
            'teamText'=>"L'équipe de Formule 1 Mercedes est synonyme de domination et de perfection. Depuis son retour en tant qu'équipe d'usine en 2010, Mercedes a redéfini les normes de la course automobile en remportant un nombre record de championnats du monde des constructeurs et des pilotes. "
        ];
        $socials[]=[
            'id'=>5,
            'twitterName'=>'@alfaromeostake',
            'twitterLink'=>'https://twitter.com/alfaromeostake?s=20',
            'instagramName'=>'alfaromeostake',
            'instagramLink'=>'https://www.instagram.com/alfaromeostake/',
            'websiteName'=>'sauber-group.com',
            'websiteLink'=>'https://www.sauber-group.com/motorsport/formula-1/',
            'teamText'=>"L'équipe de Formule 1 Alfa Romeo incarne l'héritage prestigieux de la marque italienne et la passion pour la course automobile. Avec une histoire riche remontant aux premiers jours de la Formule 1, Alfa Romeo est une icône de la compétition."
        ];
        $socials[]=[
            'id'=>6,
            'twitterName'=>'@AlpineF1Team',
            'twitterLink'=>'https://twitter.com/AlpineF1Team?s=20',
            'instagramName'=>'alpinef1team',
            'instagramLink'=>'https://www.instagram.com/alpinef1team/',
            'websiteName'=>'alpine-cars.co',
            'websiteLink'=>'https://www.alpine-cars.co.uk/formula-1/f1-team.html',
            'teamText'=>"L'équipe de Formule 1 Alpine incarne l'héritage automobile français et la passion pour la performance. Avec une riche histoire dans les sports automobiles, Alpine apporte son savoir-faire technique et son style distinctif à la Formule 1."
        ];
        $socials[]=[
            'id'=>7,
            'twitterName'=>'@WilliamsRacing',
            'twitterLink'=>'https://twitter.com/WilliamsRacing?s=20',
            'instagramName'=>'williamsracing',
            'instagramLink'=>'https://www.instagram.com/williamsracing/',
            'websiteName'=>'williamsf1.com',
            'websiteLink'=>'https://www.williamsf1.com/',
            'teamText'=>"L'équipe de Formule 1 Williams est synonyme d'histoire, d'innovation et d'un héritage d'excellence. Depuis sa fondation en 1977, Williams a été l'un des acteurs clés de la Formule 1, remportant de nombreux titres de champion du monde. "
        ];
        $socials[]=[
            'id'=>8,
            'twitterName'=>'@AlphaTauriF1',
            'twitterLink'=>'https://twitter.com/AlphaTauriF1?s=20',
            'instagramName'=>'alphataurif1',
            'instagramLink'=>'https://www.instagram.com/alphataurif1/',
            'websiteName'=>'scuderia.alphatauri.com',
            'websiteLink'=>'https://scuderia.alphatauri.com/en/',
            'teamText'=>"L'équipe de Formule 1 AlphaTauri incarne l'énergie et la passion de la course automobile. En tant que filiale de Red Bull Racing, AlphaTauri est une équipe dynamique qui allie technologie de pointe et talent pur pour affronter les défis de la Formule 1."
        ];
        $socials[]=[
            'id'=>9,
            'twitterName'=>'@HaasF1Team',
            'twitterLink'=>'https://twitter.com/HaasF1Team?s=20',
            'instagramName'=>'haasf1team',
            'instagramLink'=>'https://www.instagram.com/haasf1team/',
            'websiteName'=>'haasf1team.com',
            'websiteLink'=>'https://www.haasf1team.com/',
            'teamText'=>"L'équipe de Formule 1 Haas incarne la détermination et l'engagement envers le développement constant. Depuis ses débuts en 2016, Haas F1 Team s'est efforcée de construire une équipe compétitive dans l'univers exigeant de la Formule 1."
        ];
        $socials[]=[
            'id'=>10,
            'twitterName'=>'@McLarenF1',
            'twitterLink'=>'https://twitter.com/McLarenF1?s=20',
            'instagramName'=>'mclaren',
            'instagramLink'=>'https://www.instagram.com/mclaren/',
            'websiteName'=>'mclaren.com',
            'websiteLink'=>'https://www.mclaren.com/racing/',
            'teamText'=>"L'équipe de Formule 1 McLaren est synonyme d'innovation, de tradition et de succès. Depuis des décennies, McLaren a été l'un des noms les plus respectés et les plus redoutés dans le monde de la course automobile."
        ];
        $socials[]=[
            'id'=>11,
            'twitterName'=>'@stakef1team_ks',
            'twitterLink'=>'https://twitter.com/stakef1team_ks',
            'instagramName'=>'stakef1team',
            'instagramLink'=>'https://www.instagram.com/stakef1team/',
            'websiteName'=>'stake.com',
            'websiteLink'=>'https://stake.com/sponsorships/alfa-romeo-f1-team-stake',
            'teamText'=>"StakeF1Team est une équipe de Formule 1 dynamique, émergeant d'un partenariat stratégique avec Sauber. Avec une vision tournée vers l'avenir, StakeF1Team prévoit de marquer une nouvelle ère en 2026 en devenant une équipe phare sous la bannière d'Audi. "
        ];
        $socials[]=[
            'id'=>12,
            'twitterName'=>'@visacashapprb',
            'twitterLink'=>'https://twitter.com/visacashapprb',
            'instagramName'=>'visacashapprb',
            'instagramLink'=>'https://www.instagram.com/visacashapprb/',
            'websiteName'=>'visacashapprb.com',
            'websiteLink'=>'https://www.visacashapprb.com/en/',
            'teamText'=>"Née des cendres d'AlphaTauri, l'écurie Visa Cash App RB débarque sur la grille de Formule 1 pour la saison 2024. Propulsée par le groupe Red Bull et affichant une livrée bleu électrique flamboyante, elle se présente comme l'ambitieuse petite sœur de l'écurie championne du monde."
        ];
        
        // $socials[]=[
        //     'id'=>11,
        //     'twitterName'=>'',
        //     'twitterLink'=>'',
        //     'instagramName'=>'',
        //     'instagramLink'=>'',
        //     'websiteName'=>'',
        //     'websiteLink'=>'',
        //     'teamText'=>""
        // ];

        DB::table('socials')->delete();
        DB::table('socials')->insert($socials);



    }
}
