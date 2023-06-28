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
        return view('pedidos.create');
    }

    public function edit(Request $request) {
        if (isset($id)) {
            $pedido = Pedido::findOrFail($id);
            $data = [ 'pedido' => $pedido  ];

            return view('pedidos.edit', $data);
        }

        return redirect()
            ->route('pedidos.index')
            ->with('msg','Não há pedido!');
    }

    public function store(Request $request) {
        $request->validate(
            [
                'cliente' => 'required',
                'data_entrega' => 'required',
                'descricao_servico' => 'required'
            ],
            [
                'cliente.required' => 'Preencha o campo cliente',
                'data_entrega.required' => 'Informe uma senha',
                'descricao_servico.required' => 'Informe uma descrição do pedido'
            ]
        );

        Pedido::create([
            'cliente'           => $request->cliente,
            'data_entrega'      => $request->data_entrega,
            'data_atual'        => $request->data_atual,
            'descricao_servico' => $request->descricao_servico
        ]);

        return redirect()
            ->route('pedidos.index')
            ->with('msg','Pedido criado com sucesso!');
    }

    public function update(Request $request) {
        $request->validate(
            [
                'cliente' => 'required',
                'data_entrega' => 'required',
                'descricao_servico' => 'required'
            ],
            [
                'cliente.required' => 'Preencha o campo cliente',
                'data_entrega.required' => 'Informe uma senha',
                'descricao_servico.required' => 'Informe uma descrição do pedido'
            ]
        );

        Pedido::create([
            'cliente'           => $request->cliente,
            'data_entrega'      => $request->data_entrega,
            'descricao_servico' => $request->descricao_servico
        ]);

        return redirect()
            ->route('pedidos.index')
            ->with('msg','Pedido atualizados com sucesso!');
    }
}
