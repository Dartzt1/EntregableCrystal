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
        $heads = ['ID', 'Nombre Evento', 'Fecha', 'Numero de entradas', 'Tipo de evento', 'Proveedor', 'img', ['label' => 'Direccion', 'width' => 40], ['label' => 'Actions', 'no-export' => true, 'width' => 10],];

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
            'language' => [
            'url' => '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
                ]
        ];

        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
        @foreach($tickets as $tickets)
        <tr>
        <td>{{ $tickets->id }}</td>
        <td>{{ $tickets->nomeven }}</td>
        <td>{{ $tickets->fecha }}</td>
        <td>{{ $tickets->nument }}</td>
        <td>{{ $tickets->tipoeven }}</td>
        <td>{{ $tickets->proved }}</td>
        <td>{{ $tickets->img }}</td>
        <td>{{ $tickets->direccion }}</td>
        <td>{!! $btnEdit !!}
            <form style='display: inline' action="{{route('ticket.destroy',$tickets)}}" method="post" class="formEliminar">
                @csrf
                @method('delete')
                {!! $btnDelete !!} 
            </form>   
            {!! $btnDetails !!}</td>
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
$(document).ready(function(){
        $('.formEliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Estas seguro?",
                text: "Se va ha eliminar un registro!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminalo"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        })
    
})
</script>
@stop