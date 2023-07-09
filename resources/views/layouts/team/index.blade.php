@extends('layouts.app')

@section('title')
    <h1>Listagem da Equipe</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('employees.index') }}">Equipe</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listagem da equipe</h3>
                        <div class="card-tools">
                            <a href="{{ route('employees.create') }}" class="btn btn-primary">Novo</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Número</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ mascara($employee->cel, '(##) # ####-#####') }}</td>
                                        <td>
                                            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary"><i
                                                    class="fas fa-edit"></i></a>
                                            <a href="{{ route('employees.show', $employee) }}" class="btn btn-secondary"><i
                                                    class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <div class="pagination float-right">
                            {{ $employees->links('vendor.pagination.custom-pagination') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
