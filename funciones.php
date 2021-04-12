

<?php 
	//funcion normal de php
	function mifuncion(){
		//mostrar un nombre
		$r=array(1);
		return $r;
	}

	//funciones escalares

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

	echo mifuncion2(5,10,'multiplicacion');

 ?>