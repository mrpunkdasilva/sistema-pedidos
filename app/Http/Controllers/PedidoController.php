<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;

class PedidoController extends Controller
{
    public function abrirPedidos() {
        $pedidos = Pedido::orderBy('data_entrega', 'desc')->get();

        return view('pedidos.index', ['pedidos' => $pedidos]);
    }

    public function create() {
        return view('pedidos.create');
    }

    public function edit(Request $request, $id) {
        if (isset($id)) {
            $pedido = Pedido::findOrFail($id);
            $data = [ 'pedido' => $pedido  ];

            return view('pedidos.edit', $data);
        }

        return redirect()
            ->route('pedidos.index')
            ->with('msg','Houve um erro!');
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

        $pedido = Pedido::findOrFail($request->id);

        $pedido->cliente = $request->cliente;
        $pedido->data_atual = $request->data_atual;
        $pedido->data_entrega = $request->data_entrega;
        $pedido->descricao_servico = $request->descricao_servico;

        $pedido->update();

        return redirect()
            ->route('pedidos.index')
            ->with('msg','Pedido atualizados com sucesso!');
    }

    public function destroy($id) {
        $pedido = Pedido::findOrFail($id);

        $pedido->delete();

        return redirect()
            ->route('pedidos.index')
            ->with('msg','Pedido deletado com sucesso!');
    }
}
