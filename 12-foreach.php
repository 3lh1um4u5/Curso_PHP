<?php 
//es un tipo de dato que puede almacenar n datos pero en vez de guardar por indice, se le proporciona una llave o nombre a dicho dato
	$arregloCol=array(
		"coche"="verde",
		"moto"="rojo",
		"avion"="gris",

	);
	// es una estructura de control iterativa que usa llaves o asociaciones de datos con indice
	foreach ($arregloCol as $key ) {
		echo $key;
		echo "<br>"
	}

 ?>