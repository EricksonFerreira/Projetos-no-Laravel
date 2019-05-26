	@extends('layouts.app')
@section('content')
<div class="container">
	<h3> Reservar Equipamentos </h3>
</div>
<br>
@php
	$data2 = date('Y-m-d');
	$dataHoje = $data2++;
@endphp
<div>
	<div>
		@if (session()->has('message'))
			<div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>	    	
		@endif
	</div>

	<form action="{{route('reserva.store')}}" method="post" class="">
		<div class="form-group">
			@csrf
		<label> Data de Inicio</label>
		<input id="party" class="form-control" type="datetime-local"  name="data_inicio" value="2019-05-26T08:30">
		<br>
		<label> Data fim </label><br>
		<input id="party" class="form-control" type="datetime-local" name="data_fim" class="form-control"  value="2019-05-26T08:30">
		<br>
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
		<a href="{{route('home')}}"><button class="btn btn-primary"> Voltar </button></a>
			@if (session('results'))
    <div class="alert alert-warning">
    	verifique a data de inicio ou de termino da sua reserva porque pode estar em conflito com outra reserva {{session('results')}}
 	      </div>
		@endif

<style type="text/css">
	form {
		margin: 25px;
	}
</style>

@endsection