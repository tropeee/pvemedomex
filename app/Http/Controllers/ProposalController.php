<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use App\Mail\CandidateContact;
use Illuminate\Support\Facades\Mail;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'municipio' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'propuestas' => 'required',
        ], [
            'nombre.required' => 'Nombre completo requierido',
            'municipio.required' => 'Municipio requerido',
            'email.required' => 'Correo electrónico requerido',
            'email.email' => 'Ingresa un correo valido',
            'telefono.required' => 'Teléfono requerido',
            'propuestas.required' => 'Propuestas requeridas',
        ]);

        Proposal::create($request->all());

        if(($request->correo) != null)
        {
            $correo = new CandidateContact($request->all());

            Mail::to($request->correo)->send($correo);
        }

        $notification = array(
            'message' => 'Datos enviados correctamente',
            'alert-type' => 'success'
        );

        return back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $proposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposal $proposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposal $proposal)
    {
        //
    }
}
