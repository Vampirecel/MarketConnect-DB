@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
<h1>Productos</h1>
@stop

@section('content')
<p>Productos</p>
<div class="card">
    <div class="card-header">
        <h3>Formulario de Producto</h3>
    </div>
    <div class="card-body">

        <form action="{{route('productos.guardar')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$productos->id}}">
            <div class="form-group">
                <label for="linea_negocio">Línea de Negocio</label>
                <input type="text" id="linea_negocio" name="linea_negocio" value="{{$productos->linea_negocio}}" class="form-control" placeholder="Línea de Negocio">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{$productos->nombre}}" class="form-control" placeholder="Nombre del producto">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" value="{{$productos->descripcion}}" class="form-control" placeholder="Descripción del producto">
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" value="{{$productos->precio}}" class="form-control" placeholder="Precio">
            </div>

            <div class="form-group">
                <label for="existencia">Existencia</label>
                <input type="number" id="existencia" name="existencia" value="{{$productos->existencia}}" class="form-control" placeholder="Existencia">
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-success mx-2">
                    <i class="fas fa-save"></i> Guardar
                </button>
                <a href="{{route('productos')}}" class="btn btn-secondary mx-2">
                    <i class="fas fa-times"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop