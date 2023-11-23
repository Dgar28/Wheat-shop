<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//ruta vista principal
Route::get('/', function () {
    return view('welcome');
   // return view('welcome'); esta es la vista general de laravel
});

//ruta descarga archivos (se pone antes de las tipo resource)
Route::get('product-descarga/{product}', [ProductController::class, 'descargar'])->name('product.descarga');


//rutas tablas (entidades)
Route::resource('client', ClientController::class)->middleware('auth');
Route::resource('sale', SaleController::class);
Route::resource('product', ProductController::class);


//ruta test
Route::get('prueba', function () {
    return view('prueba');
});


//rutas autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});