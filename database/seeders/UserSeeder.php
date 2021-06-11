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
            'name' => 'Raúl S, López',
            'email' => 'raul.lopez.palomera@gmail.com',
            'password' => bcrypt('$Rasalopa22')
        ])->assignRole(['Admin', 'Blogger']);

        // 5 más
        //User::factory(5)->create();
    }
}
