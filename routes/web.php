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

// # Rotas: Home
// Route::get('/', [HomeController::class, 'abrirHome'])->name('home');

# Rotas: Pedidos
Route::get('/', [PedidoController::class, 'abrirPedidos'])->name('pedidos.index');

Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos/store', [PedidoController::class, 'store'])->name('pedidos.store');

Route::get('/pedidos/edit', [PedidoController::class, 'edit'])->name('pedidos.edit');
Route::post('/pedidos/update/{id}', [PedidoController::class, 'update'])->name('pedidos.update');

Route::get('/pedidos/destroy/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');

