<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class TabelaPrincipalController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all()->where('cliente_level', 1);
        return json_encode($clientes);
    }

    public function view_index()
    {
        return view('tabela_principal');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Clientes::find($id);
        return json_encode($clientes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Clientes::find($id);
        if (isset($cliente)){
            $cliente->nome = $request->input('nome');
            $cliente->tel = $request->input('tel');
            $cliente->vendedor = $request->input('vendedor');
            $cliente->cidade = $request->input('cidade');
            $cliente->compania = $request->input('compania');
            $cliente->last_call = $request->input('last_call');
            $cliente->save();
            return json_encode($cliente);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
