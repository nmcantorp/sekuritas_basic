<?php 
session_start();
/**
* Clase para la funcionalidad del logueo de los usuarios 
*/
include_once('conexion.php');

class ClassCiudad extends ClassConexion
{	
	public $resultado = array();
	
	function __construct()
	{
		# code...
	}
	
	function getAllCountries ()
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					ciudad.id_ciu,
					ciudad.nom_ciu
					FROM
					ciudad";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$this->resultado[$conteo]['id_ciu']=$resultados['id_ciu'];
		  	$this->resultado[$conteo]['nom_ciu']=$resultados['nom_ciu'];
		  	$conteo++;
		 }
		   return $this->resultado;
		}

	}

	function getCompaniesById($id)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					empresa.id_emp,
					empresa.nom_emp,
					empresa.nit_emp
					FROM
					empresa
					WHERE 
					empresa.id_emp = '$id'";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$this->resultado[$conteo]['id_emp']=$resultados['id_emp'];
		  	$this->resultado[$conteo]['nit_emp']=$resultados['nit_emp'];
		  	$this->resultado[$conteo]['nom_emp']=$resultados['nom_emp'];
		  	$conteo++;
		 }
		   return $this->resultado;
		}

	}

}
?>