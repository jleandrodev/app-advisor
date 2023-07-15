@csrf

<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados Gerais</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Nome do Evento</label>
                        <input type="text" name="name" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Descrição</label>
                        <textarea id="inputDescription" name="notes" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Cliente</label>
                        <select id="inputStatus" name="customer_id" class="form-control custom-select">
                            <option selected="" disabled="">Select o Cliente</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Início do Evento</label>
                        <div class="input-group">
                            <input type="date" name="start_date" class="form-control float-right col-md-3"
                                id="reservationtime">
                            <input type="time" name="start_hour" class="form-control float-right col-md-3"
                                id="reservationtime">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Fim do Evento</label>
                        <div class="input-group">
                            <input type="date" name="end_date" class="form-control float-right col-md-3"
                                id="reservationtime">
                            <input type="time" name="end_hour" class="form-control float-right col-md-3"
                                id="reservationtime">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Dados de Operação</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputEstimatedBudget">Quantidade de Convidados</label>
                        <input type="number" name="guests" id="inputEstimatedBudget" class="form-control">
                    </div>
                    <div class="form-group">

                        <label for="inputEstimatedDuration">Importar Lista de Convidados</label>
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
    </div>
</section>
