<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>variables en php</title>
</head>
<body>
	<h1>Variables en php</h1>
<?php  
	function suma($a,$b)
	{
		global $real; //maneira de ver una var global dende unha función.
		$suma=$a+$b;
		echo "<p>o resultado de $a+$b = $suma<p>";		
		$a++; $b++; //so para comprobar que non afecta a var de ámbito global co mesmo nome
		echo "<p>valor das var. locais: \$a:$a, valor de \$b:$b</p>";
		echo "<p>erro intentando ver unha var global dende a función \$enteiro: $enteiro<p>";
		echo "<p>vendo unha var global dende a función, coa declaración 'global' \$real: $real</p>";
		return $suma;
	}
	function suma2(&$aa,&$bb) //parámetros pasados por referencia, non por valor
	{
		$suma=$aa+$bb;
		$aa++; $bb++; //so para comprobar que sí afecta as variables de ámbito global que se pasaron por referencia
		return $suma;
	}

	$enteiro=1;
	$real=2.5;
	$cadea="texto";
	$array1[0]="el. 1";
	$array1[]="el. 2";//terá índice 1

	$array2 = array("el. 1","el. 2");

	$array3["a"]="el. 1";
	$array3["b"]="el. 2";

	$array4 = array(
		'a' => "el. 1" , 
		'b' => "el. 2 "
	);

	echo "\n\t<p>valor de \$enteiro: $enteiro </p>";
	echo "\n\t<p>valor de \$real: $real </p>";
	echo "\n\t<p>valor de \$cadea: $cadea </p>";

	var_dump("\$array1:" , $array1);//é para volcar unha estructura, pero non tes o control

	echo "\n<p>Contido de \$array1:";
	foreach ($array1 as $key => $value) {
		echo "\t\n<br>$key -> $value";
	}
	echo "\n</p>";

	echo "\n<p>Contido de \$array2:";
	foreach ($array2 as $key => $value) {
		echo "\t\n<br>$key -> $value";
	}
	echo "\n</p>";

	echo "\n<p>Contido de \$array3:";
	foreach ($array3 as $key => $value) {
		echo "\t\n<br>$key -> $value";
	}
	echo "\n</p>";

	echo "\n<p>Contido de \$array4:";
	foreach ($array4 as $key => $value) {
		echo "\t\n<br>$key -> $value";
	}
	echo "\n</p>";

	$a=1;
	$b=2;

	$resultado=suma($a,$b);

	echo "<p>o resultado de $a+$b = $suma<p>"; //da erro de var $suma indefinida
	
	echo "<p>o resultado de $a+$b = $resultado<p>";
    echo "<p>valor das var. globais: \$a:$a, valor de \$b:$b</p>";
    echo "<p>chamo a suma2, que cambia as variables globais porque se pasan por referencia</p>";
	$resultado=suma2($a,$b);// suma2 recibe por referencia
    echo "<p>valor das var. globais: \$a:$a, valor de \$b:$b</p>";



?>

	
</body>
</html>