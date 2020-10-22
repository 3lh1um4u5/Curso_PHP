<?php 
	//un arreglo es un tipo de dato que puede contener n datos a partir de un almacenamiento
	$arreglo=array();
	$arreglo[0]="juan";
	$arreglo[1]=10;
	$arreglo[2]="facultad";
	$arreglo[3]="autodidacta";

	
	for ($i=0; $i < count($arreglo) ; $i++) { 
		echo $arreglo [$i];
		echo "<>br";
		if ($arreglo[$i]=="autodidacta"){ 
			echo "felicidades aqui esta el dato";
			echo "<br>";
		}
	}

 ?>