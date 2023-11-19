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
        //
        return view('sistema.addTicket');
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
            'tipoeven' => 'required|string|max:75',
            
        ]); 

        $ticket = new Ticket();
        $ticket->nomeven = $request->input('nomeven');
        $ticket->fecha = $request->input('fecha');
        $ticket->nument = $request->input('nument');
        $ticket->proved = $request->input('proved');
        $ticket->tipoeven = $request->input('tipoeven');
        $ticket->direccion = $request->input('direccion');

        $ticket->save();
        return back() ->with('message','ok');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
