@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edicion de clientes</h1>
@stop

@section('content')
    <p>Ingrese la informacion del cliente</p>
            
    <div class="card">
        <div class="card-body">
            <form action="{{route('cliente.update', $cliente)}}" method="post">
            @csrf
            @method('PUT')
            
            <x-adminlte-input type="text" name="dni" label="DNI" label-class="text-lightblue" value="{{$cliente->dni}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="apellido" label="APELLIDO"  label-class="text-lightblue" value="{{$cliente->apellido}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="nombre" label="NOMBRES" label-class="text-lightblue" value="{{$cliente->nombre}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="email" name="email" label="EMAIL" label-class="text-lightblue" value="{{$cliente->email}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-envelope text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="telefono" label="TELEFONO" label-class="text-lightblue" value="{{$cliente->telefono}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-phone text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-textarea name="direccion" label="DIRECCION" rows=5 label-class="text-lightblue" igroup-size="sm" >
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                </div>
                </x-slot>
                {{ $cliente->direccion }} 
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