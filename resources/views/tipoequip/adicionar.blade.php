

@extends('layouts.app')
@section('content')
<div class="container">
	<h3> Cadastrar Tipo de Equipamento</h3>
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
		
	<form action="{{route('tipo-equipamentos.store')}}" method="POST" class="">
		<div class="form-group">
			@csrf
			<label> Nome </label>
			<input type="" name="nome" required="" class="form-control">
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