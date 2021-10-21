<!doctype html>  
<html>
	<head>
	<meta charset="utf-8">
		<title>Documento sin titulo</title>  
	</head>
	<body>
		<?php
		$nombre1="Juan";
		$edad=18;
		//print $nombre1;
		//print $edad;
		echo "el nombre es: ".$nombre1. " y tiene ".$edad." años de edad </br>";
		
		function dameDatos(){
			echo "Este mensaje esta dentro de la funcion </br>";
		}
		dameDatos();
	?>
	</body>
</html>