@extends("Layouts.layout")

@section('title', 'Crystal Pass | Eventos')

<x-c-navegacion></x-c-navegacion>
<x-c-baner></x-c-baner>

@section('content')
<div class="container">
    <div class="selector-container">
        <div class="selector">
            <label for="tipo-entrada">Selecciona el tipo de entrada:</label>
            <select id="tipo-entrada" name="tipo_entrada" disabled>
                <option value="vip">Vip</option>
                <option value="oro">Oro</option>
                <option value="platino">Platino</option>
            </select>
        </div>
    </div>

    <@section('content')
    <div class="row g-5">
        @foreach($ticket as $ticket)
        <div class="container">
            <div class="speaker-item">
                <div class="speaker-inner">
                    <h4>{{ $ticket->nomeven }}</h4>
                    <p>{{ $ticket->detalles }}</p>
                    <!-- Otros detalles del ticket -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
     

<x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>

@stop
