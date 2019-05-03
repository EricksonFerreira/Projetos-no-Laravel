@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href=""><button>Reservar Equipamento</button></a>
            <a href="{{route('equipamento.create')}}"><button>Cadastrar Equipamento</button></a>
        </div>
    </div>
</div>
@endsection
