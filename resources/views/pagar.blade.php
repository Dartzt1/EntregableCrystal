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
                        <li><strong>Detalles:</strong> {{ $ticket->detalles }}</li>
                  
                    </ul>
                </div>
                <div class="text-right col-md-6">
                    <!-- Imagen del evento -->
                    <a href="{{ asset('storage/images/' . $ticket->img_path) }}" target="_blank" class="image-popup-link">
                        <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" style="max-width: 100%;">
                    </a>
                </div>
            </div>
            <x-adminlte-modal id="modalCustom" title="Account Policy" size="lg" theme="teal"
                icon="fas fa-bell" v-centered static-backdrop scrollable>
    <div style="height: 150px;">
        <p id="account-policies-code"></p>
        <p id="numeric-password"></p>
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="danger" label="cerrar" data-dismiss="modal"/>
    </x-slot>
</x-adminlte-modal>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Generar un código aleatorio y una contraseña numérica al cargar la página
        var codigoAleatorio = generarCodigoAleatorio();
        var passwordNumerica = generarPasswordNumerica();

        // Mostrar el código aleatorio y la contraseña en los elementos correspondientes
        document.getElementById('account-policies-code').textContent = 'Código: ' + codigoAleatorio;
        document.getElementById('numeric-password').textContent = 'Contraseña numérica: ' + passwordNumerica;
    });

    function generarCodigoAleatorio() {
        var longitud = 12;
        var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var codigo = '';

        for (var i = 0; i < longitud; i++) {
            var indiceAleatorio = Math.floor(Math.random() * caracteres.length);
            codigo += caracteres.charAt(indiceAleatorio);
        }

        return codigo;
    }

    function generarPasswordNumerica() {
        var longitud = 11;
        var numeros = '0123456789';
        var password = '';

        for (var i = 0; i < longitud; i++) {
            var indiceAleatorio = Math.floor(Math.random() * numeros.length);
            password += numeros.charAt(indiceAleatorio);
        }

        return password;
    }
</script>



            <x-adminlte-button label="Revelar Codigo" data-toggle="modal" data-target="#modalCustom" class="mt-3 btn btn-primary"/>
            <a href="{{ route('ticket.index') }}" class="mt-3 btn btn-primary">Regresar a la Lista de Eventos</a>
        </div>


        </div>
    </div>
@stop
