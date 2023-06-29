@extends('layout.master')
@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-10 mx-auto">

            @if(session('msg'))
            <div class="alert alert-warning">
                {{ session('msg') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    Consulta de Pedidos
                    <a href="{{route('pedidos.create')}}" class="btn btn-success btn-sm float-end">
                        <i class="fa fa-plus"></i>
                        Novo Usuário
                    </a>
                </div>

                <div class="card-body">
                    @if(isset($pedidos))
                        <table class="table table-striped table-bordered" id="tabela">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">cliente</th>
                                <th scope="col">Data Atual</th>
                                <th scope="col">Data Entrega</th>
                                <th scope="col">Descrição Serviço</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pedidos as $pedido)
                            <tr>
                                <th>
                                    {{ $pedido->id }}
                                </th>
                                <td>
                                    {{ $pedido->cliente }}
                                </td>
                                <td>
                                    {{ date('d-m-Y', strtotime($pedido->data_atual)) }}
                                </td>
                                <td>
                                    {{ date('d-m-Y', strtotime($pedido->data_entrega)) }}
                                </td>
                                <td>
                                    {{ $pedido->descricao_servico }}
                                </td>
                                <th>
                                    <a href="{{ route('pedidos.edit', $pedido->id) }}">
                                        Editar
                                    </a>
                                    <br><br>
                                    <a href="{{ route('pedidos.destroy', $pedido->id) }}"
                                        onclick="if (confirm('Deseja mesmo deletar?') === false) {
                                            this.href = '#';
                                        } else {
                                            this.href = '{{ route('pedidos.destroy', $pedido->id) }}';
                                        }">
                                        Deletar
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2 class="color: black;">Sem Pedidos</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
