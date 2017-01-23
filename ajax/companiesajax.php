<?php 

require_once('../class/companies.php');
$objCompanies = new ClassCompanies();
if($_REQUEST['ac']=="allcompanies"){
  $arrayEmpresa = [];
  $html = '<option value="">-- Seleccione Empresa --</option>';
  $companies = $objCompanies->getAllCompanies($_REQUEST['nit']);
  for ($i=0; $i < count($companies); $i++) { 
      $arrayEmpresa[$companies[$i]['nit_emp']] = $companies[$i]['nom_emp'];
      $html .= "<option value=".$companies[$i]['id_emp'].">".$companies[$i]['nit_emp']."</option>";
  }
  echo $html;
}

if($_REQUEST['ac']=="find"){
  $arrayEmpresa = [];
  $companies = $objCompanies->getCompaniesById($_REQUEST['id']);
  for ($i=0; $i < count($companies); $i++) { 
      
      $html = $companies[$i]['nom_emp'];
  }
  echo $html;
}

?>