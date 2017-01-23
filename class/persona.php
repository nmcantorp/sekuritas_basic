<?php 
session_start();
/**
* Clase para la funcionalidad del logueo de los usuarios 
*/
include_once('conexion.php');

class ClassPersona extends ClassConexion
{	
	public $resultado = array();
	
	function __construct()
	{
		# code...
	}
	
	function findPersona($id)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					*
					FROM persona
					WHERE
					persona.doc_per = '$id'
					";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$this->resultado[$conteo]['id_per']=$resultados['id_per'];
		  	$this->resultado[$conteo]['doc_per']=$resultados['doc_per'];
		  	$this->resultado[$conteo]['prim_nom_per']=$resultados['prim_nom_per'];
		  	$this->resultado[$conteo]['seg_nom_per']=$resultados['seg_nom_per'];
		  	$this->resultado[$conteo]['prim_ape_per']=$resultados['prim_ape_per'];
		  	$this->resultado[$conteo]['seg_ape_per']=$resultados['seg_ape_per'];
		  	$this->resultado[$conteo]['dia_nac_per']=$resultados['dia_nac_per'];
		  	$this->resultado[$conteo]['mes_nac_per']=$resultados['mes_nac_per'];
		  	$this->resultado[$conteo]['anio_nac_per']=$resultados['anio_nac_per'];
		  	$this->resultado[$conteo]['dir_per']=$resultados['dir_per'];
		  	$this->resultado[$conteo]['email_per']=$resultados['email_per'];
		  	$this->resultado[$conteo]['gen_per']=$resultados['gen_per'];
		  	$this->resultado[$conteo]['est_per']=$resultados['est_per'];
		  	$this->resultado[$conteo]['pes_per']=$resultados['pes_per'];
		  	$this->resultado[$conteo]['fech_creacion']=$resultados['fech_creacion'];
		  	$this->resultado[$conteo]['fech_modificacion']=$resultados['fech_modificacion'];
		  	$this->resultado[$conteo]['id_ciu_nac']=$resultados['id_ciu_nac'];
		  	$this->resultado[$conteo]['id_tip_doc']=$resultados['id_tip_doc'];
		  	$conteo++;
		 }
		   return $this->resultado;
		}

	}	

}
?>