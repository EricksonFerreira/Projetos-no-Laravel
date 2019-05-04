@extends('layouts.app')
@section('content')
<div class="container">
	<h3> Cadastrar Equipamento</h3>
</div>
<br>
<div>
	<div>
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
		
	<form action="{{route('equipamento.store')}}" method="post" class="">
		<div class="form-group">
			@csrf
			<label> Nome </label>
			<input type="" name="nome_equipamento" required="" class="form-control">
			<label> Tombamento </label>
			<input type="" name="tombamento" required="" class="form-control">
			<label> Tipo </label>
			<select class="form-control" name="tipo_equipamento_id">
				<option value = "" disabled selected>Selecione o tipo</option>
				
				@foreach($tipos as $tipo)
					<option value="{{$tipo -> id}}"> {{$tipo -> nome}}</option>
				@endforeach

			</select>
			<br>
			<a href=""><button class="btn btn-success"> Cadastrar </button></a>
		</div>
	</form>
	<a href="{{route('home')}}"><button class="btn btn-primary"> Voltar </button></a>
	</div>
</div>

<style type="text/css">
	form {
		margin: 25px;
	}
</style>

@endsection