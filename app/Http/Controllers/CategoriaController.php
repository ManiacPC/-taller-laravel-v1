<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\ActualizarCategoriaRequest;
use App\Http\Requests\ValidarCategoriaRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function add()
    {
        return view('categorias.agregar');
    }

    public function save(Request $request)
    {
        $messages = [
            'nombre.min'    =>  'Debe escribir un nombre mas largo',
            'required' => 'The :attribute field is required.',
        ];

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|min:5|max:100'
        ], $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('categoria.agregar')
                ->withErrors($validator)
                ->withInput();
        }

        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        try {
            $categoria->save();
        } catch (\Exception $e) {
            return redirect()
                ->route('categoria.agregar')
                ->withErrors(['Hubo un error al guardar la categoría'])
                ->withInput();
        }

        return redirect()
            ->route('categoria.agregar')
            ->with('status','La categoría ha sido agregada exitosamente');

        // $nombre = $request->input('nombre');
    }

    public function edit(ValidarCategoriaRequest $request)
    {
        $categoria = Categoria::findOrFail($request->input('id'));
        return view('categorias.editar', ['cat' => $categoria]);
    }

    // ToDo
    public function delete(ValidarCategoriaRequest $request)
    {
        $data = $request->validated();

        $categoria = Categoria::findOrFail($data['id']);
        $categoria->delete();
    }

    // FORM REQUESTS
    public function update(ActualizarCategoriaRequest $request)
    {
        $data = $request->validated(); // GUARDA UN ARRAY

        $categoria = Categoria::findOrFail($data['categoria']);
        $categoria->nombre = $data['nombre'];

        try {
            $categoria->save();
        } catch (\Exception $e) {
            return redirect()
                ->route('categoria.editar')
                ->withErrors(['Error al guardar categoria'])
                ->withInput();
        }

        return redirect()
            ->route('categoria.editar', ['id' => $data['categoria']])
            ->with('status',"La categoría {$data['nombre']} se actualizó ");
    }
}
