<?php

use Illuminate\Support\Facades\Route;

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

