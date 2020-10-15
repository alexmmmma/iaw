<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operadores PHP</title>
	<style>
		.azul {color: blue}
		.verde {color:green}
	</style>
</head>
<body>
	<h1>Operadores en PHP</h1>
	<h2>+ - * /</h2>
	<h2>% operador módulo:</h2>
<?php 
	echo "5 % 2 = ". 5%2; //devolve resto da división enteira
?>	
	<h2>Outros operadores: += -= ...</h2>

<?php 
	$a=100;
	echo "<p>\$a:$a</p>";
	$a=$a+5;
	echo "<p>\$a:$a</p>";
	$a+=5; //equivale a liña anterior
	echo "<p>\$a:$a</p>";
?>

	<h2>Operadores ==, !=, <, >, <= y >=</h2>
	<h2>Operador ternario</h2>

<?php 
	$clase="azul";
	echo "\n<ul>";
	for ($i=1; $i <=5 ; $i++) { 
		echo "\n\t<li class='$clase'>elemento $i</li>";
		$clase = $clase=="azul" ? "verde" : "azul";
		//equivale a:
		//if ($clase=="azul") $clase="verde"; else $clase="azul";
		
		
	}
	echo "\n</ul>";
 ?>	
 	<h2>Operadores ++ e --</h2>
<?php 
	$a=100;
	echo "<p>\$a:$a</p>";
	$c= 10 + $a++;
	echo "<p>Despois de: '\$c = 10 + \$a++;'  --> \$a:$a, \$c:$c</p>";

	$a=100;
	echo "<p>\$a:$a</p>";
	$c= 10 + ++$a;
	echo "<p>Despois de: '\$c = 10 + ++\$a;'  --> \$a:$a, \$c:$c</p>";


 ?> 
 	<h2>Operadores lóxicos and &&, or ||, NOT !</h2>	

<?php 
	echo "<p>asdfasdf</p>";
	$a=5;
	$b=7;
	$c=5;
	echo "<p>\$a=$a,\$b=$b,\$c=$c </p>";

	echo "<p>\$a<\$b && \$a<\$c -->";
	echo  $a<$b && $a<$c ? "V":"F";
	echo "</p>";

	echo "<p>\$a<\$b && \$a<=\$c -->";
	echo  $a<$b && $a<=$c ? "V":"F";
	echo "</p>";

	echo "<p>\$a<\$b || \$a<\$c -->";
	echo  $a<$b || $a<$c ? "V":"F";
	echo "</p>";

	echo "<p>\$a<\$b || \$a<=\$c -->";
	echo  $a<$b || $a<=$c ? "V":"F";
	echo "</p>";

	echo "<p>\$a<4 || \$a<\$c -->";
	echo  $a<4 || $a<$c ? "V":"F";
	echo "</p>";


	echo "<p>!(\$a<4 || \$a<\$c) -->";
	echo  !($a<4 || $a<$c) ? "V":"F";
	echo "</p>";

 ?>
 	<h2>Operador de cadeas . , para unir</h2>

</body>
</html>