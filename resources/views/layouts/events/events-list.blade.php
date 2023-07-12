@php
    $events = [
        [
            'id' => 1,
            'name' => 'Jhonatan & Leticia',
            'date' => '25/05/2024',
            'guests' => 200,
            'tasks' => '18/22',
            'picture' => 'images/casal.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Matheus & Maria',
            'date' => '25/05/2024',
            'guests' => 120,
            'tasks' => '21/30',
            'picture' => 'images/casal2.jpg',
        ],
        [
            'id' => 3,
            'name' => 'José & Antônia',
            'date' => '25/05/2024',
            'guests' => 160,
            'tasks' => '08/22',
            'picture' => 'images/casal3.jpg',
        ],
        [
            'id' => 4,
            'name' => 'Gabriel & Andréia',
            'date' => '25/05/2024',
            'guests' => 300,
            'tasks' => '14/30',
            'picture' => 'images/casal4.jpg',
        ],
        [
            'id' => 5,
            'name' => 'Luan & Gabriela',
            'date' => '25/05/2024',
            'guests' => 130,
            'tasks' => '02/12',
            'picture' => 'images/casal5.jpg',
        ],
        [
            'id' => 6,
            'name' => 'Jorge & Mayara',
            'date' => '25/05/2024',
            'guests' => 180,
            'tasks' => '12/20',
            'picture' => 'images/casal6.jpg',
        ],
    ];
@endphp

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Visualizar todos os Eventos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="myTable" class="table table-bordered table-striped dataTable dtr-inline"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Data</th>
                                            <th>Convidados</th>
                                            <th>Atividades</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $event)
                                            <tr class="odd">
                                                <td>{{ $event['id'] }}</td>
                                                <td>{{ $event['name'] }}</td>
                                                <td>{{ $event['date'] }}</td>
                                                <td>{{ $event['guests'] }}</td>
                                                <td>{{ $event['tasks'] }}</td>
                                                <td>
                                                    <a href="{{ route('events.show', '1') }}" class="btn btn-primary">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
