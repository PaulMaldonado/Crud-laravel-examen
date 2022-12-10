<?php

namespace App\Http\Controllers;

use App\Models\NumberPart;
use Illuminate\Http\Request;


class NumberPartController extends Controller
{
    // Método para mostrar las vista principal de los sku
    public function index()
    {
        $numberParts = NumberPart::paginate();

        return view('number-part.index', compact('numberParts'))
        ->with('i', (request()->input('page', 1) - 1) * $numberParts->perPage());
    }

    // Método para mostrar la vista del formulario para crear sku
    public function create()
    {
        $numberPart = new NumberPart();
        return view('number-part.create', compact('numberPart'));
    }

    // Método para guardar los datos en la BD
    public function store(Request $request)
    {
        request()->validate(NumberPart::$rules);

        $numberPart = NumberPart::create($request->all());

        return redirect()->route('number-parts.index')
        ->with('success', 'SKU creado exitosamente!.');
    }

    // Método para mostrar por id de Sku
    public function show($id)
    {
        $numberPart = NumberPart::find($id);

        return view('number-part.show', compact('numberPart'));
    }

    // Método para mostrar formulario para editar por id
    public function edit($id)
    {
        $numberPart = NumberPart::find($id);

        return view('number-part.edit', compact('numberPart'));
    }

    // Método para actualizar los datos de la BD
    public function update(Request $request, NumberPart $numberPart)
    {
        request()->validate(NumberPart::$rules);

        $numberPart->update($request->all());

        return redirect()->route('number-parts.index')
        ->with('success', 'SKU actualizado exitosamente!');
    }

    // Método para eliminar por id
    public function destroy($id)
    {
        $numberPart = NumberPart::find($id)->delete();

        return redirect()->route('number-parts.index')
        ->with('success', 'SKU eliminado exitosamente');
    }
}
