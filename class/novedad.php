<?php 
session_start();
/**
* Clase para la funcionalidad del logueo de los usuarios 
*/
include_once('conexion.php');

class ClassNovedad extends ClassConexion
{	
	public $resultado = array();
	
	function __construct()
	{
		# code...
	}
	
	function findNovedad($nombre)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					*
					FROM novedad
					WHERE
					novedad.nom_nov = '$nombre'
					";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$this->resultado[$conteo]['id_nov']=$resultados['id_nov'];
		  	$this->resultado[$conteo]['nom_nov']=$resultados['nom_nov'];
		  	$this->resultado[$conteo]['desc_nov']=$resultados['desc_nov'];
		  	$this->resultado[$conteo]['fech_creacion']=$resultados['fech_creacion'];
		  	$this->resultado[$conteo]['fech_modificacion']=$resultados['fech_modificacion'];
		  	$conteo++;
		 }
		   return $this->resultado;
		}

	}	

	function findByIdForm($id)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					novedad.id_nov,
					novedad.nom_nov,
					novedad.desc_nov
					FROM
					novedad
					INNER JOIN novedad_x_formulario ON novedad_x_formulario.novedad_id_nov = novedad.id_nov
					WHERE
					novedad_x_formulario.formulario_id_form = '$id'
					";

			$consulta = $db->consulta($query);
			
			if($db->num_rows($consulta)>0){ $conteo=0;
			  while($resultados = $db->fetch_array($consulta)){ 
			  	$this->resultado[$conteo]['id_nov']=$resultados['id_nov'];
			  	$this->resultado[$conteo]['nom_nov']=$resultados['nom_nov'];
			  	$this->resultado[$conteo]['desc_nov']=$resultados['desc_nov'];
			  	$conteo++;
			 }
		   	return $this->resultado;
		}
	}

}
?>