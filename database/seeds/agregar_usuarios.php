<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agregar_usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(['alias' => 'admin',
          'contraseña' => bcrypt('alejo'),
          'is_admin' => 1 
        ]);

        User::create(['alias' => 'comun',
          'contraseña' => bcrypt('123'),
          'is_admin' => 0 
        ]);
    }
}
