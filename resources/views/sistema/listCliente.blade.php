@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Lista de cliente</h1>
@stop

@section('content')
<p>Aquì se muestra la lista de clientes</p>
<div class="card">
    @can('Administrar')
        <div class="card-head">
            <a href="{{route('cliente.create')}}" class="float-right mt-2 mr-2 btn btn-primary" >Nuevo</a>
        </div>
    @endcan
    <div class="card-body">
        @php
        $heads = ['ID', 'DNI', 'Apellidos', 'Nombres', 'Email','Direccion', ['label' => 'Telefono', 'width' => 30],  ['label' => 'Actions',
        'no-export' => true, 'width' => 10], ];

        $btnEdit = '';
        $btnDelete = '<button type="submit" class="mx-1 shadow btn btn-xs btn-default text-danger" title="Delete">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>';
        $btnDetails = '<button class="mx-1 shadow btn btn-xs btn-default text-teal" title="Details">
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
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->dni }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                
                <td>
                    <a href="{{route('cliente.edit',$cliente)}}" class="mx-1 shadow btn btn-xs btn-default text-primary" title="Edit">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </a>

                    @can('Administrar')
                    <form style='display: inline' action="{{ route('cliente.destroy', $cliente)}}" method="post"
                        class="formEliminar">
                        @csrf
                        @method('delete')
                        {!! $btnDelete !!}
                    </form>
                    @endcan
                    
                    <a href="{{route('cliente.show',$cliente)}}" class="mx-1 shadow btn btn-xs btn-default text-primary" title="Show">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </a>
                </td>
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
$(document).ready(function() {
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