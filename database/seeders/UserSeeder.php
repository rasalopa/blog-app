<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos solo un usuario
        User::create([
            'name' => 'rasalopa',
            'email' => 'hola@rasalopa.net',
            'password' => bcrypt('rasalopa')
        ])->assignRole(['Admin', 'Blogger']);

        // 5 más
        //User::factory(5)->create();
    }
}
