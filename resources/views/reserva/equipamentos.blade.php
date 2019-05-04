@extends('layouts.app')
@section('content')
<div>
	<h3> Reservar Equipamentos </h3>
</div>
<br>
<div>
	<form action="{{route('reserva.store')}}" method="post" class="">
		<div class="form-group">
			@csrf
		<label> Data de Inicio</label>
		<input type="date" name="data_inicio" class="form-control"><br>
		<label> Data fim </label>
		<input type="date" name="data_fim" class="form-control"><br>
		<label> Equipamentos Disponiveis</label>
		<select class="form-control" name="id_equipamento">
			<option value = "" disabled selected>Selecione o Equipamento</option>
			@foreach($equipamentos as $equipamento)
				<option value="{{$equipamento->id}}">{{$equipamento -> nome_equipamento}}</option>
			@endforeach
		</select>
		<br>
		<a href=""><button class="btn btn-success"> Cadastrar </button></a>
	</form>
</div>

<style type="text/css">
	form {
		margin: 25px;
	}
</style>

@endsection