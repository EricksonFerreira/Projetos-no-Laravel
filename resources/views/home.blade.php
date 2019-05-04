@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8" align="left">
        <a href="{{route('reserva.create')}}"><button class="btn btn-primary">Reservar Equipamento</button></a>
        <a href="{{route('equipamento.create')}}"><button class="btn btn-primary">Cadastrar Equipamento</button></a>
    </div>
    <div class="row justify-content-center">
    </div>
    <br>
    <h3> Lista de Reservas </h3>
    <div>
    	<table class="table">
    		<thead>
    			<tr>
    				<th scope="col"> Nome do Equipamento</th>
    				<th scope="col"> Tipo do Equipamento</th>
    				<th scope="col"> Nome do Usuário</th>
                    <th scope="col"> Data de Inicio</th>
                    <th scope="col"> Data de Fim</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($reservas as $reserva)
    				<tr align="">
                        <td>{{$reserva -> nome_equipamento}}</td>
                        <td>{{$reserva -> nome}}</td>
                        <td>{{$reserva -> name}}</td>
                        <td>{{date('d-m-Y', strtotime($reserva -> data_inicio))}}</td>
                        <td>{{date('d-m-Y', strtotime($reserva -> data_fim))}}</td>
    				</tr>
    			@endforeach
    		</tbody>
    		<tfoot>
    			<tr>
    				<th scope="col"> Nome do Equipamento</th>
    				<th scope="col"> Tipo do Equipamento</th>
    				<th scope="col"> Nome do Usuário</th>
                    <th scope="col"> Data de Inicio</th>
                    <th scope="col"> Data de Fim</th>
    			</tr>
    		</tfoot>	
    	</table>
    </div>
</div>
@endsection
