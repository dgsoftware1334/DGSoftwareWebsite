<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galerie;
use Illuminate\Support\Facades\DB;

class GalerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('galeries')->insert([
        	[
        	'titre' => 'INFOGRAPHIE ET DESIGN',
        	'catégorie' => '',
            'main_image' => 'Flyers.jpg',
            'id_service' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'LOGO',
        	'catégorie' => ' ',
            'main_image' => 'natalie-scott-nHSoXrmM5Zs-unsplash.jpg',
            'id_service' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'DEVELLOPEMENT SITES WEB',
        	'catégorie' => '  ',
            'main_image' => 'carlos-muza-hpjSkU2UYSU-unsplash.jpg',
            'id_service' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'PUBLICITÉ ET SPONSORING FACEBOOK',
        	'catégorie' => ' ',
            'main_image' => 'william-iven-DfMMzzi3rmg-unsplash.jpg',
            'id_service' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'INSTALLATION DES CAMERAS ET RÉSEAUX',
        	'catégorie' => ' ',
            'main_image' => 'thomas-jensen-qTEj-KMMq_Q-unsplash.jpg',
            'id_service' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'DÉVELOPPEMENT DES LOGICIELS',
            'catégorie' => ' ',
            'main_image' => 'scott-webb-yekGLpc3vro-unsplash.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
       
    }
}
