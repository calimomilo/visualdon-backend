<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('titles')->delete();

        DB::table('titles')->insert(array (
            0 =>
            array (
                'id' => '11',
                'composer_id' => '1',
                'name' => 'Short Ride in a Fast Machine',
                'release_year' => '1986',
                'spotify_uri' => '7nOHjpeOH4G2DjWBJqmIDm',
                'description' => 'Les deux pièces écrites à la même période mais de manière autonome ont été jumelées par la suite par le compositeur. Tromba Lontana a été commissionnée par Tobias Picker et le Houston Symphony Orchestra à l\'occasion des célébrations du cent-cinquantenaire des célébrations de l\'indépendance de la république du Texas du Mexique en 1835. Short Ride in a Fast Machine est composée pour l\'ouverture du Festival Great Woods de Mansfield.',
            ),
        1 =>
            array (
                'id' => '21',
                'composer_id' => '2',
                'name' => 'Suite pour violoncelle n°1 “Prélude”',
                'release_year' => '1723',
                'spotify_uri' => '3UZoFe0OAiWjl02lbPEWvk',
                'description' => 'Les suites pour violoncelle seul (BWV 1007 à 1012) sont un ensemble de six œuvres de Jean-Sébastien Bach. Ces suites sont aujourd\'hui considérées comme des classiques incontournables du répertoire du violoncelle moderne.',
            ),
        2 =>
            array (
                'id' => '22',
                'composer_id' => '2',
                'name' => 'Toccata et fugue en ré mineur',
                'release_year' => '1707',
                'spotify_uri' => '0BWJNm4TrO6H3qgiCmDBjM',
                'description' => 'La Toccata et fugue en ré mineur, BWV 565, est une œuvre pour orgue écrite par Jean-Sébastien Bach entre 1703 et 1707.',
            ),
        3 =>
            array (
                'id' => '23',
                'composer_id' => '2',
                'name' => 'Suite orchestrale n°2 “Badinerie”',
                'release_year' => '1739',
                'spotify_uri' => '3WLdAnaKYrSuY8NL8tBJB2',
                'description' => 'La Suite no 2 en si mineur, BWV 1067, (aussi appelée Ouverture no 2), du compositeur allemand Jean-Sébastien Bach (1685-1750) est une suite orchestrale baroque en 7 mouvements (une de ses 4 suites pour orchestre de composée vers 1739, pour flûte traversière, 2 violons, alto et basse continue, avec son célèbre mouvement final « Badinerie » pour flûtiste solo.',
            ),
        4 =>
            array (
                'id' => '24',
                'composer_id' => '2',
                'name' => 'Prélude en do majeur "clavier bien tempéré"',
                'release_year' => '1722',
                'spotify_uri' => '6ruuc79i1YT3ofaITcMyxR',
                'description' => 'Le Clavier bien tempéré (souvent abrégé WTC en raison de son titre en anglais, The Well-Tempered Clavier ; originellement en allemand Das Wohltemperierte Clavier), couvrant les numéros BWV 846 à 893, est un ensemble de deux cycles de vingt-quatre préludes et fugues chacun, composé par Jean-Sébastien Bach. Ces deux recueils sont l\'une des œuvres les plus importantes de l\'histoire de la musique classique. Leur objectif est à la fois musical, théorique et didactique.',
            ),
        5 =>
            array (
                'id' => '31',
                'composer_id' => '3',
                'name' => 'Allegro barbaro',
                'release_year' => '1911',
                'spotify_uri' => '2o2ujc4SAGTsBMgkNs8NTM',
                'description' => 'Bartók ne compose, sans arrière-pensée, qu\'un Allegro. Le titre est absent de la partition autographe. Il apparaît dans l\'édition de 1913 de Nyugat dans son numéro du 1er janvier (p. 57–69). Kodály évoque le clin d\'œil humoristique de son confrère, à un critique qui, au festival hongrois de Paris le 12 mars 1910, avait parlé des « jeunes barbares hongrois »',
            ),
        6 =>
            array (
                'id' => '41',
                'composer_id' => '4',
                'name' => 'Symphonie n°7 “Allegretto”',
                'release_year' => '1812',
                'spotify_uri' => '79RYNk7I1YDy4RLPamenAn',
                'description' => 'La Symphonie no 7 en la majeur, op. 92 de Ludwig van Beethoven (1770-1827) est une des neuf symphonies du compositeur, pour orchestre symphonique, en quatre mouvements, composée entre 1811 et 1812. Son 2e mouvement Allegretto est « une de mes meilleures œuvres » selon le compositeur, une « apothéose de la danse... » selon Richard Wagner.',
            ),
        7 =>
            array (
                'id' => '42',
                'composer_id' => '4',
                'name' => 'Symphonie n°9 “Ode à la joie”',
                'release_year' => '1824',
                'spotify_uri' => '5G2RyS5wHOHh8JjLg13AnJ',
                'description' => 'La Symphonie no 9, op. 125, de Ludwig van Beethoven, est une symphonie chorale en ré mineur en quatre mouvements pour grand orchestre, solos et chœur mixte. Elle a été composée de la fin de l\'année 1822 à février 1824, et créée à Vienne le 7 mai 1824 en hommage au roi Frédéric-Guillaume III de Prusse. Son finale (25 minutes environ) est à lui seul aussi long que la totalité de la Huitième symphonie ; il introduit des sections chantées sur l\'Ode à la joie (Ode an die Freude) de Friedrich von Schiller.',
            ),
        8 =>
            array (
                'id' => '43',
                'composer_id' => '4',
                'name' => 'La Bagatelle en la mineur “La Lettre à Élise”',
                'release_year' => '1810',
                'spotify_uri' => '4ybl4bRtM2Qevi8NyPxB4j',
                'description' => 'La Bagatelle en la mineur, WoO 59, « La Lettre à Élise » (Für Elise) est une pièce musicale pour piano en la mineur composée par Ludwig van Beethoven en 1810',
            ),
        9 =>
            array (
                'id' => '44',
                'composer_id' => '4',
                'name' => 'Symphonie n°6 “Pastorale”',
                'release_year' => '1808',
                'spotify_uri' => '6VQJcssvejpr6hPL1zeWME',
                'description' => 'La Symphonie no 6 en fa majeur, opus 68, dite Pastorale, de Ludwig van Beethoven, est composée entre 1805 et 1808. Beethoven l\'intitule précisément dans une lettre à Breitkopf & Härtel (28 mars 1809) : Symphonie Pastorale, ou Souvenir de la vie rustique, plutôt émotion exprimée que peinture descriptive et la co-dédie au prince Lobkowitz et au comte Razumovsky. L\'œuvre est créée le 22 décembre 1808 au Theater an der Wien de Vienne et publiée en avril 1809 chez Breitkopf & Härtel, jouée et publiée en même temps que la cinquième.',
            ),
        10 =>
            array (
                'id' => '45',
                'composer_id' => '4',
                'name' => 'Sonate n°14 “Sonate au clair de lune”',
                'release_year' => '1801',
                'spotify_uri' => '1dkSHRA7VTgKYETJ3T0KcQ',
                'description' => 'La Sonate pour piano no 14 de Beethoven en do dièse mineur, opus 27 no 2, surnommée « Sonate au Clair de lune », est une sonate pour piano seul en trois mouvements composée par Ludwig van Beethoven en 1801.',
            ),
        11 =>
            array (
                'id' => '46',
                'composer_id' => '4',
                'name' => 'Symphonie n°5 “Allegro con brio”',
                'release_year' => '1807',
                'spotify_uri' => '02EjNQRJohFLY4NaXiFdH1',
                'description' => 'La Symphonie no 5 en ut mineur, op. 67, dite Symphonie du Destin, a été écrite par Ludwig van Beethoven en 1805-1807 et créée le 22 décembre 1808 au Theater an der Wien de Vienne. Le compositeur a dédié l\'œuvre au prince Lobkowitz et au comte Razoumovski, un diplomate russe qui avait commandé les trois quatuors à cordes de l\'op. 59 à Beethoven.',
            ),
        12 =>
            array (
                'id' => '51',
                'composer_id' => '5',
                'name' => 'La Damnation de Faust “Marche hongroise”',
                'release_year' => '1846',
                'spotify_uri' => '74DtlQ23SmcKTQfuX7kBWx',
                'description' => 'La Damnation de Faust (sous-titrée « Légende dramatique en quatre parties ») opus 24, est un oratorio pour solistes, chœurs et orchestre symphonique du compositeur français Hector Berlioz. Inspirée du premier Faust, une tragédie de 1808, de Johann Wolfgang von Goethe. Elle est créée à l\'Opéra-Comique de Paris le 6 décembre 1846. Le livret est une libre adaptation, par Almire Gandonnière et Berlioz lui-même, de la pièce de Goethe telle qu\'elle avait été traduite par Gérard de Nerval en 1828. Le plan en est semblable, mais le découpage, la perspective d\'ensemble et le finale diffèrent considérablement de l\'original. De même que Goethe s\'était emparé de La Tragique Histoire du docteur Faust de 1592 de Christopher Marlowe, Berlioz s\'est emparé de celui de Goethe et en a fait une sorte d\'autoportrait musical.',
            ),
        13 =>
            array (
                'id' => '61',
                'composer_id' => '6',
                'name' => 'Danse hongroise n°5',
                'release_year' => '1869',
                'spotify_uri' => '5ql64tgcioaawf4CgM1wcN',
                'description' => 'Les Danses hongroises op. deest de Johannes Brahms sont une série de 21 compositions et arrangements de danse hongroise pour piano à quatre mains, composées entre 1867 et 1880, inspirées pour la plupart d\'airs populaires de danse hongroise traditionnelle et folklorique d\'origine tzigane ou slaves.',
            ),
        14 =>
            array (
                'id' => '62',
                'composer_id' => '6',
                'name' => 'Wiegenlied, Op. 49, No. 4, "Bonsoir, bonne nuit"',
                'release_year' => '1868',
                'spotify_uri' => '3VlXTyJyEKnWDBYYcEqy80',
                'description' => 'La Berceuse de Brahms (en allemand Wiegenlied), parfois désignée par son premier vers, « Guten Abend, gute Nacht » (litt. « Bonsoir, bonne nuit »), est un lied de Johannes Brahms publié en 1868 et portant le numéro d\'opus 49/4. Cette œuvre pour voix et piano est l\'une des berceuses les plus célèbres de la musique classique',
            ),
        15 =>
            array (
                'id' => '71',
                'composer_id' => '7',
                'name' => 'Nocturne n°2',
                'release_year' => '1832',
                'spotify_uri' => '61YM5SkqqeUjIBL7It56cs',
                'description' => 'Chopin a composé ce nocturne no 2 à l\'âge d\'environ vingt ans. En mi bémol majeur, il fait partie de ses œuvres les plus connues. Il a une forme binaire (A, A, B, A, B, A) avec une coda, C d\'après Lennox Berkeley. Il fait 34 mesures, écrites en 12/8 et a une structure similaire à une valse.',
            ),
        16 =>
            array (
                'id' => '72',
                'composer_id' => '7',
                'name' => 'Fantaisie Impromptue',
                'release_year' => '1834',
                'spotify_uri' => '0Y9BzZGT2FuLVPrHoq1g2G',
                'description' => 'La Fantaisie-Impromptu, opus posthume 66, est une œuvre pour piano seul de Frédéric Chopin, l\'un de ses plus célèbres chefs-d\'œuvre. Elle est composée en 1834 pour Madame la Baronne Augusta Emma d\'Este. Ce quatrième et dernier des Impromptus du compositeur est achevé chronologiquement en premier, et publié en 1855 à titre posthume, par Julian Fontana.',
            ),
        17 =>
            array (
                'id' => '81',
                'composer_id' => '8',
                'name' => 'Suite Bergamasque “Clair de lune”',
                'release_year' => '1890',
                'spotify_uri' => '1cmigB9I6IRpFqjIbzvSQB',
                'description' => 'La Suite bergamasque est une suite pour piano du compositeur français Claude Debussy, dont la première rédaction remonte à 1890 environ, et qui est publiée en juin 1905.',
            ),
        18 =>
            array (
                'id' => '82',
                'composer_id' => '8',
                'name' => 'Rêverie',
                'release_year' => '1890',
                'spotify_uri' => '43bSKCMWHIuBsUVmQcDX1J',
                'description' => 'Rêverie est composé en 1890. L’œuvre est éditée par Choudens en 1891, paraît dans le supplément musical de L\'Illustration (no 2751) du 16 novembre 1895, puis chez E. Fromont en 1905.',
            ),
        19 =>
            array (
                'id' => '83',
                'composer_id' => '8',
                'name' => 'Prélude à l’après-midi d’un faune',
                'release_year' => '1894',
                'spotify_uri' => '4NXmcUMQauqEtDYDgP0MEi',
                'description' => 'Le Prélude à l\'Après-midi d\'un faune, sous-titré Églogue pour orchestre d\'après Stéphane Mallarmé, est une œuvre symphonique de Claude Debussy, composée entre 1892 et 1894.',
            ),
        20 =>
            array (
                'id' => '91',
                'composer_id' => '9',
                'name' => 'Symphonie n°9 “Du Nouveau Monde”',
                'release_year' => '1893',
                'spotify_uri' => '6nqHzwOdGIaX57U6VU6kMO',
                'description' => 'La Symphonie no 9 en mi mineur, B. 178 (op. 95) « Du Nouveau Monde » (en tchèque : Symfonie č. 9 e moll « Z nového světa ») est composée par Antonín Dvořák en 1893 et exécutée le 16 décembre de la même année au Carnegie Hall par l\'Orchestre philharmonique de New York sous la direction d\'Anton Seidl. Elle est la plus connue des symphonies de Dvořák et l\'une des œuvres les plus populaires du répertoire symphonique moderne.',
            ),
        21 =>
            array (
                'id' => '92',
                'composer_id' => '9',
                'name' => 'Sérénade pour cordes “Tempo di valse”',
                'release_year' => '1875',
                'spotify_uri' => '295ur6kY6lHv7GbjmKOLAu',
                'description' => 'La sérénade pour cordes ou sérénade pour cordes en mi majeur B. 52 (opus 22) est une sérénade pour orchestre à cordes, en cinq mouvements, composée au printemps 1875 par le compositeur tchèque Antonín Dvořák (1841-1904). Créée le 10 décembre 1876 au Théâtre national de Prague sous la direction d\'Adolf Čech, elle est l\'une de ses œuvres orchestrales les plus populaires à ce jour (en particulier pour son deuxième mouvement Tempo di valse).',
            ),
        22 =>
            array (
                'id' => '101',
                'composer_id' => '10',
                'name' => 'Pompe et Circonstance “Marche n°1”',
                'release_year' => '1901',
                'spotify_uri' => '6kHGpM6LgJ7Pi3HCynQL4d',
                'description' => 'La marche la plus célèbre est sans doute la première, Pomp and Circumstance March No. 1, si bien que le titre Pomp and Circumstance se réfère le plus souvent à elle. Elle fut créée à Londres en octobre 1901 avec la marche no 2, et le public réclama un bis à deux reprises.',
            ),
        23 =>
            array (
                'id' => '102',
                'composer_id' => '10',
                'name' => 'Variations Enigma “Enigma: Andante”',
                'release_year' => '1899',
                'spotify_uri' => '1qcMDHMokaMkR5cND3Oar3',
                'description' => 'Les Variations Enigma, op. 36 sont une œuvre symphonique composée par le compositeur britannique Edward Elgar entre 1898 et 1899, à base d\'un « thème caché crypté énigmatique » et de quatorze variations. Il s’agit de l\'une de ses œuvres les plus connues, par sa musique et ses énigmes, dédiée « à mes amis décrits ici » chaque variation étant un portrait musical d\'un personnage de son proche entourage, et finalement de lui même.',
            ),
        24 =>
            array (
                'id' => '111',
                'composer_id' => '11',
                'name' => 'Glassworks',
                'release_year' => '1981',
                'spotify_uri' => '4gdwUYVnVv8u0t6XaYob4v',
                'description' => 'Glassworks est une œuvre du compositeur américain de musique minimaliste Philip Glass. Cette œuvre majeure de la période minimaliste est composée en 1981, en six mouvements, pour deux flûtes, deux saxophones sopranos, deux saxophones ténors, deux cors, piano/synthétiseur, altos, violoncelles. En 2001, Philip Glass a réalisé une version pour orchestre de Glassworks.',
            ),
        25 =>
            array (
                'id' => '112',
                'composer_id' => '11',
                'name' => 'Metamorphosis',
                'release_year' => '1988',
                'spotify_uri' => '66TMmu4ve50PliM4314Vqd',
                'description' => 'Metamorphosis de Philip Glass est une œuvre pour piano, comportant cinq parties, composée en 1988.',
            ),
        26 =>
            array (
                'id' => '121',
                'composer_id' => '12',
                'name' => 'Peer Gynt “Dans l’antre du roi de la montagne”',
                'release_year' => '1888',
                'spotify_uri' => '43JyC2alhWpoFBpKiPVk8z',
                'description' => 'Dans l\'antre du roi de la montagne (en norvégien : I Dovregubbens hall) est un extrait de la musique de scène, no 1 de l\'op. 46, qu\'Edvard Grieg composa en 1874 pour la pièce de théâtre Peer Gynt, écrite par l\'auteur norvégien Henrik Ibsen en 1867, et jouée pour la première fois à Christiania (actuel Oslo) le 24 février 1876. Le compositeur sélectionnera plus tard cette pièce en si mineur, notée 4/4, Alla marcia e molto marcato (à la façon d\'une marche et très martelé), puis più vivo (plus rapide) et enfin stringendo al fine (accélérer jusqu\'à la fin), pour constituer le mouvement final de la première de deux suites, op. 46 pour orchestre symphonique assemblées en 1888 et en 1891.',
            ),
        27 =>
            array (
                'id' => '122',
                'composer_id' => '12',
                'name' => 'Peer Gynt “Au Matin”',
                'release_year' => '1888',
                'spotify_uri' => '0ksCqjSoPHMhcZzYxsOuT8',
                'description' => 'Au matin (en norvégien Morgenstemning i ørkenen) est un extrait de la musique de scène qu\'Edvard Grieg composa en 1874 pour la pièce de théâtre Peer Gynt, écrite par l\'auteur norvégien Henrik Ibsen. Le thème dans ce morceau est alternativement joué par la flûte et par le hautbois, mais cette œuvre peut être adaptée pour d\'autres instruments, comme le piano.',
            ),
        28 =>
            array (
                'id' => '131',
                'composer_id' => '13',
                'name' => 'Le Messie “Hallelujah”',
                'release_year' => '1741',
                'spotify_uri' => '4L2kCitXBhrdPpGHLj2tFB',
                'description' => 'Le Messie (Messiah, HWV 56) est un oratorio pour chœur, solistes vocaux et orchestre, composé en 1741 par Georg Friedrich Haendel. C\'est une de ses œuvres les plus populaires avec les suites orchestrales Water Music (Musique sur l\'eau) et Music for the Royal Fireworks (Musique pour les feux d\'artifice royaux). Le Messie est désormais considéré comme le chef-d\'œuvre du genre oratorio. Son exécution dure environ 2 heures 30 minutes.',
            ),
        29 =>
            array (
                'id' => '132',
                'composer_id' => '13',
                'name' => 'Sarabande',
                'release_year' => '1733',
                'spotify_uri' => '0FjnJPF8c6dDDHqmBWm48p',
                'description' => 'La Sarabande de Haendel, HWV 437, est une célèbre sarabande baroque pour clavecin seul, publiée en 1733 par le compositeur britannique, d\'origine allemande, Georg Friedrich Haendel (1685-1759). Elle fait partie, avec les deux variations qui la suivent, de la suite no 4 en ré mineur HWV 437 des neuf suites pour clavecin de 1733, HWV 434-442 (ne pas confondre avec l\'air (sarabande) en mi majeur, pour violon et basse continue HWV425).',
            ),
        30 =>
            array (
                'id' => '141',
                'composer_id' => '14',
                'name' => 'Concerto pour trompette et orchestre 3ème mouvement',
                'release_year' => '1796',
                'spotify_uri' => '46I14L4G6mpLC8bwSpKlnI',
                'description' => 'Le Concerto pour trompette et orchestre en mi bémol majeur Hob. VIIe/1 (ou concerto pour clarino) est un concerto du compositeur autrichien Joseph Haydn. Il fut composé en 1796 pour son dédicataire le trompettiste Anton Weidinger (en), musicien à la Cour de Vienne qui inventa une trompette à clé capable de jouer tous les degrés de la gamme chromatique d\'une manière parfaitement juste. Cette invention motiva Haydn à lui écrire cette partition, créée le 22 mars 1800 mais éditée seulement au XXe siècle, en 1929.',
            ),
        31 =>
            array (
                'id' => '151',
                'composer_id' => '15',
                'name' => 'Rhapsodie hongroise n°2',
                'release_year' => '1847',
                'spotify_uri' => '0CzCU6SUQPG2Ny6MnEcriY',
                'description' => 'Rhapsodie hongroise no 2, S. 244/2, est la deuxième d\'une série de dix-neuf Rhapsodies hongroises du compositeur Franz Liszt. Elle est de loin la plus célèbre de la série. Peu de solos de piano ont atteint une telle popularité.',
            ),
        32 =>
            array (
                'id' => '152',
                'composer_id' => '15',
                'name' => 'Rêves d’amour',
                'release_year' => '1850',
                'spotify_uri' => '6vI2m2ZTmtlCuPOYkGRqIF',
                'description' => 'Liebesträume (en français : Rêves d\'amour) est un recueil de trois morceaux de forme nocturne pour piano (S/G541) composé par Franz Liszt et publié en 1850.',
            ),
        33 =>
            array (
                'id' => '161',
                'composer_id' => '16',
                'name' => 'Le Bourgeois gentilhomme “Marche pour la cérémonie des turcs”',
                'release_year' => '1670',
                'spotify_uri' => '4pycU7sdvWiEI98CzE62P1',
                'description' => 'Le Bourgeois gentilhomme est une comédie-ballet de Molière, en trois puis cinq actes (comportant respectivement deux, cinq, seize, cinq et six scènes) en prose (sauf les entrées de ballet qui sont en vers). Elle est représentée pour la première fois le 14 octobre 1670, devant la cour de Louis XIV, au château de Chambord par la troupe de Molière. La musique est de Jean-Baptiste Lully, les ballets de Pierre Beauchamp, les décors de Carlo Vigarani et les costumes turcs du chevalier d\'Arvieux.',
            ),
        34 =>
            array (
                'id' => '171',
                'composer_id' => '17',
                'name' => 'Symphonie n°1 "Titan"',
                'release_year' => '1888',
                'spotify_uri' => '3qaTsrxLmq8Q4amrTPX4zb',
                'description' => 'La Symphonie no 1 en ré majeur, dite « Titan », est la première symphonie de Gustav Mahler. Composée en 1888, la symphonie est entièrement remaniée d\'abord en 1893, puis en 1897 et plus en détail jusqu\'en 1903.',
            ),
        35 =>
            array (
                'id' => '172',
                'composer_id' => '17',
                'name' => 'Symphonie n°2 “Résurrection”',
                'release_year' => '1894',
                'spotify_uri' => '3G9Jpr6F14VM7nvXoWXtTI',
                'description' => 'La Symphonie no 2 en ut mineur « Résurrection » de Gustav Mahler est une symphonie composée entre 1888 et 1894. Elle partage le style monumental des Première et Troisième Symphonies. Le vaste finale avec chœur et solistes vocaux la situe dans la lignée de la Neuvième Symphonie de Beethoven. C\'est l’une des œuvres les plus populaires de Mahler.',
            ),
        36 =>
            array (
                'id' => '173',
                'composer_id' => '17',
                'name' => 'Kindertotenlieder',
                'release_year' => '1904',
                'spotify_uri' => '4c2GmOh6dimiHQ6N0X4EZV',
                'description' => 'Les Kindertotenlieder (Chants sur la mort des enfants) sont un cycle de cinq lieder pour voix et orchestre composé par Gustav Mahler de 1901 à 1904. Les poèmes sont des textes extraits du recueil de 428 poèmes Kindertotenlieder que Friedrich Rückert a écrit à la suite de la mort de deux de ses enfants.',
            ),
        37 =>
            array (
                'id' => '181',
                'composer_id' => '18',
                'name' => 'Symphonie n°4 “Italienne”',
                'release_year' => '1833',
                'spotify_uri' => '5X3zbHx8SGhoGZ7rliisbH',
                'description' => 'La symphonie no 4 en la majeur « Italienne », op. 90 (MWV N 16), de Felix Mendelssohn, est une symphonie composée en 1833.',
            ),
        38 =>
            array (
                'id' => '182',
                'composer_id' => '18',
                'name' => 'Le Songe d’une nuit d’été “Mendelssohn”, ouverture',
                'release_year' => '1826',
                'spotify_uri' => '6oSimvbINyW0XM1hYcEVaj',
                'description' => 'Ein Sommernachtstraum (Le Songe d’une nuit d’été en français) est une ouverture (op. 21, MWV P 3) et une musique de scène (op. 61, MWV M 13) de Felix Mendelssohn. Figurant parmi ses œuvres les plus célèbres, elles sont composées pour la comédie de William Shakespeare, A Midsummer Night’s Dream.',
            ),
        39 =>
            array (
                'id' => '191',
                'composer_id' => '19',
                'name' => 'Sérénade n°13 “Une petite musique de nuit”',
                'release_year' => '1787',
                'spotify_uri' => '41DgVxYah1Ma8g68S6C7H5',
                'description' => 'La Sérénade no 13 pour cordes en sol majeur ou Une petite musique de nuit KV 525 (Eine kleine Nachtmusik, en allemand) est une sérénade en sol majeur pour quintette à cordes (deux violons, un alto, un violoncelle, et une contrebasse) composée par Mozart en 1787.',
            ),
        40 =>
            array (
                'id' => '192',
                'composer_id' => '19',
                'name' => 'Requiem en ré mineur “Lacrimosa”',
                'release_year' => '1791',
                'spotify_uri' => '4sMWgtfKYrdsJRY99Ps3zA',
                'description' => 'La messe de Requiem en ré mineur (KV 626), de Wolfgang Amadeus Mozart, composée en 1791, est une œuvre de la dernière année de la vie de Mozart, mais pas exactement la dernière œuvre du compositeur. Elle n\'est de la main de Mozart que pour les deux tiers environ, la mort en ayant interrompu la composition. Elle reste néanmoins une de ses œuvres majeures et emblématiques.',
            ),
        41 =>
            array (
                'id' => '193',
                'composer_id' => '19',
                'name' => 'Requiem en ré mineur “Dies Irae”',
                'release_year' => '1791',
                'spotify_uri' => '21cm9mfzolsDsh1NgzgiTD',
                'description' => 'La messe de Requiem en ré mineur (KV 626), de Wolfgang Amadeus Mozart, composée en 1791, est une œuvre de la dernière année de la vie de Mozart, mais pas exactement la dernière œuvre du compositeur. Elle n\'est de la main de Mozart que pour les deux tiers environ, la mort en ayant interrompu la composition. Elle reste néanmoins une de ses œuvres majeures et emblématiques.',
            ),
        42 =>
            array (
                'id' => '194',
                'composer_id' => '19',
                'name' => 'Les Noces de Figaro “Ouverture”',
                'release_year' => '1786',
                'spotify_uri' => '6CTdhAJuvicfN1ZVvTwd1G',
                'description' => 'Les Noces de Figaro (titre original italien : Le nozze di Figaro, K. 492) est un opera buffa en 4 actes de Wolfgang Amadeus Mozart, sur un livret en italien de Lorenzo Da Ponte inspiré de la comédie de Beaumarchais, Le Mariage de Figaro.',
            ),
        43 =>
            array (
                'id' => '195',
                'composer_id' => '19',
                'name' => 'Sonate pour piano n°11, 3e mouvement “Marche turque”',
                'release_year' => '1783',
                'spotify_uri' => '31gTkx8vBmvcOLSmOxlQCW',
                'description' => 'La Sonate pour piano no 11 de Mozart, en la majeur, K. 331/300i, est la deuxième d\'un cycle de trois sonates pour piano composé par Wolfgang Amadeus Mozart vers 1783. Les deux autres sonates du cycle sont la 10e en do majeur, K. 330/300h et la 12e en fa majeur, K. 332/300j.',
            ),
        44 =>
            array (
                'id' => '196',
                'composer_id' => '19',
                'name' => 'Symphonie n°40 “Molto Allegro”',
                'release_year' => '1788',
                'spotify_uri' => '7kLSUaQSKH9rt9tJKKRwZV',
                'description' => 'La Symphonie no 40 en sol mineur, KV 550 a été composée par Wolfgang Amadeus Mozart durant l\'été 1788, alors âgé de 32 ans. C\'est la plus célèbre de ses symphonies, y atteignant un équilibre exceptionnel entre le fond et la forme, la richesse thématique et la dynamique rythmique. Elle est parfois appelée la « Grande symphonie en sol mineur », pour la distinguer de la « Petite symphonie en sol mineur » no 25 écrite dans la même tonalité.',
            ),
        45 =>
            array (
                'id' => '197',
                'composer_id' => '19',
                'name' => 'La flute enchantée',
                'release_year' => '1791',
                'spotify_uri' => '019fDJfrFTkH7jSQFsso98',
                'description' => 'La Flûte enchantée, K. 620, dont le titre original en allemand est Die Zauberflöte, est un opéra singspiel (pièce de théâtre chantée) composé par Mozart sur un livret d\'Emanuel Schikaneder.',
            ),
        46 =>
            array (
                'id' => '201',
                'composer_id' => '20',
                'name' => 'Une nuit sur le mont Chauve',
                'release_year' => '1867',
                'spotify_uri' => '3N4KGKZNLNOLRjwMsLlnxd',
                'description' => 'Une nuit sur le mont Chauve (en russe : Ночь на лысой горе, Notch\' na lissoï gorie) est un poème symphonique écrit par Modeste Moussorgski.',
            ),
        47 =>
            array (
                'id' => '211',
                'composer_id' => '21',
                'name' => 'Roméo et Juliette “Danse des chevaliers”',
                'release_year' => '1935',
                'spotify_uri' => '2uAX8fARO5yg7bogb5dgow',
                'description' => 'Roméo et Juliette (en russe : Ромео и Джульетта, Romeo i Djulietta), op. 64, est un ballet en trois actes de Sergueï Prokofiev, composé en 1935 peu après le retour du compositeur en Union soviétique. Il est fondé sur la pièce éponyme de William Shakespeare.',
            ),
        48 =>
            array (
                'id' => '212',
                'composer_id' => '21',
                'name' => 'Pierre et le loup, "Pierre"',
                'release_year' => '1936',
                'spotify_uri' => '5ohDexmXQ3nVy7ezL71iTO',
                'description' => 'Pierre et le Loup (Pétia i volk, en russe : Петя и волк) opus 67, est un conte symphonique didactique, pédagogique, allégorique pour enfants, de l\'auteur-compositeur-interprète russe Sergueï Prokofiev.',
            ),
        49 =>
            array (
                'id' => '221',
                'composer_id' => '22',
                'name' => 'Le Villi, La tregenda',
                'release_year' => '1884',
                'spotify_uri' => '6JV1aaSHlvqPslDsryDOIe',
                'description' => 'Puccini a écrit Le Villi peu après avoir eu le prix de composition au conservatoire de Milan. C\'est son professeur, Amilcare Ponchielli, qui lui a suggéré de participer au concours mis en place par l\'éditeur Sonzogno, et annoncé le 1er avril 1883 dans la revue "Il teatro illustrato". Amilcare Ponchielli a mis en contact Puccini avec le poète Ferdinando Fontana, qui avait déjà prêt un sujet à lui proposer. La rencontre entre Puccini, Ponchielli et Fontana s\'est produite autour du 20 juillet à Lecco. Peu de jours après, dans une lettre à sa mère Albina, Puccini se déclara content du sujet.',
            ),
        50 =>
            array (
                'id' => '231',
                'composer_id' => '23',
                'name' => 'Prélude en do dièse mineur opus 3 n°2',
                'release_year' => '1892',
                'spotify_uri' => '3rd1Chqzxr95fcyBaJl0JZ',
                'description' => 'Extrait des 5 morceaux de fantaisie op. 3, le Prélude op. 3 n° 2 en do dièse mineur est une des pièces pour piano les plus célèbres de Rachmaninov, qui figure aussi parmi les premières écrites par le compositeur.',
            ),
        51 =>
            array (
                'id' => '241',
                'composer_id' => '24',
                'name' => 'Boléro',
                'release_year' => '1928',
                'spotify_uri' => '3o72c8AT3vgjqjXw8s8m1A',
                'description' => 'Le Boléro de Maurice Ravel est une musique de ballet pour orchestre en ut majeur composée en 1928 et créée le 22 novembre de la même année à l’Opéra Garnier par sa dédicataire, la danseuse russe Ida Rubinstein. Mouvement de danse au rythme et au tempo invariables, à la mélodie uniforme et répétitive, le Boléro de Ravel tire ses seuls éléments de variation des effets d’orchestration, d’un crescendo graduel et, in extremis, d’une courte modulation en mi majeur.',
            ),
        52 =>
            array (
                'id' => '242',
                'composer_id' => '24',
                'name' => 'Pavane pour une enfant défunte',
                'release_year' => '1899',
                'spotify_uri' => '6C3c3LpDsgbQrZqqOj9aDs',
                'description' => 'La Pavane pour une infante défunte est à l\'origine une pièce pour piano de Maurice Ravel composée en 1899 et dédiée à la princesse de Polignac. La création de la version pianistique eut lieu à Paris le 5 avril 1902 par le pianiste Ricardo Viñes. Son exécution dure environ six minutes.',
            ),
        53 =>
            array (
                'id' => '251',
                'composer_id' => '25',
                'name' => 'Music for 18 Musicians',
                'release_year' => '1976',
                'spotify_uri' => '1LWabh9wqLITaRpYe82PoD',
                'description' => 'Music for 18 Musicians, appelée également 18, est une œuvre musicale de Steve Reich composée entre mai 1974 et avril 1976 pour un ensemble concertant de 18 musiciens. Cette œuvre est considérée à la fois comme l\'une des pièces maîtresses du compositeur notamment de sa période dite de « minimalisme mature » et comme une œuvre essentielle de la musique contemporaine, en particulier de la musique minimaliste.',
            ),
        54 =>
            array (
                'id' => '252',
                'composer_id' => '25',
                'name' => 'Clapping Music',
                'release_year' => '1972',
                'spotify_uri' => '5CsQiYEc9glNTs8h7GygyC',
                'description' => 'Clapping Music est une œuvre de musique minimaliste du compositeur américain Steve Reich, écrite en 1972 pour deux personnes tapant dans leurs mains.',
            ),
        55 =>
            array (
                'id' => '253',
                'composer_id' => '25',
                'name' => 'Different Trains',
                'release_year' => '1988',
                'spotify_uri' => '1YiBEdXvyWL9rupB3Cg4IQ',
                'description' => 'Different Trains est une œuvre musicale pour quatuor à cordes et bande magnétique du compositeur américain Steve Reich de musique contemporaine écrite en 1988. Cette œuvre a remporté le Grammy Award de la meilleure composition de musique classique contemporaine en 1989.',
            ),
        56 =>
            array (
                'id' => '261',
                'composer_id' => '26',
                'name' => 'Le Conte du tsar Saltan “Le Vol du bourdon”',
                'release_year' => '1900',
                'spotify_uri' => '4JEOnxMmaumcwQedlecpPH',
                'description' => 'Le Vol du bourdon est un interlude orchestral écrit en 1899-1900 par Nikolaï Rimski-Korsakov pour son opéra Le Conte du tsar Saltan.',
            ),
        57 =>
            array (
                'id' => '271',
                'composer_id' => '27',
                'name' => 'Le Barbier de Séville “Ouverture”',
                'release_year' => '1816',
                'spotify_uri' => '3PGPfeQTaZgHnmofWYBHSW',
                'description' => 'Le Barbier de Séville est l\'opéra le plus connu de Gioachino Rossini, sur un livret de Cesare Sterbini, créé en 1816 et considéré par beaucoup comme le chef-d\'œuvre de l\'opéra bouffe italien.',
            ),
        58 =>
            array (
                'id' => '272',
                'composer_id' => '27',
                'name' => 'La Pie voleuse “Ouverture”',
                'release_year' => '1817',
                'spotify_uri' => '4lDiCwLIG0V2VKVvKC1qd2',
                'description' => 'La Pie voleuse (La gazza ladra, en italien) est un opéra italien en deux actes de Gioachino Rossini, créé en 1817. Le livret de Giovanni Gherardini est une adaptation d\'une pièce de théâtre française contemporaine La Pie voleuse, ou la Servante de Palaiseau, de Théodore Baudouin d\'Aubigny et Louis-Charles Caigniez (1815). L\'opéra remporte un grand succès à sa création et reste aujourd\'hui célèbre en particulier pour son ouverture grandiose. Cet opéra est le premier d\'une longue série d\'opéras semi-sérieux (opera semiseria) de Rossini',
            ),
        59 =>
            array (
                'id' => '273',
                'composer_id' => '27',
                'name' => 'Guillaume Tell “Ouverture”',
                'release_year' => '1829',
                'spotify_uri' => '6qRGnNDdQxyTLHckUVHm4A',
                'description' => 'Guillaume Tell est un opéra en quatre actes de Gioachino Rossini, sur un livret d\'Étienne de Jouy et Hippolyte Bis, aidés d\'Armand Marrast et d\'Adolphe Crémieux, d\'après la pièce de Friedrich von Schiller, elle-même inspirée de la légende suisse. L\'œuvre fut jouée pour la première fois le 3 août 1829 dans la salle Le Peletier à l\'Opéra de Paris, en langue française. Traduit en italien sous le titre de Guglielmo Tell, la première est donnée à Lucques en 1831, les quatre actes furent réduits à trois. La première londonienne, en langue anglaise, a lieu au Drury Lane en 1830.',
            ),
        60 =>
            array (
                'id' => '281',
                'composer_id' => '28',
                'name' => '“Danse macabre”',
                'release_year' => '1874',
                'spotify_uri' => '1IM8x4lxZVOOP9gpQD6c5s',
                'description' => 'La Danse macabre, opus 40, est un poème symphonique en sol mineur composé en 1874 par Camille Saint-Saëns d\'après le poème d\'Henri Cazalis Égalité-Fraternité, tiré des Heures sombres, quatrième partie de son recueil L\'Illusion paru en 1875. Elle est jouée pour la première fois à Paris le 24 janvier 1875, sous la direction d\'Édouard Colonne. Contrairement à la légende, la Danse macabre n\'a été ni chahutée ni sifflée à la première de Colonne, ni à la seconde audition, le 7 février 1875. Colonne dut même la bisser. En revanche, elle le fut chez Pasdeloup, lorsque ce dernier la présenta le 24 octobre de la même année. C\'est aujourd\'hui un morceau célèbre.',
            ),
        61 =>
            array (
                'id' => '282',
                'composer_id' => '28',
                'name' => 'Le Carnaval des animaux “Aquarium”',
                'release_year' => '1886',
                'spotify_uri' => '0W4kuUA1ZoBrJ6ELXRgLE9',
                'description' => 'Le Carnaval des animaux est une suite pour ensemble instrumental de Camille Saint-Saëns composée en Autriche au début de 1886. L\'œuvre est créée le 9 mars 1886 puis jouée le 2 avril 1886 en auditions privées à Paris, chez le violoncelliste Charles Lebouc et chez la cantatrice Pauline Viardot respectivement. Les premières auditions intégrales, publiques (posthumes), ont lieu le 25 et le 26 février 1922 sous la direction de Gabriel Pierné.',
            ),
        62 =>
            array (
                'id' => '291',
                'composer_id' => '29',
                'name' => 'Quintette en la majeur “La Truite”',
                'release_year' => '1819',
                'spotify_uri' => '65pH1SZhFGqP0YIZ3E2cPX',
                'description' => 'L\'œuvre a été composée en 1819, alors que Franz Schubert n\'avait que 22 ans ; cependant, elle ne fut pas publiée avant 1829, soit un an après sa mort. L\'effectif instrumental est original : il comporte un piano, un violon, un alto, un violoncelle et une contrebasse (et non pas un quatuor à cordes comprenant nécessairement deux violons, accompagné d\'un piano). Cependant, Franz Schubert ne fut pas le premier à composer pour une telle formation ; Johann Nepomuk Hummel l\'avait déjà utilisée pour son Quintette pour piano, violon, alto, violoncelle et contrebasse en mi bémol majeur, op.87 (1802).',
            ),
        63 =>
            array (
                'id' => '292',
                'composer_id' => '29',
                'name' => 'Trio pour piano et cordes n°2',
                'release_year' => '1827',
                'spotify_uri' => '6BrActToHY8SntN6gU5OXX',
                'description' => 'Le Trio no 2 de Schubert ou Trio en mi bémol majeur pour piano et cordes no 2 (D. 929 op. 100) est un trio de musique de chambre en quatre mouvements, pour violon, violoncelle, et piano, composé par le compositeur autrichien Franz Schubert (1797-1828) en novembre 1827 (un de ses plus célèbres chefs-d\'œuvre, parmi plus de mille compositions de son catalogue Deutsch, avant sa disparition précoce à l\'age de 31 ans).',
            ),
        64 =>
            array (
                'id' => '293',
                'composer_id' => '29',
                'name' => 'Symphonie n°8 inachevée “Allegro moderato”',
                'release_year' => '1822',
                'spotify_uri' => '2va0TUBNVkXBWOQjqQGozH',
                'description' => 'La symphonie en si mineur, D. 759, de Franz Schubert, fut composée en 1822 mais ne fut découverte que plusieurs années après la mort du compositeur, contribuant à sa renommée. On lui attribue habituellement le no 8 (mais elle porte parfois le no 7).',
            ),
        65 =>
            array (
                'id' => '294',
                'composer_id' => '29',
                'name' => 'Ellens dritter Gesang "Ave Maria"',
                'release_year' => '1825',
                'spotify_uri' => '2FBr1kHVw616K1znNj1d0H',
                'description' => 'Ellens dritter Gesang (Ellens Gesang III, Hymne an die Jungfrau, D839, op. 52 no 6, 1825), littéralement le « Troisième chant d\'Ellen » (Hymne à la Vierge), est une des compositions les plus populaires de Franz Schubert. Composée en 1825, elle est aujourd\'hui mondialement connue sous le nom d\'« Ave Maria de Schubert ».',
            ),
        66 =>
            array (
                'id' => '301',
                'composer_id' => '30',
                'name' => 'Les Scènes d\'enfants (Kinderszenen), n°3 "Rêverie"',
                'release_year' => '1838',
                'spotify_uri' => '7AGNXodUXY7u0a0NCmHq6n',
                'description' => 'Les Scènes d\'enfants (Kinderszenen), op. 15, sont un cycle de treize courtes pièces pour piano, composé au début de l\'année 1838 par Robert Schumann. Sa pièce la plus connue est Träumerei (Rêverie), en septième position dans le recueil.',
            ),
        67 =>
            array (
                'id' => '302',
                'composer_id' => '30',
                'name' => 'Symphonic Etudes, Op. 13: Etude 2/Var. 2. "Études en forme de variations"',
                'release_year' => '1852',
                'spotify_uri' => '761rsSPsocjxrWdKDUwjCB',
                'description' => 'Les Études symphoniques, op. 13, écrites pour le piano, ont été composées par Robert Schumann en 1834. La première édition intitulée Études symphoniques date de 1837 ; la seconde a été publiée en 1852 sous le titre Études en forme de variations.',
            ),
        68 =>
            array (
                'id' => '311',
                'composer_id' => '31',
                'name' => 'Suite pour orchestre de variété n°1 “Valse n°2”',
                'release_year' => '1956',
                'spotify_uri' => '7mdxkXZD7kBOXmkpcfq3mL',
                'description' => 'La Suite pour orchestre de variété no 1, opus 50b est une œuvre de musique classique pour orchestre symphonique du compositeur russe Dmitri Chostakovitch constituée de pièces pour orchestre et datée de 1956. La Valse no 2 (7e mouvement) est une des compositions les plus célèbres du compositeur.',
            ),
        69 =>
            array (
                'id' => '321',
                'composer_id' => '32',
                'name' => 'Ma patrie “La Moldau (Vltava )”',
                'release_year' => '1879',
                'spotify_uri' => '5BfYMZUqH60CizAC6zgx7s',
                'description' => 'Ma patrie (en tchèque : Má Vlast [maː vlast]) est un cycle de six poèmes symphoniques composé entre 1874 et 1879 par le compositeur de Bohême Bedřich Smetana (1824-1884) en référence au mythe fondateur patriotique de sa patrie, la Bohême (actuelle République tchèque).',
            ),
        70 =>
            array (
                'id' => '331',
                'composer_id' => '33',
                'name' => 'Le Sacre du printemps, Introduction',
                'release_year' => '1913',
                'spotify_uri' => '1MiWGSGDC5mGoP3MNclZ7s',
                'description' => 'Le Sacre du printemps, sous-titré Tableaux de la Russie païenne en deux parties, est un ballet composé par Igor Stravinsky et chorégraphié originellement par Vaslav Nijinski pour les Ballets russes de Serge de Diaghilev.',
            ),
        71 =>
            array (
                'id' => '332',
                'composer_id' => '33',
                'name' => 'L’Oiseau de feu',
                'release_year' => '1910',
                'spotify_uri' => '0rku1F2yMDGgXSS54jW0E0',
                'description' => 'L\'Oiseau de feu (en russe : Жар-птица, Jar-ptitsa) est un ballet en deux tableaux d\'après un conte national russe. La musique a été composée par Igor Stravinsky en 1909-1910 sur la commande de Serge de Diaghilev. Il a été créé à l\'Opéra de Paris le 25 juin 1910 par les Ballets russes sur une chorégraphie de Michel Fokine et sous la direction de Gabriel Pierné.',
            ),
        72 =>
            array (
                'id' => '341',
                'composer_id' => '34',
                'name' => 'Casse-noisette “La Valse des fleurs”',
                'release_year' => '1918',
                'spotify_uri' => '4n1n8Sv582ngOSunFh8JEy',
                'description' => 'Casse-Noisette est un ballet-féerie dont la musique est de Piotr Ilitch Tchaïkovski en deux actes, soit trois tableaux et 15 scènes, présenté pour la première fois le 18 décembre 1892 au théâtre Mariinsky de Saint-Pétersbourg sous la direction de Riccardo Drigo et chorégraphié par Lev Ivanov.',
            ),
        73 =>
            array (
                'id' => '342',
                'composer_id' => '34',
                'name' => 'Casse-noisette “Danse de la Fée Dragée”',
                'release_year' => '1918',
                'spotify_uri' => '2mHuWnTgyQiTz6jiSZYkON',
                'description' => 'Casse-Noisette est un ballet-féerie dont la musique est de Piotr Ilitch Tchaïkovski en deux actes, soit trois tableaux et 15 scènes, présenté pour la première fois le 18 décembre 1892 au théâtre Mariinsky de Saint-Pétersbourg sous la direction de Riccardo Drigo et chorégraphié par Lev Ivanov.',
            ),
        74 =>
            array (
                'id' => '343',
                'composer_id' => '34',
                'name' => 'Casse-noisette “Trépak - danse russe”',
                'release_year' => '1918',
                'spotify_uri' => '3aRaAsPYJSidnxddU5WGNW',
                'description' => 'Casse-Noisette est un ballet-féerie dont la musique est de Piotr Ilitch Tchaïkovski en deux actes, soit trois tableaux et 15 scènes, présenté pour la première fois le 18 décembre 1892 au théâtre Mariinsky de Saint-Pétersbourg sous la direction de Riccardo Drigo et chorégraphié par Lev Ivanov.',
            ),
        75 =>
            array (
                'id' => '344',
                'composer_id' => '34',
                'name' => 'Le Lac des Cygnes “finale”',
                'release_year' => '1876',
                'spotify_uri' => '1OEqFSSjeWHYz54zV7fVVM',
                'description' => 'Le Lac des cygnes, op. 20  est un ballet en quatre actes sur une musique de Piotr Ilitch Tchaïkovski et un livret de Vladimir Begitchev inspiré d\'une légende allemande. Il est composé entre 1875 et 1876.',
            ),
        76 =>
            array (
                'id' => '345',
                'composer_id' => '34',
                'name' => 'La Belle au bois dormant, acte 1 n°7',
                'release_year' => '1890',
                'spotify_uri' => '3xHLvYUS0i1PAcnYF5vxOx',
                'description' => 'La Belle au bois dormant est un ballet en un prologue, trois actes et cinq tableaux représenté pour la première fois le 15 janvier 1890 au Théâtre Mariinsky de Saint-Pétersbourg, avec une chorégraphie de Marius Petipa et sur une musique de Piotr Ilitch Tchaïkovski (opus 66), inspiré du conte de Charles Perrault et des frères Grimm.',
            ),
        77 =>
            array (
                'id' => '346',
                'composer_id' => '34',
                'name' => 'Ouverture solennelle 1812',
                'release_year' => '1880',
                'spotify_uri' => '7AHTIf4Qqwr1keqIqm8lkj',
                'description' => 'L’Ouverture solennelle 1812 en mi bémol majeur, op. 49, également appelée L\'Année 1812 ou Ouverture 1812, est une ouverture solennelle de Piotr Ilitch Tchaïkovski, composée entre septembre et novembre 1880 pour commémorer la retraite de Russie lors de la campagne napoléonienne de Russie en 1812.',
            ),
        78 =>
            array (
                'id' => '351',
                'composer_id' => '35',
                'name' => 'Aïda “La Marche des trompettes” ou “Marche triomphale”',
                'release_year' => '1871',
                'spotify_uri' => '1aFiXL5i57ADtArAuvHi7K',
                'description' => 'Aida (Aïda en français) est un opéra en quatre actes de Giuseppe Verdi, sur un livret d\'Antonio Ghislanzoni d\'après une intrigue d\'Auguste Mariette, créé le 24 décembre 1871 à l\'opéra khédival du Caire.',
            ),
        79 =>
            array (
                'id' => '352',
                'composer_id' => '35',
                'name' => 'Rigoletto “La donna è mobile”',
                'release_year' => '1851',
                'spotify_uri' => '50KVOLNNqft8SJr5ybrv8G',
                'description' => 'Rigoletto est un opéra italien en trois actes et quatre tableaux de Giuseppe Verdi, sur un livret de Francesco Maria Piave, d\'après la pièce de Victor Hugo Le roi s\'amuse, créé le 11 mars 1851 au théâtre de la Fenice à Venise. Il s\'agit du dix-septième opéra du compositeur, formant avec Le Trouvère (1853) et La traviata (1853), la « trilogie populaire » de Verdi.',
            ),
        80 =>
            array (
                'id' => '353',
                'composer_id' => '35',
                'name' => 'Messe de Requiem “Dies irae”',
                'release_year' => '1874',
                'spotify_uri' => '3By9jCy6b4dv5XnlhvIWwx',
                'description' => 'La Messa da requiem de Giuseppe Verdi (plus communément appelée le Requiem de Verdi) est une messe de requiem pour solistes (soprano, mezzo-soprano, ténor et basse), double chœur et orchestre, créée le 22 mai 1874.',
            ),
        81 =>
            array (
                'id' => '354',
                'composer_id' => '35',
                'name' => 'La Traviata “Brindisi”',
                'release_year' => '1853',
                'spotify_uri' => '41ujv4mhxlqR8nlnieDpDp',
                'description' => 'La traviata est un opéra en trois actes de Giuseppe Verdi créé le 6 mars 1853 à La Fenice de Venise sur un livret de Francesco Maria Piave d\'après le roman La Dame aux camélias d\'Alexandre Dumas (fils) (1848) et son adaptation théâtrale (1852).',
            ),
        82 =>
            array (
                'id' => '361',
                'composer_id' => '36',
                'name' => 'Les Quatre Saisons “Le Printemps”',
                'release_year' => '1725',
                'spotify_uri' => '6xMpUNOfaSkyywPiFFXZFh',
                'description' => 'Les Quatre Saisons d\'Antonio Vivaldi (Le quattro stagioni, en italien) (opus 8, no 1-4, RV 269 Le Printemps, RV 315 L\'Été, RV 293 L\'Automne, et RV 297 L\'Hiver) sont les quatre premiers concertos baroques des douze concertos pour violon intitulés « Il cimento dell\'armonia e dell\'inventione » (La confrontation entre l\'harmonie et l\'invention), composés le 17 juin 1724 et publiés en 1725 à Amsterdam par Michel Le Cène. Leur première interprétation publique a lieu notamment à Londres et au Concert Spirituel de Paris du début de l’année 1728. Depuis sa redécouverte au milieu du XIXe siècle, cet hymne universel à la nature est considéré comme l\'une des œuvres majeures dans l’histoire de la musique classique occidentale.',
            ),
        83 =>
            array (
                'id' => '362',
                'composer_id' => '36',
                'name' => 'Les Quatre Saisons “L’Été”',
                'release_year' => '1725',
                'spotify_uri' => '5JVnUqrqMucmT7mSmfopfC',
                'description' => 'Les Quatre Saisons d\'Antonio Vivaldi (Le quattro stagioni, en italien) (opus 8, no 1-4, RV 269 Le Printemps, RV 315 L\'Été, RV 293 L\'Automne, et RV 297 L\'Hiver) sont les quatre premiers concertos baroques des douze concertos pour violon intitulés « Il cimento dell\'armonia e dell\'inventione » (La confrontation entre l\'harmonie et l\'invention), composés le 17 juin 1724 et publiés en 1725 à Amsterdam par Michel Le Cène. Leur première interprétation publique a lieu notamment à Londres et au Concert Spirituel de Paris du début de l’année 1728. Depuis sa redécouverte au milieu du XIXe siècle, cet hymne universel à la nature est considéré comme l\'une des œuvres majeures dans l’histoire de la musique classique occidentale.',
            ),
        84 =>
            array (
                'id' => '363',
                'composer_id' => '36',
                'name' => 'Les Quatre Saisons “L’Automne”',
                'release_year' => '1725',
                'spotify_uri' => '2O5QhTGSdqAHMgz9zCf4gr',
                'description' => 'Les Quatre Saisons d\'Antonio Vivaldi (Le quattro stagioni, en italien) (opus 8, no 1-4, RV 269 Le Printemps, RV 315 L\'Été, RV 293 L\'Automne, et RV 297 L\'Hiver) sont les quatre premiers concertos baroques des douze concertos pour violon intitulés « Il cimento dell\'armonia e dell\'inventione » (La confrontation entre l\'harmonie et l\'invention), composés le 17 juin 1724 et publiés en 1725 à Amsterdam par Michel Le Cène. Leur première interprétation publique a lieu notamment à Londres et au Concert Spirituel de Paris du début de l’année 1728. Depuis sa redécouverte au milieu du XIXe siècle, cet hymne universel à la nature est considéré comme l\'une des œuvres majeures dans l’histoire de la musique classique occidentale.',
            ),
        85 =>
            array (
                'id' => '364',
                'composer_id' => '36',
                'name' => 'Les Quatre Saisons “L’Hiver”',
                'release_year' => '1725',
                'spotify_uri' => '4UFTrUPGIGOHOFt3s8M7sU',
                'description' => 'Les Quatre Saisons d\'Antonio Vivaldi (Le quattro stagioni, en italien) (opus 8, no 1-4, RV 269 Le Printemps, RV 315 L\'Été, RV 293 L\'Automne, et RV 297 L\'Hiver) sont les quatre premiers concertos baroques des douze concertos pour violon intitulés « Il cimento dell\'armonia e dell\'inventione » (La confrontation entre l\'harmonie et l\'invention), composés le 17 juin 1724 et publiés en 1725 à Amsterdam par Michel Le Cène. Leur première interprétation publique a lieu notamment à Londres et au Concert Spirituel de Paris du début de l’année 1728. Depuis sa redécouverte au milieu du XIXe siècle, cet hymne universel à la nature est considéré comme l\'une des œuvres majeures dans l’histoire de la musique classique occidentale.',
            ),
        86 =>
            array (
                'id' => '371',
                'composer_id' => '37',
                'name' => 'La Chevauchée des Walkyries',
                'release_year' => '1870',
                'spotify_uri' => '1Mi9gV8zA1duecfIFEPBOr',
                'description' => 'La Walkyrie ou La Valkyrie (titre original en allemand : Die Walküre) est le deuxième des quatre drames lyriques qui constituent L\'Anneau du Nibelung (Der Ring des Nibelungen) de Richard Wagner. La première eut lieu au théâtre national de la cour à Munich, à la demande de Louis II de Bavière (et contre la volonté de Wagner) le 26 juin 1870 sous la direction de Franz Wüllner.',
            ),
        87 =>
            array (
                'id' => '381',
                'composer_id' => '38',
                'name' => 'La Marche de Radetsky',
                'release_year' => '1848',
                'spotify_uri' => '1ngFOi0A8RTKAcJF0O4WQo',
                'description' => 'Marche de Radetzky (opus 228) (en allemand : Radetzky-Marsch) est une célèbre marche militaire viennoise de Johann Strauss père composée en 1848 en l\'honneur du Feld-maréchal autrichien Joseph Radetzky von Radetz, vainqueur de la bataille de Custoza contre les Piémontais en 1848, mais aussi fer de lance de la réaction qui suit le Printemps des peuples et met en place le Système de Bach auprès du jeune empereur François-Joseph Ier d\'Autriche.',
            ),
        88 =>
            array (
                'id' => '391',
                'composer_id' => '39',
                'name' => 'Le beau Danube bleu',
                'release_year' => '1866',
                'spotify_uri' => '6a4PVct2ZIgnXqOmanA7rN',
                'description' => 'Le Beau Danube bleu (An der schönen, blauen Donau, en allemand) op. 314, est une célèbre valse viennoise pour orchestre symphonique, composée par le compositeur autrichien Johann Strauss II (fils) en 1866. Poème symphonique dédié au Danube, elle fait partie de ses œuvres les plus célèbres, avec entre autres Wiener Blut (Esprit viennois) de 1873, régulièrement jouées entre autres par l\'Orchestre philharmonique de Vienne en clôture et un des rappels traditionnels du concert du nouvel an à Vienne. Considérée comme un second hymne national de Vienne et de l\'Autriche, elle est également une des musiques de film les plus célèbres de l\'histoire du cinéma avec sa reprise de 2001, l\'Odyssée de l\'espace de Stanley Kubrick en 1968.',
            ),
        89 =>
            array (
                'id' => '392',
                'composer_id' => '39',
                'name' => 'Sang viennois',
                'release_year' => '1873',
                'spotify_uri' => '2YH5O3zYvC31MAoBYyj46s',
                'description' => 'Wiener Blut op. 354 ou (Sang viennois, aussi traduit par Esprit viennois, en français) de Johann Strauss II (fils) (1825-1899) est une célèbre valse romantique viennoise pour orchestre symphonique, composée en 1873 pour le mariage de l\'archiduchesse Gisèle d\'Autriche, fille aînée de l\'empereur. Elle donne son nom à l\'opérette Sang viennois en trois actes, créée à Vienne en 1899.',
            ),
        90 =>
            array (
                'id' => '401',
                'composer_id' => '40',
                'name' => 'Canon',
                'release_year' => '1680',
                'spotify_uri' => '1c3GkbZBnyrQ1cm4TGHFrK',
                'description' => 'Le Canon de Pachelbel ou Canon en ré ou Canon per tre Violini e Basso (titre original) ou Canon et Gigue en ré majeur pour trois violons, avec basse continue [en forme de basse obstinée], de Johann Pachelbel (Kanon und Gigue für 3 Violinen mit Generalbaß, en allemand) (PWC 37, T. 337, PC 358) fait partie d\'une pièce de musique de chambre baroque, composée vers 1680 en deux mouvements : un canon et une gigue, pour trois violons et basse continue, par le compositeur allemand Johann Pachelbel (1653-1706).',
            ),
        91 =>
            array (
                'id' => '411',
                'composer_id' => '41',
                'name' => 'Carmen, “L’amour est un oiseau rebelle”',
                'release_year' => '1875',
                'spotify_uri' => '3pzBD8BVdrv7VJ7glRYshl',
                'description' => '"L\'amour est un oiseau rebelle" est une célèbre chanson d\'amour-aria romantique et tragique, sur le rythme d\'une habanera, du premier acte de l\'opéra-comique Carmen de Georges Bizet de 1875, d\'après la nouvelle Carmen de Prosper Mérimée de 1847.',
            ),
        92 =>
            array (
                'id' => '412',
                'composer_id' => '41',
                'name' => 'Carmen, “Votre toast”,“Couplets du toréador”',
                'release_year' => '1875',
                'spotify_uri' => '1LGxfzpQnZR7reRrcb2gxx',
                'description' => 'Les Couplets du toréador sont le nom populaire de l\'air « Votre toast, je peux vous le rendre » de l\'opéra Carmen composé par Georges Bizet sur un livret d\'Henri Meilhac et Ludovic Halévy. Cet air est chanté par le torero Escamillo lors de son entrée dans l\'acte II. Les paroles décrivent diverses situations dans les arènes de combat de taureaux comme les acclamations de la foule et la célébrité qui accompagne la victoire. Le refrain, « Toréador, en garde », constitue la partie centrale du prélude à l\'acte I de Carmen.',
            ),
        93 =>
            array (
                'id' => '421',
                'composer_id' => '42',
                'name' => 'Carmina Burana “O Fortuna”',
                'release_year' => '1936',
                'spotify_uri' => '6xez71zpAqQ6N5i8E1jHlD',
                'description' => 'Les Carmina Burana (littéralement « les chants de Beuren », « Beuren » se référant à Benediktbeuern) sont une cantate scénique composée par Carl Orff en 1935-1936. Le titre complet, en latin, est « Carmina Burana : Cantiones profanæ, cantoribus et choris cantandæ, comitantibus instrumentis atque imaginibus magicis », soit en français : Poèmes chantés de Beuern : Chants profanes, pour chanteurs solistes et chœurs, avec accompagnement instrumental et images magiques.',
            ),
        94 =>
            array (
                'id' => '431',
                'composer_id' => '43',
                'name' => 'La Giocona “Danse des heures”',
                'release_year' => '1876',
                'spotify_uri' => '2PVGV2o83ZFdwM0E6H4AiW',
                'description' => 'La Danse des heures est un ballet tiré de l\'opéra La Gioconda (1876) d\'Amilcare Ponchielli (1834-1886). Walt Disney s\'en inspira pour la séquence La Danse des heures, dans son dessin animé Fantasia, faisant effectuer les pas de danse par des autruches, des hippopotames, des crocodiles et des éléphants.',
            ),
        95 =>
            array (
                'id' => '441',
                'composer_id' => '44',
                'name' => 'Sylvia ou la Nymphe de Diane “Pizzicato”',
                'release_year' => '1876',
                'spotify_uri' => '3GFza0Ug9UPSMR2UKEPgIo',
                'description' => 'Sylvia, initialement intitulé Sylvia ou la Nymphe de Diane, est un ballet en trois actes de Léo Delibes, livret de Jules Barbier et Jacques de Reinach, créé à l\'Opéra Garnier le 14 juin 1876.',
            ),
        96 =>
            array (
                'id' => '442',
                'composer_id' => '44',
                'name' => 'Lakmé “Duo des fleurs”',
                'release_year' => '1883',
                'spotify_uri' => '0NSBohw8M3XDkpizR3zJuG',
                'description' => 'Lakmé est un opéra en trois actes de Léo Delibes sur un livret en français d\'Edmond Gondinet et Philippe Gille d\'après le roman de Pierre Loti, Rarahu ou le Mariage de Loti (1880), et inspiré des récits de voyage de Théodore Pavie, créé le 14 avril 1883 à l\'Opéra-Comique de Paris.',
            ),
        97 =>
            array (
                'id' => '451',
                'composer_id' => '45',
                'name' => 'Orphée aux Enfers “Gallop Infernal”',
                'release_year' => '1858',
                'spotify_uri' => '09X3a1Uy3LmyaTfGdPKoHR',
                'description' => 'Orphée aux Enfers est un opéra bouffe en deux actes et quatre tableaux d’Hector Crémieux et Ludovic Halévy, sur une musique de Jacques Offenbach, créé le 21 octobre 1858 au théâtre des Bouffes-Parisiens, puis dans une seconde version d\'opéra féerique triomphale en quatre actes et douze tableaux le 7 février 1874 au théâtre de la Gaîté de Paris. Son Galop infernal d\'Orphée aux Enfers (no 15) est repris et arrangé en French cancan de 1868 (voir cancan-chahut-cancan).',
            ),
        98 =>
            array (
                'id' => '452',
                'composer_id' => '45',
                'name' => 'La vie parisienne',
                'release_year' => '1866',
                'spotify_uri' => '06EEohIMTKGs3H0ckYGY0U',
                'description' => 'La Vie parisienne est un opéra bouffe de Jacques Offenbach, livret de Henri Meilhac et Ludovic Halévy, créé au théâtre du Palais-Royal le 31 octobre 1866 en cinq actes, puis en quatre actes le 25 septembre 1873 au théâtre des Variétés.',
            ),
        99 =>
            array (
                'id' => '461',
                'composer_id' => '46',
                'name' => 'Te Deum',
                'release_year' => '1698',
                'spotify_uri' => '5a7TTN4nMONsd11zCJgqGP',
                'description' => 'Le Te Deum (H. 146) en ré majeur de Marc-Antoine Charpentier est un grand motet versaillais (forme musicale née à la cour de Louis XIV). Il a été composé entre 1688 et 1698, durant le séjour du compositeur à l\'église jésuite Saint-Louis, à Paris, où il était directeur musical (en fait maître de musique, c\'est-à-dire, en langage moderne, maître de chapelle). L’œuvre est écrite pour chœur, solistes et ensemble instrumental (orchestre).',
            ),
        100 =>
            array (
                'id' => '471',
                'composer_id' => '47',
                'name' => 'Gymnopédie n°1',
                'release_year' => '1888',
                'spotify_uri' => '5NGtFXVpXSvwunEIGeviY3',
                'description' => 'Les Gymnopédies ou Trois Gymnopédies sont une série de trois variantes de valses lentes impressionnistes pour piano solo, composées par Erik Satie et publiées en 1888 à Paris. Elles sont inspirées du roman historique Salammbô (1862) de Gustave Flaubert et des Gymnopédies, danses rituelles exécutées à Sparte lors de fêtes religieuses du temps de la Grèce antique. Elles sont parmi ses compositions les plus célèbres avec les Gnossiennes.',
            ),
        101 =>
            array (
                'id' => '481',
                'composer_id' => '48',
                'name' => 'Pavane',
                'release_year' => '1887',
                'spotify_uri' => '4CZq7M6hBTg77Qhp3TJHdN',
                'description' => 'La Pavane op. 50 en fa dièse mineur est une œuvre en un mouvement pour petit orchestre symphonique avec chœur ad libitum. Composée par Gabriel Fauré en 1887, dans la même veine que la mélodie Clair de lune, elle est l\'une des pièces les plus appréciées de Fauré, en raison de son extrême délicatesse.',
            ),
        102 =>
            array (
                'id' => '491',
                'composer_id' => '49',
                'name' => '“Sonnent les cloches” ou “Chtchedryk” ou “Carol of the Bells”',
                'release_year' => '1916',
                'spotify_uri' => '7E5yzFBFeQO7tDScYQNbFZ',
                'description' => 'Chtchedryk (Щедрик en ukrainien ; Sonnent les cloches en français ; Carol of the Bells en anglais) est un chant composé au début du XXe siècle par le compositeur ukrainien Mykola Léontovytch.',
            ),
        103 =>
            array (
                'id' => '501',
                'composer_id' => '50',
                'name' => 'Ainsi parlait Zarathoustra, "lever du soleil"',
                'release_year' => '1896',
                'spotify_uri' => '3KuVHtcBxSXVweyttKigwc',
                'description' => 'Ainsi parlait Zarathoustra (Also sprach Zarathustra, allemand) op. 30 est un poème symphonique composé par Richard Strauss (1864-1949) entre février et août 1896, librement inspiré du poème philosophique Ainsi parlait Zarathoustra du philosophe allemand Friedrich Nietzsche. La première a lieu à Francfort le 27 novembre 1896 sous la direction du compositeur. Son introduction grandiose (Einleitung) est rendue célèbre par sa reprise dans la musique de film de science-fiction culte 2001, l\'Odyssée de l\'espace de Stanley Kubrick et de la Metro-Goldwyn-Mayer en 1968.',
            ),
        104 =>
            array (
                'id' => '511',
                'composer_id' => '51',
                'name' => 'L’apprenti sorcier',
                'release_year' => '1897',
                'spotify_uri' => '0zrNLai7biSmX46csGsgqw',
                'description' => 'L\'Apprenti sorcier est un poème symphonique de Paul Dukas composé en 1897, inspiré par la ballade homonyme Der Zauberlehrling de Goethe écrite juste un siècle plus tôt. Il est écrit sous forme de scherzo et sa création a lieu à Paris le 18 mai de la même année lors d\'un concert de la Société nationale de musique, sous la direction du compositeur.',
            ),
        105 =>
            array (
                'id' => '521',
                'composer_id' => '52',
                'name' => 'Interstellar "Day One"',
                'release_year' => '2014',
                'spotify_uri' => '4WmB04GBqS4xPMYN9dHgBw',
                'description' => 'Pour ce long métrage, le réalisateur a demandé à Hans Zimmer de composer une musique sans rien lui dévoiler de l\'intrigue du film : Christopher Nolan a écrit un texte d\'une page à Hans Zimmer, sans rapport direct avec le récit développé dans le long métrage, en lui demandant d\'écrire la musique que ce texte lui inspirait.',
            ),
        106 =>
            array (
                'id' => '522',
                'composer_id' => '52',
                'name' => 'Gladiator "Now we are free"',
                'release_year' => '2000',
                'spotify_uri' => '1elGwF4VwkwglV4nCBPJtv',
                'description' => 'La bande originale du film, Gladiator: Music From the Motion Picture, a été composée par Hans Zimmer et Lisa Gerrard. L\'album est sorti en 2000, un peu avant la sortie du film, produit par Decca Records. L\'orchestre est conduit par Gavin Greenaway.',
            ),
        107 =>
            array (
                'id' => '531',
                'composer_id' => '53',
                'name' => 'Amélie Poulain "Comptine d’un autre été"',
                'release_year' => '2001',
                'spotify_uri' => '14rZjW3RioG7WesZhYESso',
                'description' => 'Le Fabuleux Destin d\'Amélie Poulain est un film franco-allemand coécrit et réalisé par Jean-Pierre Jeunet et sorti en 2001.',
            ),
        108 =>
            array (
                'id' => '541',
                'composer_id' => '54',
                'name' => 'Una mattina "Nuvole Bianche"',
                'release_year' => '2004',
                'spotify_uri' => '3weNRklVDqb4Rr5MhKBR3D',
                'description' => 'Nuvole bianche est une pièce musicale du pianiste Ludovico Einaudi incluse dans l\'album Una mattina publié le 6 septembre 2004, dont il s\'agit de la 12e piste. ',
            ),
        109 =>
            array (
                'id' => '542',
                'composer_id' => '54',
                'name' => 'In a Time Lapse "Experience"',
                'release_year' => '2013',
                'spotify_uri' => '1BncfTJAWxrsxyT9culBrj',
                'description' => 'In a Time Lapse est un album du compositeur et pianiste italien Ludovico Einaudi, enregistré et publié en 2013.',
            ),
        110 =>
            array (
                'id' => '551',
                'composer_id' => '55',
                'name' => 'Star Wars "Main Title"',
                'release_year' => '1986',
                'spotify_uri' => '1lkAVHPJJVg7N0QZAlzB6d',
                'description' => 'La bande originale du film sort en CD en 1986 dans une version écourtée sous le label Polydor. Dix ans plus tard, une version longue de la bande originale est rematricée d\'avril à juin 1996 par Dan Hersch sous la direction de Michael Matessino. Cette nouvelle version est commercialisée en 1997 pour accompagner la sortie de l\'édition spéciale du film.',
            ),
        111 =>
            array (
                'id' => '552',
                'composer_id' => '55',
                'name' => 'Harry Potter "Hedwig’s Theme"',
                'release_year' => '2001',
                'spotify_uri' => '1n8NKQRg8LVHy7oUhUgbFF',
                'description' => 'Hedwig\'s Theme est le principal thème musical des films Harry Potter. Il a été composé par John Williams en 2001 et a depuis été partiellement repris dans chacun des films de la franchise. Le début du thème est un solo de célesta.',
            ),
        112 =>
            array (
                'id' => '553',
                'composer_id' => '55',
                'name' => 'Indiana Jones Main Theme',
                'release_year' => '1984',
                'spotify_uri' => '5gzpgYoG7gWjk4nBnX9nTh',
                'description' => 'La bande originale rassemble la musique du film de 1984, composée et dirigée par John Williams, interprétée par la Hollywood Studio Symphony, avec des orchestrations de Herbert W. Spencer et Alexander Courage. Sortie en 1984 (CD, vinyle, cassette), elle a été rééditée en 2008.',
            ),
        113 =>
            array (
                'id' => '554',
                'composer_id' => '55',
                'name' => 'Theme from Jurassic Park',
                'release_year' => '1993',
                'spotify_uri' => '2TZbQZXOuR8osP2AK8yYMN',
                'description' => 'Comme pour quasiment tous les films de Steven Spielberg, c\'est John Williams qui compose la bande originale de Jurassic Park. Il commence à travailler la musique du film fin février, et elle est enregistrée un mois plus tard par les chefs d\'orchestre John Neufeld et Alexander Courage.',
            ),
        114 =>
            array (
                'id' => '543',
                'composer_id' => '54',
                'name' => 'Una mattina "Una mattina"',
                'release_year' => '2004',
                'spotify_uri' => '0Dkibk70FDp6t7eOZNemNQ',
                'description' => 'Una mattina est la première pièce de l\'album éponyme du pianiste Ludovico Einaudi publié le 6 septembre 2004.',
            ),
        ));
    }
}
