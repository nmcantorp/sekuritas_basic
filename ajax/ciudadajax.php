<?php 

require_once('../class/ciudad.php');
$objCiudad = new ClassCiudad();
if($_REQUEST['ac']=="allCiudades"){
  $arrayEmpresa = [];
  $html = '<option value="">-- Ciudad --</option>';
  $ciudades = $objCiudad->getAllCountries();
  for ($i=0; $i < count($ciudades); $i++) { 
      $arrayEmpresa[$ciudades[$i]['id_ciu']] = $ciudades[$i]['nom_ciu'];
      $html .= "<option value=".$ciudades[$i]['id_ciu'].">".$ciudades[$i]['nom_ciu']."</option>";
  }
  echo $html;
}

?>