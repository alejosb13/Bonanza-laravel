<?php
use App\Dregistro;
use App\Tipo;
use Illuminate\Database\Seeder;

class agregar_descripcion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toro=Tipo::where('id','=','1')->value('id');

        Dregistro::create([
        	'descripcion' => 'La cola corta',
        	'numero' => 145,
        	'id_tipo' => $toro,
        	'peso' => 201,
        	'pesoa' => 0,
        ]);
 
        // factory(Dregistro::class,25)->create();

        Dregistro::create([
        	'descripcion' => 'La cola larga',
        	'numero' => 144,
        	'id_tipo' => $toro,
        	'peso' => 201,
        	'pesoa' => 0,
        ]);
         Dregistro::create([
        	'descripcion' => 'Caimana',
        	'numero' => 146,
        	'id_tipo' => 2,
        	'peso' => 202,
        	'pesoa' => 0,
        ]);
        Dregistro::create([
        	'descripcion' => 'coneja',
        	'numero' => 147,
        	'id_tipo' => 3,
        	'peso' => 203,
        	'pesoa' => 0,
        ]);
        Dregistro::create([
        	'descripcion' => 'bolas blancas',
        	'numero' => 148,
        	'id_tipo' => 4,
        	'peso' => 204,
        	'pesoa' => 0,
        ]);

        Dregistro::create([
            'descripcion' => 'bolas blancas',
            'numero' => 149,
            'id_tipo' => 5,
            'peso' => 204,
            'pesoa' => 0,
        ]);
        Dregistro::create([
            'descripcion' => 'bolas blancas',
            'numero' => 150,
            'id_tipo' => 6,
            'peso' => 204,
            'pesoa' => 0,
        ]);
        Dregistro::create([
            'descripcion' => 'bolas blancas',
            'numero' => 151,
            'id_tipo' => 7,
            'peso' => 204,
            'pesoa' => 0,
        ]);
        Dregistro::create([
            'descripcion' => 'bolas blancas',
            'numero' => 152,
            'id_tipo' => 8,
            'peso' => 204,
            'pesoa' => 0,
        ]);
    }
}
