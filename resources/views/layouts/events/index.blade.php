@extends('layouts.app')

@section('title')
    <h1>Visualizar eventos</h1>
@endsection

@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
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
            <h2>Lista de Eventos</h2>
            @include('layouts.events.events-card')
        </div>
        <div class="row col-md-12 mt-5">
            <h2>Visualizar todos os Eventos</h2>
            @include('layouts.events.events-list')
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        text: 'Copy',
                        className: 'btn-secondary'
                    },
                    {
                        extend: 'csv',
                        text: 'CSV',
                        className: 'btn-secondary'
                    },
                    {
                        extend: 'excel',
                        text: 'Excel',
                        className: 'btn-secondary'
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        className: 'btn-secondary'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        className: 'btn-secondary'
                    }
                ],
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json'
                }
            });
        });
    </script>
@endsection
