<?php

namespace App\Http\Controllers;

use App\Equipamento;
use App\Tipo_Equipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EquipamentoController extends Controller
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
        $tipos = DB::table('tipo_equipamento')->get();
        return view('equipamento.create', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dados = $request->validate([

            'nome_equipamento' => 'required|unique:equipamentos|max:255',
            'tombamento' => 'required|unique:equipamentos',
            'tipo_equipamento_id'=>'required'
        ]);

        $table = DB::table('equipamentos')->insert([

            'nome_equipamento' => $dados['nome_equipamento'],
            'tombamento' => $dados['tombamento'],
            'tipo_equipamento_id' => $dados['tipo_equipamento_id']

        ]);

        return redirect()->route('equipamento.create')->with('message', 'Sucesso ao cadastrar Equipamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        //
    }
}
