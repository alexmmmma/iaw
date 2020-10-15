<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>estructuras programación PHP</title>
	<style>
		span {
			border-bottom:  1px solid blue;
			padding: 3px;
			margin: 3px;
		}
	</style>
</head>
<body>
	<h1>Estructuras programación PHP</h1>

	<?php 
	$a=99;
	if ($a>100) {
		echo "<p>  \$a > 100 : $a</p>";
	} else {
		echo "<p>  \$a <= 100 : $a</p>";
	}

	$b=120;
	if ($b>100) {
		echo "<p>  \$b > 100 : $b</p>";
	} else {
		echo "<p>  \$b <= 100 : $b</p>";
	}

	$c=8;
	echo "<p>\$c=$c</p>";

	if ($c<0)
		echo "<p>\$c es menor que 0</p>";
	elseif ($c<4)
		echo "<p>\$c está entre 0 y 4</p>";
	elseif ($c<10)
		echo "<p>\$c está entre 4 y 10</p>";
	else
		echo "<p>\$c es mayor que 10</p>";

	$opcion=2;
	switch ($opcion) {
		case 1:
			echo "<p>Opción un</p>";
			break;
		case 2:
			echo "<p>Opción dous</p>";
			//break;
		case 3:
			echo "<p>Opción tres</p>";
			//break;
		case 4:
			echo "<p>Opción catro</p>";
			//break;
		default:
			echo "<p>Outros</p>";
			break;
	}

	$i=1;
	echo "<p>";
	while ($i <= 10) {
		echo "<span >$i</span> ";
		$i++;
	}
	echo "</p>";

	echo "<p>";
	for ($i=1; $i <=10 ; $i++) { 
		echo "<span >$i</span> ";
	}
	echo "</p>";

	$valores = array(10,20,30,40,50);

	echo "<p>";
	for ($i=0; $i < count($valores) ; $i++) { 
		echo "$i:$valores[$i] - ";
	}
	echo "</p>";

	echo "<p>";
	foreach ($valores as $key => $value) {
		if($key==3) continue; //break aborta estructura
		echo "$key:$value - ";
	}
	
	echo "</p>";

	?>
	
	<h2>Incluir ficheiros : include e require</h2>

	<?php 
		//include("01-php-variables.php");
	 ?>
</body>
</html>