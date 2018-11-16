<?php
use App\Tipo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agregar_tipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['detalle' => 'Toro']);
        Tipo::create(['detalle' => 'Vaca_Parida']);
        Tipo::create(['detalle' => 'Vaca_Escotera']);
        Tipo::Create(['detalle' => 'Novilla']);
        Tipo::create(['detalle' => 'Novillo']);
        Tipo::create(['detalle' => 'Maute']);
        Tipo::create(['detalle' => 'Mauta']);
        Tipo::create(['detalle' => 'Becerro']);
        Tipo::create(['detalle' => 'Becerra']);



    }
}
