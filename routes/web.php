<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistaController;

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
    return view('login');
});



Route::get('Cliente', [vistaController::class, 'Cliente']);  
Route::get('Supervisor', [vistaController::class, 'Supervisor']);  

//Opciones de supervisor
Route::get('OrdenProduccion', [vistaController::class, 'OrdenProduccion']);  
Route::get('EstadoPedido', [vistaController::class, 'EstadoPedido']);  
Route::get('GestionTelas', [vistaController::class, 'GestionTelas']);  
Route::get('GestionTintes', [vistaController::class, 'GestionTintes']);  
Route::get('GestionArticulos', [vistaController::class, 'GestionArticulos']);  
Route::get('Reportes', [vistaController::class, 'Reportes']);
Route::get('RegistroCliente', [vistaController::class, 'RegistroCliente']);   


//Opciones de cLiente
Route::get('EstadoPedidoCliente', [vistaController::class, 'EstadoPedidoCliente']);  
Route::get('OrdenPedidoCliente', [vistaController::class, 'OrdenPedidoCliente']);  
Route::get('UsoTelas', [vistaController::class, 'UsoTelas']);  
Route::get('UsoTintes', [vistaController::class, 'UsoTintes']);  
Route::get('ReporteCliente', [vistaController::class, 'ReporteCliente']); 

