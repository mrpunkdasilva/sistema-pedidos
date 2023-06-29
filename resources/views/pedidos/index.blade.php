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
                    <form action="" class="m-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquisar">

                            <div class="input-group-append">
                                <button class="btn btn-primary ml-2" type="button" style="margin-left: 10px;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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
                                <th></th>
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
                                    <a
                                        style="color: rgb(226, 195, 21);"
                                        href="{{ route('pedidos.edit', $pedido->id) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <br><br>

                                    <a
                                        style="color: rgb(240, 69, 69);"
                                        href="{{ route('pedidos.destroy', $pedido->id) }}"
                                        onclick="if (confirm('Deseja mesmo deletar?') === false) {
                                            this.href = '#';
                                        } else {
                                            this.href = '{{ route('pedidos.destroy', $pedido->id) }}';
                                        }">
                                        <i class="fa-solid fa-trash"></i>
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
