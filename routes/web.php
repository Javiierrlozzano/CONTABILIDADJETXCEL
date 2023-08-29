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
});

Auth::routes();
Route::resource('empresas',App\Http\Controllers\EmpresaController::class);
Route::resource('codigos',App\Http\Controllers\CodigoController::class);
Route::resource('usuarios',App\Http\Controllers\UsuarioController::class);
Route::resource('cajas',App\Http\Controllers\CajaController::class);
Route::resource('movimientos',App\Http\Controllers\MovimientoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');