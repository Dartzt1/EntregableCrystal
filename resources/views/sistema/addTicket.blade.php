@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion de Eventos</h1>
@stop

@section('content')
    <p>Ingrese la informacion del Evento</p>
    @php
        if (session()) {
            if (session('message') == 'ok') {
                echo '<x-adminlte-alert class="bg-teal text-uppercase" icon="fa fa-lg fa-thumbs-up" title="Done" dismissable>
                     Registro Completado!!</x-adminlte-alert>';
            }
        }
    @endphp 
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ticket.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <x-adminlte-input type="text" name="nomeven" label="NOMBRE DE EVENTO" placeholder="Ingrese nombre de evento" label-class="text-lightblue" value="{{old('nomeven')}}">
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

                <x-adminlte-input-date name="fecha" label="INGRESE FECHA DE EVENTO" igroup-size="sm" :config="$config" placeholder="YYYY-MM-DD HH:mm">
                    <x-slot name="appendSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>

                <x-adminlte-input name="nument" label="Entradas disponibles" placeholder="Ingrese entradas disponibles" type="number"
                    igroup-size="sm" min=90 max=150>
                    <x-slot name="appendSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-hashtag"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input type="text" name="proved" label="NOMBRE DE PROVEEDOR" placeholder="Ingrese nombre de proveedor" label-class="text-lightblue" value="{{old('proved')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input type="text" name="tipoeven" label="TIPO DE EVENTO" placeholder="Ingrese el tipo de evento" label-class="text-lightblue" value="{{old('tipoeven')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                        <i class="fas fa-star"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input type="text" name="preciovip" label="Precio entrada VIP" placeholder="Inserte precio de la entrada vip" label-class="text-lightblue" value="{{old('preciovip')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                        <i class="fas fa-money-bill-wave-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input type="text" name="preciooro" label="Precio entrada ORO" placeholder="Inserte precio de la entrada Oro" label-class="text-lightblue" value="{{old('precioro')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                        <i class="fas fa-money-bill-wave-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input type="text" name="precioplatino" label="Precio entrada Platino" placeholder="Inserte precio de la entrada Oro" label-class="text-lightblue" value="{{old('preciplatino')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                        <i class="fas fa-money-bill-wave-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>



                <x-adminlte-input-file name="img" igroup-size="sm" label="IMAGEN DE EVENTO" placeholder="Buscar Imagen" label-class="text-lightblue" @change="previewImage" accept="image/*">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-lightblue">
                        <i class="fas fa-image"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>
                

                <x-adminlte-textarea name="direccion" label="DIRECCION" rows=2 label-class="text-lightblue" igroup-size="sm" placeholder="Inserte su dirección">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </x-slot>
                    {{ old('direccion') }}
                </x-adminlte-textarea>


                <x-adminlte-textarea name="detalles" label="DETALLES" rows=2 label-class="text-lightblue" igroup-size="sm" placeholder="Inserte los detalles">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-info-circle"></i>
                        </div>
                    </x-slot>
                    {{ old('detalles') }}
                </x-adminlte-textarea>





            <x-adminlte-button type="submit" label="Guardar" theme="primary" icon="fas fa-save"/>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop