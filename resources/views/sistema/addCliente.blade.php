@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion de clientes</h1>
@stop

@section('content')
    <p>Ingrese la informacion del cliente</p>
    @php
            if (session()){
                if(session('message')== 'ok'){
                    echo'<x-adminlte-alert class="bg-teal text-uppercase" icon="fa fa-lg fa-thumbs-up" title="Done" dismissable>
                     Registro Completado!!</x-adminlte-alert>';
                }
            }
        @endphp
    <div class="card">
        <div class="card-body">
            <form action="{{route('cliente.store')}}" method="post">
            @csrf

            <x-adminlte-input type="text" name="dni" label="DNI" placeholder="Ingrese su DNI" label-class="text-lightblue" value="{{old('dni')}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="apellido" label="APELLIDO" placeholder="Aquì sus apellidos" label-class="text-lightblue" value="{{old('apellido')}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="nombre" label="NOMBRES" placeholder="Aquì sus nombres" label-class="text-lightblue" value="{{old('nombre')}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="email" name="email" label="EMAIL" placeholder="example@example.com" label-class="text-lightblue" value="{{old('email')}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-envelope text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-input type="text" name="telefono" label="TELEFONO" placeholder="999999999#" label-class="text-lightblue" value="{{old('telefono')}}">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-phone text-lightblue"></i>
                </div>
            </x-slot>
            </x-adminlte-input>

            <x-adminlte-textarea name="direccion" label="DIRECCION" rows=5 label-class="text-lightblue" igroup-size="sm" placeholder="Inserte su dirección">
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
    <script> console.log('Hi!'); </script>
@stop