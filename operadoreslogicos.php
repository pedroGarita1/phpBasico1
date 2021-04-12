<?php 
	//los operadores logicos sirven para validar expresiones
	//tal es el caso del operador or que sirve para validar
	//un sentencia u otra 
	//en el caso del operador and que sirve para validar ambas
	//sentencias

	$resultado=50;

		if($resultado< 51 and $resultado > 49){
			//"es un numero 50 valido";
		}
	$edadvalida=25;

		if($edadvalida > 18 and $edadvalida < 26){
			//echo "la edad es valida";
		}
	$sexo="M";

		if($sexo=='M' or $sexo=='F'){
			//echo "sexo valido";
		}
		

		//el operador de diferente y la negacion
		//operador diferente, sirve para validar que un dato
		//no corresponda a la cantidad o caracter
		$dato=10;

		if($dato != 10){
			//echo "es un dato bueno";
		}

		//la negacion sirve para hacer una validacion 
		//de algo que no ocurre :D
		$dato2=false;

		if(!$dato2){
			echo "no es verdadero";
		}
 ?>