<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">	
  </head>
  <body>
  <h1>Adicionar Equipamento</h1>
    <div class="container">
      <form  method="POST">
        nome do equipamento:
        <input type="text" name="name">
        tipo:
        <select name="funcao" id="">
          @foreach ($tipo as $tpEquip)
            <option value="{{$tpEquip->id}}">{{$tpEquip->nome}}</option> 
          @endforeach 
        </select>
        <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
    </div>
  </body>
</html>