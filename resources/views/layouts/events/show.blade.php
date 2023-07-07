@php
    $event = [
        'id' => 1,
        'name' => 'John $ Mary',
    ];
@endphp
@extends('layouts.app')

@section('title')
    <h1>Visualização de Evento</h1>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.index') }}">Clientes</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.show', $event) }}/">{{ $event->name }}</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">

    </div>
@endsection
