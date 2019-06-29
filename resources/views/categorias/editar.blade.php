@extends('layout.base')

@section('titulo','Añadir categoría')

@section('contenido')
    <h2>Editar categoría {{ $cat->nombre }}</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-check"></i> {{ Session::get('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('categoria.actualizar') }}" method="post">
                    @csrf
                    <input type="hidden" name="categoria" id="categoria" value="{{ $cat->id }}">
                    <div class="form-group">
                        <label for="nombre">Nombre categoría</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre categoría" value="{{ $cat->nombre}}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection