<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $tickets = Ticket::all();
    return view('sistema.listTicket', compact('tickets'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sistema.addTicket');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validacion = $request ->validate([
            'nomeven' => 'required|string|max:75',
            'fecha' => 'required|date',
            'nument' => 'required|string',
            'proved' => 'required|string|max:75',
            'tipoeven' => 'required|string|max:5000',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]); 

        $ticket = new Ticket();
        $ticket->nomeven = $request->input('nomeven');
        $ticket->fecha = $request->input('fecha');
        $ticket->nument = $request->input('nument');
        $ticket->proved = $request->input('proved');
        $ticket->tipoeven = $request->input('tipoeven');
        $ticket->direccion = $request->input('direccion');
        $imagePath = $request->file('img')->store('public/images');
        $ticket->img_path = basename($imagePath);


        $ticket->save();
        return back() ->with('message','ok');
        
    }

    /**
     * Display the specified resource.
     */
// TicketController.php

public function show(string $id)
{
    $ticket = Ticket::find($id);

    // Verifica si se encontró el ticket
    if ($ticket) {
        return view('sistema.showTicket', compact('ticket'));
    } else {
        // Puedes personalizar el comportamiento si el ticket no se encuentra
        return redirect()->route('sistema.listTicket')->with('error', 'Ticket no encontrado');
    }
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::find($id);
        return view('sistema.editTicket',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);

        $ticket->nomeven = $request->input('nomeven');
        $ticket->fecha = $request->input('fecha');
        $ticket->nument = $request->input('nument');
        $ticket->proved = $request->input('proved');
        $ticket->tipoeven = $request->input('tipoeven');
        $ticket->direccion = $request->input('direccion');
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('public/images');
            $ticket->img_path = basename($imagePath);
        }

        $ticket->save();
        return back()->with('message','Actualizado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return back();
    }
}
