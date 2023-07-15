@foreach ($events as $event)
    <div class="col-md-4 cursor-pointer">
        <a class="text-decoration-none" href="{{ route('events.show', $event) }}">

            <div class="card card-widget widget-user-2 shadow-sm">

                <div class="widget-user-header bg-purple-variant text-white">
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{ asset('images/casal3.jpg') }}" alt="User Avatar">
                    </div>

                    <h3 class="widget-user-username">{{ $event->name }}</h3>
                    <h5 class="widget-user-desc">{{ $event->start_date }}</h5>
                </div>
                <div class="card-footer p-0">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-purple font-weight-bold">
                                Convidados <span
                                    class="float-right text-white badge bg-purple-variant">{{ $event->guests }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </a>
    </div>
@endforeach
