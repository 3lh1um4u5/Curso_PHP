<?php 

	$var="pedro jimenez lopez";
	$fecha="18-10-2020";
	//explode es una funcion que convierte un string a un arreglo dependiendo de la construccion pedida

	$datos=explode(" ",$var);
	/*echo "<pre>";
	 print_r ($datos);
	 echo "</pre>";*/
	 $f=explode("-",$fecha);
	 echo "el mes de la fecha es:".$f[1];
	

 ?>