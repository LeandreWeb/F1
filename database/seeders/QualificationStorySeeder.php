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
            "catchphrase" => "Red Bull au top",
            "intro" => "La première séance de qualification du Grand Prix de Bahreïn de Formule 1 2023 est enfin là et les regards sont tournés vers Fernando Alonso, qui s'est classé dans le top 3 lors des essais. Les équipes rivales, comme Mercedes et Red Bull, ne vont pas le laisser remporter la pole position facilement. La bataille pour la première place sur la grille s'annonce intense et captivante.",
            "q1" => "La première partie des qualifications a commencé avec des moments de tension et de surprise. Alors que la voiture de Charles Leclerc sortait des stands, elle s'est subitement mis a  envoyer des débris de carbone dans les airs. Pendant ce temps, chez Williams, Logan Sargent a réussi à égaler le temps de Lando Norris, mais il n'a pas réussi à se qualifier pour la Q2 car il a réalisé son tour en deuxième.
      La grande surprise des qualifications a été l'équipe McLaren. Alors que l'une de leurs voitures n'a pas réussi à se qualifier pour la Q2, l'autre a réussi à passer de justesse. Les fans de F1 se demandent maintenant si l'équipe pourra se rattraper lors des tours suivants.",
            "q2" => "Les Q2 ont été relativement calmes, sans grande surprise. Cependant, l'équipe Aston Martin a réalisé une performance remarquable en parvenant à qualifier leurs deux voitures pour la Q3. Même Lance Stroll, qui avait une blessure au poignet, a réussi à se qualifier. Cette performance est une excellente nouvelle pour l'équipe, qui cherchait à se rattraper après une saison difficile l'année dernière. Maintenant, les regards sont tournés vers la Q3 pour voir si Aston Martin peut maintenir cette performance.",
            "q3" => "La Q3 a été un duel intense entre Ferrari et Red Bull. Après les premières sorties, c'était l'avantage pour Red Bull et Max Verstappen, suivi de très près par Charles Leclerc. Le duel s'annonçait intéressant. Cependant, Ferrari a opté pour une stratégie étrange en décidant de ne pas laisser sortir Leclerc pour un deuxième essai afin de conserver une paire de pneus soft neufs pour la course. Cette décision a laissé le champ libre pour les Red Bulls de prendre les deux premières places sur la grille de départ. Max Verstappen a réussi à décrocher la pole position, tandis que Sergio Perez a pris la deuxième place.",
            "conclusion" => "Les qualifications du Grand Prix de Bahreïn ont été remplies de moments de tension et de surprises. Alors que la Q1 a vu la voiture de Charles Leclerc subir un incident, la Q2 a été relativement calme, mais a vu l'équipe Aston Martin réaliser une performance remarquable en qualifiant ses deux voitures pour la Q3. Finalement, la Q3 a été un duel intense entre Ferrari et Red Bull, avec les Red Bulls prenant finalement les deux premières places sur la grille de départ.
      Maintenant que les qualifications sont terminées, les fans de F1 ont hâte de voir la course de demain et de savoir si Ferrari pourra rattraper son retard sur Red Bull. Le Grand Prix de Bahreïn s'annonce comme une course passionnante et nous avons hâte de voir ce que cela réserve pour les pilotes et les équipes.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 2,
            "catchphrase" => "La bataille à trois pour la pole position",
            "intro" => "Après la spectaculaire domination des Red Bulls lors du dernier Grand Prix de Bahreïn, l'atmosphère est électrique ici alors que nous attendons avec impatience de découvrir qui sortira vainqueur des qualifications.",
            "q1" => "La première session de qualifications (Q1) du Grand Prix d'Arabie Saoudite 2023 a été riche en rebondissements. Dès sa première sortie, Nick DeVries a été confronté à un tête-à-queue avec son Alpha Tauri, frôlant de justesse un accrochage avec le mur. Malheureusement, plusieurs temps ont été effacés, car certains pilotes ont mis leurs pneus sur la ligne d'entrée des stands après le dernier virage.
      Le malheur a également frappé Lando Norris, qui a accroché le mur au virage 27, entraînant la rupture de sa suspension. Contraint de rentrer aux stands, il n'a malheureusement pas réussi à se qualifier pour la Q2. En revanche, son coéquipier, Oscar Piastri, a réalisé une performance exceptionnelle en se qualifiant pour la Q2, marquant ainsi la première fois de sa jeune carrière.",
            "q2" => "La session de qualifications Q2 du Grand Prix d'Arabie Saoudite 2023 a été marquée par des événements majeurs. Peu de temps après le début de la séance, le moteur de la voiture de Max Verstappen, considéré comme le favori, a lâché, l'empêchant de réaliser un tour de qualification. Malheureusement pour lui, il se retrouvera en 15e position sur la grille de départ de la course.
      Malgré cet incident inattendu, le reste de la session s'est déroulé dans le calme. Les autres pilotes ont pu se concentrer sur la recherche des meilleurs temps pour se qualifier en Q3, la phase finale des qualifications. Cependant, la véritable surprise est venue d'Oscar Piastri, qui a réalisé une performance remarquable. Après seulement sa deuxième course en Formule 1, il a réussi à se qualifier pour la Q3, démontrant ainsi son talent et sa rapidité grandissante.",
            "q3" => "La session de qualifications Q3 du Grand Prix d'Arabie Saoudite 2023 a été extrêmement captivante, avec trois favoris se battant pour la pole position. Sergio Perez, Charles Leclerc et Fernando Alonso se sont échangé tour à tour les meilleurs temps, créant une véritable bataille entre ces pilotes talentueux.
      Finalement, c'est Sergio Perez qui a décroché la pole position, réalisant un temps impressionnant de 1 minute 28.265 secondes. Sa performance remarquable lui a valu la première place sur la grille de départ, offrant ainsi de grandes perspectives pour la course à venir.
      Cependant, Charles Leclerc a également réalisé une performance remarquable en se classant deuxième lors des qualifications. Malheureusement, il a été pénalisé de 10 positions sur la grille de départ en raison d'infractions antérieures, ce qui signifie qu'il partira de la 12e position lors de la course. Malgré cette pénalité, il a tout de même démontré son potentiel et sa rapidité.
      Fernando Alonso a également réalisé une solide performance, se qualifiant en troisième position. Sa présence dans le top 3 de la grille de départ promet une course palpitante, alors qu'il se battra pour monter sur le podium.",
            "conclusion" => "En conclusion, le Grand Prix d'Arabie Saoudite 2023 s'annonce comme une course pleine de surprises et de rebondissements. Les qualifications ont été le théâtre d'événements captivants, avec des incidents inattendus, des performances exceptionnelles et des pénalités qui ont influencé la composition de la grille de départ.
      Sergio Perez a brillé en remportant la pole position avec un temps impressionnant, démontrant sa maîtrise et sa rapidité. Charles Leclerc, bien qu'ayant obtenu le deuxième temps, a été pénalisé de 10 positions, ajoutant une dimension stratégique à sa course. Fernando Alonso, quant à lui, a confirmé sa compétitivité en se qualifiant en troisième position.
      Cependant, la course réserve toujours des surprises et des défis imprévisibles. Les autres pilotes, qu'ils soient sur la grille de départ ou plus loin derrière, ont l'opportunité de montrer leur détermination et de se battre pour des résultats remarquables.
      Les attentes sont grandes et les spectateurs sont impatients de voir ces pilotes s'affronter sur le circuit. Le Grand Prix d'Arabie Saoudite 2023 promet une compétition féroce, une action palpitante et des moments inoubliables. Que la course commence et que le meilleur pilote triomphe sur cette nouvelle piste prestigieuse !",
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
        $qualificationStory[] = [
            "id" => 7,
            "catchphrase" => "Bataille pour la pole",
            "intro" => "
      Les qualifications de Monaco sont souvent considérées comme la session la plus importante de l'année dans le monde de la Formule 1. Le tracé étroit et sinueux de ce circuit emblématique rend les dépassements extrêmement difficiles, ce qui confère à la séance de qualification une importance cruciale pour les pilotes.

      Cette année, l'équilibre des forces semble être légèrement différent. Bien que Red Bull Racing ait dominé les courses précédentes, l'avantage ne semble pas être entièrement en leur faveur à Monaco. Les équipes telles qu'Aston Martin, Ferrari et Mercedes ont montré une compétitivité accrue, avec des voitures capables de rivaliser pour la pole position.",
            "q1" => "
À mi-chemin de la séance de Q1, un incident spectaculaire s'est produit lorsque la Red Bull a violemment heurté les barrières de sécurité du premier virage, provoquant un drapeau rouge. Cet événement inattendu a semé la panique parmi les équipes, notamment Mercedes et Ferrari, dont les pilotes Hamilton et Sainz luttaient pour se hisser dans le top 5 depuis le bas du classement. Malgré la pression, ils ont réussi à se qualifier pour la session de Q2 grâce à leurs derniers tours.

Un fait impressionnant lors de cette séance a été la performance du top trois. Verstappen, en tant que favori, était attendu en haut du classement, mais la surprise est venue de Tsunoda, qui a réalisé un temps remarquable. De plus, Alex Albon a également réalisé une performance notable.",
            "q2" => "La séance de Q2 à Monaco a été relativement calme, mais quelques incidents ont marqué la fin de la session. Lando Norris a connu une mésaventure en percutant le mur du virage 11, ce qui a entraîné la rupture de sa suspension avant gauche. Malheureusement, il a également heurté le mur extérieur du virage 12. Malgré ces difficultés, Norris a réussi à ramener sa voiture aux stands. Cependant, il reste incertain s'il pourra participer à la Q3 avec sa voiture endommagée.

      D'autre part, une surprise est survenue lors de cette séance de Q2, car Lance Stroll et son Aston Martin n'ont pas réussi à se qualifier pour la Q3. Cette élimination inattendue a été décevante pour l'équipe et le pilote, qui espéraient obtenir une meilleure performance sur ce circuit légendaire.",
            "q3" => "Un grand bravo à l'équipe McLaren qui a réalisé un exploit en réparant la voiture de Norris en moins de 10 minutes, lui permettant ainsi de participer à la Q3. La fin de la session de qualification a été extrêmement excitante, avec Ferrari, Aston Martin, Red Bull et même Alpine se disputant le meilleur tour et les secteurs les plus rapides.

      À un moment donné, tout semblait indiquer que Fernando Alonso allait décrocher la pole position, mais dans les dernières secondes, Max Verstappen a réalisé un dernier tour époustouflant. Il a été en mesure de compléter un dernier secteur incroyable, lui permettant de s'emparer de la pole position.",
            "conclusion" => "En conclusion, les qualifications de Monaco 2023 ont été à la fois intenses et pleines de surprises. Dès les premières séances, les enjeux étaient élevés, avec des pilotes et des équipes déterminés à décrocher une position avantageuse sur la grille de départ. Les possibilités de dépassement étant extrêmement limitées sur ce tracé légendaire, chaque tour comptait et la moindre erreur pouvait être fatale.

      Des incidents tels que les accidents de la Red Bull de Q1 et la collision de Lando Norris en Q2 ont ajouté des rebondissements inattendus à la séance de qualification. Les équipes ont fait preuve d'une grande réactivité pour réparer les voitures endommagées et permettre à leurs pilotes de continuer à se battre pour une place en Q3.

      La Q3 a été un véritable spectacle, avec des échanges de meilleurs tours et de secteurs rapides entre plusieurs équipes. La lutte pour la pole position était féroce, et finalement, c'est Max Verstappen qui a réalisé un dernier tour époustouflant pour s'emparer de la première place sur la grille.

      Cependant, la course de Monaco est réputée pour être imprévisible et exigeante. La position de départ n'est pas toujours synonyme de victoire, car des stratégies, des dépassements audacieux et des conditions de course particulières peuvent changer la donne. Les qualifications ont seulement posé les bases pour la bataille qui se déroulera sur le célèbre circuit de Monaco.

      Ainsi, les qualifications de Monaco 2023 ont offert un avant-goût de l'intensité et de l'excitation à venir lors de la course. Les pilotes et les équipes devront redoubler d'efforts et de stratégie pour réussir dans cette course exigeante. Les passionnés de Formule 1 attendent avec impatience l'affrontement sur cette piste mythique, où chaque virage, chaque freinage représente un défi pour les compétiteurs.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 8,
            "catchphrase" => "Sortie de Favoris et Grille de Départ Surprenante",
            "intro" => "Malgré un ciel nuageux et peu engageant, les qualifications de la Formule 1 en Espagne se sont déroulées avec une ferveur inébranlable. Les fans se sont rassemblés en masse, déterminés à soutenir leurs pilotes locaux, Carlos Sainz et Fernando Alonso, malgré les conditions météorologiques peu favorables. Bien que les gris des nuages aient dominé le paysage, l'enthousiasme des spectateurs a illuminé les tribunes, créant une atmosphère électrisante.",
            "q1" => "Au tout début de la séance de qualifications, alors que les pilotes s'apprêtaient à s'élancer, un drapeau rouge est agité, interrompant brusquement les préparatifs. Il devient évident que la raison de cette interruption est la présence de gravier sur la piste, provoquant des sorties de route multiples. Parmi les pilotes qui ont été touchés par ces incidents figurent Nick de Vries, Yuki Tsunoda, Valtteri Bottas, Fernando Alonso et Alex Albon. Cependant, la plus grande surprise de cette séance de qualifications a été l'élimination de Charles Leclerc, qui partira seulement 19ème pour la course de demain. Le pilote monégasque a rencontré des problèmes persistants avec ses pneus arrière tout au long de la session, ce qui a grandement compromis ses performances. Cette série de rebondissements inattendus a rendu les qualifications d'autant plus captivantes et laisse présager une course palpitante pour demain.",
            "q2" => "Lors de la deuxième partie des qualifications, la tension était palpable alors que les pilotes luttaient pour se qualifier pour le Q3. Contrairement à la première partie, où de nombreuses sorties de piste ont perturbé les concurrents, cette fois-ci il n'y en a eu qu'une seule, mais elle s'est avérée coûteuse pour Sergio Perez. En sortant de la piste, il a ramené de la terre sur ses pneus, compromettant ainsi son dernier tour et l'empêchant de se qualifier pour la phase suivante. Perez se classera donc 11ème sur la grille de départ, ratant de peu une place en Q3. <br />
        Un autre pilote qui a été éliminé de manière surprenante est George Russell.il ne semble pas aussi à l'aise que son coéquipier, Lewis Hamilton, avec les nouvelles améliorations apportées à la voiture. Russell n'a pas réussi à trouver le rythme nécessaire pour se qualifier parmi les dix premiers, ce qui signifie qu'il ne participera pas à la phase finale des qualifications.",
            "q3" => "
        La phase finale des qualifications, le Q3, a réservé son lot de surprises avec plusieurs favoris éliminés. La grille de départ résultante est donc assez inattendue, à l'exception d'une position : la première place qui a été décrochée par Max Verstappen. Le pilote Red Bull Racing s'est illustré en signant le meilleur temps et prendra le départ en tête de la course.
        Une autre surprise agréable pour les fans espagnols est la présence d'un pilote local en première ligne : Carlos Sainz. Le pilote Ferrari a réalisé une performance impressionnante, se qualifiant à la deuxième position. Cela promet un grand moment d'émotion pour les supporters espagnols qui le verront partir à côté de Verstappen.
        Le top 3 de la grille de départ est complété par Lando Norris de McLaren. Le pilote britannique a finalement connu une excellente séance de qualification, se plaçant parmi les meilleurs et offrant de belles perspectives pour son équipe.
        L'ensemble de ces résultats inattendus et cette configuration surprenante de la grille de départ promettent une course palpitante pour les fans de Formule 1. Les pilotes devront faire preuve de talent et de stratégie pour tirer leur épingle du jeu sur le circuit de Barcelone.",
            "conclusion" => "
        En conclusion, les qualifications de la Formule 1 en Espagne 2023 ont été marquées par des rebondissements et des performances surprenantes. Malgré un ciel gris et des conditions météorologiques difficiles, les spectateurs ont répondu présents pour soutenir leurs pilotes locaux, Carlos Sainz et Fernando Alonso. La séance a débuté avec des sorties de piste et l'élimination surprenante de pilotes talentueux tels que Charles Leclerc.
        Le Q3 a ensuite offert son lot de surprises, avec Max Verstappen s'assurant la pole position, suivi de près par Carlos Sainz, qui a ravi les fans espagnols en se qualifiant à la deuxième place. Lando Norris a également réalisé une excellente performance en se classant troisième.
        Ces résultats inattendus créent une atmosphère d'excitation et d'incertitude pour la course à venir. Les pilotes devront faire preuve de maîtrise et de stratégie pour tirer profit de cette grille de départ singulière et espérer se frayer un chemin vers la victoire.
        La Formule 1 en Espagne nous réserve donc un spectacle intense et captivant, avec des batailles en perspective sur la piste. Les passionnés de sport automobile peuvent s'attendre à une course palpitante où tout peut arriver. Rendez-vous demain pour vivre l'action au rythme des moteurs vrombissants et des stratégies audacieuses, car la compétition dans ce sport exigeant est plus féroce que jamais.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 9,
            "catchphrase" => "Montréal sous la pluie",
            "intro" => "Sous les caprices du ciel de Montréal, la pluie a ajouté une dose supplémentaire d'incertitude et de défi lors des séances d'essais libres. Alors que les gouttes d'eau tambourinaient sur le circuit, les équipes de Formule 1 ont rivalisé pour trouver la meilleure configuration sous ces conditions changeantes. Parmi elles, les Red Bulls, les Ferraris et les Aston Martin se sont révélées particulièrement performantes, montrant leur capacité à maîtriser les éléments. Cependant, l'équipe Mercedes semble être en difficulté lorsque la pluie s'invite, cherchant à trouver la bonne harmonie entre puissance et adhérence dans ces conditions humides. Les qualifications promettent donc d'être passionnantes, avec des pilotes et des équipes qui devront repousser leurs limites pour conquérir la pole position sur ce circuit trempé de Montréal.",
            "q1" => "Dans la Q1, un malheur s'est abattu sur Guanyu Zhou dès sa sortie des stands. Un problème mécanique a contraint le pilote de l'Alpha Romeo à immobiliser sa voiture sur le bord de la piste, provoquant ainsi un drapeau rouge. Heureusement, Zhou a réussi à redémarrer sa voiture et à regagner les stands. Toutes les qualifications se sont déroulées sur des pneus intermédiaires, rendant les conditions encore plus délicates. La fin de la session a été marquée par de nombreux incidents, certains pilotes bloquant les autres sur la piste, comme Carlos Sainz qui a gêné Pierre Gasly. À cause de cet incident malheureux, Gasly se qualifie à la 17e position, laissant échapper une meilleure performance.",
            "q2" => "En entamant la Q2, les pilotes ont rapidement engagé des discussions radio avec leurs équipes pour évaluer le passage aux pneus slicks. C'est Alex Albon qui a pris la décision de chausser les pneus tendres en premier, et cette stratégie s'est avérée fructueuse puisqu'il a réussi à réaliser le meilleur temps de la Q2. Cependant, quelques surprises sont survenues, car des pilotes tels que Perez, Leclerc et Stroll n'ont pas su profiter de la meilleure stratégie pneumatique et n'ont pas réussi à se qualifier pour la Q3. Ces résultats inattendus ont ajouté une touche de suspense et d'imprévisibilité à la session de qualifications.",
            "q3" => "En arrivant à la Q3, la pluie a fait son retour, obligeant tous les pilotes à ressortir des stands avec des pneus intermédiaires. Malheureusement, le jeune Piastri a connu un incident malheureux en dérapant et heurtant le mur à la sortie du virage 7, ce qui a entraîné un drapeau rouge. Pendant cette interruption, la pluie s'est intensifiée, rendant les conditions peu favorables pour améliorer les temps. Dans cette situation délicate, Max Verstappen a réussi à se hisser en pole position, montrant une fois de plus ses compétences dans des conditions humides. Nico Hülkenberg a également tiré profit de cette situation en se classant à la deuxième place (P2), réalisant un excellent tour juste avant le drapeau rouge. Cette séance de qualifications mouvementée a permis à certains pilotes de tirer leur épingle du jeu et de se placer en bonne position sur la grille de départ.",
            "conclusion" => "En conclusion, les qualifications pour le Grand Prix du Canada 2023 ont été marquées par des conditions météorologiques imprévisibles et des rebondissements inattendus. La pluie a joué un rôle clé, rendant les choix stratégiques cruciaux pour les équipes et les pilotes. Les séances de qualification ont été ponctuées de drapeaux rouges et d'incidents, mettant à l'épreuve la maîtrise des pilotes sur une piste glissante.
        Max Verstappen s'est révélé une fois de plus redoutable dans des conditions pluvieuses, décrochant la pole position malgré la pluie battante en Q3. Nico Hülkenberg a également brillé en saisissant l'opportunité de réaliser un excellent tour avant le drapeau rouge, lui permettant de se hisser à la deuxième place sur la grille.
        Cependant, certaines équipes et pilotes n'ont pas réussi à tirer parti des circonstances et ont été contrariés par des incidents ou des choix de pneus moins favorables. Les qualifications ont donc offert un spectacle riche en rebondissements et ont préparé le terrain pour une course passionnante où les conditions météorologiques pourraient continuer à jouer un rôle déterminant.",
            "extra" => "
        Dans les heures qui ont suivi la course, de nouvelles informations ont émergé concernant les pénalités infligées à certains pilotes. Nico Hülkenberg, Carlos Sainz et Yuki Tsunoda ont tous écopé d'une pénalité de trois places sur la grille de départ pour la prochaine course. Cette situation bouleverse considérablement les positions initiales des pilotes.
        Ainsi, Yuki Tsunoda, qui avait initialement qualifié à la 16e position, se voit rétrogradé à la 19e place sur la grille. Carlos Sainz, quant à lui, descend de la 8e à la 11e position, tandis que Nico Hülkenberg, qui avait brillamment obtenu la 2e place lors des qualifications, perd sa place sur la première ligne et se retrouve désormais en 5e position au départ."
        ];
        $qualificationStory[] = [
            "id" => 10,
            "catchphrase" => "Red Bulls Pole a la Maison",
            "intro" => "Alors que le deuxième week-end de sprint de la saison bat son plein en Autriche, l'excitation est à son comble. Après une séance d'entraînement prometteuse, les Red Bulls semblent en excellente forme sur leur propre piste. Cependant, leurs rivaux de chez Mercedes et Aston Martin ne sont pas en reste, exhibant également des voitures rapides et prêtes à en découdre. Avec une compétition aussi féroce, les qualifications s'annoncent d'une intensité inégalée, offrant aux fans de Formule 1 un spectacle captivant à ne pas manquer.",
            "q1" => "Au tout début de la session, une situation dramatique s'est produite lorsque Valtteri Bottas a perdu le contrôle de son Alpha Tauri dans le virage 1, entraînant l'arrêt complet de son moteur. Cette situation a rapidement déclenché un drapeau rouge, interrompant temporairement les qualifications. Heureusement pour Bottas, il a réussi à trouver le moyen de redémarrer sa voiture et est retourné aux stands afin de pouvoir reprendre sa participation aux qualifications.
        Malgré cet incident, le reste de la Q1 s'est déroulé dans une relative tranquillité, avec quelques moments de frayeur pour George Russell, qui se retrouvait initialement en bas du classement. Cependant, Russell a su rassembler son talent et son sang-froid pour réaliser un dernier tour impressionnant, lui permettant de se qualifier pour la Q2 et de surmonter ainsi ces petites inquiétudes.",
            "q2" => "La Q2 est marquée par plusieurs temps effacés en raison des limites de piste, ce qui a notamment impacté Sergio Perez, qui a vu ses deux premiers tours de qualifications annulés. Le pilote est sous pression après quelques séances de qualifications décevantes de sa part. Malheureusement pour Perez, malgré un beau tour de qualification, il se qualifie à la deuxième position, mais son temps est finalement supprimé en raison du dépassement des limites de piste. C'est un coup dur pour lui.
        George Russell est l'autre surprise de la Q2. Malheureusement, il n'a pas réussi à se qualifier pour la Q3 et se retrouve à la 11ème position sur la grille de départ. C'est une déception pour Russell, qui espérait pouvoir se hisser plus haut dans le classement.
        Ces rebondissements lors de la Q2 soulignent à quel point les limites de piste peuvent jouer un rôle crucial dans les qualifications et influencer les performances des pilotes. La compétition est féroce et chaque erreur peut coûter cher en termes de positionnement sur la grille de départ.",
            "q3" => "Les tours effacés continuent en Q3, avec Alex Albon et Lance Stroll qui perdent chacun un tour. La fin des qualifications s'avère assez intéressante, avec Max Verstappen parvenant à réaliser un temps remarquable de 1:04.391. Les deux Ferrari signent également des tours très rapides, laissant entrevoir une possibilité de décrocher la pole position. Cependant, malgré leurs efforts, ils ne parviennent pas à surpasser Max Verstappen, qui sécurise ainsi sa quatrième pole position consécutive.",
            "conclusion" => "
        En conclusion, les qualifications en Autriche pour la saison 2023 de Formule 1 ont été marquées par des rebondissements et des moments de tension. Les pilotes ont dû faire face aux défis posés par les limites de piste, ce qui a entraîné l'annulation de plusieurs temps chronométrés et des désillusions pour certains.
        Max Verstappen s'est révélé être le pilote dominant du jour, en décrochant une pole position remarquable, sa quatrième consécutive. Son équipe Red Bull Racing a clairement démontré sa compétitivité sur son propre circuit. Cependant, les Ferrari ont également montré un rythme impressionnant, se rapprochant de Verstappen, mais sans réussir à le surpasser lors de cette séance de qualifications.
        Les qualifications ont été un aperçu passionnant de la bataille qui se déroulera lors de la course à venir. Les enjeux sont élevés, avec des pilotes comme Sergio Perez et George Russell cherchant à se racheter après des performances décevantes. La compétition reste ouverte et l'imprévisibilité de la course automobile offre toujours la possibilité de surprises.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 11,
            "catchphrase" => "Surprises Britaniques",
            "intro" => "Bienvenue au Grand Prix Britannique de Formule 1 ! Alors que nous nous préparons pour une course palpitante sur le célèbre circuit de Silverstone, le ciel est rempli de nuages menaçants. La pluie, bien que non légère, pourrait bien être le facteur clé de cette course et apporter des stratégies intéressantes en matière de pneus. Les pilotes et les équipes devront faire preuve de finesse et de prudence pour maîtriser ces conditions météorologiques changeantes. ",
            "q1" => "Après avoir quitté les stands, les pilotes ont jugé que les pneus les plus adaptés étaient les pneus tendres (softs). Cependant, la piste était légèrement humide, ce qui s'est avéré être un défi, comme l'a découvert Lewis Hamilton au virage 15. Il a perdu le contrôle de sa voiture, effectuant quelques têtes-à-queue. Heureusement pour lui, il a réussi à éviter les barrières et à poursuivre ses qualifications.
        Cependant, à moins de 3 minutes et 11 secondes de la fin de la Q1, la voiture de Kevin Magnussen s'est arrêtée à la sortie du virage 15 en raison d'un problème mécanique, ce qui a entraîné la sortie du drapeau rouge. Pendant la suspension de la session, les conditions de piste se sont améliorées, et à la reprise, les temps au tour se sont améliorés pour tous les pilotes.
        Cependant, une surprise de taille est survenue lorsque Sergio Perez n'a pas réussi à se qualifier pour la Q2. De plus, la voiture d'Valtteri Bottas de l'équipe AlphaRomeo s'est arrêtée sur la piste, mais grâce à son tour précédent, il est tout de même parvenu à se qualifier pour la Q2.",
            "q2" => "La piste est toujours sèche, et le soleil pointe enfin son nez, offrant des conditions idéales pour les pilotes. Tous les pilotes sortent avec des pneus tendres (softs), à l'exception de Valtteri Bottas, qui reste dans les stands en raison de son problème mécanique persistant.
        Au fur et à mesure que la session progresse, les pilotes repoussent leurs limites pour réaliser des temps rapides. Contrairement à la fin de la Q1, il n'y a aucun incident majeur sur la piste cette fois-ci. Les équipes ont bien préparé leurs voitures et les pilotes démontrent leur habileté à négocier chaque virage avec précision.
        La compétition s'intensifie alors que les dernières minutes de la Q2 approchent. Les équipes surveillent attentivement les temps réalisés par leurs concurrents directs, cherchant à établir la meilleure stratégie pour la suite des qualifications et la course.
        Les conditions de piste restent optimales jusqu'à la fin de la session, offrant aux pilotes la possibilité d'améliorer leurs temps au tour.",
            "q3" => "Après la première sortie, Max Verstappen réalise un temps impressionnant, se plaçant en tête du classement, suivi de près par Lewis Hamilton et Robert Piastry. La bataille pour la pole position est déjà intense entre ces pilotes de talent.
        Cependant, la surprise vient de l'équipe McLaren lorsque Lando Norris parvient à réaliser un temps exceptionnel, lui permettant de prendre provisoirement la pole position. Les fans de McLaren commencent à espérer une performance exceptionnelle pour leur équipe.
        Mais à la toute fin de la séance, Max Verstappen lance une attaque féroce et réussit à voler la pole position à Norris. Son tour rapide lui permet de s'installer en première position sur la grille de départ pour le Grand Prix Britannique de Formule 1",
            "conclusion" => "En conclusion, le Grand Prix Britannique de Formule 1 nous a offert des qualifications pleines de rebondissements et de moments palpitants. Les conditions changeantes de la piste, la lutte acharnée entre les pilotes et les performances exceptionnelles ont créé une ambiance électrisante.
        Max Verstappen a confirmé sa position de favori en volant la pole position à la toute fin de la séance de qualifications. L'équipe McLaren a également fait forte impression, avec Lando Norris réalisant un temps incroyable, lui permettant de se placer temporairement en pole position avant d'être détrôné par Verstappen.
        Ces qualifications nous ont donné un aperçu des enjeux de la course à venir, avec des pilotes prêts à tout donner pour atteindre la victoire. Les stratégies, les dépassements audacieux et la maîtrise des conditions de piste joueront un rôle déterminant dans la quête du podium.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 12,
            "catchphrase" => "Hard, Medium, Soft",
            "intro" => "Après une course époustouflante au circuit de Silverstone, les regards du monde entier sont tournés vers la prochaine étape du Championnat du Monde de Formule 1. La Hongrie accueille les qualifications de F1 en 2023, et les fans sont en ébullition suite aux récentes performances remarquables de l'écurie Red Bull Racing. Forts de leur triomphe sur le tracé britannique, les pilotes de l'équipe autrichienne semblent plus que jamais déterminés à consolider leur statut de favoris pour le reste de la saison.",
            "q1" => "Dans le cadre du Q1, l'excitation était palpable sur la piste du Hungaroring alors que tous les pilotes s'apprêtaient à en découdre avec des pneus Hard. Malgré une saison impressionnante jusqu'à présent, une grosse surprise est venue bousculer les attentes : George Russell, a éprouvé des difficultés inattendues lors des qualifications. Une déception pour le jeune Britannique, qui devra désormais se contenter de la 17e position sur la grille de départ pour la course dominicale.
        D'un autre côté, les fans de l'Australien Daniel Ricciardo ont eu de quoi se réjouir lors du Q1. Ricciardo a retrouvé sa confiance et son rythme lors des qualifications. Parvenant à tirer le meilleur parti de sa monoplace, ila réussi à se qualifier pour le Q2, redonnant ainsi espoir à ses supporters pour une performance solide lors de la course.",
            "q2" => "Comme déjà observé lors du Grand Prix d'Autriche, les commissaires et les marshals étaient vigilants quant au respect des limites de la piste. Malheureusement pour Max Verstappen, l'aspirant au titre de Red Bull Racing, il a dépassé les limites de la piste lors de son premier tour du Q2, ce qui l'a privé de ce temps. Heureusement pour lui, Verstappen a rapidement repris ses esprits et signé un tour compétitif, lui permettant de se qualifier pour le Q3. La pression est donc sur ses épaules pour décrocher une position de départ avantageuse.
        L'écurie Alpha Romeo a créé la surprise en réalisant une performance impressionnante avec ses deux voitures. Bottas et Zhou ont tous deux excellé lors du Q2, parvenant à se hisser en Q3. Cette performance inattendue suscite de l'enthousiasme chez les fans et souligne les progrès réalisés par l'équipe.
        En revanche, une déception majeure a frappé l'écurie Ferrari et Carlos Sainz lors du Q2. Alors que Sainz a été impressionnant tout au long de la saison, sa monoplace n'était pas à la hauteur de ses attentes sur le tracé hongrois. Malgré ses efforts, il n'a pas réussi à se qualifier pour le Q3, se classant à la 11e position. Une telle déconvenue est une surprise pour l'équipe italienne, qui espère rebondir lors de la course pour marquer des points cruciaux au championnat.",
            "q3" => "Le suspense était à son comble lors du Q3 alors que les pilotes des quatre écuries différentes se battaient pour les premières positions sur la grille de départ. Red Bull Racing, Mercedes, McLaren et Aston Martin ont montré leur force en se plaçant aux quatre premières places.
        Lors de leur deuxième tentative, Max Verstappen, le pilote de Red Bull Racing, a tout donné pour essayer d'améliorer son temps précédent, mais malheureusement pour lui, il n'a pas réussi à le battre. Pendant ce temps, Lewis Hamilton, le talentueux pilote de l'écurie Mercedes, a saisi l'opportunité et a réalisé un tour époustouflant, lui permettant de s'emparer de la pole position.",
            "conclusion" => "En conclusion, les qualifications de F1 en Hongrie 2023 nous ont offert un spectacle inoubliable, avec des rebondissements et des performances surprenantes. La bataille pour la pole position a été particulièrement féroce, mettant en évidence la compétitivité des différentes écuries présentes sur la grille.
        Le duel entre Max Verstappen de Red Bull Racing et Lewis Hamilton de Mercedes a été au cœur de toutes les attentions. Le Néerlandais, malgré son talent, n'a pas pu améliorer son premier temps, permettant ainsi à Hamilton de saisir l'opportunité de décrocher la pole position. Cette lutte pour la première place sur la grille promet un affrontement épique lors de la course de dimanche.
        Cependant, les qualifications nous ont également réservé des surprises. Les performances impressionnantes de l'écurie Alpha Romeo avec Valtteri Bottas et Guanyu Zhou se qualifiant pour le Q3 ont été un véritable exploit. En revanche, la déception de l'équipe Ferrari avec Carlos Sainz ne parvenant pas à se qualifier pour le Q3 a été un revers inattendu pour l'équipe italienne.
        La diversité des équipes présentes aux premières positions de la grille, avec Red Bull Racing, Mercedes, McLaren et Aston Martin, annonce une course palpitante, où chaque équipe tentera de tirer parti de sa stratégie et de ses performances pour décrocher de précieux points au championnat.",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 13,
            "catchphrase" => "1-2 Bulls et conditions mixtes",
            "intro" => "Le rugissement des moteurs retentit à nouveau alors que le paddock de la Formule 1 converge vers le légendaire circuit de Spa-Francorchamps pour une autre épreuve inoubliable. En cette saison captivante, les pilotes et les équipes se préparent à affronter un week-end de sprint haletant en Belgique, un rendez-vous incontournable du calendrier de la F1.
        Après une unique session d'essais pour peaufiner leurs réglages, les équipes se préparent à relever le défi sur ce tracé mythique. Spa-Francorchamps est connu pour ses caractéristiques uniques, offrant un mélange exaltant de lignes droites dévastatrices et de virages serpentins exigeants, mettant ainsi à l'épreuve les compétences et le courage de chaque pilote.",
            "q1" => "La séance de qualifications a débuté avec un léger retard de 10 minutes afin de permettre à la piste de sécher partiellement après une pluie intermittente. Cependant, malgré cette attente, les conditions restaient délicates, obligeant les pilotes à composer avec les pneus intermédiaires pour affronter le tracé exigeant de Spa-Francorchamps.
        Pour Nico Hulkenberg, le malheur a frappé de plein fouet. Le pilote de l'équipe Haas a rencontré des problèmes techniques avec sa monoplace, l'empêchant de rejoindre la piste à temps pour effectuer un tour pendant les conditions idéales. Une occasion précieuse manquée pour l'Allemand qui aurait pu viser une place en Q2.
        D'autre part, Daniel Ricciardo, au volant de son AlphaTauri, a semblé être en mesure de se qualifier pour la Q2. Cependant, lors d'un tour rapide, il a malheureusement dépassé les limites du circuit au virage 3, annulant ainsi son temps et le condamnant à l'élimination. Une déception pour le pilote australien qui aurait espéré mieux sur ce circuit légendaire.
        La concurrence est féroce sous les conditions humides, et les écuries de pointe telles que Ferrari, Red Bull, Mercedes, McLaren et Aston Martin se livrent une bataille acharnée pour décrocher les meilleures positions sur la grille de départ. Les écarts entre les pilotes sont minimes, ce qui promet une suite de qualifications passionnante et indécise.",
            "q2" => "La Q2 des qualifications de Formule 1 en Belgique 2023 offre un contraste saisissant par rapport aux conditions humides de la Q1. Le soleil perce à travers les nuages, offrant une piste plus sèche et favorable à la performance des monoplaces.
        Après quelques minutes de la séance, plusieurs pilotes font le choix stratégique de chausser les pneus softs pour maximiser leur vitesse sur le tracé belge emblématique. Avec des pneus plus adhérents, les temps au tour commencent à chuter, et la lutte pour les meilleures positions devient encore plus intense.
        Cependant, vers la fin de la Q2, un moment dramatique survient lorsque Esteban Ocon perd le contrôle de sa monoplace et heurte le mur au redoutable virage sans nom. Le contact avec le mur brise son aileron avant, l'empêchant de réaliser un dernier tour avec les pneus softs. Ocon est contraint de se contenter de la 15e place sur la grille de départ, ce qui sera une déception pour lui et son équipe.
        De son côté, Max Verstappen, le pilote de l'équipe Red Bull Racing, éprouve des difficultés à se qualifier pour la Q3. Malgré ses prouesses au volant, il se classe seulement 10e lors de la Q2, ce qui souligne l'intensité de la compétition entre les écuries de pointe.",
            "q3" => "La Q3 des qualifications de Formule 1 en Belgique 2023 commence avec un léger retard dû aux réparations nécessaires suite à l'accident d'Esteban Ocon lors de la Q2. La piste est enfin prête, et les pilotes des écuries de pointe, Red Bull, Ferrari et McLaren, se lancent dans la bataille pour la pole position.
        Dès la première sortie, la concurrence est féroce entre les équipes. Les Red Bulls se retrouvent face à un défi de taille, car les Ferrari et les McLaren sont particulièrement compétitives sur le circuit de Spa-Francorchamps.
        Charles Leclerc, au volant de sa Ferrari, réalise un temps impressionnant et occupe temporairement la première position. Toutefois, Max Verstappen, le pilote néerlandais de l'équipe Red Bull Racing, va créer la sensation en réalisant un tour monstrueux de 1:46.168. Verstappen domine la séance avec plus de 0,820 seconde d'avance sur son plus proche rival, Charles Leclerc.",
            "conclusion" => "En conclusion, les qualifications de Formule 1 en Belgique 2023 nous ont offert une séance mémorable pleine de rebondissements et de moments intenses. Sur le légendaire circuit de Spa-Francorchamps, les pilotes ont dû faire face à des défis variés, allant des conditions humides de la Q1 à la piste plus sèche et favorable de la Q3.
        Nous avons été témoins d'une compétition acharnée entre les écuries de pointe telles que Red Bull, Ferrari, McLaren, et bien d'autres, qui se sont battues pour décrocher la pole position et les meilleures places sur la grille de départ. Chaque pilote a cherché à repousser ses limites pour obtenir un avantage décisif lors de la course principale.
        Des moments de malchance ont également marqué ces qualifications, avec l'accident malheureux d'Esteban Ocon et les déboires de certains pilotes, comme Daniel Ricciardo, qui ont vu leurs espoirs s'évanouir à cause d'erreurs ou de problèmes mécaniques.
        Le point culminant de la séance a été le tour impressionnant de Max Verstappen, qui a signé un temps monstrueux pour s'octroyer la pole position avec une avance considérable sur ses concurrents. Son exploit démontre son talent indéniable et offre à Red Bull une position enviable pour la course malgrer une penaliter de 5 positions pour Max (Changement de sa boite de vitesse).",
            "extra" => null
        ];
        $qualificationStory[] = [
            "id" => 14,

            "catchphrase" => "Pole a la maison pour Max",

            "intro" => "Après une pause estivale bien méritée, les yeux du monde sont rivés sur les Pays-Bas, où se dérouleront les qualifications palpitantes qui détermineront la grille de départ pour la prochaine course électrisante.        Lors des séances d'essais libres, deux écuries se détachent clairement comme les favorites : Mercedes et Red Bull. Les équipes ont utilisé ce temps précieux pour affiner leurs réglages, cherchant à maximiser les performances de leurs monoplaces et à gagner l'avantage décisif pour la course à venir.
            Cependant, un revirement de situation a apporté une touche d'incertitude à l'atmosphère chargée d'excitation. Au sein de l'écurie Alpha Tauri, une ombre plane sur la participation de Daniel Ricciardo. Une collision avec le mur durant la pratique 2 a laissé l'Australien avec une main fracturée, l'obligeant à déclarer forfait pour les qualifications ainsi que la course à venir. Dans un acte de résilience et de détermination, l'équipe a rapidement fait appel au jeune prodige Liam Lawson pour prendre le relais de Ricciardo. Toute l'attention se porte maintenant sur ce jeune remplaçant, alors qu'il se prépare à faire ses preuves au plus haut niveau de la compétition automobile.",

            "q1" => "Sous un ciel capricieux, la première phase des qualifications s'est déroulée sur une piste détrempée.
            Au milieu de ce ballet délicat, un nouvel acteur a fait une entrée remarquée. Liam Lawson, effectuant ses premiers pas en qualifications de F1, a réussi à se classer à la 20e position, une réalisation tout à fait louable pour un rookie qui n'a eu qu'une seule séance d'essais libres pour se familiariser avec la piste.
            Cependant, même les pilotes chevronnés ont eu du mal à dompter le mélange de pluie et de goudron. Charles Leclerc, au volant de sa monoplace, a éprouvé des difficultés à enchaîner les virages dans ces conditions glissantes. Sa détermination a toutefois payé dans les derniers instants de la session : son ultime tour réussi lui a permis de se hisser hors de la zone d'élimination, un soulagement pour le pilote Ferrari qui avait été mis à rude épreuve.",

            "q2" => "Alors que le soleil est réapparu pour la séance de Q2, le jeu de la météo a continué d'influencer les décisions stratégiques des équipes. Malgré les communications des pilotes suggérant que la piste s'asséchait rapidement, les pneus slicks n'ont pas encore fait leur apparition, laissant les monoplaces chausser leurs gommes intermédiaires pour affronter un asphalte encore piégé.
            Un développement encore plus inattendu est venu du côté de Lewis Hamilton. Le septuple champion du monde, généralement associé à des performances éblouissantes en qualifications, a trébuché à un moment crucial. Son absence dans la Q3 est une surprise en soi, avec sa monoplace se classant 13e sur la grille de départ. C'est un rappel fort que même les meilleurs pilotes ne sont pas à l'abri des aléas et des défis que présente le sport automobile.
            Parmi les récits positifs de la séance, on trouve Logan Sargeant, qui a émergé en Q3 pour la première fois de sa carrière en F1. Cette percée représente une étape importante pour le jeune talent et souligne le potentiel de croissance dans un domaine compétitif où chaque progression est à célébrer.
            ",

            "q3" => "Sous un ciel désormais clair, la tension montait alors que les pilotes s'élançaient en piste pour la phase finale des qualifications, équipés de pneus tendres pour décrocher les meilleures positions sur la grille de départ.
            Cependant, quelques minutes après le début de la session, un destin cruel a frappé Logan Sargeant. Alors qu'il cherchait à exploiter au maximum son potentiel, le jeune pilote a perdu le contrôle de sa Williams, heurtant violemment le mur au virage numéro 2. Les drapeaux rouges ont immédiatement été agités, marquant une interruption abrupte de la session.
            Après la reprise de la session, une fois la piste dégagée, un deuxième coup du sort s'est abattu, cette fois sur Charles Leclerc. La Ferrari du pilote monégasque a glissé en sous-virage au virage 9, conduisant à un impact contre le mur et à un deuxième drapeau rouge.
            Malgré ces incidents, la séance a repris pour un sprint final sous haute pression. Les pilotes savaient qu'ils ne disposaient que d'un seul tour pour se démarquer. Lando Norris, George Russell et Alexander Albon ont tous réalisé des performances solides
            Cependant, la vedette incontestée de cette session a été Max Verstappen. Le pilote local, porté par les encouragements de la foule néerlandaise, a réussi à faire taire la concurrence en signant un temps imbattable. Malgré les drapeaux rouges et les défis imprévus, Verstappen a confirmé sa maîtrise en obtenant la pole position, propulsant ainsi sa Red Bull au sommet de la grille de départ pour la course à venir.",

            "conclusion" =>"Les qualifications pour le Grand Prix des Pays-Bas en 2023 se sont révélées être bien plus qu'une simple séance de classement. Sur une piste changeante et exigeante, les pilotes ont affronté des défis météorologiques et techniques, mettant en lumière leurs compétences, leur courage et leur adaptabilité.
            Des séances initiales sous la pluie aux moments de tension suscités par les drapeaux rouges, chaque phase des qualifications a apporté son lot de surprises et de moments inoubliables. Les nouveaux venus, tels que Liam Lawson et Logan Sargeant, ont démontré leur potentiel et leur détermination, tandis que des noms familiers tels que Charles Leclerc et Lewis Hamilton ont été rappelés à l'ordre par les caprices du circuit.
            Cependant, c'est Max Verstappen qui a captivé l'attention de tous. Maîtrisant la pression et se nourrissant de l'énergie de ses fans, Verstappen a décroché la pole position, affirmant sa domination sur ses rivaux et ajoutant une dose d'excitation supplémentaire à la course à venir.",

            "extra" => "Peu de temps après la fin des qualifications. Yuki Tsunoda, pilote de l'écurie AlphaTauri, a été reconnu coupable d'avoir gêné Lewis Hamilton à la fin des Q2, entraînant une pénalité qui a chamboulé la grille de départ.
            Initialement qualifié en 14e position, Tsunoda se voit désormais infliger une rétrogradation à la 17e place. Cette sanction a engendré une série de réajustements pour d'autres pilotes, créant ainsi une toile complexe de changements.
            Nico Hülkenberg , Zhou Guanyu et Esteban Ocon, ont profité de la situation  en gagnant une place sur la grille
            "
        ];
        $qualificationStory[] = [
            "id" => 15,

            "catchphrase" => "Pole pour les tifosi",

            "intro" => "La Formule 1 débarque à Monza, marquant ainsi son retour en Italie après l'annulation du Grand Prix d'Émilie-Romagne Cette année, tous les yeux sont rivés sur Max Verstappen, le talentueux pilote néerlandais de Red Bull Racing. Il tente de briser la malédiction qui plane sur lui à Monza, espérant ainsi s'inscrire dans l'histoire en décrochant une dixième victoire consécutive sur ce circuit légendaire. L'ambiance est électrique, et les enjeux sont plus élevés que jamais. ",

            "q1" => "La Q1 s'est déroulée sans encombre pour la plupart des équipes, mais une surprise de taille a secoué le paddock. Les deux voitures Alpine, qui avaient montré un potentiel prometteur tout au long de la saison, ont échoué à se qualifier pour la Q2. Cette inattendue élimination précoce a laissé les fans perplexes et suscité de nombreuses questions dans les stands. Les pilotes et les ingénieurs d'Alpine seront certainement en train de passer en revue leur stratégie et de rechercher les raisons de cette performance en deçà de leurs attentes, alors que la compétition à Monza continue de s'intensifier.",

            "q2" => "Malgré des efforts acharnés, les deux voitures AlphaTauri n'ont pas réussi à se qualifier pour la Q3 sur leur course nationale. C'est un moment difficile pour l'équipe italienne et ses supporters, car ils espéraient voir leurs pilotes briller à Monza. Néanmoins, le niveau de compétition en Formule 1 est extrêmement élevé, et il ne fait aucun doute que l'équipe AlphaTauri reviendra plus forte pour les prochaines courses et continuera à représenter dignement l'Italie sur la scène mondiale de la course automobile.",

            "q3" => "Dès la première sortie, Carlos Sainz a surpris tout le monde en prenant la première position, suivi de près par son coéquipier Charles Leclerc. Les acclamations des tifosi ont retenti dans les tribunes alors que les Ferrari dominaient la séance de qualification.

            Mais la vraie action s'est déroulée lors de la dernière sortie. Les temps des Ferrari et de Max Verstappen étaient incroyablement serrés. Charles Leclerc a été le premier à franchir la ligne, réussissant à s'emparer de la pole position provisoire. Cependant, Max Verstappen a répliqué avec une performance exceptionnelle, volant presque la pole à Leclerc. L'excitation était à son comble dans les stands.
            
            Finalement, Carlos Sainz a réalisé une performance époustouflante en signant un temps incroyable, ce qui lui a permis de sécuriser sa deuxième pole position en Formule 1. L'euphorie parmi les tifosi était indescriptible, car ils pouvaient à nouveau espérer une victoire à domicile. La lutte en tête s'annonce intense pour la course à Monza, avec Sainz, Verstappen et Leclerc prêts à en découdre pour la victoire.",

            "conclusion" =>"En conclusion, les qualifications pour le Grand Prix de Monza 2023 ont été un spectacle à couper le souffle, laissant les fans de Formule 1 comblés d'émotions. La séance de qualification a débuté avec une surprise alors que les deux Alpine n'ont pas réussi à se qualifier pour la Q2, marquant un moment difficile pour l'équipe. Cependant, le vrai suspens est venu lors de la Q3.

            Carlos Sainz a créé l'événement en décrochant la pole position, mettant ainsi les tifosi italiens dans une joie débordante. Charles Leclerc et Max Verstappen se sont battus jusqu'au bout pour la pole, créant des moments palpitants. Au final, c'est Carlos Sainz qui a réussi à sécuriser la pole position, sa deuxième en carrière, rendant les tifosi exaltés.
            
            La course qui s'annonce promet d'être inoubliable, avec un trio de tête composé de Sainz, Verstappen et Leclerc qui se disputeront la victoire à Monza. Les enjeux sont élevés, l'atmosphère est électrique, et les tifosi sont prêts à soutenir leurs pilotes italiens.",

            "extra" => ""
        ];
        $qualificationStory[] = [
            "id" => 16,

            "catchphrase" => "2 en 2 Sainz",

            "intro" => "Après des séances de pratiques pour les Red Bulls qui laissaient beaucoup à désirer, l'atmosphère est tendue à Singapour en ce weekend de course. L'équipe Red Bull Racing, pourtant réputée pour sa compétitivité, semble connaître des difficultés inhabituelles. Les performances de Max Verstappen, le pilote principal de l'équipe et candidat au titre de champion du monde, ont également laissé place à des incertitudes",

            "q1" => "Alors que la piste devient de plus en plus rapide, les pilotes se livrent une bataille acharnée pour décrocher le meilleur temps possible. Malheureusement, le sort en a décidé autrement pour Lance Stroll. Dans un ultime effort pour améliorer son temps, il pousse un peu trop fort et perd le contrôle de sa voiture dans le dernier virage, heurtant violemment le mur. Cet accident a contraint les organisateurs à interrompre immédiatement la session.
            Cet incident est d'autant plus malheureux pour Oscar Piastry, qui était en bonne position pour se qualifier en Q2.",

            "q2" => "Une séance qui a réservé bien des surprises et des déceptions pour l'équipe Red Bull Racing. Après avoir complété leurs tours, les deux pilotes de l'équipe semblaient en difficulté. Sergio Perez, pourtant réputé pour ses performances, ne parvient pas à décrocher une place en Q3, laissant les fans de Red Bull abasourdis.
            Pendant ce temps, Max Verstappen, le fer de lance de l'équipe, se retrouve en dixième position, bien loin de ce à quoi les fans et les experts étaient habitués. Les espoirs de Red Bull semblaient diminuer au fur et à mesure que la session avançait. Mais alors que le temps s'écoulait inexorablement, un jeune prodige, Liam Lawson, réussit à réaliser un tour exceptionnel dans les ultimes minutes de la Q2. Sa performance impressionnante relègue Max Verstappen à la onzième position, le privant d'une place en Q3.",

            "q3" => "L'intensité monte d'un cran alors que les meilleures équipes de la grille se disputent férocement la pole position. Les Ferrari, les Mercedes et Lando Norris se livrent une bataille acharnée, échangeant les secteurs les plus rapides, chacun cherchant à prendre l'avantage.

            Finalement, c'est l'Espagnol Carlos Sainz qui réussit à s'emparer de la pole position avec un temps époustouflant de 1 minute, 30 secondes et 984 millièmes de seconde. La Scuderia Ferrari, qui avait connu des saisons mitigées ces dernières années, est de retour sous les feux de la rampe, tandis que Sainz inscrit son nom en lettres d'or dans l'histoire de la Formule 1 en s'assurant de la première place sur la grille de départ.",

            "conclusion" =>" les qualifications du Grand Prix de Formule 1 de Singapour 2023 se sont avérées être un spectacle inoubliable, marqué par des rebondissements imprévisibles et des performances extraordinaires. Les qualifications ont  été empreintes de surprises, dès les premières minutes de la Q1 jusqu'à l'excitation de la bataille pour la pole position en Q3.

            Les difficultés rencontrées par l'équipe Red Bull Racing ont jeté un doute inattendu sur sa domination habituelle, tandis que l'ascension du jeune prodige Liam Lawson a éclipsé Max Verstappen en Q2. Dans un final palpitant, Carlos Sainz et la Scuderia Ferrari ont brillé en décrochant la pole position, montrant que la Formule 1 peut toujours réserver des moments de pure magie.",

            "extra" => ""
        ];
        $qualificationStory[] = [
            "id" => 17,

            "catchphrase" => "Red Bulls en forme",

            "intro" => "Le pays du soleil levant s'apprête à accueillir l'une des courses les plus attendues de l'année : le Grand Prix du Japon 2023.Les essais libres ont déjà dévoilé un tableau intrigant, avec les Red Bulls qui semblent avoir retrouvé leur mordant après un week-end difficile à Singapour. Cette résurgence ravit non seulement les fans de l'écurie autrichienne, mais aussi son partenaire moteur, Honda, dont l'origine japonaise fait de cette course un événement particulièrement spécial.",

            "q1" => "Dès le début de la Q1, l'excitation était à son comble sur le circuit de Suzuka. Malheureusement, la séance a été marquée par un incident malheureux pour le jeune pilote de l'écurie Williams, Logan Sargeant. Alors qu'il entamait son premier tour lancé, Sargeant a subi une perte de contrôle de sa monoplace dans le dernier virage, la propulsant directement contre les barrières de sécurité. L'impact a été suffisamment grave pour déclencher le drapeau rouge et interrompre temporairement la séance. Heureusement, le pilote a rapidement été confirmé comme étant indemne, bien que certainement secoué par cet accident.
            Quant au reste de la Q1, il n'y a pas eu de surprises majeures. Les pilotes éliminés, parmi lesquels on retrouve Valtteri Bottas, Lance Stroll, Nico Hülkenberg, Guanyu Zhou et Logan Sargeant, ne sont pas parvenus à atteindre le temps nécessaire pour passer à la phase suivante des qualifications.",

            "q2" => "Le moment le plus marquant de la Q2 a été la performance de Yuki Tsunoda, le seul pilote japonais de la grille cette année. Devant son public passionné, Tsunoda a réalisé une performance exceptionnelle, se hissant parmi les dix meilleurs pilotes et assurant ainsi sa place en Q3. Son exploit a été salué par les fans japonais présents dans les tribunes, qui ont chaleureusement applaudi leur compatriote.",

            "q3" => " Max Verstappen, au volant de sa Red Bull, a tout simplement ébloui avec des secteurs violets affichés sur l'ensemble de la piste de Suzuka. Le Néerlandais a affiché une maîtrise impressionnante de sa monoplace, montrant sa détermination à décrocher la pole position.
            Cependant, la bataille pour les places suivantes a également été intense. Deux jeunes talents, Oscar Piastri et Lando Norris, tous deux au sein de l'équipe McLaren, se sont livrés à une lutte acharnée pour la deuxième position sur la grille de départ. Finalement, c'est Piastri, le rookie, qui a réalisé une performance remarquable en s'assurant la deuxième place, dépassant même son coéquipier Norris, qui a dû se contenter de la troisième position.",

            "conclusion" =>"La grille de départ pour le Grand Prix du Japon 2023 est désormais établie, avec Max Verstappen en pole position, suivi de près par les jeunes talents de McLaren. Les attentes pour la course de demain sont à leur comble, car les pilotes se préparent à en découdre sur ce magnifique circuit de Suzuka. Le Grand Prix du Japon 2023 s'annonce d'ores et déjà comme un événement épique de la saison de Formule 1.",

            "extra" => ""
        ];



        Db::table('qualification_stories')->delete();
        Db::table('qualification_stories')->insert($qualificationStory);
    }
}
