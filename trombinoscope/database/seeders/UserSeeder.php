<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'login' => 'samir',
                'firstname' => 'Samir',
                'lastname' => 'RINAZ',
                'email' => 'samir@etna-alternance.net',
                'picture' => 'https://auth.etna-alternance.net/api/users/samir/photo',
                'work' => 'Directeur',
                'role' => '0' //SuperAdmin
            ],
            [
                'login' => 'deborah.cristiani',
                'firstname' => 'Déborah',
                'lastname' => 'CRISTIANI',
                'email' => 'deborah.cristiani@etna-learning.fr',
                'picture' => 'https://auth.etna-alternance.net/api/users/deborah.cristiani/photo',
                'work' => 'Responsable RH',
                'role' => '0' //SuperAdmin
            ],
            [
                'login' => 'daime_a',
                'firstname' => 'Adeline',
                'lastname' => 'DAIME',
                'email' => 'adeline.daime@etna-alternance.net',
                'picture' => 'https://auth.etna-alternance.net/api/users/daime_a/photo',
                'work' => 'Responsable RH',
                'role' => '0' //SuperAdmin
            ]
        ]);
    }
}
