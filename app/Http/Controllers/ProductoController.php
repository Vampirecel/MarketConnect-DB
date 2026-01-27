<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Lineas_negocio;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.lista', compact('productos'));
    }

    public function create()
    {
        $lineasNegocio = Lineas_negocio::all();
        $productos = new Producto();
        return view('productos.nuevo', compact('lineasNegocio', 'productos'));
    }

    public function store(Request $request)
    {
        if($request->id == 0){
            $productos = new Producto();
        }else{
            $productos = Producto::find($request->id);
        }
        $productos->id_linea_negocio = $request->id_linea_negocio;
        $productos->nombre_producto = $request->nombre_producto;
        $productos->descripcion = $request->descripcion;
        $productos->precio = $request->precio;
        $productos->existencia = $request->existencia;
        $productos->save();
        return redirect()->route('productos');
    }

    public function destroy(Request $request)
    {
        $productos = Producto::find($request->id);
        $productos->delete();
        return redirect()->route('productos');
    }

    public function edit(Request $request)
    {
        $productos = Producto::find($request->id);
        return view('productos.nuevo', compact('productos'));
    }
}
