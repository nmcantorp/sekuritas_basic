<?php 
session_start();
/**
* Clase para la funcionalidad del logueo de los usuarios 
*/
include_once('conexion.php');

class ClassEnfermedad extends ClassConexion
{	
	public $resultado = array();
	
	function __construct()
	{
		# code...
	}
	
	function findEnfermedad($nombre)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					*
					FROM enfermedad
					WHERE
					enfermedad.nom_enf = '$nombre'
					";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$this->resultado[$conteo]['id_enf']=$resultados['id_enf'];
		  	$this->resultado[$conteo]['nom_enf']=$resultados['nom_enf'];
		  	$this->resultado[$conteo]['parent_enf']=$resultados['parent_enf'];
		  	
		  	$conteo++;
		 }
		   return $this->resultado;
		}

	}	

}
?>