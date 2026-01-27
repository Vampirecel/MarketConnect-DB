@extends('adminlte::page')

@section('title', 'Lineas de Negocio')

@section('content_header')
<h1>Lineas de Negocio</h1>
@stop

@section('content')
<p>Lineas de Negocio</p>
<div class="card">
    <div class="card-header">
        <h3>Formulario de Lineas de Negocio</h3>
    </div>
    <div class="card-body">

        <form action="{{route('lineas_negocio.guardar')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$lineasNegocio->id}}">

            <div class="form-group">
                <label for="nombre_linea">Nombre</label>
                <input type="text" id="nombre_linea" name="nombre_linea" value="{{$lineasNegocio->nombre_linea}}" class="form-control" placeholder="Nombre de la línea de negocio" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" value="{{$lineasNegocio->descripcion}}" class="form-control" placeholder="Descripción del producto" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estado" name="estado" class="form-control" required>
                    <option value="Activo" {{ $lineasNegocio->estado == "Activo" ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $lineasNegocio->estado == "Inactivo" ? 'selected' : '' }}>Inactivo</option>
                </select>
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