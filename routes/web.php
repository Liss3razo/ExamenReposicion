<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/empleados/mostrar', [EmpleadoController::class, 'mostrar']);

Route::get('/proveedor/mostrar', [ProveedorController::class, 'mostrar']);

Route::get('/producto/mostrar', [ProductoController::class, 'mostrar']);