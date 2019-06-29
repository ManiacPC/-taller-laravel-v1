@extends('layout.base')

@section('titulo','Añadir categoría')

@section('contenido')
    <h2>Añadir categoría</h2>
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
                <form action="{{ route('categoria.guardar') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre categoría</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre categoría" value="{{ old('nombre') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection