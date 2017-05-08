<?php 
session_start();
/**
* Clase para la funcionalidad del logueo de los usuarios 
*/
include_once('conexion.php');
include_once('enfermedad.php');
include_once('novedad.php');

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
		$objEnfermedad = new ClassEnfermedad();
		$objNovedad = new ClassNovedad();
		$db->MySQL();

		$query = "	SELECT
					persona.*,
					empresa.id_emp,
					empresa.nom_emp,
					formulario.id_form,
					formulario.ocupacion,
					formulario.solic_increm_form,
					deporte.desc_dep
					FROM
					persona
					INNER JOIN form_pers ON form_pers.id_per = persona.id_per
					INNER JOIN formulario ON form_pers.id_form = formulario.id_form
					INNER JOIN empresa ON formulario.id_emp = empresa.id_emp
					LEFT JOIN deporte ON deporte.id_form_pers = form_pers.id_form_pers
					WHERE
					persona.doc_per = '$id'
					";

		$consulta = $db->consulta($query);

		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$this->resultado[$conteo]['id_per']=$resultados['id_per'];
		  	$this->resultado[$conteo]['id_form']=$resultados['id_form'];
		  	$this->resultado[$conteo]['doc_per']=$resultados['doc_per'];
		  	$this->resultado[$conteo]['prim_nom_per']=$resultados['prim_nom_per'];
		  	$this->resultado[$conteo]['seg_nom_per']=$resultados['seg_nom_per'];
		  	$this->resultado[$conteo]['prim_ape_per']=$resultados['prim_ape_per'];
		  	$this->resultado[$conteo]['seg_ape_per']=$resultados['seg_ape_per'];
		  	$this->resultado[$conteo]['dia_nac_per']=$resultados['dia_nac_per'];
		  	$this->resultado[$conteo]['mes_nac_per']=$resultados['mes_nac_per'];
		  	$this->resultado[$conteo]['anio_nac_per']=$resultados['anio_nac_per'];
		  	$this->resultado[$conteo]['dir_per']=$resultados['dir_per'];
		  	$this->resultado[$conteo]['tel_per']=$resultados['tel_per'];
		  	$this->resultado[$conteo]['email_per']=$resultados['email_per'];
		  	$this->resultado[$conteo]['gen_per']=$resultados['gen_per'];
		  	$this->resultado[$conteo]['est_per']=$resultados['est_per'];
		  	$this->resultado[$conteo]['pes_per']=$resultados['pes_per'];
		  	$this->resultado[$conteo]['fech_creacion']=$resultados['fech_creacion'];
		  	$this->resultado[$conteo]['fech_modificacion']=$resultados['fech_modificacion'];
		  	$this->resultado[$conteo]['id_ciu_nac']=$resultados['id_ciu_nac'];
		  	$this->resultado[$conteo]['id_tip_doc']=$resultados['id_tip_doc'];
		  	$this->resultado[$conteo]['id_emp']=$resultados['id_emp'];
		  	$this->resultado[$conteo]['nom_emp']=$resultados['nom_emp'];
		  	$this->resultado[$conteo]['ocupacion']=$resultados['ocupacion'];
		  	$this->resultado[$conteo]['solic_increm_form']=$resultados['solic_increm_form'];
		  	$this->resultado[$conteo]['desc_dep']=$resultados['desc_dep'];
		  	$this->resultado[$conteo]['beneficiarios'] = $this->findBeneficiariesByForm($resultados['id_form'], 2);
		  	$this->resultado[$conteo]['beneficiariosExc'] = $this->findBeneficiariesByForm($resultados['id_form'], 3);
		  	$this->resultado[$conteo]['enfermedades'] = $objEnfermedad->findNovedadByForm($resultados['id_form']);
		  	$this->resultado[$conteo]['novedades'] = $objNovedad->findByIdForm($resultados['id_form']);
		  	$this->resultado[$conteo]['tratamiento'] = $objEnfermedad->findTratamientoByForm($resultados['id_form']);		  	
		  	$conteo++;
		 }
		   return $this->resultado;
		}

	}

	function findBeneficiariesByForm($idForm, $type=2)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					persona.id_per,
					persona.doc_per,
					persona.prim_nom_per,
					persona.seg_nom_per,
					persona.prim_ape_per,
					persona.seg_ape_per,
					form_pers.parentezco,
					form_pers.porcentaje,
					CONCAT(persona.anio_nac_per,'-',persona.mes_nac_per,'-',persona.dia_nac_per) as nacimiento
					FROM
					persona
					INNER JOIN form_pers ON form_pers.id_per = persona.id_per
					WHERE
					form_pers.id_tip_usua = '$type' AND
					form_pers.id_form = '$idForm'
					";

		$consulta = $db->consulta($query);
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$resultado[$conteo]['id_per']=$resultados['id_per'];
		  	$resultado[$conteo]['doc_per']=$resultados['doc_per'];
		  	$resultado[$conteo]['prim_nom_per']=$resultados['prim_nom_per'];
		  	$resultado[$conteo]['seg_nom_per']=$resultados['seg_nom_per'];
		  	$resultado[$conteo]['prim_ape_per']=$resultados['prim_ape_per'];
		  	$resultado[$conteo]['seg_ape_per']=$resultados['seg_ape_per'];
		  	$resultado[$conteo]['parentezco']=$resultados['parentezco'];
		  	$resultado[$conteo]['porcentaje']=$resultados['porcentaje'];
		  	$resultado[$conteo]['nacimiento']=$resultados['nacimiento'];
		  	
		  	$conteo++;
		 }
		   return $resultado;
		}
	}

}
?>