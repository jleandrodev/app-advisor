@extends('layouts.app')

@section('title')
    <h1>Lista de Eventos</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.index') }}">Lista de Eventos</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row col-md-12">
            @include('layouts.events.events-card')
        </div>
    </div>
@endsection
