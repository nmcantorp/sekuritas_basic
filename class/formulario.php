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

		$query = "	INSERT INTO formulario (solic_increm_form, pol_form, id_emp, fech_creacion, fech_modificacion)
					VALUES (".$formulario['incremento_solic'].", 1, ".$formulario['nit'].", NOW(), NOW())";

		$consulta = $db->consulta($query);
		$id_formulario = $db->insert_id();

		$persona = $objPersona->findPersona($formulario['doc_usuario']);

		if(count($persona)<=0)
		{
			$query = " INSERT INTO persona(doc_per, prim_nom_per, prim_ape_per, seg_ape_per, dia_nac_per, mes_nac_per, anio_nac_per, dir_per, gen_per, est_per, pes_per, fech_creacion, fech_modificacion, id_ciu_nac, id_tip_doc)
						VALUES ('".$formulario['doc_usuario']."', '".$formulario['nombre']."','".$formulario['primer_apellido']."','".$formulario['segundo_apellido']."','".$formulario['dia']."','".$formulario['mes']."','".$formulario['anio']."','".$formulario['direccion']."','".$formulario['gen']."','".$formulario['estatura']."','".$formulario['peso']."',NOW(),NOW(),'".$formulario['ciudad']."','".$formulario['doc']."')";

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
	
}
?>