<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoViewController extends Controller
{
    //
    public function show($id){

        $producto = Producto::findOrFail($id);
        return view('producto.show')->with("producto",$producto);
    }
    public function list(){
        $lista = Producto::all();
        return view('producto.list')->with("productos",$lista);
    }
    public function create(){
        return view('producto.create');
    }
    public function store(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            // Ensure the price is a number, required, and positive
            'precio' => 'required|numeric|min:0', 
        ]);

        // 2. Create the new Producto instance
        // Uses the fillable properties defined in your Producto model
        Producto::create($validatedData);

        // 3. Redirect the user with a success message
        return redirect()->route('producto.create')->with('success', 'Producto creado exitosamente!');
    }
}
