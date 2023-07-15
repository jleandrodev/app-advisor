@extends('layouts.app')

@section('title')
    <h1>Visualização de Evento</h1>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('customers.index') }}">Clientes</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.show', $customer) }}/">{{ $customer->name }}</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cliente</h3>
                        <div class="card-tools">
                            <button type="submit" class="btn btn-danger mx-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>
                        </div>
                        <div class="card-tools">
                            <a href="{{ route('customers.edit', $customer) }}" class="btn btn-primary mx-2"><i
                                    class="fas fa-edit"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-14">
                                <h4>
                                    <i class="fas fa-user"></i> {{ $customer->name }}
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p>
                                    <strong>CPF/CNPJ: </strong>
                                    @if (strlen($customer->doc) === 11)
                                        {{ mascara($customer->doc, '###.###.###-##') }}
                                    @else
                                        {{ mascara($customer->doc, '##.###.###/####-##') }}
                                    @endif

                                </p>
                                <p>
                                    <strong>Telefone: </strong>{{ mascara($customer->phone, '(##) ####-####') }}
                                </p>
                                <p>
                                    <strong>Celular: </strong>{{ mascara($customer->cel, '(##) # ####-#####') }}
                                </p>
                                <p>
                                    <strong>Email: </strong>{{ $customer->email }}
                                </p>
                                <p>
                                    <strong>Observações: </strong>{{ $customer->notes }}
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <address>
                                    <p>{{ $customer->adress }}, {{ $customer->neighborhood }}</p>
                                    <p>{{ $customer->city }} - {{ $customer->state }} -
                                        {{ mascara($customer->cep, '#####-###') }}</p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Deseja excluir o cadastro "{{ $customer->name }}"?
                        </p>
                        <p>
                            Esta alteração não poderá ser desfeita.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Excluir Cadastro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
@endsection
