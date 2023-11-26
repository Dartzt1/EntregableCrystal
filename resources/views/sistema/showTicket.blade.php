@extends('adminlte::page')

@section('title', 'Detalle del Evento')

@section('content_header')
    <h1>Detalles del Evento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- Detalles del evento -->
                    <ul>
                        <li><strong>ID:</strong> {{ $ticket->id }}</li>
                        <li><strong>Nombre del Evento:</strong> {{ $ticket->nomeven }}</li>
                        <li><strong>Fecha:</strong> {{ $ticket->fecha }}</li>
                        <li><strong>Numero de Entradas Disponibles:</strong> {{ $ticket->nument }}</li>
                        <li><strong>Tipo de evento:</strong> {{ $ticket->tipoeven }}</li>
                        <li><strong>Proveedor:</strong> {{ $ticket->proved }}</li>
                        <li><strong>Direccion:</strong> {{ $ticket->direccion }}</li>
                    </ul>
                </div>
                <div class="text-right col-md-6">
                    <!-- Imagen del evento -->
                    <a href="{{ asset('storage/images/' . $ticket->img_path) }}" target="_blank" class="image-popup-link">
                        <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" style="max-width: 100%;">
                    </a>
                </div>
            </div>
            
            <a href="{{ route('ticket.index') }}" class="mt-3 btn btn-primary">Regresar a la Lista de Eventos</a>
        </div>


        </div>
    </div>
@stop
