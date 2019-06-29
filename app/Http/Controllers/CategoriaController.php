<?php

namespace App\Http\Controllers;

use App\Categoria;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getCategorias()
    {
        $categorias = Categoria::all();

        return view('categorias.listar', [
                'categorias'        => $categorias,
                'fecha_solicitud'   => Carbon::now()
            ]);
    }
}
