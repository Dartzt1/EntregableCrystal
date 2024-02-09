@extends('adminlte::page')

@section('title', 'Lista Eventos')

@section('content_header')
    <h1>Lista de Eventos</h1>
@stop

<style>
    .btn-primary {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin: 5PX;
}

.btn-primary:hover {
  background-color: #0056b3;
}
</style>

@section('content')



    <div class="card">
        <div>
            <a href="#" onclick="imprimirTabla('table1')" class="float-right btn-primary">Exportar</a>
        </div>
        <div class="card-body">

            @php
                $heads = [
                    'ID', 'Nombre Evento', 'Fecha', 'Numero de entradas', 'Tipo de evento', 'Proveedor','Precio Vip', 'Precio Oro', 'Precio Platino', 'img', 
                    ['label' => 'Direccion', 'width' => 20],['label' => 'Detalles', 'width' => 35], ['label' => 'Acciones', 'no-export' => true, 'width' => 20],
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
            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->nomeven }}</td>
                        <td>{{ $ticket->fecha }}</td>
                        <td>{{ $ticket->nument }}</td>
                        <td>{{ $ticket->tipoeven }}</td>
                        <td>{{ $ticket->proved }}</td>
                        <td>{{ $ticket->preciovip }}</td>
                        <td>{{ $ticket->preciooro }}</td>
                        <td>{{ $ticket->precioplatino }}</td>
                        <td>
                            <a href="{{ asset('storage/images/' . $ticket->img_path) }}" target="_blank" class="image-popup-link">
                                <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" style="max-width: 50px;">
                            </a>
                        </td>
                        
                        <td>{{ $ticket->direccion }}</td>
                        <td>{{ $ticket->detalles }}</td>
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

<script>
    function imprimirTabla(idTabla) {
        var tabla = document.getElementById(idTabla).cloneNode(true); // Clonar la tabla para no modificar la original
        eliminarUltimaColumna(tabla); // Eliminar la última columna del clon de la tabla
        var ventana = window.open('', 'PRINT', 'height=400,width=600');
        ventana.document.write('<html><head><title>Tabla de Eventos</title></head><body>');
        ventana.document.write(tabla.outerHTML);
        ventana.document.write('</body></html>');
        ventana.document.close();
        ventana.print();
        ventana.close();
    }

    function eliminarUltimaColumna(tabla) {
        var rows = tabla.getElementsByTagName('tr');
        for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName('td');
            if (cells.length > 0) {
                cells[cells.length - 1].remove(); // Eliminar la última celda de cada fila
            }
        }
    }
</script>



@stop
