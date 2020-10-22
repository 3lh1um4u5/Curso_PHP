<?php 

	//los operadores logicos sirven para validar expresiones, tal es el caso del operador or que sirve para validar una sentencia u otra y en el caso del operador and que sirve para validar ambas sentencias
	$resulta=50;
	if($resultado < 51 and $resultado > 49){
		//echo "es un numero valido";
	}
	$edadvalida=25;
	if($edadvalida>18 and $edadvalida < 26){
		//echo "la edad es valida";
	}
	$sexo="f";
		if($sexo=='m' or $sexo=='f'){
			echo "sexo valido";
		}
		//operador de diferente y la negacion
		$dato=5;
		if($dato != 10){
			//echo "es un dato bueno";
		}
		//la negacion sirve para hacer una validacion de algo que no sirve :D
		$dato2=false;
		if(!$dato2){
			echo "no es verdadero";
		}
 ?>