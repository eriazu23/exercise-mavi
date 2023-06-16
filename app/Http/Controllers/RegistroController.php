<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view('registro.index', compact('registros'));
    }

    /**
     * Create registry
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registros = new Registro;
        $registros->client_name = $request->input('name');
        $registros->client_last_name = $request->input('lastname');
        $registros->client_last_name_two = $request->input('lastnames');
        $registros->client_adress = $request->input('address');
        $registros->mail = $request->input('mail');
        $registros->save();

        return redirect()->back();
    }

    /**
     * Edit registry
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registros = Registro::find($id);
        return view('registro.modal.info', compact('registro'));
    }

    /**
     * Update registry.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registros = Registro::find($id);
        $registros->client_name = $request->input('name');
        $registros->client_last_name = $request->input('lastname');
        $registros->client_last_name_two = $request->input('lastnames');
        $registros->client_adress = $request->input('address');
        $registros->mail = $request->input('mail');
        $registros->save();

        return redirect()->back();

    }

    /**
     * Remove the registry.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registros =  Registro::find($id);
        $registros->delete();
        return redirect()->back();
    }
}
