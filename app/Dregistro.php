<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dregistro extends Model
{
        protected $fillable = [
            'id',
            'descripcion',
            'numero', 
            'id_tipo',
            'peso' ,
            'pesoa',
    ];


   public function tipo()
    {
    	return $this->belongsTo(Tipo::class,'id');
    }
}
