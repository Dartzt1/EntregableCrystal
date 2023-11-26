@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edicion de Evento</h1>
@stop

@section('content')
    <p>Ingrese la informacion del evento</p>
            
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ticket.update', $ticket) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-adminlte-input type="text" name="nomeven" label="NOMBRE DE EVENTO" label-class="text-lightblue" value="{{$ticket->nomeven}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            @php
                $config = [
                    'format' => 'YYYY-MM-DD HH:mm', // Cambié el formato para incluir la hora y minutos
                    'dayViewHeaderFormat' => 'MMM YYYY',
                    'minDate' => "js:moment().startOf('month')",
                    'maxDate' => "js:moment().endOf('month')",
                    'daysOfWeekDisabled' => [0, 6],
                ];
            @endphp

            <x-adminlte-input-date name="fecha" label="INGRESE FECHA DE EVENTO" igroup-size="sm" :config="$config" value="{{$ticket->fecha}}" >
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>

            <x-adminlte-input name="nument" label="Entradas disponibles" type="number" igroup-size="sm" min=90 max=150 value="{{$ticket->nument}}" >
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-hashtag"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="proved" label="NOMBRE DE PROVEEDOR" placeholder="Ingrese nombre de proveedor" label-class="text-lightblue" value="{{$ticket->proved}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="tipoeven" label="TIPO DE EVENTO" placeholder="Ingrese el tipo de evento" label-class="text-lightblue" value="{{$ticket->tipoeven}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                    <i class="fas fa-star"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>



            <x-adminlte-input-file name="img" igroup-size="sm" label="IMAGEN DE EVENTO" placeholder="Buscar Imagen" label-class="text-lightblue" @change="previewImage" accept="image/*">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-lightblue">
                        <i class="fas fa-upload"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-file>


            <x-adminlte-textarea name="direccion" label="DIRECCION" rows=5 label-class="text-lightblue" igroup-size="sm" value="{{$ticket->direccion}}" >
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                </div>
                </x-slot>
                {{ old('direccion') }} 
            </x-adminlte-textarea>



        <x-adminlte-button type="submit" label="Guardar" theme="primary" icon="fas fa-save"/>

            </form>
        </div>
    </div>

    
    

    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @if (session ("message"))
    <script>
        $(document).ready(function(){
            let mensaje = "{{ session('message')}}";
            Swal.fire({
                'title' : 'Resultado',
                'text' : mensaje,
                'icon' : 'success'
            })

        })
    </script>
    @endif
@stop