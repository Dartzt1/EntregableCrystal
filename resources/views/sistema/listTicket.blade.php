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
                $heads = [
                    'ID', 'Nombre Evento', 'Fecha', 'Numero de entradas', 'Tipo de evento', 'Proveedor', 'img', 
                    ['label' => 'Direccion', 'width' => 40], ['label' => 'Actions', 'no-export' => true, 'width' => 10],
                ];

                $btnEdit = '<a href="%s" class="mx-1 shadow btn btn-xs btn-default text-primary" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </a>';
                $btnDelete = '<form style="display: inline" action="%s" method="post" class="formEliminar">
                    ' . csrf_field() . '
                    ' . method_field("delete") . '
                    <button type="submit" class="mx-1 shadow btn btn-xs btn-default text-danger" title="Delete">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </button>
                </form>';
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
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->nomeven }}</td>
                        <td>{{ $ticket->fecha }}</td>
                        <td>{{ $ticket->nument }}</td>
                        <td>{{ $ticket->tipoeven }}</td>
                        <td>{{ $ticket->proved }}</td>
                        <td>
                            <a href="{{ asset('storage/images/' . $ticket->img_path) }}" target="_blank" class="image-popup-link">
                                <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" style="max-width: 50px;">
                            </a>
                        </td>
                        
                        <td>{{ $ticket->direccion }}</td>
                        <td>
                            {!! sprintf($btnEdit, route('ticket.edit', $ticket)) !!}
                            {!! sprintf($btnDelete, route('ticket.destroy', $ticket)) !!}
                            <a href="{{route('ticket.show',$ticket)}}" class="mx-1 shadow btn btn-xs btn-default text-primary" title="Show">
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


        $(document).ready(function(){
            $('.formEliminar').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Estas seguro?",
                    text: "Se va a eliminar un registro!",
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
            });
        });
    </script>
@stop
