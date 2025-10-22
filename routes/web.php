<?php

use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoViewController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/about", function(){
    return "<p>Acerca de <p>";
});
Route::get('/user/{id}', function (Request $request, string $id) {
    return 'User '.$id;
});
Route::get('/producto/{id}/detalle/{detail}', function (Request $request, string $id , string $detail) {
    return 'Producto '.$id . 'detalle ='. $detail;
});
Route::get('/producto/show/{id}', [ProductoViewController::class,'show']);
Route::get('/producto/list',[ProductoViewController::class,'list']);
Route::get('producto/create',[ProductoViewController::class,'create'])->name('producto.create');
Route::post('/producto/store', [ProductoViewController::class, 'store'])->name('producto.store');