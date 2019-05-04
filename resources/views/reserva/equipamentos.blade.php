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
	<div class="container">
		<form action="{{route('reserva.store')}}" method="post" class="">
			<div class="form-group">
				@csrf
			<label> Data de Inicio</label>
			<input type="date" name="data_inicio" class="form-control" value="{{$dataHoje}}" min="{{$dataHoje}}"><br>
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
		<a href="{{route('home')}}"><button class="btn btn-primary"> Voltar </button></a>
</div>

<style type="text/css">
	form {
		margin: 25px;
	}
</style>

@endsection