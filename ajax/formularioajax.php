<?php 

require_once('../class/formulario.php');
$objFormulario = new ClassFormulario();
if($_REQUEST['ac']=="saveFormulario"){
	$resultado = $objFormulario->saveForm($_REQUEST);
	
	echo $resultado;
}

?>