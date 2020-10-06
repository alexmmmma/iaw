<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recibe datos de 02-formularios.html</title>
</head>
<body>
	<h1>Datos enviados dende 02-formularios.html</h1>

	<?php 

		$nome = $_GET["nome"] ?? ""; 
		//equivale a: if ($_GET["nome"]) $nome=$_GET["nome"]; else $nome="";
		//e tamén a: $nome = isset($_GET["nome"]) ? $_GET["nome"] : "";
		$sexo = $_GET["sexo"] ?? "";
		$referencia = $_GET["referencia"] ?? "";
		$condicions = $_GET["condicions"] ?? "";
		$dep = $_GET["dep"] ?? array();

		



		echo "\n<p>Nome: $nome</p>";
		echo "\n<p>Sexo: $sexo</p>";
		echo "\n<p>Referencia: $referencia</p>";
		echo "\n<p>Condicións: $condicions</p>";
		echo "\n<p>Deportes:";
		//var_dump($dep);//mostrar array en crudo con todo tipo de detalles
		//print_r($dep); //mostrar array en crudo con menos información
			echo "\n\t<ul>";
			foreach ($dep as $valor) {
						echo "\n\t\t<li>$valor</li>";
					}	
			echo "\n\t</ul>";			
		echo "\n</p>";

	?>
	<a href="02-formularios.html">[Volver]</a>

</body>
</html>