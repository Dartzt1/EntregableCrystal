<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\TicketController;

class PagoController extends Controller
{
    public function pago(Request $request)
    {
        // Aquí puedes obtener los datos de los tickets directamente desde el modelo Ticket
        $tipoEntradaSeleccionado = $request->input('tipo_entrada_seleccionado');

        $ticket = Ticket::all();

        // Luego, puedes pasar los datos a la vista 'eventos'
        return view('pagar', ['ticket' => $ticket]);
    }
}







