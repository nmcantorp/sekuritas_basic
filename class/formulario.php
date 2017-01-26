<?php 
session_start();
/**
* Clase para la funcionalidad del logueo de los usuarios 
*/
include_once('conexion.php');
include_once('persona.php');
include_once('novedad.php');
include_once('enfermedad.php');

class ClassFormulario extends ClassConexion
{	
	public $resultado = array();
	
	function __construct()
	{
		# code...
	}

	function saveForm($formulario)
	{
		$db = new ClassConexion();
		$objPersona = new ClassPersona();
		$objNovedad = new ClassNovedad();
		$objEnfermedad = new ClassEnfermedad();
		$db->MySQL();

		$arrayNov = [	'ingreso'=>'Ingreso',
						'aseg_princ'=>'Asegurado principal',
						'incremento'=>'Incremento de valor asegurado',
						'familiar_aseg'=>'Familiar asegurado principal'	
					];
		$arrayEnf = [	'mental_psiqui'=>'Mentales - psiquiatricas',
						'grastroint'=>'Gastrointestinales',
						'drogadiccion'=>'Drogadiccion',
						'tabaquismo'=>'Tabaquismo',
						'alcoholismo'=>'Alcoholismo',
						'cardiovascu'=>'Cardiovasculares',
						'cerebrovascu'=>'Cerebrovasculares',
						'hipertension'=>'Hipertension Arterial',
						'cincomenoscigarrillo'=>'5 o menos Cig',
						'cincomenosalc'=>'5 o menos Alc',
						'pulmonares'=>'Pulmonares',
						'artritis'=>'Artritis',
						'cancer'=>'Cancer',
						'veinteunomascig'=>'21 o mas Cig',
						'veinteunomasalc'=>'21 o mas Alc',
						'renales'=>'Renales',
						'sida'=>'Sida',
						'diabetes'=>'Diabetes',
						'seisveintecig'=>'6 a 20 Cig',
						'seisveintealc'=>'6 a 20 Alc',
					];

		$query = "	INSERT INTO formulario (solic_increm_form, pol_form, id_emp, fech_creacion, fech_modificacion, ocupacion)
					VALUES ('".$formulario['incremento_solic']."', 1, ".$formulario['nit'].", NOW(), NOW(), '".$formulario['ocupacion']."')";

		$consulta = $db->consulta($query);
		$id_formulario = $db->insert_id();

		$persona = $objPersona->findPersona($formulario['doc_usuario']);

		if(count($persona)<=0)
		{
			$query = " INSERT INTO persona(doc_per, prim_nom_per, prim_ape_per, seg_ape_per, dia_nac_per, mes_nac_per, anio_nac_per, dir_per, gen_per, est_per, pes_per, fech_creacion, fech_modificacion, id_ciu_nac, id_tip_doc, tel_per)
						VALUES ('".$formulario['doc_usuario']."', '".$formulario['nombre']."','".$formulario['primer_apellido']."','".$formulario['segundo_apellido']."','".$formulario['dia']."','".$formulario['mes']."','".$formulario['anio']."','".$formulario['direccion']."','".$formulario['gen']."','".$formulario['estatura']."','".$formulario['peso']."',NOW(),NOW(),'".$formulario['ciudad']."','".$formulario['doc']."', '".$formulario['telefono']."')";

			$consulta = $db->consulta($query);
			$id_persona = $db->insert_id();
		}else{
			$id_persona = $persona[0]['id_per'];
		}

		$query = " INSERT INTO form_pers(id_form, id_per, id_tip_usua) VALUES ($id_formulario, $id_persona, 1)";
		$consulta = $db->consulta($query);
		$id_form_persona = $db->insert_id();

		for ($i=0; $i < count($formulario['nov']); $i++) { 
			$nombreNov = $arrayNov[$formulario['nov'][$i]];
			$novedad = $objNovedad->findNovedad($nombreNov);
			$query = " INSERT INTO novedad_x_formulario(novedad_id_nov, formulario_id_form, formulario_id_emp, fech_creacion, fech_modificacion) VALUES ('".$novedad[0]['id_nov']."',$id_formulario, ".$formulario['nit'].", NOW(), NOW())";
			$consulta = $db->consulta($query);
		}
		
		$query = " INSERT INTO deporte(desc_dep, id_form_pers) VALUES ('".$formulario['deporte']."', $id_form_persona)";
		$consulta = $db->consulta($query);

		/**
		 * Beneficiarios
		 */
		
		for ($i=1; $i <= 4; $i++) { 
			if( $formulario['primer_ap'.$i] != '' &&
				$formulario['segundo_ap'.$i] != '' &&
				$formulario['nombre'.$i] != '' &&
				$formulario['documento_ap'.$i] != '' && 
				$formulario['porcentaje'.$i] != '' &&
				$formulario['parentezco'.$i] != '' 
				)
			{
				$persona = $objPersona->findPersona($formulario['documento_ap'.$i]);

				if(count($persona)<=0)
				{
					$query = " INSERT INTO persona(doc_per, prim_nom_per, prim_ape_per, seg_ape_per, fech_creacion, fech_modificacion)
								VALUES ('".$formulario['documento_ap'.$i]."', '".$formulario['nombre'.$i]."','".$formulario['primer_ap'.$i]."','".$formulario['segundo_ap'.$i]."',NOW(),NOW())";

					$consulta = $db->consulta($query);
					$id_persona_ben = $db->insert_id();
				}else{
					$id_persona_ben = $persona[0]['id_per'];
				}

				$query = " INSERT INTO form_pers(id_form, id_per, id_tip_usua, parentezco, porcentaje) VALUES ($id_formulario, $id_persona_ben, 2, '".$formulario['parentezco'.$i]."', '".$formulario['porcentaje'.$i]."')";
				$consulta = $db->consulta($query);
				$id_form_persona = $db->insert_id();
			}
		}

		for ($i=0; $i < count($formulario['enferm']); $i++) { 
			$nombreEnf = $arrayEnf[$formulario['enferm'][$i]];
			$enfermedad = $objEnfermedad->findEnfermedad($nombreEnf);
			$query = " INSERT INTO enfermedad_x_persona(id_enf, id_per, id_form) VALUES (".$enfermedad[0]['id_enf'].",$id_persona, '$id_formulario')";
			$consulta = $db->consulta($query);
		}

		for ($i=1; $i <= 2; $i++) { 
			if( $formulario['enfermedad'.$i] != '' &&
				$formulario['anio_diag'.$i] != '' &&
				$formulario['tratamiento'.$i] != ''  
				)
			{
				$query = " INSERT INTO tratamiento_enfermedad(id_per, id_form, enfermedad, anio_diag, tratamiento) 
							VALUES ($id_persona, $id_formulario, '".$formulario['enfermedad'.$i]."',".$formulario['anio_diag'.$i].", '".$formulario['tratamiento'.$i]."')";
				$consulta = $db->consulta($query);
			}
		}

		echo $id_formulario;
		exit;

	}

	function findForm($idForm)
	{
		$db = new ClassConexion();
		$db->MySQL();

		$query = "	SELECT
					formulario.id_form,
					formulario.pol_form,
					formulario.solic_increm_form,
					formulario.id_emp,
					formulario.fech_creacion,
					formulario.fech_modificacion,
					formulario.ocupacion,
					empresa.nit_emp,
					empresa.nom_emp,
					empresa.dir_emp,
					empresa.tel_emp,
					persona.doc_per,
					persona.prim_nom_per,
					persona.seg_nom_per,
					persona.prim_ape_per,
					persona.seg_ape_per,
					persona.dia_nac_per,
					persona.mes_nac_per,
					persona.anio_nac_per,
					persona.dir_per,
					persona.tel_per,
					persona.email_per,
					persona.gen_per,
					persona.est_per,
					persona.pes_per,
					ciudad.nom_ciu,
					tipo_documento.nom_tip_doc,
					tipo_documento.id_tip_doc,
					persona.id_per,
					form_pers.id_form_pers,
					deporte.desc_dep
					FROM
					formulario
					INNER JOIN form_pers ON form_pers.id_form = formulario.id_form
					INNER JOIN empresa ON formulario.id_emp = empresa.id_emp
					INNER JOIN persona ON form_pers.id_per = persona.id_per
					INNER JOIN ciudad ON persona.id_ciu_nac = ciudad.id_ciu
					INNER JOIN tipo_documento ON persona.id_tip_doc = tipo_documento.id_tip_doc
					INNER JOIN deporte ON deporte.id_form_pers = form_pers.id_form_pers
					WHERE
					formulario.id_form = '$idForm' AND
					form_pers.id_tip_usua = 1";

		$consulta = $db->consulta($query);
		
		if($db->num_rows($consulta)>0){ $conteo=0;
		  while($resultados = $db->fetch_array($consulta)){ 
		  	$this->resultado[$conteo]['id_form']=$resultados['id_form'];
		  	$this->resultado[$conteo]['pol_form']=$resultados['pol_form'];
		  	$this->resultado[$conteo]['solic_increm_form']=$resultados['solic_increm_form'];
		  	$this->resultado[$conteo]['ocupacion']=$resultados['ocupacion'];
		  	$this->resultado[$conteo]['id_emp']=$resultados['id_emp'];
		  	$this->resultado[$conteo]['fech_creacion']=$resultados['fech_creacion'];
		  	$this->resultado[$conteo]['fech_modificacion']=$resultados['fech_modificacion'];
		  	$this->resultado[$conteo]['nit_emp']=$resultados['nit_emp'];
		  	$this->resultado[$conteo]['nom_emp']=$resultados['nom_emp'];
		  	$this->resultado[$conteo]['dir_emp']=$resultados['dir_emp'];
		  	$this->resultado[$conteo]['tel_emp']=$resultados['tel_emp'];
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
		  	$this->resultado[$conteo]['nom_ciu']=$resultados['nom_ciu'];
		  	$this->resultado[$conteo]['nom_tip_doc']=$resultados['nom_tip_doc'];
		  	$this->resultado[$conteo]['id_tip_doc']=$resultados['id_tip_doc'];
		  	$this->resultado[$conteo]['id_per']=$resultados['id_per'];
		  	$this->resultado[$conteo]['id_form_pers']=$resultados['id_form_pers'];
		  	$this->resultado[$conteo]['desc_dep']=$resultados['desc_dep'];
		  	$conteo++;
		 }
		   return $this->resultado;
		}
	}
}
?>