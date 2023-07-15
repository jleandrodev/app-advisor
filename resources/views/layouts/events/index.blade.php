@extends('layouts.app')

@section('title')
    <h1>Visualizar eventos</h1>
@endsection

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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

    <!-- jQuery -->
    <script src="{{ asset('adminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->

    <!-- Page specific script -->


    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
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
