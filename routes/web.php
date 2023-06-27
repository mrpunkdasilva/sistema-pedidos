<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;

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

# Rotas: Home
Route::get('/', [HomeController::class, 'abrirHome'])->name('home');

# Rotas: Pedidos
Route::get('/pedidos', [PedidoController::class, 'abrirPedidos'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos/ad', [PedidoController::class, 'abrirPedidos'])->name('pedidos.store');
Route::get('/pedidos/creatasasdae', [PedidoController::class, 'abrirPedidos'])->name('pedidos.edit');
Route::post('/pedidos/creasdaddate', [PedidoController::class, 'abrirPedidos'])->name('pedidos.update');
Route::get('/pedidos/asdsad', [PedidoController::class, 'abrirPedidos'])->name('pedidos.destroy');

