@extends('layouts.app')

@section('title')
    <h1>Detalhes do Evento {{ $event['name'] }}</h1>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.index') }}">Eventos</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('events.show', $event['id']) }}">{{ $event['name'] }}</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        @include('layouts.events.nav-cards')
    </div>
@endsection
