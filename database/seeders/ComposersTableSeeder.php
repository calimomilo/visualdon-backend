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
                'portrait_url' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Johann Sebastian Bach',
                'period' => 'baroque',
                'portrait_url' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Béla Bartók',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ludwig van Beethoven',
                'period' => 'classical',
                'portrait_url' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Hector Berlioz',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Johannes Brahms',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Frédéric Chopin',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Claude Debussy',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Antonín Dvořák',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Edward Elgar',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Philip Glass',
                'period' => 'post-war',
                'portrait_url' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Edvard Grieg',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Georg Friederich Haendel',
                'period' => 'baroque',
                'portrait_url' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Franz Joseph Haydn',
                'period' => 'classical',
                'portrait_url' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Franz Liszt',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Jean-Baptiste Lully',
                'period' => 'baroque',
                'portrait_url' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Gustav Mahler',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Felix Mendelssohn',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Wolfgang Amadeus Mozart',
                'period' => 'classical',
                'portrait_url' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Modest Mussorgsky',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Sergei Prokofiev',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Giacomo Puccini',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Sergei Rachmaninoff',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Maurice Ravel',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Steve Reich',
                'period' => 'post-war',
                'portrait_url' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Nikolai Rimsky-Korsakov',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Gioachino Rossini',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Camille Saint-Saëns',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Franz Schubert',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Robert Schumann',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Dmitri Shostakovich',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Bedrich Smetana',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Igor Stravinsky',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Pyotr Ilyich Tchaikovsky',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Giuseppe Verdi',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Antonio Vivaldi',
                'period' => 'baroque',
                'portrait_url' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Richard Wagner',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
            'name' => 'Johann Strauss (père)',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
            'name' => 'Johann Strauss (fils)',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Johann Pachelbel',
                'period' => 'baroque',
                'portrait_url' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Georges Bizet',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Carl Orff',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Amilcare Ponchielli',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Léo Delibes',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Jacques Offenbach',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Marc-Antoine Charpentier',
                'period' => 'baroque',
                'portrait_url' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Erik Satie',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Gabriel Fauré',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Mykola Léontovytch',
                'period' => '20th_century',
                'portrait_url' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Richard Strauss',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Paul Dukas',
                'period' => 'romantic',
                'portrait_url' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Hans Zimmer',
                'period' => '21st_century',
                'portrait_url' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Yann Tiersen',
                'period' => '21st_century',
                'portrait_url' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Ludovico Einaudi',
                'period' => '21st_century',
                'portrait_url' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'John Williams',
                'period' => 'post-war',
                'portrait_url' => NULL,
            ),
        ));
        
        
    }
}