<?php

namespace App\Http\Controllers;

use App\Models\Atencion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AtencionMailable;

class AtencionController extends Controller
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'justificacion' => 'required',
            'check' => 'required',
        ], [
            'nombres.required' => 'Nombre(s) requierido(s)',
            'apellidos.required' => 'Apellidos requeridos',
            'email.required' => 'Correo electrónico requerido',
            'email.email' => 'Correo electrónico invalido',
            'telefono.required' => 'Teléfono requerido',
            'justificacion.required' => 'Justificación requerida',
            'check.required' => 'Debe marcar la casilla'
        ]);


        Atencion::create($request->all());

        $correo = new AtencionMailable($request->all());

       Mail::to('holapartidoverdeedo@gmail.com')->send($correo);

        $notification = array(
            'message' => 'Datos enviados satisfactoriamente!',
            'alert-type' => 'success'
        );

        return redirect()->route('Atencion')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atencion  $atencion
     * @return \Illuminate\Http\Response
     */
    public function show(Atencion $atencion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atencion  $atencion
     * @return \Illuminate\Http\Response
     */
    public function edit(Atencion $atencion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atencion  $atencion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atencion $atencion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atencion  $atencion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atencion $atencion)
    {
        //
    }
}
