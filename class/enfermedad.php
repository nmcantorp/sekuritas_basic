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

	function findNovedadByForm($idForm)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					enfermedad.id_enf,
					enfermedad.nom_enf
					FROM
					enfermedad
					INNER JOIN enfermedad_x_persona ON enfermedad_x_persona.id_enf = enfermedad.id_enf
					WHERE
					enfermedad_x_persona.id_form = '$idForm'
					";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){
		  	$this->resultado[$conteo]['id_enf']=$resultados['id_enf'];
		  	$this->resultado[$conteo]['nom_enf']=utf8_encode($resultados['nom_enf']);
		  	$conteo++;
		 }
		   return $this->resultado;
		}
	}

	function findTratamientoByForm($idForm)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					tratamiento_enfermedad.enfermedad,
					tratamiento_enfermedad.anio_diag,
					tratamiento_enfermedad.tratamiento
					FROM
					tratamiento_enfermedad
					WHERE
					tratamiento_enfermedad.id_form = '$idForm'
					";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){
		  	$resultado[$conteo]['enfermedad']=$resultados['enfermedad'];
		  	$resultado[$conteo]['anio_diag']=$resultados['anio_diag'];
		  	$resultado[$conteo]['tratamiento']=$resultados['tratamiento'];
		  	$conteo++;
		 }
		   return $resultado;
		}
	}

}
?>