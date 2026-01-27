@extends('adminlte::page')

@section('title', 'Lineas de Negocio')

@section('content_header')
<h1>Lineas de Negocio</h1>
@stop

@section('content')
<p>Lineas de Negocio</p>
<div class="card">
    <div class="card-header">
        <h3>Datos de Lineas de Negocio</h3>
    </div>
    <div class="card-body">
        <table id="users-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lineasNegocio as $lineaNegocio)
                <td>{{ $lineaNegocio->nombre_linea }}</td>
                <td>{{ $lineaNegocio->descripcion }}</td>
                <td>{{ $lineaNegocio->estado }}</td>
                <td class="text-center">
                    <form action="{{route('lineas_negocio.editar',$lineaNegocio->id)}}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">
                            Editar</button>
                    </form>
                    <form action="{{route('lineas_negocio.eliminar',$lineaNegocio->id)}}" method="POST" class="form-eliminar" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
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