<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [

    // ];

    public function dregistros()
    {
    	return $this->hasMany(Dregistro::class,'id_tipo');
    }

    // public static function animalv($animal)
    // {
    // 	if (empty($animal) || !isset($animal)) 
    // 	{
    // 		$result= "valor vacio";
    // 	}else{
    // 		$result=static::where('detalle',$animal);
    // 	}
    // 	return $result->find(1);
    // }
      
}

