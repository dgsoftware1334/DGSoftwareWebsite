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
        	'description' => 'Une variété de modèles et de styles adaptés à votre style et type d\'entreprise',
            'main_image' => 'Flyers.jpg',
            'id_service' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'LOGO',
        	'description' => 'Un logo unique e conçu spécialement pour vous et qui donnera une idée a vos clients de quoi s\'agit votre entreprise',
            'main_image' => 'natalie-scott-nHSoXrmM5Zs-unsplash.jpg',
            'id_service' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'DEVELLOPEMENT SITES WEB',
        	'description' => 'un site Web est un moyen moderne de promouvoir votre entreprise! il peut facilement augmenter vos revenus et rendre votre travail beaucoup plus facile, allez-y et dites-nous ce que vous recherchez',
            'main_image' => 'carlos-muza-hpjSkU2UYSU-unsplash.jpg',
            'id_service' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'PUBLICITÉ ET SPONSORING',
        	'description' => 'Communiquez avec vos clients potentiels de la manière la plus tendance de nos jours: les réseaux sociaux',
            'main_image' => 'william-iven-DfMMzzi3rmg-unsplash.jpg',
            'id_service' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'RÉSEAUX D\'INSTALLATION',
        	'description' => 'Les entreprises qui s’agrandissent ou qui déménagent sont confrontées au besoin d’installer un réseau informatique, Augmentez les performances de votre réseau avec un câblage réseau adapté.\r\n',
            'main_image' => 'scott-webb-yekGLpc3vro-unsplash.jpg',
            'id_service' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
       
    }
}
