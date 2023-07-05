@extends('layouts.app')

@section('title')
    <h1>Editar {{ $customer->name }}</h1>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('customers.index') }}">Clientes</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('customers.edit', $customer) }}">Editar {{ $customer->name }}</a>
    </li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Altere os dados
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customers.update', $customer) }}" method="POST">
                            @method('PUT')
                            @include('layouts.customers.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
