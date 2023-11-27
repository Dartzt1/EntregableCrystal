

@extends("Layouts.layout")

@section('title', 'Crystal Pass | Eventos')

<style>
    /* Estilos CSS */
</style>

<x-c-navegacion></x-c-navegacion>
<x-c-baner></x-c-baner>

@section('content')
    <div class="container">
        <!-- Contenido de la sección 'content' -->
        @foreach($tickets as $ticket)
        <div class="row justify-content-center pb-15">
        
            <div class="container">
                <div class="columna-dos">
    
                    <div class="columna-espacio">
                        <a href="/karol-g-en-lima-2024">
                            <div class="text-right col-md-6">
                                <!-- Imagen del evento -->
                                <a href="{{ asset('storage/images/' . $ticket->img_path) }}" target="_blank" class="image-popup-link">
                                    <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" style="max-width: 100%;">
                                </a>
                            </div>
                            <div class="evento--box">
                                <div class="d-none d-md-block">
                                    <img src="https://cdnp.teleticket.com.pe/Content/images/estilo-2021/icon/ico-ticket.png" alt="ticket" class="ico-ticket">
                                </div>
                                <div>
                                    <p class="descripcion text-truncate">
                                        <strong>ID:</strong> {{ $ticket->id }}
                                    </p>
                                    <p class="descripcion text-truncate">
                                        <strong>Nombre del Evento:</strong> {{ $ticket->nomeven }}
                                    </p>
                                    <p class="descripcion text-truncate">
                                        <strong>Fecha:</strong> {{ $ticket->fecha }}
                                    </p>
                                    <p class="descripcion text-truncate">
                                        <strong>Numero de Entradas Disponibles:</strong> {{ $ticket->nument }}
                                    </p>
                                    <p class="descripcion text-truncate">
                                        <strong>Tipo de evento:</strong> {{ $ticket->tipoeven }}
                                    </p>
                                    <p class="descripcion text-truncate">
                                        <strong>Proveedor:</strong> {{ $ticket->proved }}
                                    </p>
                                    <p class="descripcion text-truncate">
                                        <strong>Direccion:</strong> {{ $ticket->direccion }}
                                    </p>
                                    <p class="fecha text-truncate">
                                        {{ $ticket->fecha }}
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
@stop
