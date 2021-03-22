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
        [//cartes visites
        	'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C1.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C2.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C3.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C4.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C5.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C6.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C7.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C8.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C9.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C10.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C11.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C12.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C13.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C14.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C15.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C16.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C17.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C18.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C19.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C20.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C21.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C22.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C23.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C24.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => 'Carte visite','main_image' => '\CartesVisites\C25.jpg','service_id' => '1', 'description' =>'',
            'created_at' => now(),'updated_at' => now()
        ],[//logos
        	'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L1.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L2.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L3.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L4.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L5.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L6.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L7.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L8.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L9.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L10.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L11.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L12.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L13.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L14.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L15.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L16.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L17.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L18.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L19.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L20.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L21.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L22.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L23.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L24.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L25.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L26.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L27.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L28.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L29.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L30.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L31.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L32.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L33.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L34.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L36.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L38.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L39.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L40.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L41.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L42.jpg','service_id' => '2', 'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[//sites web
        	'titre' => 'Site web',
        	'catégorie' => 'E-learning',
            'main_image' => '\carlos-muza-hpjSkU2UYSU-unsplash.jpg',
            'description' => 'https://www.eazy-ecg.com/',
            'service_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ],[//sites web
            'titre' => 'Site web',
            'catégorie' => 'E-commerce',
            'description' => 'https://www.akhdem.com/',
            'main_image' => '\carlos-muza-hpjSkU2UYSU-unsplash.jpg',
            'service_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ],[//sites web
            'titre' => 'Site web',
            'catégorie' => 'Gestinnaire de Pharmacie',
            'main_image' => '\sites\Gestionnaire de pharmacie\medicaments.png',
            'service_id' => '3',
            'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[//sites web
            'titre' => 'Site web',
            'catégorie' => 'Gestionnaire de projets de recherches',
            'main_image' => '\sites\gestionnaireDeRecherche\AccueilAdmin.png',
            'service_id' => '3',
            'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[//Sponsoring
        	'titre' => 'PUBLICITÉ ET SPONSORING',
        	'catégorie' => 'Sponsor',
            'main_image' => '\sponsor\prix.png',
            'service_id' => '4',
            'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[//Logicieles
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\1.jpg',
            'service_id' => '6',
            'description' =>'',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\2.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\3.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\4.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\5.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\6.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\7.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\8.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\1.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\2.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\3.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\4.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\5.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\6.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\7.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\8.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\9.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\1.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\2.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\3.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\4.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\5.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\6.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\7.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'Logiciel',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\8.jpg',
            'service_id' => '6',
             'description' =>'',
             'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
       
    }
}
