<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use Illuminate\Http\Request; 

class ProductoController extends Controller
{
    // Método para mostrar la vista principal de los productos
    public function index()
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
        ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    // Método para mostrar el formulario de nuevo producto
    public function create()
    {
        $producto = new Producto();
        $marcas = Marca::pluck('name', 'id');

        return view('producto.create', compact('producto', 'marcas'));
    }

    // Método para guardar el producto
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
        ->with('success', 'Producto creado exitosamente!.');
    }

    // Método para mostrar por id un producto
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    // Método para mostrar la vista del formulario de editar
    public function edit($id)
    {
        $producto = Producto::find($id);
        $marcas = Marca::pluck('name', 'id');

        return view('producto.edit', compact('producto', 'marcas'));
    }

    // Método para actualizar un producto por id
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
        ->with('success', 'Producto actualizado exitosamente!');
    }

    // Método para eliminar por id un producto
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
        ->with('success', 'Producto eliminado exitosamente!');
    }
}
