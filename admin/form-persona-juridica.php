<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sekuritas</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="../../css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/960.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/screen.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="../css/print-preview.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/jquery-ui.css" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
    <script type="text/javascript">
   WebFontConfig = {
     google: { families: [ 'Roboto:400,100,300,500,700,900:latin' ] }
   };
   (function() {
     var wf = document.createElement('script');
     wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
     wf.type = 'text/javascript';
     wf.async = 'true';
     var s = document.getElementsByTagName('script')[0];
     s.parentNode.insertBefore(wf, s);
   })(); </script>
    <!-- Estilos para imprimir -->



    <!-- Fin Estilos para imprimir -->

    <!-- JS para imprimir -->

    <script src="../js/jquery-1.11.3.min.js"></script>

    <script src="../js/jquery.tools.min.js"></script>

    <!--<script src="../js/jquery.print-preview.js" type="text/javascript" charset="utf-8"></script>-->
    <!-- Fin JS para imprimir -->

    </head>

    <body>
<form id="form">
<input type="hidden" name="ac" value="saveFormulario">
<div class="container">
  <div class="row marginbottom10 margintop30">
    <div class="col-md-6 col-md-offset-0 col-sm-8 col-xs-6">
        <img src="../images/logo.gif" alt="" class="img-responsive" />
    </div> 
  </div>
</div>

<div class="bg-body">
    <div class="container_gray-3">
    	<div class="container"> 
            <div class="row margin0">
                <div class="col-md-12">
                    <div class="main_title">
                        <div class="bold f26 upper"> Formulario de conocimiento del cliente persona juridica-sector asegurador</div>
                    </div>
                    <div class="separator"></div>
                    
					<div class="row">
						<div class="col-sm-12">
							<div class="main_table">
							 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive">
								 <tbody>
								 	<tr>
										<td>
											Fecha Diligenciamiento
										</td> 
										<td>
											<input type="text"  name="f-diligenciamiento" class="form-control" />
										</td> 
										<td>
											Ciudad
										</td> 
										<td>
											<input type="text"  name="ciudad" class="form-control" />
										</td> 
										<td>
											Sucursal
										</td> 
										<td>
											<input type="text"  name="sucursal" class="form-control" />
										</td> 
										<td>
											Tipo Solicitud
										</td> 
										<td>
											<select name="tipo-solicitud" class="form-control" >
												<option>Select</option>
											</select>
										</td> 		
								 	</tr>
								 </tbody>
							</table>
							</div>
							<div class="main_table">
							 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive">
								 <thead>
									 <tr>
									 	<td colspan="9" class="white-n f12">
										EN EL EVENTO EN QUE EL POTENCIAL CLIENTE NO CUENTE CON LA INFORMACIÓN SOLICITADA EN ESTE FORMULARIO, DEBERÁ CONSIGNAR DICHA CIRCUNSTANCIA EN EL ESPACIO CORRESPONDIENTE.
										</td>
									 </tr>
								 </thead>
								 <tbody>
								 	<tr>
										<td>
											CLASE DE VINCULACIÓN:
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="tomador" name="" value="ingreso"/>
											  <label for="tomador" ><span>Tomador</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="asegurado" name="" value="ingreso"/>
											  <label for="asegurado" ><span>Asegurado</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="beneficiario" name="" value="ingreso"/>
											  <label for="beneficiario" ><span>Beneficiario</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="afianzado" name="" value="ingreso"/>
											  <label for="afianzado" ><span>Afianzado</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="proveedor" name="" value="ingreso"/>
											  <label for="proveedor" ><span>Proveedor</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="intermediario" name="" value="ingreso"/>
											  <label for="intermediario" ><span>Intermediario</span></label>
											</div>
										</td> 
										<td>
											Otro
										</td> 	
										<td>
											<input type="text" name="otro" class="form-control" />
										</td> 	
								 	</tr>
									 <tr>
										 <td>Residencia de la Sociedad</td>
										<td colspan="2">
											<select name="" class="form-control" >
												<option>Seleccionar</option>
											</select>
										</td>
										 <td colspan="6"></td>
									 </tr>
								 </tbody>
							</table>
							</div>		
						<div class="main_table">
							 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive">
								 <thead>
									 <tr>
									 	<td colspan="7">
										INDIQUE LOS VÍNCULOS EXISTENTES ENTRE TOMADOR, ASEGURADO, AFIANZADO Y BENEFICIARIO: (INDIVIDUALIZACION DEL PRODUCTO).
										</td>
									 </tr>
								 </thead>
								 <tbody>
								 	<tr>
										<td class="text-center">
											Tomador - Asegurado
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="familiar" name="familiar" value="familiar"/>
											  <label for="familiar" ><span>Familiar</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="comercial" name="comercial" value="comercial"/>
											  <label for="comercial" ><span>Comercial</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="laboral" name="laboral" value="laboral"/>
											  <label for="laboral" ><span>Laboral</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="otra" name="" value="otra"/>
											  <label for="otra" ><span>Otra</span></label>
											</div>
										</td> 
										<td>
											Cual
										</td> 	
										<td>
											<input type="text" name="cual" class="form-control" />
										</td> 	
								 	</tr>
								 	<tr>
										<td class="text-center">
											Tomador - Beneficiario
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="familiar2" value="familiar2"/>
											  <label for="familiar2" ><span>Familiar</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="comercial2" value="comercial2"/>
											  <label for="comercial2" ><span>Comercial</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="laboral2" value="laboral2"/>
											  <label for="laboral2" ><span>Laboral</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="otra2" value="otra2"/>
											  <label for="otra2" ><span>Otra</span></label>
											</div>
										</td> 
										<td>
											Cual
										</td> 	
										<td>
											<input type="text" name="cual2" class="form-control" />
										</td> 	
								 	</tr>	
									<tr>
										<td class="text-center">
											Asegurado - Beneficiario
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="familiar3" value="familiar3"/>
											  <label for="familiar3" ><span>Familiar</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="comercial3" value="comercial3"/>
											  <label for="comercial3" ><span>Comercial</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="laboral3" value="laboral3"/>
											  <label for="laboral3" ><span>Laboral</span></label>
											</div>
										</td> 
										<td>
											<div class="content_checkboxes">
											  <input type="radio" id="" name="otra3" value="otra3"/>
											  <label for="otra3" ><span>Otra</span></label>
											</div>
										</td> 
										<td>
											Cual
										</td> 	
										<td>
											<input type="text" name="cual3" class="form-control" />
										</td> 	
								 	</tr>									 
								 </tbody>
							</table>
							</div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive">
									<thead>
										<tr>
											<td class="text-center">
												1. INFORMACIÓN BÁSICA
											</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>NOMBRE O RAZON SOCIAL</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>
													  <td>TIPO DE DOCUMENTO</td>
													  <td>		
														  <select name="tipo-documento" class="form-control">
															<option>Seleccionar</option>
														</select>
														</td>
													</tr>
												  </tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>NIT</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>DIV</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>OFICINA PRINCIPAL: DIRECCION</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>
													  <td>TIPO DE EMPRESA</td>
													  <td>		
														 <input type="text" class="form-control" id="" placeholder="">
														</td>
													</tr>
												  </tbody>
												</table>
											</td>											
										</tr>		
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>CIU</td>
													  <td><select name="tipo-solicitud" class="form-control" >
															<option>Seleccionar</option>
														</select></td>
													  <td>CIIU (Cod)</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>SECTOR</td>
													  <td>
														  <select name="tipo-solicitud" class="form-control" >
															<option>Seleccionar</option>
														</select>
													  </td>
													</tr>
												  </tbody>
												</table>
											</td>											
										</tr>		
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>DEPARTAMENTO</td>
													  <td><select name="tipo-solicitud" class="form-control" >
															<option>Seleccionar</option>
														</select></td>
													  <td>CIUDAD</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>TELÉFONO</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>													  <td>E-MAIL</td>
													  <td>
														 <input type="text" class="form-control" id="" placeholder="">
													  </td>
													</tr>
												  </tbody>
												</table>
											</td>											
										</tr>	
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>SUCURSAL O AGENCIA: DIRECCIÓN</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>DEPARTAMENTO</td>
													  <td>
														<select name="departamento" class="form-control" >
														<option>Seleccionar</option>
														</select></td>
													  <td>CIUDAD</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>													  <td>TELÉFONO</td>
													  <td>
														 <input type="text" class="form-control" id="" placeholder="">
													  </td>
													</tr>
												  </tbody>
												</table>
											</td>											
										</tr>											
									</tbody>
								</table> 
							</div>
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive">
									<thead>
										<tr>
											<td class="text-center">
												Representante Legal
											</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>REPRESENTANTE LEGAL PRIMER APELLIDO</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>
													  <td>SEGUNDO APELLIDO</td>
													  <td>		
														  <input type="text" class="form-control" id="" placeholder="">
														</td>
													  <td>NOMBRES</td>
													  <td>		
														  <input type="text" class="form-control" id="" placeholder="">
														</td>						
													</tr>
												  </tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>TIPO DE DOCUMENTO</td>
													  <td><select name="tipo-documento" class="form-control" >
															<option>Seleccionar</option>
														</select></td>
													  <td>NÚMERO</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>FECHA DE EXPEDICIÓN</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>
													  <td>LUGAR DE EXPEDICIÓN</td>
													  <td>		
														 <input type="text" class="form-control" id="" placeholder="">
														</td>
													</tr>
												  </tbody>
												</table>
											</td>											
										</tr>		
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>FECHA DE NACIMIENTO</td>
													  <td><input type="text" class="form-control datepicker" id="" placeholder=""></td>
													  <td>NACIONALIDAD 1</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>NACIONALIDAD 2</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>
													</tr>
												  </tbody>
												</table>
											</td>											
										</tr>		
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>E-MAIL</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>DIRECCIÓN (Residencia)</td>
													  <td><input type="text" class="form-control" id="" placeholder=""></td>
													  <td>CIUDAD</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>							
													</tr>
												  </tbody>
												</table>
											</td>											
										</tr>	
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
													<tr>
													  <td>DEPARTAMENTO</td>
													  <td>
														<select name="departamento" class="form-control" >
														<option>Seleccionar</option>
														</select></td>
													  <td>PAÍS</td>
													  <td>
														  <input type="text" class="form-control" id="" placeholder="">
													  </td>													  <td>TELÉFONO</td>
													  <td>
														 <input type="text" class="form-control" id="" placeholder="">
													  </td>
													  <td>CELULAR</td>
													  <td>
														 <input type="text" class="form-control" id="" placeholder="">
													  </td>														
													</tr>
												  </tbody>
												</table>
											</td>
										</tr>	
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form-table1">
												  <tbody>
													<tr>
													  <td>
														  ¿Alguno de los administradores (Representantes legales, miembros de la Junta Directiva?. es una Persona Públicamente Expuesta? (Ver definición de administrador, PPE y vinculados en el pie de página).
														</td>
													  <td>						
													   <div class="content_checkboxes">
														  <input type="checkbox" id="" name="si" value="si"/>
											  			  <label for="si" ><span>SI</span></label>
														</div>												  
													  </td>													  
														<td>						
													   <div class="content_checkboxes">
														  <input type="checkbox" id="" name="no" value="no"/>
											  			  <label for="no" ><span>NO</span></label>
														</div>														  
													  </td>
													  <td>Si la respuesta es afirmativa, sírvase diligenciar la sección para el conocimiento mejorado de personas públicamente expuestas</td>
													</tr>													
													  <tr>
													  <td>
														  ¿Por su cargo o actividad, alguno de los administradores (Representantes legales, miembros de la Junta Directiva) administra recursos públicos?
														</td>
													  <td>													   <div class="content_checkboxes">
														  <input type="checkbox" id="" name="si" value="si"/>
											  			  <label for="si" ><span>SI</span></label>
														</div>	</td>
													  <td>
														  <div class="content_checkboxes">
														  <input type="checkbox" id="" name="no" value="no"/>
											  			  <label for="no" ><span>NO</span></label>
														</div>		
													  </td>
														  <td></td>
													</tr>												
													  <tr>
													  <td>
														  ¿Es usted sujeto de obligaciones tributarias en otro país o grupo de países?
														</td>
													  <td>Indique:</td>
													  <td colspan="2">
														<input type="text" class="form-control" id="" placeholder=""> 
													  </td>
													</tr>
												  </tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table> 
							</div>
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center">
												Accionistas
											</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												Instrucciones de diligenciamiento: 1) Por favor relacione los accionistas o 
												asociados que tengan directa o indirectamente mas del 5% del Capital Social, aporte o participación. <br>
												2) Si el accionista o asociado relacionado en la siguiente sección es una persona Jurídica que no cotiza en bolsa, por favor relacione la información de su composición accionaria en la sección para el conocimiento ampliado de Accionistas y Beneficiarios Finales, y suministre esta información para todos los accionistas/asociados indirectos que cumplan esta condición hasta relacionar la persona natural que ejerce control final sobre la entidad. (En caso de requerir mas espacio debe anexar una relación por separado) <br>
												3) Si alguno de los accionistas o asociados (personas naturales) es una Persona Expuesta Públicamente , sírvase diligenciar la sección correspondiente (abajo dispuesta)
											</td>
										</tr>
										<tr>
											<td class="padding0 border0">
												<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info form-table1">
                                     			 <tbody>
													<tr>
														  <td class="text-center" width="10%"><strong>TIPO ID</strong></td>
														  <td class="text-center" width="10%"><strong>NÚMERO ID</strong></td>
														  <td class="text-center" width="20%"><strong>NOMBRE</strong></td>
														  <td class="text-center" width="10%"><strong>% PARTICIPACIÓN</strong></td>
														  <td class="text-center" width="15%"><strong>¿Es Persona Jurídica que cotiza en Bolsa?</strong></td>
														  <td class="text-center" width="20%"><strong>¿Es Persona Públicamente Expuesta, o vinculado con una de ellas?, (aplica únicamente para personas naturales).</strong></td>
														  <td class="text-center" width="15%"><strong>¿Es sujeto de tributación en otro país u otro grupo de países?, Indique cual(es)</strong></td>
														</tr>
														<tr>
															  <td>										
																  <select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td><input type="text" class="form-control" name="numero_id"/></td>
															  <td><input type="text" class="form-control" name="nombre1"/></td>
															  <td><input type="text" class="form-control" name="participacion"/></td>
															  <td>
																<select name="" class="form-control">
																	<option>
															Seleccionar
																	</option>
																</select>
															  </td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															<td>
																<input type="text" name=""  class="form-control" />	
															</td>
															</tr>
															<tr>
															  <td>										
																  <select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td><input type="text" class="form-control" name="numero_id"/></td>
															  <td><input type="text" class="form-control" name="nombre1"/></td>
															  <td><input type="text" class="form-control" name="participacion"/></td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>											
																</td>
																<td>
																	<input type="text" name=""  class="form-control"  />	
																</td>
															</tr>
<tr>
															  <td>										
																  <select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td><input type="text" class="form-control" name="numero_id"/></td>
															  <td><input type="text" class="form-control" name="nombre1"/></td>
															  <td><input type="text" class="form-control" name="participacion"/></td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>											
																</td>
																<td>
																	<input type="text" name=""  class="form-control"  />	
																</td>
															</tr>
<tr>
															  <td>										
																  <select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td><input type="text" class="form-control" name="numero_id"/></td>
															  <td><input type="text" class="form-control" name="nombre1"/></td>
															  <td><input type="text" class="form-control" name="participacion"/></td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>											
																</td>
																<td>
																	<input type="text" name=""  class="form-control"  />	
																</td>
															</tr>			<tr>
															  <td>										
																  <select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td><input type="text" class="form-control" name="numero_id"/></td>
															  <td><input type="text" class="form-control" name="nombre1"/></td>
															  <td><input type="text" class="form-control" name="participacion"/></td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>
															  </td>
															  <td>
																<select name="" class="form-control">
																	<option>
																		Seleccionar
																	</option>
																</select>											
																</td>
																<td>
																	<input type="text" name=""  class="form-control"  />	
																</td>
															</tr>										 
													  </tbody>
													 </table>											
											</td>
										</tr>
										<tr>
										  	<td class="paddingtop10 paddingbottom10">
												<strong>Persona Expuesta Públicamente (PEP):</strong> i) las personas expuestas políticamente-conforme al (Decreto 1674 de 2016)-, ii) los representantes legales de organizaciones internacionales y iii) las personas que gozan de reconocimiento público. Se entiende por persona políticamente expuesta (Decreto 1674 / 2016) los individuos que desempeñan o han desempeñado funciones públicas destacadas como jefes de Estado, políticos de alta jerarquía, funcionarios gubernamentales, judiciales o militares de alta jerarquía, altos ejecutivos (directores y gerentes) de empresas sociales, industriales y comerciales del estado y de sociedades de economía mixta, unidades administrativas especiales, y funcionarios importantes de partidos políticos. <br>
												<strong>Administradores (Ley 222 de 1995, art.22):</strong> Son administradores, el representante legal, el liquidador, el factor, los miembros de juntas o consejos directivos y quienes de acuerdo con los estatutos ejerzan o detenten esas funciones. <br>
												<strong>Vinculados:</strong> las personas que tengan sociedad conyugal, de hecho o de derecho, con las personas públicamente expuestas, los familiares hasta el segundo grado de consanguinidad, segundo de afinidad y primero civil de las personas públicamente expuestas. <br>
												<strong>Nota interpretativa Recomendación 24-GAFI:</strong> Como parte del proceso para asegurar que exista una transparencia adecuada sobre las personas jurídicas, los países deben contar con mecanismos que o Identifiquen y describan los diferentes tipos, formas y características básicas de las personas jurídicas en el país. o Identifiquen y describan los procesos para: (i) la creación de esas personas jurídicas; y (ii) la obtención y registro de información básica y sobre el beneficiario final; o pongan a disposición del público la anterior información; y o evalúen los riesgos de lavado de activos y financiamiento del terrorismo asociados a diferentes tipos de personas jurídicas creadas en el país.											  
											 </td>
										  </tr>
									</tbody>
								</table>
							</div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center">
												Conocimiento mejorado de Personas Expuestas Públicamente
											</td>
										</tr>
									</thead>
								  <tbody>
									<tr>
									  <td>En cumplimiento del Decreto 1674, se relacionan los siguientes campos en caso de ser considerado como persona politícamente expuesta o vínculado:</td>
									</tr>									  
									<tr>
									  <td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info form-table1">
										  <tbody>
											<tr>
											  <td class="text-center"><strong>Vinculo/Relación*</strong></td>
											  <td class="text-center"><strong>Nombre</strong></td>
											  <td class="text-center"><strong>Tipo de Identificación</strong></td>
											  <td class="text-center"><strong>No de Identificación</strong></td>
											  <td class="text-center"><strong>Nacionalidad</strong></td>
											  <td class="text-center"><strong>Entidad</strong></td>
											  <td class="text-center"><strong>Cargo</strong></td>
											  <td class="text-center"><strong>Fecha Desvinculación</strong></td>
											</tr>
											<tr>
											  <td>										
												  <select name="" class="form-control">
													<option>
														Seleccionar
													</option>
												</select>
											  </td>
											  <td><input type="text"  name="nombre" class="form-control" /></td>
											  <td>
												<select name="" class="form-control">
													<option>
														Seleccionar
													</option>
												</select>
												</td>
											  <td><input type="text" class="form-control" name="n-identificacion"/></td>
											  <td>
												<input type="text" class="form-control" name="nacionalidad"/>
											  </td>
											  <td>
												<input type="text" class="form-control" name="entidad"/>
											  </td>
											<td>
												<input type="text" class="form-control" name="cargo"/>
											</td>
											  <td>										
												  <input type="text" class="form-control" name="fecha-desvinculacion"/>
											  </td>												
											</tr>
																						<tr>
											  <td>										
												  <select name="" class="form-control">
													<option>
														Seleccionar
													</option>
												</select>
											  </td>
											  <td><input type="text" class="form-control" name="nombre"/></td>
											  <td>
												<select name="" class="form-control">
													<option>
														Seleccionar
													</option>
												</select>
												</td>
											  <td><input type="text" class="form-control" name="n-identificacion"/></td>
											  <td>
												<input type="text" class="form-control" name="nacionalidad"/>
											  </td>
											  <td>
												<input type="text" class="form-control" name="entidad"/>
											  </td>
											<td>
												<input type="text" class="form-control" name="cargo"/>
											</td>
											  <td>										
												  <input type="text" class="form-control" name="fecha-desvinculacion"/>
											  </td>												
											</tr>

										</tbody>
									 	</table>										
									  </td>
									</tr>
									<tr>
									  <td>
											* Vinculo/Relación<br>
										  1. Representantes legales<br>
										  2. Miembros de la Junta Directiva<br>
										  3. Accionistas
									  </td>
									</tr>
								  </tbody>
								</table>
                                
                            </div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center" colspan="6">
												Conocimiento ampliado de Accionistas y Beneficiarios Finales
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td class="text-center"><strong>TIPO IDENTIFICACIÓN</strong></td>
										  <td class="text-center"><strong>No de Identificación</strong></td>
										  <td class="text-center"><strong>RAZÓN SOCIAL/ NOMBRES APELLIDOS</strong></td>
										  <td class="text-center"><strong>% PARTICIPACIÓN</strong></td>
										  <td class="text-center"><strong>NOMBRE/RAZÓN SOCIAL DE LA SOCIEDAD DE LA QUE ES ACCIONISTA</strong></td>
										  <td class="text-center"><strong>NIT</strong></td>
										</tr>
										<tr>
										  <td>										
											  <select name="" class="form-control">
												<option>
													Seleccionar
												</option>
											  </select>
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											<input type="text" class="form-control" name=""/>
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											<input type="text" class="form-control" name="nacionalidad"/>
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>											
										</tr>
																					
										<tr>
										  <td>										
											  <select name="" class="form-control">
												<option>
													Seleccionar
												</option>
											  </select>
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											<input type="text" class="form-control" name=""/>
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											<input type="text" class="form-control" name="nacionalidad"/>
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>												
										</tr>										
									</tbody>
								</table>
							</div>
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center" colspan="6">
												Conocimiento ampliado de Accionistas y Beneficiarios Finales
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td class="text-center"><strong>TIPO IDENTIFICACIÓN</strong></td>
										  <td class="text-center"><strong>No de Identificación</strong></td>
										  <td class="text-center"><strong>RAZÓN SOCIAL/ NOMBRES APELLIDOS</strong></td>
										  <td class="text-center"><strong>% PARTICIPACIÓN</strong></td>
										  <td class="text-center"><strong>NOMBRE/RAZÓN SOCIAL DE LA SOCIEDAD DE LA QUE ES ACCIONISTA</strong></td>
										  <td class="text-center"><strong>NIT</strong></td>
										</tr>
										<tr>
										  <td>										
											  <select name="" class="form-control">
												<option>
													Seleccionar
												</option>
											  </select>
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											<input type="text" class="form-control" name=""/>
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											<input type="text" class="form-control" name="nacionalidad"/>
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>											
										</tr>
																					
										<tr>
										  <td>										
											  <select name="" class="form-control">
												<option>
													Seleccionar
												</option>
											  </select>
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											<input type="text" class="form-control" name=""/>
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											<input type="text" class="form-control" name="nacionalidad"/>
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>												
										</tr>										
									</tbody>
								</table>
							</div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center" colspan="6">
												Información Financiera
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td>										
											  INGRESOS MENSUALES (Pesos)
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											EGRESOS MENSUALES (Pesos)
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											ACTIVOS (Pesos)
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>											
										</tr>
																					
										<tr>
										  <td>										
											  PASIVOS (Pesos)
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											PATRIMONIO
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											OTROS INGRESOS
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>												
										</tr>			
										<tr>
										  <td>										
											 CONCEPTO DE OTROS INGRESOS
										  </td>
										  <td colspan="5"><input type="text" class="form-control" name="nombre"/></td>											
										</tr>										
									</tbody>
								</table>
							</div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center" colspan="6">
												Información Financiera
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td>										
											  INGRESOS MENSUALES (Pesos)
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											EGRESOS MENSUALES (Pesos)
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											ACTIVOS (Pesos)
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>											
										</tr>
																					
										<tr>
										  <td>										
											  PASIVOS (Pesos)
										  </td>
										  <td><input type="text" class="form-control" name="nombre"/></td>
										  <td>
											PATRIMONIO
											</td>
										  <td><input type="text" class="form-control" name="n-identificacion"/></td>
										  <td>
											OTROS INGRESOS
										  </td>
										  <td>
											<input type="text" class="form-control" name="entidad"/>
										  </td>												
										</tr>			
										<tr>
										  <td>										
											 CONCEPTO DE OTROS INGRESOS
										  </td>
										  <td colspan="5"><input type="text" class="form-control" name="nombre"/></td>											
										</tr>										
									</tbody>
								</table>
							</div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center" colspan="2">
												2. DECLARACIÓN DE ORIGEN DE FONDOS
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td colspan="2">										
											  Declaro expresamente que: <br>
											  1. La actividad, profesión u oficio de la compañía es lícita y se ejerce dentro del marco legal y los recursos de la misma no provienen de actividades ilícitas de las contempladas en el Código Penal Colombiano.<br>
											  2. La información suministrada en la solicitud y en este documento es veraz y verificable y la sociedad se compromete a actualizarla anualmente.<br>
											  3. Los recursos que se deriven del desarrollo de este contrato no se
											  destinaran a la financiación del terrorismo, grupos terroristas o actividades terroristas.<br>
											  4. Los recursos que posee la compañía provienen de la(s) actividades descritas anteriormente
										  </td>										
										</tr>
																					
										<tr>
										  <td>										
											  Origen de Fondos
										  </td>
										  <td>
											  <input type="text" class="form-control" name="nombre"/>
										  </td>										
										</tr>										
									</tbody>
								</table>
							</div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center" colspan="7">
												3. ACTIVIDADES EN OPERACIONES INTERNACIONALES
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td>										
											  REALIZA TRANSACCIONES EN MONEDA EXTRANJERA
										  </td>
										  <td>	   
											<div class="content_checkboxes">
											  <input type="checkbox" id="" name="si" value="si"/>
											  <label for="si" ><span>SI</span></label>
											</div>												
										  </td>
										  <td>
											<div class="content_checkboxes">
											  <input type="checkbox" id="" name="si" value="no"/>
											  <label for="si" ><span>NO</span></label>
											</div>	
											</td>
										  <td>
											CUAL
										  </td>
										  <td>
											  <select name="" class="form-control">
												<option>
													Seleccionar
												</option>
											  </select>
										  </td>
											<td>
												INDIQUE OTRAS OPERACIONES 
											</td>
										  <td>
											<input type="text" class="form-control" name="otras"/>
										  </td>											
										</tr>
																					
										<tr>
										  <td>										
											  ¿POSEE PRODUCTOS FINANCIEROS EN EL EXTERIOR?
										  </td>
										  <td>
											<div class="content_checkboxes">
											  <input type="checkbox" id="" name="si" value="si"/>
											  <label for="si" ><span>SI</span></label>
											</div>	
											</td>
										  <td>
											<div class="content_checkboxes">
											  <input type="checkbox" id="" name="si" value="no"/>
											  <label for="si" ><span>NO</span></label>
											</div>											
											</td>
										  <td colspan="2">¿POSEE CUENTAS EN MONEDA EXTRANJERA?</td>
										  <td>
											<div class="content_checkboxes">
											  <input type="checkbox" id="" name="si" value="si"/>
											  <label for="si" ><span>SI</span></label>
											</div>	
										  </td>
										  <td>
											<div class="content_checkboxes">
											  <input type="checkbox" id="" name="si" value="no"/>
											  <label for="si" ><span>NO</span></label>
											</div>	
										  </td>												
										</tr>			
										<tr>
										  <td colspan="7" >										
											<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info form-table1">
											 <tbody>
												<tr>
													  <td class="text-center" width="10%"><strong>TIPO DE PRODUCTO</strong></td>
													  <td class="text-center" width="10%"><strong>IDENTIFICACIÓN O NUMERO DEL PRODUCTO</strong></td>
													  <td class="text-center" width="20%"><strong>ENTIDAD</strong></td>
													  <td class="text-center" width="10%"><strong>MONTO</strong></td>
													  <td class="text-center" width="15%"><strong>CIUDAD</strong></td>
													  <td class="text-center" width="20%"><strong>PAIS</strong></td>
													  <td class="text-center" width="15%"><strong>MONEDA</strong></td>
													</tr>
													<tr>
														  <td>										
															  <input type="text" class="form-control" name="tp_producto"/>
														  </td>
														  <td><input type="text" class="form-control" name="iden_producto"/></td>
														  <td><input type="text" class="form-control" name="entidad"/></td>
														  <td><input type="text" class="form-control" name="monto"/></td>
														  <td>
															<input type="text" class="form-control" name="ciudad"/>
														  </td>
														  <td>
															<input type="text" class="form-control" name="pais"/>
														  </td>
														<td>
															<input type="text" class="form-control" name="moneda"/>
														</td>
														</tr>
														<tr>
														  <td>										
															  <input type="text" class="form-control" name="tp_producto"/>
														  </td>
														  <td><input type="text" class="form-control" name="iden_producto"/></td>
														  <td><input type="text" class="form-control" name="entidad"/></td>
														  <td><input type="text" class="form-control" name="monto"/></td>
														  <td>
															<input type="text" class="form-control" name="ciudad"/>
														  </td>
														  <td>
															<input type="text" class="form-control" name="pais"/>
														  </td>
														<td>
															<input type="text" class="form-control" name="moneda"/>
														</td>
														</tr>	
														<tr>
														  <td>										
															  <input type="text" class="form-control" name="tp_producto"/>
														  </td>
														  <td><input type="text" class="form-control" name="iden_producto"/></td>
														  <td><input type="text" class="form-control" name="entidad"/></td>
														  <td><input type="text" class="form-control" name="monto"/></td>
														  <td>
															<input type="text" class="form-control" name="ciudad"/>
														  </td>
														  <td>
															<input type="text" class="form-control" name="pais"/>
														  </td>
														<td>
															<input type="text" class="form-control" name="moneda"/>
														</td>
														</tr>												 
														
												  </tbody>
												 </table>
										  </td>																						
										</tr>
										<tr>
										  <td colspan="7">	
												DOCUMENTOS REQUERIDOS:<br>
												- Fotocopia del documento de identidad del representante legal, ampliada al 150%<br>
												-- Certificado de existencia y representación legal expedido por la autoridad competente no mayor a 30 días,<br>
												-- Inventario general de los bienes objeto del seguro<br><br>
											 Adicionalmente la aseguradora podrá requerir otros documentos de acuerdo con sus políticas, tales como: estados financieros, declaración de renta, copia del RUT, entre otros.											  
										  </td>											
										</tr>
										
									</tbody>
								</table>
							</div>	
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center">
												4. INFORMACIÓN SOBRE RECLAMACIONES EN SEGUROS
¿HA PRESENTADO RECLAMACIONES O HA RECIBIDO INDEMNIZACIONES EN SEGUROS EN LOS DOS ÚLTIMOS AÑOS?
												
											</td>
											
											<td>
												<table width="" border="0" cellspacing="0" cellpadding="0" align="right" class="border0">
												<tr>
													<td class="border0">
													<div class="content_checkboxes">
													  <input type="checkbox" id="" name="si" value="si"/>
													  <label for="si" ><span>SI</span></label>
													</div>														
													</td>
													<td class="border0">
													<div class="content_checkboxes">
													  <input type="checkbox" id="" name="si" value="no"/>
													  <label for="si" ><span>NO</span></label>
													</div>	
													</td>
												</tr>
												</table>											
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td colspan="2">	
											<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info form-table1">
											 <tbody>
												<tr>
													  <td class="text-center" width="10%"><strong>AÑO</strong></td>
													  <td class="text-center" width="10%"><strong>RAMO</strong></td>
													  <td class="text-center" width="20%"><strong>COMPAÑÍA</strong></td>
													  <td class="text-center" width="10%"><strong>VALOR</strong></td>
													  <td class="text-center" width="15%"><strong>RESULTADO</strong></td>
													</tr>
													<tr>
														  <td>										
															  <input type="text" class="form-control" name="tp_producto"/>
														  </td>
														  <td><input type="text" class="form-control" name="iden_producto"/></td>
														  <td><input type="text" class="form-control" name="entidad"/></td>
														  <td><input type="text" class="form-control" name="monto"/></td>
														  <td>
															  <select name="" class="form-control">
																<option>
																	Seleccionar
																</option>
															  </select>
														  </td>
														</tr>										 
												  </tbody>
												 </table>											  
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="main_table">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive form-table1">
									<thead>
										<tr>
											<td class="text-center" colspan="2">
												5. CLÁUSULA DE AUTORIZACIÓN
											</td>
										</tr>
									</thead>
								  	<tbody>
										<tr>
										  <td colspan="2">	
											<div class="text-center">AUTORIZACIÓN</div>
											  <br>
											Para efectos de la presente autorización, entiéndase por LA ASEGURADORA, la(s) sociedad(es)	  
										  </td>										
										</tr>
										<tr>
											<td colspan="2">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<thead>
														<tr>
															<td class="text-center">
																Compañía - Dirección - Teléfono
															</td>
															<td class="text-center">
																Compañía - Dirección - Teléfono
															</td>											<td class="text-center">
																Compañía - Dirección - Teléfono
															</td>				
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																AIG<br>
																Avenida Cra 9 No. 101 - 67<br>
																Teléfono: (1)2555490
															</td>
															<td>
																Allianz<br>
																Carrera 13 A No. 29-24<br>
																Teléfono: (1)5600600
															</td>											<td>
																Compañía - Dirección - Teléfono
															</td>				
														</tr>
														<tr>
															<td>
																BBVA Seguros<br>
																Carrera 15 No. 95 65 Piso 6<br>
																Teléfono: (1)2191100
															</td>
															<td>
																Cardif<br>
																Carrera 7a No. 75 - 66
																Teléfono: (1)7444040
															</td>											<td>
																JMALUCELLI TRAVELERS SEGUROS S.A<br>
																Calle 98 No. 21-50<br>
																Teléfono: (1)7039052
															</td>				
														</tr>												
														<tr>
															<td>
																CHUBB<br>
																Carrera 7 No. 71 - 21 Torre B, Piso 7, Edificio BVC<br>
																Teléfono: (1)3266210
															</td>
															<td>
																Confianza S.A.<br>
																Calle 82 No. 11-37<br>
																Teléfono: (1)6444690
															</td>											<td>
																Bolívar<br>
																Av. Dorado No. 68B-31<br>
																Teléfono: (1)3410077
															</td>				
														</tr>		
														<tr>
															<td>
																Aurora<br>
																Carrera 7 No. 74-21 P 1 Y 3<br>
																Teléfono: (1)7425119
															</td>
															<td>
																Colmena Seguros<br>
																Av. Calle 72 No. 10-71 P4<br>
																Teléfono: (1)3241111
															</td>											<td>
																Seguros Mundial<br>
																Calle 33 No. 6B-24<br>
																Teléfono: (1)2855600
															</td>				
														</tr>												<tr>
															<td>
																Generali<br>
																Carrera 7 No. 72-13<br>
																Teléfono: (1)3468888
															</td>
															<td>
																Global Seguros<br>
																Carrera 9 No. 74-62<br>
																Teléfono: (1)3139200
															</td>											<td>
																La Equidad Seguros<br>
																Carrera 9A No. 99-07<br>
																Teléfono: (1)5922929
															</td>				
														</tr>	
														<tr>
															<td>
																La Previsora<br>
																Calle 57No. 9-07
																Teléfono: (1)3485757
															</td>
															<td>
																Liberty<br>
																Calle 72 No. 10-07<br>
																Teléfono: (1)3103300
															</td>											<td>
																Mapfre<br>
																Carrera 14 No. 96-34<br>
																Teléfono: (1)6503300
															</td>				
														</tr>	
														<tr>
															<td>
																Metlife<br>
																Carrera 7 No. 99-53<br>
																Teléfono: (1)6388240
															</td>
															<td>
																Pan American Life<br>
																Calle 116 No # 23 - 06 / 28 Piso 7<br>
																Teléfono: (1)3267400
															</td>											<td>
																Positiva<br>
																Av. Carrera 45 No.94-72<br>
																Teléfono: (1)6502200
															</td>				
														</tr>	
														<tr>
															<td>
																QBE<br>
																Carrera 7 No. 76-35<br>
																Teléfono: (1)3190730
															</td>
															<td>
																Segurexpo<br>
																Calle 72 No. 6-44<br>
																Teléfono: (1)3266969
															</td>											<td>
																Seguros Alfa<br>
																Av Calle 24A No. 59-42<br>
																Teléfono: (1)3446770
															</td>				
														</tr>	
														<tr>
															<td>
																SURA<br>
																Carrera 64b No 49A - 30 Medellín Colombia<br>
																(4)2602100
															</td>
															<td>
																Seguros del Estado<br>
																Carrera 11 No. 90-20<br>
																Teléfono: (1)6019330
															</td>											<td>
																Old Mutual<br>
																Av. 19 No. 109A- 30<br>
																Teléfono: (1)6584300
															</td>				
														</tr>	
														<tr>
															<td>
																AXA Colpatria<br>
																Carrera 7 No. 24-89<br>
																Teléfono: (1)3364677
															</td>
															<td>
																Nacional de Seguros<br>
																Calle 94 No. 11-30 P 4<br>
																Teléfono: (1)7463219
															</td>											<td>
																Coface<br>
																Carrera 15 No. 91-30 Of. 601<br>
																Teléfono: (1) 6231631
															</td>				
														</tr>	
														<tr>
															<td>
																Berkley
																Carrera 7 No. 71-21 TA P5
																Teléfono: (1)3572727
															</td>
															<td>
																Zurich
																Calle 100 No. 7-33 Piso 5
																Teléfono: (1) 5188482
															</td>											<td>
																Coface<br>
																Carrera 15 No. 91-30 Of. 601<br>
																Teléfono: (1) 6231631
															</td>				
														</tr>															
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 s12 normal_text margintop10">
							y/o cualquier sociedad controlada, directa o indirectamente, por la misma sociedad(es) matriz de la(s) sociedad (es) referenciadas y con la(s) que se suscriban contrato(s) de seguros. <br><br> 
							Así mismo, entiéndase como INTERMEDIARIO DE SEGUROS la (s) sociedad (es) <strong>SEKURITAS S.A CORREDORES DE SEGUROS</strong>, y/o cualquier sociedad controlada, directa o indirectamente, por la misma sociedad matriz de la(s) sociedad(es) antes mencionada(s). Dirección <strong>CARRERA 11 #86 - 60 OFC 404</strong>, Teléfono <strong>7466464</strong><br><br>
							Declaro expresamente:<br><br> 
							I. Que para efectos de acceder a la prestación de servicios por parte de <strong>LA ASEGURADORA Y/O EL INTERMEDIARIO DE SEGUROS</strong>, suministramos nuestros datos para todos los fines precontractuales y contractuales que comprende la actividad aseguradora.<br><br> 
							II. Que <strong>LA ASEGURADORA Y/O EL INTERMEDIARIO DE SEGUROS</strong> me han informado, de manera expresa:<br><br>
							<strong>1. FINALIDAD DEL TRATAMIENTO DE DATOS PERSONALES:</strong> Nuestros datos serán tratados por LA ASEGURADORA Y/O EL INTERMEDIARIO DE SEGUROS, para las siguientes finalidades: i) El trámite de nuestra solicitud de vinculación como consumidor financiero, deudor, contraparte contractual y/o proveedor ii) El proceso de negociación de contratos con LA ASEGURADORA, incluyendo la determinación de primas y la selección de riesgos. iii) La ejecución y el cumplimiento de los contratos que celebre. iv) El control y la prevención del fraude. v) La liquidación y pago de siniestros. vi) Todo lo que involucre la gestión integral del seguro contratado. vii) Controlar el cumplimiento de requisitos para acceder al Sistema General de Seguridad Social Integral viii) La elaboración de estudios técnico actuariales, estadísticas, encuestas, análisis de tendencias del mercado y, en general, estudios de técnica aseguradora. ix) Envío de información relativa a la educación financiera, encuestas de satisfacción de clientes y ofertas comerciales de seguros, así como de otros servicios inherentes a la actividad aseguradora. x) Realización de encuestas sobre satisfacción en los servicios prestados por LA ASEGURADORA Y/O EL INTERMEDIARIO DE SEGUROS, xi) Intercambio o remisión de información en virtud de tratados y acuerdos internacionales e intergubernamentales suscritos por Colombia, xii) La prevención y control del lavado de activos y la financiación del terrorismo y la xiii) Consulta, almacenamiento, administración, transferencia, procesamiento y reporte de información a las Centrales de Información o bases de datos debidamente constituidas referentes al comportamiento crediticio, financiero y comercial.<br> <br> 
							2. El tratamiento podrá ser realizado directamente por las citadas sociedades o por lo encargados del tratamiento que ellas consideren necesarios. <br>
							<strong>3. USUARIOS DE LA INFORMACIÓN:</strong> Que los datos podrán ser compartidos, transmitidos, entregados, transferidos o divulgados para las finalidades mencionadas, a: i) Las personas jurídicas que tienen la calidad de filiales, subsidiarias o vinculadas, o de matriz de <strong>LA ASEGURADORA Y/O EL INTERMEDIARIO DE SEGUROS Y REASEGUROS.</strong> ii) Los operadores necesarios para el cumplimiento de derechos y obligaciones derivados de los contratos celebrados con <strong>LA ASEGURADORA Y/O EL INTERMEDIARIO DE SEGUROS</strong>, tales como: ajustadores, call centers, investigadores, compañías de asistencia, abogados externos, entre otros. iii) <strong>LOS INTERMEDIARIOS DE SEGUROS</strong><strong>LOS INTERMEDIARIOS DE SEGUROS</strong> que intervengan en el proceso de celebración, ejecución y terminación del contrato de seguro. iv) Las personas con las cuales <strong>LA ASEGURADORA Y/O EL INTERMEDIARIO DE SEGUROS</strong> adelante gestiones para efectos de celebrar contratos de Coaseguro o Reaseguro. v) <strong>FASECOLDA, INVERFAS S.A.</strong> y el INIF, personas jurídicas que administran bases de datos para efectos de prevención y control de fraudes, la selección de riesgos, y control de requisitos para acceder al Sistema General de Seguridad Social Integral, así como la elaboración de estudios estadísticos actuariales.<br> 
							<strong>4. TRANSFERENCIA INTERNACIONAL DE INFORMACIÓN A TERCEROS PAÍSES:</strong> Que en ciertas situaciones es necesario realizar transferencias internacionales de mis datos para cumplir las finalidades del tratamiento.<br> 
							<strong>5. DATOS PERSONALES DE NIÑAS, NIÑOS Y ADOLESCENTES:</strong> Que son facultativas las respuestas a las preguntas sobre datos de niñas, niños y adolescentes. En consecuencia, no hemos sido obligados a responderlas.<br>
							<strong>6. DERECHOS DEL TITULAR DE LA INFORMACIÓN:</strong> Que como titular de la información, nos asisten los derechos previstos en la Ley 1266 de 2008. En especial, el derecho a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre nosotros.<br>
							<strong>7. RESPONSABLES Y ENCARGADOS DEL TRATAMIENTO DE LA INFORMACIÓN: </strong>Que los Responsables del tratamiento de la información son LAS <strong>ASEGURADORAS Y/O LOS INTERMEDIARIOS</strong>, cuyos datos de contacto se incluyeron en el encabezado de esta autorización. En todo caso, los encargados del Tratamiento de los datos que se compartan, transfieran, transmitan, entreguen o divulguen, en desarrollo de lo previsto en el literal v) del numeral 3 anterior, serán:<br>
							a) FASECOLDA cuya dirección es Carrera 7 No. 26 - 20 Pisos 11 y 12, email: fasecolda@fasecolda.com Tel. 3443080 de la ciudad de Bogotá D.C. <br>
							b) INVERFAS S.A. cuya dirección es Carrera 7 No. 26 - 20 Piso 11, email: inverfas@fasecolda.com Tel. 3443080 de la ciudad de Bogotá D.C. <br>
							c) INIF - Instituto Nacional de Investigación y Prevención del Fraude al Seguro cuya dirección es Carrera 13 No. 37-43, piso 8, email: directoroperativo@inif.com.co Tel. 2320105 de la ciudad de Bogotá D.C.<br>
							<strong>III. AUTORIZACIÓN:</strong> De manera expresa, AUTORIZAMOS el Tratamiento de los datos y, de ser necesario, la transferencia nacional e internacional de los mismos, por las personas, para las finalidades y en los términos que nos fueron informados en este documento.<br><br>
							<strong>IV. CERTIFICACION: </strong>Manifestamos que la información suministrada por nosotros para las finalidades señaladas en este documento, puede contener datos personales de empleados, proveedores, colaboradores o clientes de la compañía, por lo cual certificamos de manera expresa que la misma, ha sido: i) obtenida de acuerdo con lo previsto en la legislación aplicable, particularmente en la Ley 1581 de 2012 y (ii) que, existen las autorizaciones necesarias de acuerdo con lo previsto en la
							legislación aplicable, para el tratamiento y circulación de esta Base de Datos por parte de LA(S) <strong>ASEGURADORA(S) Y/O LOS INTERMEDIARIOS</strong> señalados en este documento.
						</div>
                        <div class="col-sm-12">
							<div class="bg-gray2 d_b text-center paddingbottom10 paddingtop10 normal_text marginbottom10 margintop20">
								6. FIRMA Y HUELLA
							</div>
							<span class="bold">COMO CONSTANCIA DE HABER LEÍDO, ENTENDIDO Y ACEPTADO LO ANTERIOR, DECLARO QUE LA INFORMACIÓN QUE HE SUMINISTRADO ES EXACTA EN TODAS SUS PARTES Y FIRMO EL PRESENTE DOCUMENTO</span><br>
                        </div>                 
                        <div class="col-sm-8 paddingleft20 text-center">
                        <br>
                           <br>
                            <div>
								<div>______________________________________________________________________</div>
                            <span class="bold">FIRMA CLIENTE O REPRESENTANTE LEGAL</span>&nbsp;
                           <br>
                            </div>    
                        </div>
                        <div class="col-sm-4 text-right">
                        <div class="box_huella">

                        </div>
                        </div>
                    </div>					
					<div class="row">
						<div class="col-lg-2 marginbottom30 mmargintop30">
							<button type="input" id="saveContrato" class="button-generic">Actualizar</button>
						</div>
						<div class="col-lg-9 marginbottom30 mmargintop30 padding0">
							<button type="" onclick="javascript:void(0)" id="print_form" class="button-generic">Imprimir</button>
						</div>
					</div>                                   
                </div>
            </div>
        </div>
  	</div>
</div>
<div class="container_gray2 bordertop">
	<div class="container">
		<div class="row">
			<div class="text-left col-md-12 margintop30 marginbottom30">
				<div class="text_privacidad"> 
					En cumplimiento con lo dispuesto por la ley 1581 de 2012 se le informa que todos los datos personales proporcionados a Sekuritas S.A Corredores de Seguros serán tratados estrictamente de acuerdo con nuestra Política de Privacidad en los términos expresados en el  Aviso de Privacidad 
					<a href="http://www.sekuritas.co/index/" target="_blank">www.sekuritas.com.co</a> 
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container_black">
    <div class="container">
        <div class="row">
            <div class="text-left col-md-offset-0 col-md-4 margintop30 paddingbottom10"> 					
                <img src="../images/superintendencia1.jpg" alt="" /> 
            </div>
        </div>
    </div>
</div>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 



<script src="../js/jquery.js"></script> 
<script src="../js/jquery-ui.js"></script> 


<!-- Include all compiled plugins (below), or include individual files as needed --> 



<script src="../js/bootstrap.js"></script> 

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="../js/moment-with-locales.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/sekuritas.js" type="text/javascript" charset="utf-8"></script>



<!-- Fin Estilos para imprimir --> 



<!-- JS para imprimir --> 
	</body>
</html>