<?php 

require_once('../class/formulario.php');
require_once('../class/persona.php');
$objFormulario = new ClassFormulario();
$objPersona = new ClassPersona();
if($_REQUEST['ac']=="saveFormulario"){
	$resultado = $objFormulario->saveForm($_REQUEST);
	
	echo $resultado;
}

if($_REQUEST['ac']=="findUser")
{
	$userId = $_REQUEST['uid'];
	$userInfo = $objPersona->findPersona($userId);
	echo json_encode($userInfo);
	exit;
}

?>