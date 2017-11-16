<?php 
	
	require ("src/valida.php");

	$rut = $_GET['rut'];


	if (valida_rut($rut)== false){
		echo 'el rut no es correcto';
	}elseif (valida_rut($rut)== true) {
		echo 'Verificado RUT corresponde';
	}

?>
