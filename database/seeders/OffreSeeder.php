<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('offres')->insert([
        	'titre' => 'Offre 1',
        	'durée' => '6 mois',
            'prix' => '3500',         
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'Offre 2',
        	'durée' => '12 mois',
            'prix' => '5000',         
            'created_at' => now(),
            'updated_at' => now()
        ],[
        	'titre' => 'Gratuit',
        	'durée' => 'A vie',
            'prix' => '0',         
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
