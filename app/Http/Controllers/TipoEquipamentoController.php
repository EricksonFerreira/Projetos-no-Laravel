<?php

namespace App\Http\Controllers;

use App\Tipo_Equipamento;
use Illuminate\Http\Request;

class TipoEquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoEquip = Tipo_Equipamento::all();
        return view ('/tipoequip.index', compact('tipoEquip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipo = Tipo_Equipamento::all();
    
        return view ('/tipoequip.adicionar' , compact('tipo')); 
     }


    public function store(Request $request)
    {
       $dados = $request->all();    
        Tipo_Equipamento::create([
            'nome' => request('nome')
        ]);

           return redirect()-> route('home'); 
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo_Equipamento  $tipo_Equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Equipamento $tipo_Equipamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_Equipamento  $tipo_Equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Equipamento $tipo_Equipamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_Equipamento  $tipo_Equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Equipamento $tipo_Equipamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_Equipamento  $tipo_Equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Equipamento $tipo_Equipamento)
    {
        //
    }

}

