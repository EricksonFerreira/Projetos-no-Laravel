<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reservas = DB::table('reserva')
            ->join('users', 'reserva.id_usuario', '=', 'users.id')
            ->join('equipamentos', 'reserva.id_equipamento', '=', 'equipamentos.id')
            ->join('tipo_equipamento', 'equipamentos.tipo_equipamento_id','=','tipo_equipamento.id')
            ->select('equipamentos.nome_equipamento', 'tipo_equipamento.nome', 'users.name', 'reserva.data_inicio','reserva.data_fim')
            ->get();

        return view('home', compact('reservas'));
    }
}
