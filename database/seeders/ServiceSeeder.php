<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        	[
        	'titre' => 'INFOGRAPHIE ET DESIGN',
        	'description' => 'Une variété de modèles et de styles adaptés à votre style et type d\'entreprise',
            'prix' => '0',
            'photo' => 'Flyers.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'LOGO',
        	'description' => 'Un logo unique e conçu spécialement pour vous et qui donnera une idée a vos clients de quoi s\'agit votre entreprise',
            'prix' => '7000',
            'photo' => 'natalie-scott-nHSoXrmM5Zs-unsplash.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'DEVELLOPEMENT SITES WEB',
        	'description' => 'un site Web est un moyen moderne de promouvoir votre entreprise! il peut facilement augmenter vos revenus et rendre votre travail beaucoup plus facile, allez-y et dites-nous ce que vous recherchez',
            'prix' => '0',
            'photo' => 'carlos-muza-hpjSkU2UYSU-unsplash.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'PUBLICITÉ ET SPONSORING FACEBOOK',
        	'description' => 'Communiquez avec vos clients potentiels de la manière la plus tendance de nos jours: les réseaux sociaux',
            'prix' => '0',
            'photo' => 'william-iven-DfMMzzi3rmg-unsplash.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'INSTALLATION DES CAMERAS ET RÉSEAUX',
        	'description' => 'Les entreprises qui s’agrandissent ou qui déménagent sont confrontées au besoin d’installer un réseau informatique, Augmentez les performances de votre réseau avec un câblage réseau adapté.\r\n',
            'prix' => '0',
            'photo' => 'thomas-jensen-qTEj-KMMq_Q-unsplash.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'DÉVELOPPEMENT DES LOGICIELS',
        	'description' => 'Un service de qualité pour  l\'installations des  videosurveillance , alarme anti intrusion , controle d\'acces..\r\n',
            'prix' => '0',
            'photo' => 'scott-webb-yekGLpc3vro-unsplash.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
        
    }
}
