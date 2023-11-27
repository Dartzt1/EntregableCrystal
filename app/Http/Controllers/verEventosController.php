<?php
// app/Http/Controllers/verEventosController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ticket; // Asegúrate de tener esta línea

class verEventosController extends Controller
{
    public function vereventos()
    {
        // Aquí puedes obtener los datos de los tickets directamente desde el modelo Ticket
        $tickets = Ticket::all();

        // Luego, puedes pasar los datos a la vista 'eventos'
        return view('eventos', ['tickets' => $tickets]);
    }
}
