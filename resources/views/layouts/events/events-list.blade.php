<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Visualizar todos os Eventos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Convidados</th>
                                <th>Equipe</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr class="odd">
                                    <td>{{ $event['id'] }}</td>
                                    <td>{{ $event['name'] }}</td>
                                    <td>{{ $event['start_date'] }}</td>
                                    <td>{{ $event['guests'] }}</td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('events.show', $event) }}" class="btn btn-primary">
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
