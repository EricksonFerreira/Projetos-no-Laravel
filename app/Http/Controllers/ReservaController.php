<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipamentos = DB::table('equipamentos')->select('id','nome_equipamento')->get();
        return view('reserva.equipamentos', compact('equipamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inicio = $request->data_inicio; 
        $fim = $request->data_fim;
        $id= $request->id_equipamento;


        $reservas = DB::table('reserva')->where('data_inicio','=<',$inicio)->orWhere('data_fim','>=',$fim)->value('data_inicio','data_fim');
         
         $results = DB::table('reserva')->whereBetween('data_inicio', [$inicio, $fim])->whereDate('data_inicio', $inicio)->count('data_inicio');

        $results2 = DB::table('reserva')->whereBetween('data_fim', [$inicio, $fim])->count('data_fim');
        $result = $results;
          $result1 = $results2;

          
           if ($results != null ) {
                 $results = 'houve conflito na sua data de reserva veja as reserva e tente novamente';
               return  redirect()->route('reserva.create')->with('results',$results);  
           }else if ($results2 != null || $reservas != null){
              $results2 = 'data de termino'.$results2;
               return redirect()->route('reserva.create')->with('results',$results2);   
           }else if ($reservas != null) {
                return redirect()->route('reserva.create')->with('results',$reservas); 
           }
            


            
        $dados = $request->validate([

            'data_inicio' => 'required|date:Y-m-d H:i|after:yesterday',
            'data_fim' => 'required|date:Y-m-d H:i|after:data_inicio',
            'id_equipamento'=>'required',
        
        ],[
            `data_inicio.required` => `falha no cadastro a data de inicio conflita com outro reserva`
        ]);

        $id_usuario = Auth::user()->id;

        $reserva = DB::table('reserva')->insert([

            'data_inicio' => $dados['data_inicio'],
            'data_fim' => $dados['data_fim'],
            'id_equipamento' => $dados['id_equipamento'],
            'id_usuario' => $id_usuario

        ]);

    
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
