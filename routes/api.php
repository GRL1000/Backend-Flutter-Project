<?php

use App\Http\Controllers\ControllerProductos;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ControllerClientes;
use App\Http\Controllers\ControllerVentas;
use App\Http\Controllers\ControllerDetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [LoginController::class,'login']);

Route::post('producto/get', [ControllerProductos::class,'get']);
Route::get('productos', [ControllerProductos::class,'list']);
Route::post('producto/save', [ControllerProductos::class,'save']);
Route::post('producto/delete', [ControllerProductos::class,'delete']);

Route::post('cliente/get', [ControllerClientes::class,'get']);
Route::get('clientes', [ControllerClientes::class,'list']);
Route::post('cliente/save', [ControllerClientes::class,'save']);
Route::post('cliente/delete', [ControllerClientes::class,'delete']);

Route::post('venta/get', [ControllerVentas::class,'get']);
Route::get('ventas', [ControllerVentas::class,'list']);
Route::post('venta/save', [ControllerVentas::class,'save']);
Route::post('venta/delete', [ControllerVentas::class,'delete']);

Route::post('detalle/get', [ControllerDetalle::class,'get']);
Route::get('detalles', [ControllerDetalle::class,'list']);
Route::post('detalle/save', [ControllerDetalle::class,'save']);
Route::post('detalle/delete', [ControllerDetalle::class,'delete']);
