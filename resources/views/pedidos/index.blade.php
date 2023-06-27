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
                    {{-- <a href="{{route('pedidos.store')}}" class="btn btn-success btn-sm float-end"> --}}
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
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pedidos as $pedido)
                            <tr>
                                <th>
                                    {{ $pedido->id }}
                                </th>
                                <th>
                                    {{ $pedido->cliente }}
                                </th>
                                <th>
                                    {{ $pedido->data_atual }}
                                </th>
                                <th>
                                    {{ $pedido->data_entrega }}
                                </th>
                                <th>
                                    {{ $pedido->descricao_servico }}
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
