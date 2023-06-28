@extends('layout.master')
@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Cadastro de Pedido
                    <a href="{{route('pedidos.index')}}" class="btn btn-success btn-sm float-end">
                        Consulta Pedidos
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pedidos.store') }}" method="post">
                        @csrf

                        <div class="mb-2">
                            <label for="name">Cliente</label>
                            <input
                                type="text"
                                name="cliente"
                                id="cliente"
                                class="form-control"
                                placeholder="Jalin Enrabei"
                            />
                            @error('cliente')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-2">
                            {{-- <label for="email">Data Atual</label> --}}
                            <input
                                type="hidden"
                                name="data_atual"
                                id="data_atual"
                                class="form-control"
                                value="{{ date('Y-m-d') }}"
                            />
                        </div>

                        <div class="mb-2">
                            <label for="email">Data Entrega</label>
                            <input
                                type="date"
                                name="data_entrega"
                                id="data_entrega"
                                class="form-control"
                                required
                            />
                            @error('data_entrega')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                       <div class="md-2">
                            <label for="descricao_servico">Descrição Serviço</label>
                            <textarea
                                cols="30" rows="10"
                                name="descricao_servico"
                                id="descricao_servico"
                                class="form-control"
                            >
                            </textarea>
                            @error('descricao_servico')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                       </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-success" style="width: 100%;">
                                Gravar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
