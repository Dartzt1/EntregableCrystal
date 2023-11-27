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
                        <li><strong>ID:</strong> {{ $cliente->id }}</li>
                        <li><strong>DNI:</strong> {{ $cliente->dni }}</li>
                        <li><strong>Apellido</strong> {{ $cliente->apellido }}</li>
                        <li><strong>Nombre:</strong> {{ $cliente->nombre }}</li>
                        <li><strong>Email:</strong> {{ $cliente->email }}</li>
                        <li><strong>Direccion:</strong> {{ $cliente->direccion }}</li>
                        <li><strong>Telefono:</strong> {{ $cliente->telefono }}</li>


                    </ul>
                </div>
            </div>
            <a href="{{ route('cliente.index') }}" class="mt-3 btn btn-primary">Regresar a la lista de clientes</a>
        </div>


        </div>
    </div>
@stop
