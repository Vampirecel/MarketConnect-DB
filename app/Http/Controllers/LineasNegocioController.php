<?php

namespace App\Http\Controllers;

use App\Models\Lineas_negocio;
use Illuminate\Http\Request;

class LineasNegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lineasNegocio = Lineas_negocio::all();
        return view('lineas_negocio.lista', compact('lineasNegocio'));
    }

   
    public function create()
    {
        $lineasNegocio = new Lineas_negocio();
        return view('lineas_negocio.nuevo', compact('lineasNegocio'));
    }

    public function store(Request $request)
    {
        if($request->id == 0){
            $lineasNegocio = new Lineas_negocio();
        }else{
            $lineasNegocio = Lineas_negocio::find($request->id);
        }
        $lineasNegocio->nombre_linea = $request->nombre_linea;
        $lineasNegocio->descripcion = $request->descripcion;
        $lineasNegocio->existencia = $request->existencia;
        $lineasNegocio->activo = $request->activo;
        $lineasNegocio->fecha_creacion = $request->fecha_creacion;
        $lineasNegocio->save();
        return redirect()->route('lineas_negocio');
    }

    


    
    public function edit(Request $request)
    {
        $lineasNegocio = Lineas_negocio::find($request->id);
        return view('lineas_negocio.nuevo', compact('lineasNegocio'));
    }



    public function destroy(Request $request)
    {
         $lineasNegocio = Lineas_negocio::find($request->id);
        $lineasNegocio->delete();
        return redirect()->route('lineas_negocio');
    }
}
