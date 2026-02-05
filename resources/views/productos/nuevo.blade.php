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
                <label for="id_linea_negocio">Línea de Negocio</label>
                <select id="id_linea_negocio" name="id_linea_negocio" class="form-control" required>
                    <option value="" disabled {{ is_null($productos->id_linea_negocio) ? 'selected' : '' }}>-- Seleccione una línea --</option>
                    @foreach($lineasNegocio as $linea)
                    <option value="{{ $linea->id }}"
                        {{ $productos->id_linea_negocio == $linea->id ? 'selected' : '' }}>
                        {{ $linea->nombre_linea }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="nombre_producto">Nombre</label>
                <input type="text" id="nombre_producto" name="nombre_producto" value="{{$productos->nombre_producto}}" class="form-control" placeholder="Nombre del producto" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" value="{{$productos->descripcion}}" class="form-control" placeholder="Descripción del producto" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" value="{{$productos->precio}}" class="form-control" placeholder="Precio" step="0.01" min="0" required>
            </div>

            <div class="form-group">
                <label for="existencia">Existencia</label>
                <input type="number" id="existencia" name="existencia" value="{{$productos->existencia}}" class="form-control" placeholder="Existencia" min="0" required>
            </div>
            
            <div class="form-group">
                <label for="ancho">Ancho</label>
                <input type="number" id="ancho" name="ancho" value="{{$productos->ancho}}" class="form-control" placeholder="Ancho" min="0" required>
            </div>

            <div class="form-group">
                <label for="alto">Alto</label>
                <input type="number" id="alto" name="alto" value="{{$productos->alto}}" class="form-control" placeholder="Alto" min="0" required>
            </div>

            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="number" id="peso" name="peso" value="{{$productos->peso}}" class="form-control" placeholder="Peso" min="0" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" value="{{$productos->direccion}}" class="form-control" placeholder="Dirección" min="0" required>
            </div>

            <div class="form-group">
                <label for="disponibilidad">Disponibilidad</label>
                <input type="text" id="disponibilidad" name="disponibilidad" value="{{$productos->disponibilidad}}" class="form-control" placeholder="Disponibilidad" required>         
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