@extends("Layouts.layout")

@section('title', 'Crystal Pass | Eventos')

<x-c-navegacion></x-c-navegacion>
<x-c-baner></x-c-baner>

<style>
    .columna-dos {
        display: flex;
    }
    .columna-espacio {
        flex: 0 0 50%;
        margin: 0 10px;
        position: left;
    }
</style>

@section('content')
<div class="container">
    @foreach($tickets as $ticket)

    <div class="row justify-content-center pb-15">

        <div class="container">
            <div class="columna-dos">

                <div class="columna-espacio">
                    <a href="festivalcumbia">
                        <div >
                            <div class="aspect__inner">
                                <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento">
                            </div>
                        </div>
                        <div class="evento--box">
                            <div class="d-none d-md-block">
                                <img src="assets\images\espaciador.png" alt="ticket" class="ico-ticket">
                            </div>
                            <div>
                                <p class="descripcion text-truncate">
                                    <strong>{{ $ticket->tipoeven }}</strong>
                                </p>
                                <h3 title="KAROL G - MAÑANA SERÁ BONITO LATAM TOUR ">
                                    <strong>{{ $ticket->nomeven }}</strong>
                                </h3>
                                <p class="fecha text-truncate">
                                    <strong>{{ $ticket->fecha }}</strong>
                                </p>
                                <p class="fecha text-truncate">
                                    Uicacion: <strong>{{ $ticket->direccion }}</strong>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                
                <div class="columna-espacio">
                    <a href="festivalcumbia">
                        <div >
                            <div class="aspect__inner">
                                <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento">
                            </div>
                        </div>
                        <div class="evento--box">
                            <div class="d-none d-md-block">
                                <img src="assets\images\espaciador.png" alt="ticket" class="ico-ticket">
                            </div>
                            <div>
                                <p class="descripcion text-truncate">
                                    <strong>{{ $ticket->tipoeven }}</strong>
                                </p>
                                <h3 title="KAROL G - MAÑANA SERÁ BONITO LATAM TOUR ">
                                    <strong>{{ $ticket->nomeven }}</strong>
                                </h3>
                                <p class="fecha text-truncate">
                                    <strong>{{ $ticket->fecha }}</strong>
                                </p>
                                <p class="fecha text-truncate">
                                    Uicacion: <strong>{{ $ticket->direccion }}</strong>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    @endforeach
</div>



<x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>