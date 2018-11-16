<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(agregar_tipos::class);
        $this->call(agregar_usuarios::class);
        $this->call(agregar_descripcion::class);
    }
}
