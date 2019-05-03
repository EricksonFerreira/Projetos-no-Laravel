<!DOCTYPE html>
<html>
		<head>
			<title>Tipo equipamentos</title>
		</head>
		<body>

		<center>
			<form action="{{route('tipo-equipamentos.store')}}" method="POST">
					<h2>Adicione um nome</h2>
					
					{{ csrf_field() }}
				<input type="text" name="nome">
				<input type="submit" name="enviar">
			</form>
		</center>

			<style type="text/css">
								
					input[type=text], select, textarea {
						 width: 50%; /* Full width */
						 padding: 12px; /* Some padding */  
						 border: 1px solid #ccc; /* Gray border */
						 border-radius: 4px; /* Rounded borders */
						 box-sizing: border-box; /* Make sure that padding and width stays in place */
						 margin-top: 6px; /* Add a top margin */
						 margin-bottom: 16px; /* Bottom margin */
						 resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
						}
				input[type=submit] {
					  background-color: #4CAF50;
					  color: white;
					  padding: 12px 20px;
					  border: none;
					  border-radius: 4px;
					  cursor: pointer;
			}
			input[type=submit]:hover {
			 		 background-color: #45a049;
			}
		</style>
</html>