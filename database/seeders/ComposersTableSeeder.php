<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('composers')->delete();
        
        DB::table('composers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Adams',
                'period' => '21st_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/07/JA-portrait-1-LW.jpg',
            ),
        1 => 
            array (
                'id' => 2,
                'name' => 'Johann Sebastian Bach',
                'period' => 'baroque',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Johann_Sebastian_Bach.jpg',
            ),
        2 => 
            array (
                'id' => 3,
                'name' => 'Béla Bartók',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/B%C3%A9la_Bart%C3%B3k_1943.jpg/960px-B%C3%A9la_Bart%C3%B3k_1943.jpg',
            ),
        3 => 
            array (
                'id' => 4,
                'name' => 'Ludwig van Beethoven',
                'period' => 'classical',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Beethoven.jpg',
            ),
        4 => 
            array (
                'id' => 5,
                'name' => 'Hector Berlioz',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/28/Berlioz_Petit_BNF_Gallica.png',
            ),
        5 => 
            array (
                'id' => 6,
                'name' => 'Johannes Brahms',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/JohannesBrahms.jpg/500px-JohannesBrahms.jpg',
            ),
        6 => 
            array (
                'id' => 7,
                'name' => 'Frédéric Chopin',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Frederic_Chopin_photo.jpeg',
            ),
        7 => 
            array (
                'id' => 8,
                'name' => 'Claude Debussy',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Claude_Debussy_by_Atelier_Nadar.jpg/960px-Claude_Debussy_by_Atelier_Nadar.jpg',
            ),
        8 => 
            array (
                'id' => 9,
                'name' => 'Antonín Dvořák',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/d7/Jan_Langhans_Antonin_Dvorak_1904_%28cropped%29.jpg?uselang=fr',
            ),
        9 => 
            array (
                'id' => 10,
                'name' => 'Edward Elgar',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Edward_Elgar_1857_-_1934.jpg?uselang=fr',
            ),
        10 => 
            array (
                'id' => 11,
                'name' => 'Philip Glass',
                'period' => 'post-war',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/91/Philip_Glass.jpg?uselang=fr',
            ),
        11 => 
            array (
                'id' => 12,
                'name' => 'Edvard Grieg',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c0/Edvard_Grieg_%281888%29_by_Elliot_and_Fry_-_02.jpg?uselang=fr',
            ),
        12 => 
            array (
                'id' => 13,
                'name' => 'Georg Friederich Haendel',
                'period' => 'baroque',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/George_Frideric_Handel_by_Balthasar_Denner.jpg?uselang=fr',
            ),
        13 => 
            array (
                'id' => 14,
                'name' => 'Franz Joseph Haydn',
                'period' => 'classical',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/05/Joseph_Haydn.jpg?uselang=fr',
            ),
        14 => 
            array (
                'id' => 15,
                'name' => 'Franz Liszt',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/69/Liszt-kaulbach.jpg?uselang=fr',
            ),
        15 => 
            array (
                'id' => 16,
                'name' => 'Jean-Baptiste Lully',
                'period' => 'baroque',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/85/Paul_Mignard_-_Jean-Baptiste_Lully.jpg?uselang=fr',
            ),
        16 => 
            array (
                'id' => 17,
                'name' => 'Gustav Mahler',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/61/Mahler_Gustav_von_Sz%C3%A9kely.png?uselang=fr',
            ),
        17 => 
            array (
                'id' => 18,
                'name' => 'Felix Mendelssohn',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c2/Felix_Mendelssohn_Bartholdy_by_Eduard_Magnus_%281833%29.jpg?uselang=fr',
            ),
        18 => 
            array (
                'id' => 19,
                'name' => 'Wolfgang Amadeus Mozart',
                'period' => 'classical',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Wolfgang-amadeus-mozart_1.jpg/960px-Wolfgang-amadeus-mozart_1.jpg',
            ),
        19 => 
            array (
                'id' => 20,
                'name' => 'Modest Mussorgsky',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/db/Modest_Musorgskiy%2C_1870.jpg?uselang=fr',
            ),
        20 => 
            array (
                'id' => 21,
                'name' => 'Sergei Prokofiev',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/03/Sergei_Prokofiev_circa_1918_over_Chair_Bain.jpg?uselang=fr',
            ),
        21 => 
            array (
                'id' => 22,
                'name' => 'Giacomo Puccini',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9b/GiacomoPuccini.jpg?uselang=fr',
            ),
        22 => 
            array (
                'id' => 23,
                'name' => 'Sergei Rachmaninoff',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/86/Sergei_Rachmaninoff_LOC_30160_cropped.jpg?uselang=fr',
            ),
        23 => 
            array (
                'id' => 24,
                'name' => 'Maurice Ravel',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Maurice_Ravel_1925.jpg?uselang=fr',
            ),
        24 => 
            array (
                'id' => 25,
                'name' => 'Steve Reich',
                'period' => 'post-war',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Steve_Reich%2C_composer%2C_cropped.jpg?uselang=fr',
            ),
        25 => 
            array (
                'id' => 26,
                'name' => 'Nikolai Rimsky-Korsakov',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Nikolai_A._Rimsky-Korsakov.jpg?uselang=fr',
            ),
        26 => 
            array (
                'id' => 27,
                'name' => 'Gioachino Rossini',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/f5/Composer_Rossini_G_1865_by_Carjat_-_Restoration.jpg?uselang=fr',
            ),
        27 => 
            array (
                'id' => 28,
                'name' => 'Camille Saint-Saëns',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Saintsaens.jpg?uselang=fr',
            ),
        28 => 
            array (
                'id' => 29,
                'name' => 'Franz Schubert',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0d/Franz_Schubert_by_Wilhelm_August_Rieder_1875.jpg?uselang=fr',
            ),
        29 => 
            array (
                'id' => 30,
                'name' => 'Robert Schumann',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Robert_Schumann_1839.jpg?uselang=fr',
            ),
        30 => 
            array (
                'id' => 31,
                'name' => 'Dmitri Shostakovich',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/a/ab/Dmitri_Shostakovich_credit_Deutsche_Fotothek_adjusted.jpg?uselang=fr',
            ),
        31 => 
            array (
                'id' => 32,
                'name' => 'Bedrich Smetana',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/74/FriedrichSmetana.jpg?uselang=fr',
            ),
        32 => 
            array (
                'id' => 33,
                'name' => 'Igor Stravinsky',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/cc/Igor_Stravinsky_Essays.jpg?uselang=fr',
            ),
        33 => 
            array (
                'id' => 34,
                'name' => 'Pyotr Ilyich Tchaikovsky',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/02/Tchaikowsky.jpg?uselang=fr',
            ),
        34 => 
            array (
                'id' => 35,
                'name' => 'Giuseppe Verdi',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Verdi-photo-Brogi.jpg?uselang=fr',
            ),
        35 => 
            array (
                'id' => 36,
                'name' => 'Antonio Vivaldi',
                'period' => 'baroque',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Verdi-photo-Brogi.jpg?uselang=fr',
            ),
        36 => 
            array (
                'id' => 37,
                'name' => 'Richard Wagner',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9d/RichardWagner.jpg?uselang=fr',
            ),
        37 => 
            array (
                'id' => 38,
                'name' => 'Johann Strauss (père)',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/37/Strau%C3%9FVaterLitho.jpg?uselang=fr',
            ),
        38 => 
            array (
                'id' => 39,
                'name' => 'Johann Strauss (fils)',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/Johann_Strauss_II_%283%29.jpg?uselang=fr',
            ),
        39 => 
            array (
                'id' => 40,
                'name' => 'Johann Pachelbel',
                'period' => 'baroque',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/JohannChristophPachelbel.jpg/960px-JohannChristophPachelbel.jpg',
            ),
        40 => 
            array (
                'id' => 41,
                'name' => 'Georges Bizet',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Georges_bizet.jpg',
            ),
        41 => 
            array (
                'id' => 42,
                'name' => 'Carl Orff',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Carl_Orff_um_1970.jpg',
            ),
        42 => 
            array (
                'id' => 43,
                'name' => 'Amilcare Ponchielli',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4f/Amilcare_Ponchielli_%28before_1886%29_-_Archivio_Storico_Ricordi_FOTO000794_-_Restoration.jpg',
            ),
        43 => 
            array (
                'id' => 44,
                'name' => 'Léo Delibes',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/en/4/46/L%C3%A9o-Delibes-1875.png',
            ),
        44 => 
            array (
                'id' => 45,
                'name' => 'Jacques Offenbach',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c1/Jacques_Offenbach_by_Nadar.jpg',
            ),
        45 => 
            array (
                'id' => 46,
                'name' => 'Marc-Antoine Charpentier',
                'period' => 'baroque',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/66/MA_Charpentier_I.gif',
            ),
        46 => 
            array (
                'id' => 47,
                'name' => 'Erik Satie',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Ericsatie.jpg',
            ),
        47 => 
            array (
                'id' => 48,
                'name' => 'Gabriel Fauré',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/en/1/1f/Faure1907.jpg',
            ),
        48 => 
            array (
                'id' => 49,
                'name' => 'Mykola Léontovytch',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6e/Mykola_Dmytrovych_Leontovych.png',
            ),
        49 => 
            array (
                'id' => 50,
                'name' => 'Richard Strauss',
                'period' => 'romantic',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Max_Liebermann_Bildnis_Richard_Strauss.jpg',
            ),
        50 => 
            array (
                'id' => 51,
                'name' => 'Paul Dukas',
                'period' => '20th_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Paul_Dukas_01.jpg',
            ),
        51 => 
            array (
                'id' => 52,
                'name' => 'Hans Zimmer',
                'period' => '21st_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Hans-Zimmer-profile.jpg',
            ),
        52 => 
            array (
                'id' => 53,
                'name' => 'Yann Tiersen',
                'period' => '21st_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c6/Yann_Tiersen_1.jpg',
            ),
        53 => 
            array (
                'id' => 54,
                'name' => 'Ludovico Einaudi',
                'period' => '21st_century',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/e5/Ludovico_Einaudi_in_Tehran_12_%28cropped%292.jpg',
            ),
        54 => 
            array (
                'id' => 55,
                'name' => 'John Williams',
                'period' => 'post-war',
                'portrait_url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/John_Williams_2024.jpg',
            ),
        ));
        
        
    }
}