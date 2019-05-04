<!DOCTYPE html>
<html>
<head>
	<title>Tipos equipamentos</title>
</head>
<body>
<center>
<table>
    <thead>
        <tr>
        	<th>
        		Nome do tipo
        	</th>
        </tr>
        <tbody>
        
	@foreach ($tipoEquip as $equip)
			<tr>
		<td>{{$equip['nome']}}</td>
		</tr> 
	@endforeach

 			</thead>
 	 		 
</table>

</center>

 <a href="{{route('tipo-equipamentos.create')}}" class="myButton">Adicione um tipo de equipamento</a>
</body>



<style type="text/css">
.myButton {
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}

table{
	margin-top:  18em;
	width: 40em;
	height: 40em;
}
	body {
  font: 75%/1.6 "Myriad Pro", Frutiger, "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", Verdana, sans-serif;
}
table {
  border-collapse: collapse;
  width: 50em;
  border: 1px solid #666;
}
thead {
  background: #ccc url(https://www.devfuria.com.br/html-css/tabelas/bar.gif) repeat-x left center;
  border-top: 1px solid #a5a5a5;
  border-bottom: 1px solid #a5a5a5;
}
tr:hover {
  background-color:#3d80df;
  color: #fff;
}
thead tr:hover {
  background-color: transparent;
  color: inherit;
}
th {
  font-weight: normal;
  text-align: left;
}
th, td {
	font-size: 25px;
  padding: 0.1em 1em;
}
</style>
</html>