<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dregistro;
use App\Tipo;
use Illuminate\Validation\Rule;

class DregistroController extends Controller
{ 

    public function validar_tipo($tipo_base,$tipo)
    {
        $tipo=$tipo_base->where('detalle',$tipo)->first(); // asegurar que existe el tipo
        $tipo_base->findOrFail($tipo);

        $registros=$tipo->dregistros()->orderBy('id','desc')->paginate();
        $total=count($registros);

         // $titulo=$tipo->detalle;

        // $eliminar=$tipo->dregistros()->where('numero','=',$numero);
        return $validar_tipo = array(
            'tipo' => $tipo, 
            'registros' => $registros,
            'total' => $total );
    } 


    public function filtrar_titulo($f_titulo)
    {
            $titulo=$f_titulo;

            $format= strpos($f_titulo, '_');
            if ($format !== false) 
            {
                $titulo=str_replace('_',' ', $f_titulo);
            }

        return $titulo;
    }

    public function MostrarLista(Tipo $tipo_base,$tipo)
    {
    	// $tipo=Tipo::where('detalle',$slug)->first();
        // Tipo::findOrFail($tipo);
        // dd($this->validar_tipo($tipo_base,$tipo));
        // $registros=$tipo->dregistros()->orderBy('id','desc')->paginate();
        // $total=count($registros);

        // $format= strpos($validar_tipo["titulo"], '_');
        // $titulo=$validar_tipo["titulo"];
        // if ($format !== false) 
        // {
        //     $titulo=str_replace('_','s ', $validar_tipo["titulo"]);
        // }

        // return view('agregar',compact('tipo','registros','total','titulo'));



        $validar_tipo = $this->validar_tipo($tipo_base,$tipo);
        $titulo= $this->filtrar_titulo($validar_tipo["tipo"]->detalle);
       
        return view ('agregar',compact('validar_tipo','titulo'));
    }

    public function GuardarRegistro()
    {

        $datos = request()->validate([
            'descripcion' => 'required',
            'numero' => 'required|unique:dregistros',
            'peso' => 'required',
            'tipo' => 'required',
            '_token' => 'required'
        ],
        [
            'descripcion.required' => 'has-error',
            'numero.required' => 'has-error',
            'numero.unique'=>'exist',
            'peso.required' => 'has-error',
        ]);

        $tipo=Tipo::where('id',$datos['tipo'])->first()->detalle;

        Dregistro::create([
            'descripcion' => $datos['descripcion'],
            'numero' => $datos['numero'],
            'id_tipo'=>$datos["tipo"],
            'peso' => $datos['peso'],
            'pesoa' => 0,
        ]);
    
        return redirect()->action('\App\Http\Controllers\DregistroController@MostrarLista',['tipo'=>$tipo]);
       
    }


    public function ModificarRegistro(Tipo $tipo_base,$tipo)
    {
        $validar_tipo = $this->validar_tipo($tipo_base,$tipo);
        // $tipo=Tipo::where('detalle',$slug)->first();
        // // Tipo::findOrFail($tipo);
        
        // $registros=$tipo->dregistros()->orderBy('id','desc')->paginate();
        // $total=count($registros);

        // $format= strpos($tipo->detalle, '_');
        // $titulo=$tipo->detalle;
        // if ($format !== false) 
        // {
        //     $titulo=str_replace('_','s ', $tipo->detalle);
        // }

       // return view('modificar',compact('tipo','registros','total','titulo'));


        $validar_tipo = $this->validar_tipo($tipo_base,$tipo);
        $titulo= $this->filtrar_titulo($validar_tipo["tipo"]->detalle);

        return view ('modificar',compact('validar_tipo','titulo'));
    }




    public function EliminarRegistro(Request $request, $tipo,$numero)
    {
       if ($request->ajax()) 
       {
            $tipo=Tipo::where('detalle',$tipo)->first();
            $eliminar=$tipo->dregistros()->where('numero','=',$numero);
            $eliminar->delete();
            $cantidad=$tipo->dregistros()->count();

            return response()->json([
                'cantidad' => $cantidad,
            ]);
       }else{
            return  redirect()->back();
        }

    }


    public function EditarRegistro(Request $request,$tipo,$numero)
    {
        if ($request->ajax()) 
        {
            $link=$request->url().'/guardar';
            $tipo=Tipo::where('detalle',$tipo)->first();
            $datos_animal=$tipo->dregistros()->where('numero','=',$numero)->first();
          
            $titulo= $this->filtrar_titulo($tipo->detalle);
           
                 
            return response()->json([
                'descripcion' => $datos_animal->descripcion,
                'numero' => $datos_animal->numero,
                'id_tipo' => $datos_animal->id_tipo,
                'peso' => $datos_animal->peso,
                'pesoa' => $datos_animal->pesoa,
                'tipo' => $titulo,
                'linkl' =>  $link,
             ]);

        }else{
            return  redirect()->back();
        }
    }

    public function GuardarModificacion(Request $request,Dregistro $dregistro,$tipo,$numero)
    {

        $data=request()->all();
        $datos=$dregistro->where('numero','=',$numero)->first();
        $datos->update($data);      
        return  redirect()->back();
    }

}//Fin clase
