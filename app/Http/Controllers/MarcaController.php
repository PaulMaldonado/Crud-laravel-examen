<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;


class MarcaController extends Controller
{
    // Método para mostrar las marcas en el index
    public function index()
    {
        $marcas = Marca::paginate();

        return view('marca.index', compact('marcas'))
        ->with('i', (request()->input('page', 1) - 1) * $marcas->perPage());
    }

    // Método para mostrar el formulario de crear nueva marca
    public function create()
    {
        $marca = new Marca();
        return view('marca.create', compact('marca'));
    }

    // Método para guardar los datos en la base de datos
    public function store(Request $request)
    {
        request()->validate(Marca::$rules);

        $marca = Marca::create($request->all());

        return redirect()->route('marcas.index')
        ->with('success', 'Marca creada exitosamente!');
    }

    // Método para mostrar marca por id
    public function show($id)
    {
        $marca = Marca::find($id);

        return view('marca.show', compact('marca'));
    }

    // Método para mostrar vista de formulario de editar
    public function edit($id)
    {
        $marca = Marca::find($id);

        return view('marca.edit', compact('marca'));
    }

    // Método para actualizar los datos por id de la tabla marcas
    public function update(Request $request, Marca $marca)
    {
        request()->validate(Marca::$rules);

        $marca->update($request->all());

        return redirect()->route('marcas.index')
        ->with('success', 'Marca actualizada exitosamente!');
    }

    // Método para eliminar por id 
    public function destroy($id)
    {
        $marca = Marca::find($id)->delete();

        return redirect()->route('marcas.index')
        ->with('success', 'Marca eliminada exitosamente!');
    }
}
