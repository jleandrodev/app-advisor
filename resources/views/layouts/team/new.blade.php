@extends('layouts.app')

@section('title')
    <h1>Cadastrar Novo Membro</h1>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('employees.index') }}">Equipe</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('employees.create') }}">Novo Membro</a>
    </li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Preencha os dados
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="POST">
                            @include('layouts.team.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
