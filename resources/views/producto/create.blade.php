<div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-md">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 border-b pb-3">
        Crear Producto
    </h1>
    
    <!-- The form action points to the 'productos.store' route -->
    <form method="POST" action="{{ route('producto.store') }}">
        
        <!-- CSRF Token is mandatory for POST requests in Laravel -->
        @csrf

        <!-- Campo: Nombre (nombre) -->
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                Nombre del Producto
            </label>
            <input 
                type="text" 
                name="nombre" 
                id="nombre" 
                value="{{ old('nombre') }}"
                required 
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('nombre') border-red-500 @enderror" 
                placeholder="Ej: Televisor 4K"
            >
            <!-- Display validation error for 'nombre' -->
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo: Precio (precio) -->
        <div class="mb-6">
            <label for="precio" class="block text-sm font-medium text-gray-700 mb-1">
                Precio ($)
            </label>
            <input 
                type="number" 
                name="precio" 
                id="precio" 
                value="{{ old('precio') }}"
                required 
                step="0.01"
                min="0"
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('precio') border-red-500 @enderror" 
                placeholder="Ej: 499.99"
            >
            <!-- Display validation error for 'precio' -->
            @error('precio')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out">
            Guardar Producto
        </button>
    </form>
</div>

