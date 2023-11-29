@extends("Layouts.layout")

@section('title', 'Crystal Pass | Eventos')

<x-c-navegacion></x-c-navegacion>
<x-c-baner></x-c-baner>

@section('content')
<div class="row g-5">
    @foreach($tickets as $ticket)
    <div class="container">
        @extends("Layouts.layout")

@section('title', 'Crystal Pass | Eventos')

<x-c-navegacion></x-c-navegacion>
<x-c-baner></x-c-baner>

@section('content')
<div class="row g-5">
    @foreach($tickets as $ticket)
    <div class="container">
        <div class="speaker-item">
            <div class="speaker-inner">
                <div>
                    <a href="{{ route('comprar', ['id' => $ticket->id]) }}">
                        <img style="width: 450px; height: 206.25px;"  src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" alt="speaker">
                    </a>
                </div>
                <div class="speaker-content">
                    <div class="spkr-content-title">
                        <h5>
                            <a href="{{ route('comprar', ['id' => $ticket->id]) }}">
                            <strong >{{ $ticket->nomeven }}</strong> 
                            </a> 
                        </h5>
                        <p>
                            <strong> {{ $ticket->tipoeven }}</strong> / {{ $ticket->fecha }}
                        </p>
                    </div>
                    <div class="spkr-content-details">
                        <p>
                            <strong> {{ $ticket->direccion }}</strong>
                        </p>
                        |
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>

@stop
    </div>
    @endforeach
</div>

<x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>

@stop