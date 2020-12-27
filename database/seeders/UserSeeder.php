<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Jane',
        	'prenom' => 'Doe',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Admin123'),
            'email_verified_at' => now(),
            'telephone' => '0755338819',
            'username' => 'Admin',
            'photo' => 'default-avatar.png',
            'dateNaissance' => '2012-12-12',
            'address' => 'Imama enface palais de culture',
            'profil' => 'Admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
