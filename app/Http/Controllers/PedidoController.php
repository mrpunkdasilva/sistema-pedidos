<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;

class PedidoController extends Controller
{
    public function abrirPedidos() {
        $pedidos = Pedido::all();

        return view('pedidos.index', ['pedidos' => $pedidos]);
    }

    public function create() {
        return view('pedidos.form');
    }
}
