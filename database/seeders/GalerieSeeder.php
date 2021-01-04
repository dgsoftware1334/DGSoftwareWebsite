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
        	'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C1.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C2.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C3.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C4.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C5.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C6.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C7.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C8.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C9.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C10.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C11.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C12.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C13.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C14.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C15.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C16.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C17.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C18.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C19.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C20.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C21.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C22.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C23.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C24.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[
            'titre' => 'Carte visite','catégorie' => '','main_image' => '\CartesVisites\C25.jpg','id_service' => '1','created_at' => now(),'updated_at' => now()
        ],[//logos
        	'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L1.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L2.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L3.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L4.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L5.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L6.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L7.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L8.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L9.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L10.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L11.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L12.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L13.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L14.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L15.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L16.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L17.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L18.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L19.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L20.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L21.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L22.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L23.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L24.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L25.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L26.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L27.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L28.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L29.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L30.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L31.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L32.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L33.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L34.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L35.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L36.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L37.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L38.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L39.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L40.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L41.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => 'LOGO','catégorie' => 'logo','main_image' => '\Logos\L42.jpg','id_service' => '2','created_at' => now(),
            'updated_at' => now()
        ],[//sites web
        	'titre' => 'DEVELLOPEMENT SITES WEB',
        	'catégorie' => '  ',
            'main_image' => 'carlos-muza-hpjSkU2UYSU-unsplash.jpg',
            'id_service' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ],[//Sponsoring
        	'titre' => 'PUBLICITÉ ET SPONSORING',
        	'catégorie' => 'FACEBOOK et Instagram',
            'main_image' => '\sponsor\prix.png',
            'id_service' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ],[//Logicieles
            'titre' => '1',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\1.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '2',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\2.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '3',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\3.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '4',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\4.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '5',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\5.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '6',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\6.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '7',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\7.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '8',
            'catégorie' => 'DGSante',
            'main_image' => '\logiciels\DGSante\8.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '1',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\1.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '2',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\2.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '3',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\3.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '4',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\4.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '5',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\5.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '6',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\6.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '7',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\7.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '8',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\8.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '9',
            'catégorie' => 'DGSchool',
            'main_image' => '\logiciels\DGSchool\9.png',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '1',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\1.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '2',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\2.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '3',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\3.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '4',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\4.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '5',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\5.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '6',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\6.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '7',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\7.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'titre' => '8',
            'catégorie' => 'DGSport',
            'main_image' => '\logiciels\DGSport\8.jpg',
            'id_service' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
       
    }
}
