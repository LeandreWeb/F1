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
        $socials = [];
        $socials[] = [
            'id' => 1,
            'twitterName' => '@ScuderiaFerrari',
            'twitterLink' => 'https://twitter.com/ScuderiaFerrari?s=20',
            'instagramName' => '@scuderiaferrari',
            'instagramLink' => 'https://www.instagram.com/scuderiaferrari/',
            'websiteName' => 'ferrari.com',
            'websiteLink' => 'https://www.ferrari.com/en-EN/formula1',
            'smallText' => "L'équipe de Formule 1 Ferrari est connue dans le monde entier pour son héritage glorieux et ses performances exceptionnelles. Depuis sa création en 1950, Ferrari a été un acteur majeur dans le monde de la course automobile, accumulant un nombre impressionnant de titres et de victoires."
        ];
        $socials[] = [
            'id' => 2,
            'twitterName' => '@redbullracing',
            'twitterLink' => 'https://twitter.com/redbullracing?s=20',
            'instagramName' => '@redbullracing',
            'instagramLink' => 'https://www.instagram.com/redbullracing/',
            'websiteName' => 'redbullracing.com',
            'websiteLink' => 'https://www.redbullracing.com/',
            'smallText' => "L'équipe de Formule 1 Red Bull Racing est reconnue comme l'une des forces dominantes de la course automobile moderne. Depuis son arrivée en Formule 1 en 2005, Red Bull Racing a acquis une réputation de performance exceptionnelle et d'innovation audacieuse"
        ];
        $socials[] = [
            'id' => 3,
            'twitterName' => '@AstonMartinF1',
            'twitterLink' => 'https://twitter.com/AstonMartinF1?s=20',
            'instagramName' => '@astonMartinF1',
            'instagramLink' => 'https://www.instagram.com/astonmartinf1/',
            'websiteName' => 'astonmartinf1.com',
            'websiteLink' => 'https://www.astonmartinf1.com/',
            'smallText' => "L'équipe de Formule 1 Aston Martin est synonyme de luxe, d'élégance et de performances de classe mondiale. Après une absence de plus de 60 ans, Aston Martin a fait son retour sur la grille de départ de la Formule 1 en tant qu'équipe à part entière. "
        ];
        $socials[] = [
            'id' => 4,
            'twitterName' => '@MercedesAMGF1',
            'twitterLink' => 'https://twitter.com/MercedesAMGF1?s=20',
            'instagramName' => '@mercedesamgf1',
            'instagramLink' => 'https://www.instagram.com/mercedesamgf1/',
            'websiteName' => 'mercedesamgf1.com',
            'websiteLink' => 'https://www.mercedesamgf1.com/',
            'smallText' => "L'équipe de Formule 1 Mercedes est synonyme de domination et de perfection. Depuis son retour en tant qu'équipe d'usine en 2010, Mercedes a redéfini les normes de la course automobile en remportant un nombre record de championnats du monde des constructeurs et des pilotes. "
        ];
        $socials[] = [
            'id' => 5,
            'twitterName' => '@alfaromeostake',
            'twitterLink' => 'https://twitter.com/alfaromeostake?s=20',
            'instagramName' => 'alfaromeostake',
            'instagramLink' => 'https://www.instagram.com/alfaromeostake/',
            'websiteName' => 'sauber-group.com',
            'websiteLink' => 'https://www.sauber-group.com/motorsport/formula-1/',
            'smallText' => "L'équipe de Formule 1 Alfa Romeo incarne l'héritage prestigieux de la marque italienne et la passion pour la course automobile. Avec une histoire riche remontant aux premiers jours de la Formule 1, Alfa Romeo est une icône de la compétition."
        ];
        $socials[] = [
            'id' => 6,
            'twitterName' => '@AlpineF1Team',
            'twitterLink' => 'https://twitter.com/AlpineF1Team?s=20',
            'instagramName' => 'alpinef1team',
            'instagramLink' => 'https://www.instagram.com/alpinef1team/',
            'websiteName' => 'alpine-cars.co',
            'websiteLink' => 'https://www.alpine-cars.co.uk/formula-1/f1-team.html',
            'smallText' => "L'équipe de Formule 1 Alpine incarne l'héritage automobile français et la passion pour la performance. Avec une riche histoire dans les sports automobiles, Alpine apporte son savoir-faire technique et son style distinctif à la Formule 1."
        ];
        $socials[] = [
            'id' => 7,
            'twitterName' => '@WilliamsRacing',
            'twitterLink' => 'https://twitter.com/WilliamsRacing?s=20',
            'instagramName' => 'williamsracing',
            'instagramLink' => 'https://www.instagram.com/williamsracing/',
            'websiteName' => 'williamsf1.com',
            'websiteLink' => 'https://www.williamsf1.com/',
            'smallText' => "L'équipe de Formule 1 Williams est synonyme d'histoire, d'innovation et d'un héritage d'excellence. Depuis sa fondation en 1977, Williams a été l'un des acteurs clés de la Formule 1, remportant de nombreux titres de champion du monde. "
        ];
        $socials[] = [
            'id' => 8,
            'twitterName' => '@AlphaTauriF1',
            'twitterLink' => 'https://twitter.com/AlphaTauriF1?s=20',
            'instagramName' => 'alphataurif1',
            'instagramLink' => 'https://www.instagram.com/alphataurif1/',
            'websiteName' => 'scuderia.alphatauri.com',
            'websiteLink' => 'https://scuderia.alphatauri.com/en/',
            'smallText' => "L'équipe de Formule 1 AlphaTauri incarne l'énergie et la passion de la course automobile. En tant que filiale de Red Bull Racing, AlphaTauri est une équipe dynamique qui allie technologie de pointe et talent pur pour affronter les défis de la Formule 1."
        ];
        $socials[] = [
            'id' => 9,
            'twitterName' => '@HaasF1Team',
            'twitterLink' => 'https://twitter.com/HaasF1Team?s=20',
            'instagramName' => 'haasf1team',
            'instagramLink' => 'https://www.instagram.com/haasf1team/',
            'websiteName' => 'haasf1team.com',
            'websiteLink' => 'https://www.haasf1team.com/',
            'smallText' => "L'équipe de Formule 1 Haas incarne la détermination et l'engagement envers le développement constant. Depuis ses débuts en 2016, Haas F1 Team s'est efforcée de construire une équipe compétitive dans l'univers exigeant de la Formule 1."
        ];
        $socials[] = [
            'id' => 10,
            'twitterName' => '@McLarenF1',
            'twitterLink' => 'https://twitter.com/McLarenF1?s=20',
            'instagramName' => 'mclaren',
            'instagramLink' => 'https://www.instagram.com/mclaren/',
            'websiteName' => 'mclaren.com',
            'websiteLink' => 'https://www.mclaren.com/racing/',
            'smallText' => "L'équipe de Formule 1 McLaren est synonyme d'innovation, de tradition et de succès. Depuis des décennies, McLaren a été l'un des noms les plus respectés et les plus redoutés dans le monde de la course automobile."
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
        $socials[] = [
            'id' => 12,
            'twitterName' => '@visacashapprb',
            'twitterLink' => 'https://twitter.com/visacashapprb',
            'instagramName' => 'visacashapprb',
            'instagramLink' => 'https://www.instagram.com/visacashapprb/',
            'websiteName' => 'visacashapprb.com',
            'websiteLink' => 'https://www.visacashapprb.com/en/',
            'smallText' => "Née des cendres d'AlphaTauri, l'écurie Visa Cash App RB débarque sur la grille de Formule 1 pour la saison 2024. Propulsée par le groupe Red Bull et affichant une livrée bleu électrique flamboyante, elle se présente comme l'ambitieuse petite sœur de l'écurie championne du monde."
        ];

        // 44 prefix for drivers

        $socials[] = [
            'id' => 4416,
            'twitterName' => '@Charles_Leclerc',
            'twitterLink' => 'https://twitter.com/Charles_Leclerc',
            'instagramName' => 'charles_leclerc',
            'instagramLink' => 'https://www.instagram.com/charles_leclerc/',
            'websiteName' => 'CharlesLeclerc.com',
            'websiteLink' => 'https://www.charlesleclerc.com',
            'smallText' => "
            Charles Leclerc, étoile montante de la Formule 1, est un pilote monégasque de 26 ans qui court actuellement pour la Scuderia Ferrari. Son parcours commence en karting, où il collectionne de nombreux titres avant de gravir les échelons du sport automobile. Son talent ne tarde pas à se révéler, le menant à la victoire en GP3 Series et en Championnat de Formule 2 FIA, confirmant son statut de prétendant sérieux pour la Formule 1.
            Arrivé chez Ferrari en 2019, Leclerc s'impose rapidement comme un adversaire redoutable. Il compte à son palmarès cinq victoires en Grand Prix et un impressionnant total de 23 pole positions, démontrant sa vitesse et son habileté à se qualifier en tête de peloton. Bien qu'il ait manqué de justesse le titre de champion en 2022, la détermination et le talent de Leclerc font de lui un pilote à suivre de près dans les années à venir."
        ];
        $socials[] = [
            'id' => 4455,
            'twitterName' => '@Carlossainz55',
            'twitterLink' => 'https://twitter.com/Carlossainz55',
            'instagramName' => 'carlossainz55',
            'instagramLink' => 'https://www.instagram.com/carlossainz55/',
            'websiteName' => 'carlossainz.es',
            'websiteLink' => 'https://www.carlossainz.es/en/',
            'smallText' => "Carlos Sainz Jr., figure de proue madrilène de la royauté du circuit, est un pilote de Formule 1 espagnol de 29 ans qui court pour la Scuderia Ferrari. Il a fait ses débuts en 2015, aux côtés de Max Verstappen chez Toro Rosso, et a rapidement conquis le paddock par son combativité. Tenace en course, il n'hésite pas à pousser sa monoplace à ses limites pour se frayer un chemin dans le peloton.
            Marchant dans les traces de son célèbre père, Carlos a eu de grands défis à relever, d'abord chez McLaren en remplaçant son idole d'enfance Fernando Alonso, puis chez Ferrari en reprenant le volant de Sebastian Vettel. Son talent et son expérience font de lui un pilier de la Scuderia, luttant constamment aux avant-postes pour la victoire."
        ];
        $socials[] = [
            'id' => 4401,
            'twitterName' => '@Max33Verstappen',
            'twitterLink' => 'https://twitter.com/Max33Verstappen',
            'instagramName' => 'maxverstappen1',
            'instagramLink' => 'https://www.instagram.com/maxverstappen1',
            'websiteName' => 'verstappen.com',
            'websiteLink' => 'https://www.verstappen.com/',
            'smallText' => "Max Verstappen, un nom synonyme d'audace et de talent brut en Formule 1, est un jeune prodige belgo-néerlandais de 26 ans qui pilote actuellement pour Red Bull Racing. Issu d'une famille baignée dans le monde de la course automobile, Max débute son ascension fulgurante en karting et devient le plus jeune pilote à disputer un Grand Prix de F1 à l'âge de 17 ans.Son style de pilotage agressif et spectaculaire lui vaut autant d'admirateurs que de détracteurs, mais sa vitesse et sa capacité à dépasser les limites font de lui l'un des pilotes les plus excitants à regarder. Après avoir décroché sa première victoire en Grand Prix en 2016, il est couronné champion du monde pour la première fois en 2021, récidivant en 2022 et 2023, devenant ainsi l'un des plus jeunes triples champions de l'histoire de la F1. Son ambition et son désir de victoire font de lui un adversaire redoutable pour tous les pilotes du plateau et un prétendant sérieux à de nombreux titres dans les années à venir."
        ];
        $socials[] = [
            'id' => 4411,
            'twitterName' => '@SChecoPerez',
            'twitterLink' => 'https://twitter.com/SChecoPerez',
            'instagramName' => 'schecoperez',
            'instagramLink' => 'https://www.instagram.com/schecoperez',
            'websiteName' => 'checoperez.com',
            'websiteLink' => 'https://checoperez.com/',
            'smallText' => "Surnommé Checo, Sergio Pérez est un combattant au toucher délicat, originaire du pays de la Lucha Libre. Ce pilote mexicain de 34 ans court pour Red Bull Racing, après avoir évolué chez Sauber, McLaren, Force India et Racing Point. Son palmarès compte 6 victoires en Grand Prix et 35 podiums, prouvant sa constance et son habileté en course.
            Arrivé chez Red Bull en 2021, Checo a joué un rôle crucial dans les titres de champion du monde de Max Verstappen en 2021, 2022 et 2023. Il a également ajouté cinq victoires supplémentaires à son compteur personnel, démontrant son talent et son importance pour l'écurie.
            Bien que son propre titre reste incertain, surtout face à son coéquipier Verstappen, le travail acharné et la course avec son cœur font de Pérez un pilote apprécié et respecté dans le paddock de la F1."
        ];
        $socials[] = [
            'id' => 4414,
            'twitterName' => '@alo_oficial',
            'twitterLink' => 'https://twitter.com/alo_oficial',
            'instagramName' => 'fernandoalo_oficial',
            'instagramLink' => 'https://www.instagram.com/fernandoalo_oficial',
            'websiteName' => 'kimoa.com',
            'websiteLink' => 'https://kimoa.com/',
            'smallText' => "Fernando Alonso Díaz, surnommé El Nano (Le Petit) en raison de sa petite taille, est un vétéran chevronné de la Formule 1. Cet Espagnol de 42 ans, actuellement chez Aston Martin, a marqué l'histoire de la discipline en remportant les championnats du monde des pilotes en 2005 et 2006 avec Renault.
            Fort de sa vitesse, de son intelligence de course et de son opiniâtreté légendaire, Alonso a cumulé un total impressionnant de 32 victoires en Grand Prix, 22 pole positions et 2267 points en 377 courses. Il est le seul pilote espagnol à avoir remporté le championnat du monde et détenait le record du plus jeune vainqueur de Grand Prix avant d'être battu par Sebastian Vettel.
            Alonso a également piloté pour McLaren et Ferrari tout au long de sa carrière, laissant sa marque sur la Formule 1 par son talent, sa ténacité et son insatiable envie de victoire."
        ];
        $socials[] = [
            'id' => 4418,
            'twitterName' => '@lance_stroll',
            'twitterLink' => 'https://twitter.com/lance_stroll',
            'instagramName' => 'lance_stroll',
            'instagramLink' => 'https://www.instagram.com/lance_stroll/',
            'websiteName' => 'lancestroll.com',
            'websiteLink' => 'https://www.lancestroll.com/',
            'smallText' => "Lance Stroll, pilote de Formule 1 canadien-belge de 25 ans, défend les couleurs d'Aston Martin depuis 2021, après avoir couru pour Williams et Racing Point auparavant.
            Prodige du karting dès son plus jeune âge, il a accumulé les titres au Canada et en Amérique du Nord. Son talent a été repéré par Ferrari qui l'intègre à leur académie de pilotes en 2010. Il fera ensuite ses débuts en Formule 1 en 2017 avec Williams.
            S'il est parfois critiqué pour son arrivée en F1 grâce au soutien financier de son père, Stroll a prouvé son talent en décrochant une pole position et trois podiums en 2020. Son pilotage sous la pluie est un de ses points forts. Son association avec Aston Martin, dont son père est l'un des propriétaires, lui offre une structure stable et lui permet de poursuivre sa progression en F1."
        ];
        $socials[] = [
            'id' => 4444,
            'twitterName' => '@LewisHamilton',
            'twitterLink' => 'https://twitter.com/LewisHamilton',
            'instagramName' => 'lewishamilton',
            'instagramLink' => 'https://www.instagram.com/lewishamilton',
            'websiteName' => 'plus44.world',
            'websiteLink' => 'https://plus44.world/',
            'smallText' => "Lewis Hamilton, un monument du sport automobile et figure emblématique de la Formule 1, est un pilote britannique de 39 ans actuellement engagé avec l'écurie Mercedes. Il détient le record du nombre de victoires en Grand Prix (103), partage le record du nombre de titres de Champion du Monde (7) avec Michael Schumacher, et cumule de nombreux autres records témoignant de son immense talent et de son palmarès hors du commun.
            Hamilton a débuté son ascension fulgurante en karting dès son plus jeune âge. Son talent et sa détermination l'ont propulsé à travers les différents échelons du sport automobile, lui permettant d'intégrer la Formule 1 en 2007 avec l'écurie McLaren.
            Dès sa première saison, il a frôlé le titre de champion, et n'a pas tardé à s'imposer comme un prétendant sérieux. Il décroche son premier titre en 2008, devenant le plus jeune champion du monde à l'époque. S'ensuit une période dominatrice avec McLaren, puis un nouveau défi avec Mercedes en 2013.
            En compagnie de l'écurie allemande, Hamilton a bâti une ère de domination, remportant six titres de Champion du Monde consécutifs entre 2014 et 2020, et établissant de nombreux records au passage. Outre son talent de pilote, il est reconnu pour son engagement humanitaire et son combat pour la diversité et l'inclusion. Son ambition et son désir de conquérir de nouveaux sommets font de lui un personnage unique et admiré dans le monde du sport automobile."
        ];
        $socials[] = [
            'id' => 4463,
            'twitterName' => '@GeorgeRussell63',
            'twitterLink' => 'https://twitter.com/GeorgeRussell63',
            'instagramName' => 'georgerussell63',
            'instagramLink' => 'https://www.instagram.com/georgerussell63',
            'websiteName' => 'georgerussell.komi.io',
            'websiteLink' => 'https://georgerussell.komi.io/',
            'smallText' => "George Russell, étoile montante de la Formule 1, évolue au sein de l'écurie Mercedes aux côtés de Lewis Hamilton. Reconnu pour son pilotage agressif et sa devise Dans le doute, fonce, Russell s'est rapidement imposé comme un adversaire redoutable.
            Après avoir impressionné lors de ses premières saisons, notamment chez Williams, il décroche sa première victoire en Grand Prix à Interlagos, au Brésil, en 2022. Depuis, il a consolidé sa place parmi les meilleurs pilotes avec six meilleurs tours en course et onze podiums au total. Son dévouement, son talent et sa quête incessante de victoire font de Russell un pilote à suivre de près alors qu'il continue à viser le titre de champion dans les années à venir."
        ];
        $socials[] = [
            'id' => 4477,
            'twitterName' => '@ValtteriBottas',
            'twitterLink' => 'https://twitter.com/ValtteriBottas',
            'instagramName' => 'valtteribottas',
            'instagramLink' => 'https://www.instagram.com/valtteribottas',
            'websiteName' => 'linktr.ee/valtteribottas',
            'websiteLink' => 'https://linktr.ee/valtteribottas',
            'smallText' => ""
        ];
        $socials[] = [
            'id' => 4424,
            'twitterName' => '@ZhouGuanyu24',
            'twitterLink' => 'https://twitter.com/ZhouGuanyu24',
            'instagramName' => 'zhouguanyu24',
            'instagramLink' => 'https://www.instagram.com/zhouguanyu24/',
            'websiteName' => 'zhou-guanyu.com',
            'websiteLink' => 'https://www.zhou-guanyu.com/cn/index',
            'smallText' => "Zhou Guanyu, pilote d'origine chinoise de 25 ans, est le premier et, pour l'instant, le seul Chinois à avoir couru en Formule 1. Il fait actuellement partie de l'écurie Stake F1 Team (anciennement Alfa Romeo Sauber). Son parcours sportif a débuté en karting avant de gravir les échelons du sport automobile, notamment en Formula 2. Il a connu une ascension fulgurante, remportant plusieurs victoires et pole positions, ce qui lui a permis d'accéder à la catégorie reine du sport automobile en 2022. Son talent et son ambition font de lui un porte-drapeau pour le développement du sport automobile en Chine et un pilote à suivre de près dans les années à venir."
        ];
        $socials[] = [
            'id' => 4410,
            'twitterName' => '@PierreGASLY',
            'twitterLink' => 'https://twitter.com/PierreGASLY',
            'instagramName' => 'pierregasly',
            'instagramLink' => 'https://www.instagram.com/pierregasly',
            'websiteName' => 'pierregasly.com',
            'websiteLink' => 'https://www.pierregasly.com/fr/',
            'smallText' => "Pierre Gasly, pilote français de 28 ans, évolue actuellement chez Alpine après avoir notamment brillé au sein de l'écurie AlphaTauri (anciennement Scuderia Toro Rosso). Vainqueur surprise du Grand Prix d'Italie 2020, il compte au total un podium et plusieurs points marqués. Reconnu pour son talent en course et son sens du dépassement, il est l'un des espoirs français de la Formule 1."
        ];
        $socials[] = [
            'id' => 4431,
            'twitterName' => '@OconEsteban',
            'twitterLink' => 'https://twitter.com/OconEsteban',
            'instagramName' => 'estebanocon',
            'instagramLink' => 'https://www.instagram.com/estebanocon/',
            'websiteName' => 'esteban-ocon.com',
            'websiteLink' => 'https://www.esteban-ocon.com/',
            'smallText' => "Esteban Ocon, un pilote français de 27 ans, défend les couleurs de l'écurie Alpine F1 Team. Sa carrière en Formule 1 a connu des hauts et des bas, mais il a démontré son talent et sa détermination en remportant son premier Grand Prix en Hongrie en 2021. Son parcours inclut également un podium à Monaco en 2023 et plusieurs classements dans les points. Considéré comme l'un des fers de lance français en F1, Ocon continue de viser le podium et la victoire dans les prochaines saisons."
        ];
        $socials[] = [
            'id' => 4423,
            'twitterName' => '@alex_albon',
            'twitterLink' => 'https://twitter.com/alex_albon',
            'instagramName' => 'alex_albon',
            'instagramLink' => 'https://www.instagram.com/alex_albon/',
            'websiteName' => 'alexalbon.com',
            'websiteLink' => 'https://www.alexalbon.com/',
            'smallText' => "Alexander Albon, pilote thaïlandais de 28 ans sous la bannière Williams Racing, s'est forgé une réputation de pilote rapide en qualification et mature en course. Il a connu un parcours mouvementé en F1, passant par Red Bull, Williams et un rôle de pilote d'essai et de réserve. Son ascension fulgurante l'a vu monter sur le podium lors du Grand Prix de Toscane 2020 (le premier pour un pilote thaïlandais en F1) et s'établir comme un élément important de la grille de départ. Sa détermination et sa capacité d'adaptation font d'Albon un pilote à suivre de près alors qu'il continue de gravir les échelons de la Formule 1."
        ];
        $socials[] = [
            'id' => 4402,
            'twitterName' => '@LoganSargeant',
            'twitterLink' => 'https://twitter.com/LoganSargeant',
            'instagramName' => 'logansargeant',
            'instagramLink' => 'https://www.instagram.com/logansargeant/',
            'websiteName' => 'williamsf1.com/loganSargeant',
            'websiteLink' => 'https://www.williamsf1.com/drivers/3bcdbebc-dc67-4744-aec8-80ac0f33ae02/Logan-Sargeant',
            'smallText' => "Logan Sargeant, pilote américain de 24 ans, est le premier Américain à démarrer une saison de Formule 1 depuis 2007. Il est actuellement chez Williams Racing après avoir brillé en Formula 2. Reconnu pour sa vitesse et son ascension rapide, il a marqué son premier point en F1 à son domicile, lors du Grand Prix des États-Unis en 2023. Son talent et son ambition font de lui un symbole du renouveau du sport automobile américain et un pilote à surveiller de près dans les années à venir."
        ];
        $socials[] = [
            'id' => 4422,
            'twitterName' => '@yukitsunoda07',
            'twitterLink' => 'https://twitter.com/yukitsunoda07',
            'instagramName' => 'yukitsunoda0511',
            'instagramLink' => 'https://www.instagram.com/yukitsunoda0511/',
            'websiteName' => 'yukitsunoda.com',
            'websiteLink' => 'https://www.yukitsunoda.com/',
            'smallText' => "Yuki Tsunoda, un jeune pilote japonais de 23 ans, est actuellement chez RB Formula One Team. Ayant débuté en karting et gravi les échelons du sport automobile, il a connu une ascension fulgurante, passant de la F4 japonaise à la Formule 1 en seulement trois ans. Son talent brut et son approche audacieuse en course lui ont valu le surnom de The Samurai.
            Son style agressif peut parfois l'amener à commettre des erreurs, mais son talent et sa volonté d'apprendre font de lui un pilote prometteur. Il continue à s'adapter à la complexité de la Formule 1 et vise à s'imposer comme un prétendant sérieux sur la grille de départ dans les années à venir."
        ];
        $socials[] = [
            'id' => 4421,
            'twitterName' => '@nyckdevries',
            'twitterLink' => 'https://twitter.com/nyckdevries',
            'instagramName' => 'nyckdevries',
            'instagramLink' => 'https://www.instagram.com/nyckdevries/',
            'websiteName' => 'nyckdevries.com',
            'websiteLink' => 'https://nyckdevries.com/en-us',
            'smallText' => "Nyck de Vries, un pilote néerlandais de 29 ans, jongle actuellement entre plusieurs championnats majeurs. Il pilote pour Mahindra Racing en Formule E et Toyota Gazoo Racing dans le Championnat du Monde d'Endurance FIA.
            En Formule 1, il a officié en tant que pilote de réserve chez Mercedes de 2020 à 2022, participant à des séances d'essais libres pour diverses écuries. Son talent et son expérience font de lui un candidat potentiel pour un poste de titulaire en Formule 1 dans les prochaines saisons."
        ];
        $socials[] = [
            'id' => 4427,
            'twitterName' => '@HulkHulkenberg',
            'twitterLink' => 'https://twitter.com/HulkHulkenberg',
            'instagramName' => 'hulkhulkenberg',
            'instagramLink' => 'https://www.instagram.com/hulkhulkenberg/',
            'websiteName' => 'nicohulkenberg.net',
            'websiteLink' => 'https://www.nicohulkenberg.net/',
            'smallText' => "Nico Hülkenberg, un vétéran allemand de 37 ans de retour en Formule 1, pilote pour l'écurie Haas F1 Team. Surnommé Hulk pour sa carrure imposante, il possède une grande expérience acquise auprès de plusieurs écuries, notamment Williams, Force India, Sauber, Renault, Racing Point et Aston Martin. Son palmarès compte de nombreux classements dans les points et un record peu enviable : le plus grand nombre de courses disputées en F1 sans jamais avoir décroché de podium (181 départs au 29 février 2024).
            Malgré ce manque de podium, Hülkenberg est reconnu pour sa régularité, sa combativité et son talent brut. Son retour en F1 est une seconde chance pour cet expérimenté pilote de se battre pour les avant-postes et peut-être, enfin, monter sur le podium."
        ];
        $socials[] = [
            'id' => 4420,
            'twitterName' => '@KevinMagnussen',
            'twitterLink' => 'https://twitter.com/KevinMagnussen',
            'instagramName' => 'kevinmagnussen',
            'instagramLink' => 'https://www.instagram.com/kevinmagnussen/?hl=fr',
            'websiteName' => 'kevinmagnussen.com',
            'websiteLink' => 'https://kevinmagnussen.com/',
            'smallText' => "Kevin Magnussen, un pilote danois de 32 ans, rugit à nouveau sur la grille de la Formule 1 après une année d'absence. Il court actuellement pour Haas F1 Team, équipe avec laquelle il a déjà piloté de 2017 à 2020. Issu d'une famille de pilotes (son père, Jan, a également couru en F1), Magnussen a connu une ascension fulgurante, remportant le titre en Formula Renault 3.5 Series et terminant vice-champion de GP2 Series avant de décrocher une place en F1.
            Son point fort est sa combativité et sa capacité à extraire le maximum de sa monoplace. En 2022, lors de son retour inattendu en F1, il a surpris tout le monde en décrochant la première pole position de l'histoire de Haas F1 au Grand Prix de São Paulo.
            Avec son expérience et sa fougue, Magnussen cherche à s'imposer comme un leader chez Haas et à jouer les trouble-fêtes dans le peloton de la Formule 1."
        ];
        $socials[] = [
            'id' => 4404,
            'twitterName' => '@LandoNorris',
            'twitterLink' => 'https://twitter.com/LandoNorris',
            'instagramName' => 'landonorris',
            'instagramLink' => 'https://www.instagram.com/landonorris',
            'websiteName' => 'lando.store',
            'websiteLink' => 'https://landonorris.store/',
            'smallText' => "Lando Norris, 24 ans, est un pilote britannique qui brille chez McLaren en F1. Son talent s'est révélé dès son plus jeune âge, avec des titres en karting et en monoplaces junior.
            En 2019, il a rejoint la F1 avec McLaren, impressionnant dès sa première saison. Son style de pilotage audacieux et spectaculaire en fait un véritable atout pour l'écurie.
            Charismatique et populaire, Norris est un véritable phénomène sur les réseaux sociaux. Son humour et sa personnalité attachante lui ont valu une large audience.
            Avec son talent pur et sa détermination, Norris a le potentiel de devenir l'un des meilleurs pilotes de F1 de sa génération."
        ];
        $socials[] = [
            'id' => 4481,
            'twitterName' => '@OscarPiastri',
            'twitterLink' => 'https://twitter.com/OscarPiastri',
            'instagramName' => 'oscarpiastri',
            'instagramLink' => 'https://www.instagram.com/oscarpiastri',
            'websiteName' => 'store.oscarpiastri.com',
            'websiteLink' => 'https://store.oscarpiastri.com/',
            'smallText' => "Oscar Piastri est un jeune pilote australien né en 2001 qui fait actuellement sensation en Formule 1. Après avoir gravi les échelons des catégories junior (Formula Renault Eurocup, FIA F3 et FIA F2) en remportant consécutivement leurs championnats respectifs, il a fait ses débuts en F1 en 2023 chez McLaren suite à un imbroglio juridique avec Alpine, l'écurie française qui l'avait formé.
            Considéré comme un prodige, Piastri impressionne par sa maturité, sa régularité et son talent certain. Il est l'un des pilotes à suivre de près dans les années à venir."
        ];
        $socials[] = [
            'id' => 4403,
            'twitterName' => '@danielricciardo',
            'twitterLink' => 'https://twitter.com/danielricciardo',
            'instagramName' => 'danielricciardo',
            'instagramLink' => 'https://www.instagram.com/danielricciardo',
            'websiteName' => 'danielricciardo.com',
            'websiteLink' => 'https://www.danielricciardo.com/',
            'smallText' => "Daniel Ricciardo est un pilote de Formule 1 australien, né le 1er juillet 1989 à Perth. Connu pour son sourire contagieux et son attitude positive, il est l'un des pilotes les plus populaires du paddock.
            Sa carrière en F1 débute en 2011 et il remporte huit victoires en Grand Prix au cours de son passage chez Red Bull et Renault. Si le français n'est pas sa langue maternelle, il a tenté à plusieurs reprises de s'exprimer dans la langue de Molière, n'hésitant pas à relever des défis linguistiques YouTube.
            En 2023, il est de retour chez Red Bull en tant que troisième pilote, prêt à relever de nouveaux défis."
        ];
        $socials[] = [
            'id' => 4440,
            'twitterName' => '@LiamLawson30',
            'twitterLink' => 'https://twitter.com/LiamLawson30',
            'instagramName' => 'liamlawson30',
            'instagramLink' => 'https://www.instagram.com/liamlawson30/',
            'websiteName' => 'liamlawson.co.nz',
            'websiteLink' => 'https://www.liamlawson.co.nz/',
            'smallText' => "Liam Lawson est un pilote de course néo-zélandais actuellement pilote de réserve pour Red Bull Racing.
            Il a fait ses débuts en Formule 1 en 2023 pour AlphaTauri, remplaçant Daniel Ricciardo blessé, lors du Grand Prix des Pays-Bas. Malgré un temps de pratique limité et une sortie de piste, il s'est qualifié en 20ème position.
            Sa performance, notamment son entrée in extremis dans le top 10, a impressionné les observateurs et a renforcé son statut de pilote prometteur. Cependant, il n'a pas obtenu de baquet permanent pour la saison 2024, AlphaTauri ayant choisi de reconduire Yuki Tsunoda et Daniel Ricciardo.
            Malgré ce revers, Lawson reste un pilote important pour Red Bull et AlphaTauri en tant que réserviste. Son expérience en course et sa capacité d'adaptation rapide en F1 sont des atouts précieux pour l'équipe. Il est fort probable qu'il retrouve sa place sur la grille de départ dans un avenir proche."
        ];

        // $socials[]=[
        //     'id'=>11,
        //     'twitterName'=>'',
        //     'twitterLink'=>'',
        //     'instagramName'=>'',
        //     'instagramLink'=>'',
        //     'websiteName'=>'',
        //     'websiteLink'=>'',
        //     'smallText'=>""
        // ];

        DB::table('socials')->delete();
        DB::table('socials')->insert($socials);
    }
}
