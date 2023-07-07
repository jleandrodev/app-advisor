@php
    $events = [
        [
            'name' => 'Jhonatan & Leticia',
            'date' => '25/05/2024',
            'guests' => 200,
            'tasks' => '18/22',
            'picture' => 'images/casal.jpg',
        ],
        [
            'name' => 'Matheus & Maria',
            'date' => '25/05/2024',
            'guests' => 120,
            'tasks' => '21/30',
            'picture' => 'images/casal2.jpg',
        ],
        [
            'name' => 'José & Antônia',
            'date' => '25/05/2024',
            'guests' => 160,
            'tasks' => '08/22',
            'picture' => 'images/casal3.jpg',
        ],
        [
            'name' => 'Gabriel & Andréia',
            'date' => '25/05/2024',
            'guests' => 300,
            'tasks' => '14/30',
            'picture' => 'images/casal4.jpg',
        ],
        [
            'name' => 'Luan & Gabriela',
            'date' => '25/05/2024',
            'guests' => 130,
            'tasks' => '02/12',
            'picture' => 'images/casal5.jpg',
        ],
        [
            'name' => 'Jorge & Mayara',
            'date' => '25/05/2024',
            'guests' => 180,
            'tasks' => '12/20',
            'picture' => 'images/casal6.jpg',
        ],
    ];
@endphp


@foreach ($events as $event)
    <div class="col-md-4 cursor-pointer scale-effect">
        <div class="card card-widget widget-user">
            <div class="widget-user-header bg-purple-variant text-white">
                <h3 class="widget-user-username">{{ $event['name'] }}</h3>
                <h5 class="widget-user-desc">{{ $event['date'] }}</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset($event['picture']) }}" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-6 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{ $event['guests'] }}</h5>
                            <span class="description-text">Convidados</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="description-block">
                            <h5 class="description-header">{{ $event['tasks'] }}</h5>
                            <span class="description-text">Atividades</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
