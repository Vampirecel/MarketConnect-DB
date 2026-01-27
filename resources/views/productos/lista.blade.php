@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
<h1>Productos</h1>
@stop

@section('content')
<p>Productos</p>
<div class="card">
    <div class="card-header">
        <h3>Datos de productos</h3>
    </div>
    <div class="card-body">
        <table id="users-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <td>{{ $producto->nombre_producto }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td class="text-center">
                    <form action="{{route('productos.editar',$producto->id)}}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">
                            Editar</button>
                    </form>
                    <form action="{{route('productos.eliminar',$producto->id)}}" method="POST" class="form-eliminar" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Eliminar</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('.form-eliminar').submit(function(e) {
        e.preventDefault(); // Detiene el envío automático

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Esta acción no se puede deshacer!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); // Si confirma, se envía el formulario
            }
        })
    });
</script>
@stop