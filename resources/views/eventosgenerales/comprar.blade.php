@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comprar entradas</h1>

        <!-- Aquí puedes mostrar los detalles del evento -->
        <div>
            <h2>{{ $ticket->nomeven }}</h2>
            <p>{{ $ticket->fecha }}</p>
            <!-- ... -->
        </div>

        <!-- Aquí puedes permitir al usuario comprar las entradas -->
        <!-- ... -->
    </div>
@endsection