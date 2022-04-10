<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/componentes',function(){
    return view('eje_components');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//ruta de pruebas del middelware age controla mayores de edad
Route::get('prueba',function(){
    return "Has accedido correctamente a esta ruta.";
})->middleware(['auth:sanctum','age']);

Route::get('no-autorizado', function(){
    return "No tienes edad suficiente";
});