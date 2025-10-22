<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    //
    public function index()
    {
        // GET /productos
        $productos = Producto::all();
        return response()->json($productos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
        ]);

        $producto = Producto::create($validated);

        return response()->json([
            'message' => 'Producto creado exitosamente',
            'data' => $producto
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:50',
            'precio' => 'sometimes|required|numeric|min:0',
        ]);

        $producto->update($validated);

        return response()->json([
            'message' => 'Producto actualizado correctamente',
            'data' => $producto
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $producto->delete();

        return response()->json(['message' => 'Producto eliminado correctamente']);
    }
}
