@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Administrador de Permisos</h1>
@stop

@section('content')
<p>Aquì se muestra la lista de clientes</p>
<div class="card">
    <div class="card-header">
        <x-adminlte-button label="Nuevo" theme="primary" icon="fas fa-key" class="float-right" data-toggle="modal" data-target="#modalPurple"/>
    </div>
    <div class="card-body">
        @php
        $heads = ['ID', 'PERMISO', ['label' => 'Actions','no-export' => true, 'width' => 20]];

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
            @foreach($permisos as $permiso)
            <tr>
                <td>{{ $permiso->id }}</td>
                <td>{{ $permiso->name }}</td>
                
                <td>
                    


                    <form style='display: inline' action="{{ route('permisos.destroy', $permiso)}}" method="post"
                        class="formEliminar">
                        @csrf
                        @method('delete')
                        {!! $btnDelete !!}
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>


<x-adminlte-modal id="modalPurple" title="Nuevo Permiso" theme="primary"
    icon="fas fa-bolt" size='lg' disable-animations>
    <form action="{{route('permisos.store')}}" method="post">
        @csrf
        <div class="row">
            <x-adminlte-input name="nombre" label="Nombre" placeholder="Ingrese su permiso..."
                fgroup-class="col-md-6" disable-feedback/>
        </div>
        <x-adminlte-button type="submit" label="Guardar" theme="success" icon="fas fa-thumbs-up"/>
    </form>
</x-adminlte-modal>



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