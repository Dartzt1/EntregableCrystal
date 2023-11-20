@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Inicio</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
<div class="card">
    <div class="card-body">
        @php
        $heads = ['ID', 'Apellidos', 'Nombres', ['label' => 'Telefono', 'width' => 40], ['label' => 'Actions', 'no-export' => true, 'width' => 5],];

        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
            <i class="fa fa-lg fa-fw fa-pen"></i>
        </button>';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
            <i class="fa fa-lg fa-fw fa-eye"></i>
        </button>';

        $config = [
            
        ];

        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        <x-adminlte-datatable id="table1" :heads="$heads">
        @foreach($clientes as $cliente)
        <tr>
        <td>{{ $cliente->id }}</td>
        <td>{{ $cliente->apellido }}</td>
        <td>{{ $cliente->nombre }}</td>
        <td>{{ $cliente->telefono }}</td>
        <td>{!! $btnEdit !!} {!! $btnDelete !!} {!! $btnDetails !!}</td>
        </tr>
@endforeach
        </x-adminlte-datatable>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop