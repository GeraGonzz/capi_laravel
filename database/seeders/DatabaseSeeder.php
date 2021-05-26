<?php

namespace Database\Seeders;

use App\Models\create_User_Domicilio;
use App\Models\domicilio;
use App\Models\User;
use App\Models\User_Domicilio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user_domicilio = new domicilio();

        $user->name = 'Nombre';
        $user->email = 'email@dominio5.com';
        $user->password = '123';

        $user->save();

        $user_domicilio->domicilio = 'domicilio';
        $user_domicilio->numero_exterior = 'numero_exterior';
        $user_domicilio->colonia = 'colonia';
        $user_domicilio->cp = 12345;
        $user_domicilio->ciudad = 'ciudad';
        $user_domicilio->fecha_nacimiento = 'fecha_nacimiento';

        $user_domicilio->save();
    }
}
