@extends('layouts.app')
@section('content')
<div>
	<h3> Cadastrar Equipamento</h3>
</div>
<br>
<div>
	<form action="{{route('equipamento.store')}}" method="post" class="">
		<div class="form-group">
			@csrf
			<label> Nome </label>
			<input type="" name="name" required="" class="form-control">
			<label> Tombamento </label>
			<input type="" name="tombamento" required="" class="form-control">
			<label> Tipo </label>
			<select class="form-control">
				<option value = "" disabled selected>Selecione o tipo</option>
				
				@foreach($tipos as $tipo)
					<option value="{{$tipo -> id}}"> {{$tipo -> nome}}</option>
				@endforeach

			</select>
			<br>
			<a href=""><button class="btn btn-success"> Cadastrar </button></a>
		</div>
	</form>
</div>

<style type="text/css">
	form {
		margin: 25px;
	}
</style>

@endsection