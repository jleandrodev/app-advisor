@extends('layouts.app')

@section('title')
    <h1>Manual Operacional</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a class="text-decoration-none" href="{{ route('operational') }}">Manual Operacional</a>
    </li>
@endsection

@section('content')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header bg-pimary">
                <h3 class="card-title">Descrição de Papeis</h3>
            </div>

            <div class="card-body">

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseOne">
                                Assessora
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>Organização prévia do evento, realização de reuniões, contato direto com noivos e
                                    fornecedores durante todo o processo. Responsável principal pelo cerimonial, com foco
                                    nos noivos durante o evento.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Primeira Assistente
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                Essa assistente prestará suporte a assessora principal no que for necessário, no
                                trato com a noiva e com o noivo do começo ao fim do evento, bem como conferência de
                                check-list dos itens essenciais de assessoria, dos itens que foram alugados pelos noivos
                                e estarão sob responsabilidade da assessoria (alianças, cestinhas, plaquinhas, bebidas,
                                bem-casados etc). Fotos e vídeos. E, ficará como suporte para as demais assistentes.
                                Obs: ficará até o final do evento junto com a assessora principal.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Assistente cerimonial
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                responsável pelos protocolos cerimoniais, cuidar e orientar os padrinhos em todos os passos
                                do evento, até a finalização das fotos protocolares. Obs: a assistente cerimonial tem grande
                                responsabilidade no cortejo e protocolos da recepção, porém, pode ser dispensada após o
                                jantar.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                Assistente técnica
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                Responsável por conferir as músicas da cerimônia, dar suporte na frente de altar durante o
                                cortejo inicial e cumprimentos. Responsável por conferir serviço do buffet (horário de
                                soltar frios, soltar jantar), serviço do Dj na recepção. Recolher e etiquetar presentes
                                Responsável pelos pertences dos noivos, doces dos noivos, bem-casados, véu, sapatos etc.
                                Entrega de lembrancinhas. Responsável por deixar tudo isso organizado e registrado através
                                do relatório no drive do casal, contendo quantidade de volumes de presentes, pertences etc.
                                Obs: essa profissional estará dispensada após 1h do início do baile.
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
