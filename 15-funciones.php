<?php 
	//funcion normal de php
	function mifuncion(){
	//mostrar un nombre
	return 'este es un nombre';
}
	function mifuncion2($valorA,$valorB,$opcion){
		switch ($opcion) {
			case 'suma':
				return $valorA + $valorB;
				break;

			case 'resta':
				return $valorA - $valorB;
				break;

			case 'multiplicacion':
				return $valorA * $valorB;
				break;

			case 'division':
				return $valorA / $valorB;
				break;	
			default:
				# code...
				break;
		}

	}
	echo mifuncion2(5,10 'suma');
 ?>