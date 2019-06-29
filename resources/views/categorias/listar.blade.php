@extends('layout.base')

@section('titulo','Listar categorias')

@section('contenido')
    <h2>Aquí está el contenido {{ $fecha_solicitud->format('d-m-Y H:i:s.u') }}</h2>
    <table class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td><button type="button" class="btn btn-primary">Editar categoría</button></td>
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection