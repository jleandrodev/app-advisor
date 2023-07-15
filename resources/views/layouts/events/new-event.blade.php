@extends('layouts.app')

@section('title')
    <h1>Cadastrar Novo Evento</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.index') }}">Lista de Eventos</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.create') }}">Novo Eventos</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('events.store') }}" method="POST">
            @include('layouts.events.form')
        </form>
    </div>
@endsection
