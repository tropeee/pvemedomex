<?php

namespace App\Http\Controllers;

use App\Models\Afiliacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AfiliacionMailable;

class AfiliacionController extends Controller
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
        return view('create');
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
            'email' => 'required|unique:afiliacions,email|email',
            'telefono' => 'required|unique:afiliacions,telefono',
            'check' => 'required',
        ], [
            'nombres.required' => 'Nombre(s) requierido(s)',
            'apellidos.required' => 'Apellidos requeridos',
            'email.required' => 'Correo electrónico requerido',
            'email.email' => 'Correo electrónico invalido',
            'email.unique' => 'Correo electrónico ya registrado, ingrese uno diferente',
            'telefono.required' => 'Teléfono requerido',
            'telefono.unique' => 'Teléfono ya registrado, ingrese uno diferente',
            'check.required' => 'Debe marcar la casilla'
        ]);

        Afiliacion::create($request->all());

        $correo = new AfiliacionMailable($request->all());

       Mail::to('holapartidoverdeedo@gmail.com')->send($correo);

        $notification = array(
            'message' => 'Afiliación registrada satisfactoriamente!',
            'alert-type' => 'success'
        );

        return redirect()->route('Afiliacion')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliacion $afiliacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Afiliacion $afiliacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afiliacion $afiliacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afiliacion  $afiliacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliacion $afiliacion)
    {
        //
    }
}
