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

    <link rel="stylesheet" href="../css/960.css" type="text/css" media="screen">

    <link rel="stylesheet" href="../css/screen.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />

    <link rel="stylesheet" href="../css/print-preview.css" type="text/css" media="screen">

    <link rel="stylesheet" href="../css/jquery-ui.css" type="text/css" media="screen">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

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
<?php 

$fech_actual = Date('d-m-Y');

?>
<form id="form">
<input type="hidden" name="ac" value="saveFormulario">
<div class="container">

      <div class="row marginbottom10 margintop30 overflow">

    <div class="col-md-6 col-md-offset-0 col-sm-8 col-xs-6"> <img src="../images/logo.gif" alt="" class="img-responsive img-pantalla hidden-print" />

          <div style="width:60%; float:left;"> <img src="../images/logosekuritas.jpg" alt="" class="img-responsive img-impresion visible-print" /> </div>

        </div>

    <!--    <div class="col-md-12 col-xs-12">

      <img src="images/logo.png" alt="" class="img-responsive" />

    </div>

    --> 

  </div>

    </div>

<div class="bg-body">

<div class="container">
            <div class="row padding0"> 
                <div class="col-md-12 pull-right col-xs-12">
                    <div class="main_menu">      
                            <ul class="menu_items" id="menuP_mobile">
                                <li>
                                    <a href="#" class="active">INICIO</a> 
                                </li>
                                <li>
                                    <a href="quienes_somos.html">QUIENES SOMOS</a> 
                                </li>
                                <li>
                                    <a href="personas.html">PERSONAS</a> 
                                </li>
                                <li>
                                    <a href="empresas.html">EMPRESAS</a> 
                                </li>
                                <li>
                                    <a href="alianzas.html">ALIANZAS</a> 
                                </li>
                                <li>
                                    <a href="sucis.html">SUCIS</a> 
                                </li>                                
                                <li>
                                    <a href="clientes.html">CLIENTES</a> 
                                </li>     
                                <li class="h_desktop">
                                	<a href="#">
                                  <div class="link_contacto">
                                  <img src="images/icons/contacto.png" />
                                    contacto
                                  </div> 
                                  </a> 
                                </li>
                            </ul>
					</div>
				</div>
			</div>
        </div>

    <div class="container_white">

    	<div class="container"> 

            <div class="row margin0">

                <div class="col-md-12 col-md-offset-0">

                    <div class="main_title">

                        <div class="main_title_icon"> <img src="../images/icon_2.png" class="img-responsive" alt="" /> </div>

                        <div class="main_title_text light f39"> Seguro de vida </div>

                    </div>

                    <div class="main_title_text light f14 padding0"> 

                        Le recordamos la importancia de declarar el verdadero estado de salud al momento de diligenciar la solicitud de seguro. Favor leer con detenimiento la declaración de asegurabilidad contenida en el presente documento. 

                    </div>

                    <div class="separator"></div>

                    <div class="row">

                        <div class="col-md-12 col-md-offset-0">

                            <div class="main_table">

                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive">

                                  <thead>

                                    <tr>

                                      <td colspan="2"><strong>Fecha de diligenciamiento</strong></td>

                                      <td colspan="2"><div class="content_checkboxes">

                                          <input type="checkbox" id="box1" name="nov[]" value="ingreso"/>

                                          <label for="box1" ><span>Ingreso</span></label>

                                        </div></td>

                                      <td colspan="4"><div class="content_checkboxes">

                                          <input type="checkbox" id="box2" name="nov[]" value="aseg_princ"/>

                                          <label for="box2" ><span>Asegurado principal</span></label>

                                        </div></td>

                                      <td colspan="3" class="bg-gray"><strong>Póliza No.</strong></td>

                                    </tr>

                                    <tr>

                                      <td colspan="2">
                                      <div class="d-tc"><input type="text" value="<?php echo $fech_actual ?>" name="fech_solicutud" readonly /></div>
                                      <!--<input type="text" class="" id="datepicker"></td>-->
                                      <td colspan="2"><div class="content_checkboxes">

                                          <input type="checkbox" id="box3" name="nov[]" value="incremento"/>

                                          <label for="box3" ><span>Incremento de valor asegurado</span></label>

                                        </div></td>

                                      <td colspan="4"><div class="content_checkboxes">

                                          <input type="checkbox" id="box4" name="nov[]" value="familiar_aseg"/>

                                          <label for="box4" ><span>Familiar asegurado principal</span></label>

                                        </div></td>

                                      <td colspan="3" class="bg-gray">21286093</td>

                                    </tr>

                              </thead>

                              <tbody>

                                <tr>

                                      <td colspan="8" class="f14"><strong>Razón Social de la Entidad Tomadora:</strong> </td>

                                      <td colspan="3" class="f14"><strong>C.C o Nit</strong> </td>

                                </tr>

                                <tr>

                                  <td colspan="8" class="text-center" id="nom_emp"></td>

                                  <td colspan="3">
                                  <div class="d-tc">
                                  <select name="nit" id="nit" >
                                    
                                  </select>
                                  <!--<input type="text"  name="nit" id="nit"/>--></div></td>

                                </tr>

                                <tr>

                                  <td colspan="2" rowspan="2" class="f14"><strong>Nombre Solicitante del Seguro</strong></td>

                                  <td colspan="2" rowspan="2" class="f14"><strong>Primer Apellido</strong></td>

                                  <td rowspan="2" class="f14"><strong>Segundo Apellido</strong></td>

                                  <td rowspan="2"><div class="content_checkboxes">

                                      <input type="checkbox" id="cc" name="doc" class="identificacion" value="cc"/>

                                      <label for="cc" ><span><strong>CC</strong></span></label>

                                    </div></td>

                                  <td rowspan="2"><div class="content_checkboxes">

                                      <input type="checkbox" id="ce" name="doc" class="identificacion" value="ce" />

                                      <label for="ce" ><span><strong>CE</strong></span></label>

                                    </div></td>

                                  <td rowspan="2"><div class="content_checkboxes">

                                      <input type="checkbox" id="nuip" name="doc" class="identificacion" value="nuip"/>

                                      <label for="nuip" ><span><strong>NUIP</strong></span></label>

                                    </div></td>

                                  <td colspan="3" class="f14"> <strong>Fecha de Nacimiento</strong> </td>

                                </tr>

                                <tr>

                                      <td class="f14 text-center">D</td>

                                      <td class="f14 text-center">M</td>

                                      <td class="f14 text-center">A</td>

                                </tr>

                                <tr>

                                  <td colspan="2"><input type="text"  name="nombre"/></td>

                                  <td colspan="2"><input type="text"  name="primer_apellido" /></td>

                                  <td><input type="text"  name="segundo_apellido"/></td>

                                  <td colspan="3" class="f14">

                                  <div class="d-t">

                                    <div class="d-tc"><strong>No De Documento</strong>:</div>

                                    <div class="d-tc"><input type="text" name="doc_usuario"/></div>

                                  </div>

                                </td>

                                  <td class="text-center"><input type="text" name="dia"/></td>

                                  <td class="text-center"><input type="mes" name="mes"/></td>

                                  <td class="text-center"><input type="text" name="anio"/></td>

                                </tr>

                            <tr>

                                  <td colspan="2" class="f14"><strong>Dirección Particular</strong></td>

                                  <td colspan="2" class="f14"><strong>Teléfono</strong></td>

                                  <td class="f14"><strong>Ciudad</strong></td>

                                  <td colspan="3" class="f14"><strong>Valor Asegurado Actual</strong></td>

                                  <td colspan="3" class="f14"><strong>Solicitud de Incremento de valor asegurado</strong> </td>

                                </tr>

                            <tr>

                                  <td colspan="2"><input type="text"  name="direccion"/></td>

                                  <td colspan="2"><input type="text"  name="telefono"/></td>

                                  <td>
                                  <select name="ciudad" id="ciudad" style="width: 100%">
                                    
                                  </select>
                                  <!--<input type="text"  /></td>-->

                                  <td colspan="3"><input type="text"  name="cantidad_asignada"/></td>

                                  <td colspan="3"><input type="text"  name="incremento_solic" /></td>

                                </tr>

                            <tr>

                                  <td rowspan="2" class="f14"><strong>Sexo</strong></td>

                                  <td><div class="content_checkboxes">

                                      <input type="checkbox" id="masc" name="gen" class="genero" value="m"/>

                                      <label for="masc" ><span>M</span></label>

                                    </div></td>

                                  <td class="f14"><strong>Estatura</strong></td>

                                  <td class="f14"><strong>Peso</strong></td>

                                  <td colspan="3" class="f14"><strong>Ocupación actual detallada</strong></td>

                                  <td class="f14"><strong>Centro de costo</strong></td>

                                  <td colspan="3" class="f14"><strong>Deportes que practica</strong></td>

                                </tr>

                            <tr>

                                  <td><div class="content_checkboxes">

                                      <input type="checkbox" id="fem" name="gen" class="genero" value="f"/>

                                      <label for="fem" ><span>F</span></label>

                                    </div></td>

                                  <td class="text-right f14" ><input type="text"  class="w80" name="estatura"/><strong>Mts</strong></td>

                                  <td class="text-right f14"><input type="text"  class="w80" name="peso"/><strong>Kgs</strong></td>

                                  <td colspan="3"><input type="text"  name="ocupacion"/></td>

                                  <td><input type="text"  name="centro_costos"/></td>

                                  <td colspan="3"><input type="text"  name="deporte"/></td>

                                </tr>

                          </tbody>

                    </table>

                            </div>

                            <div class="main_table">

                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info">

                                      <tbody>

                                    <tr>

                                          <td colspan="6" class="bg-gray text-center f15"><strong>CUADRO DE BENEFICIARIOS</strong></td>

                                        </tr>

                                    <tr>

                                          <td class="text-center"><strong>PRIMER APELLIDO</strong></td>

                                          <td class="text-center"><strong>SEGUNDO APELLIDO</strong></td>

                                          <td class="text-center"><strong>NOMBRES</strong></td>

                                          <td class="text-center"><strong>No. DOCUMENTO IdDENTIDAD</strong></td>

                                          <td class="text-center"><strong>% PARTICIPACIÓN</strong></td>

                                          <td class="text-center"><strong>PARENTESCO</strong></td>

                                        </tr>

                                    <tr>

                                          <td><input type="text"  name="primer_ap1"/></td>

                                          <td><input type="text"  name="segundo_ap1"/></td>

                                          <td><input type="text"  name="nombre1"/></td>

                                          <td><input type="text"  name="documento_ap1"/></td>

                                          <td><input type="text"  name="porcentaje1"/></td>

                                          <td><input type="text"  name="parentezco1"/></td>

                                        </tr>

                                    <tr>

                                          <td><input type="text"  name="primer_ap2"/></td>

                                          <td><input type="text"  name="segundo_ap2"/></td>

                                          <td><input type="text"  name="nombre2"/></td>

                                          <td><input type="text"  name="documento_ap2"/></td>

                                          <td><input type="text"  name="porcentaje2"/></td>

                                          <td><input type="text"  name="parentezco2"/></td>

                                        </tr>

                                    <tr>

                                          <td><input type="text"  name="primer_ap3"/></td>

                                          <td><input type="text"  name="segundo_ap3"/></td>

                                          <td><input type="text"  name="nombre3"/></td>

                                          <td><input type="text"  name="documento_ap3"/></td>

                                          <td><input type="text"  name="porcentaje3"/></td>

                                          <td><input type="text"  name="parentezco3"/></td>

                                        </tr>

                                    <tr>

                                          <td><input type="text"  name="primer_ap4"/></td>

                                          <td><input type="text"  name="segundo_ap4"/></td>

                                          <td><input type="text"  name="nombre4"/></td>

                                          <td><input type="text"  name="documento_ap4"/></td>

                                          <td><input type="text"  name="porcentaje4"/></td>

                                          <td><input type="text"  name="parentezco4"/></td>

                                        </tr>

                                  </tbody>

                                    </table>

                            </div>

                            <div>

                                <div class="f14 text-gray marginbottom10" style="font-weight:normal;"> Marque X<br>

                                    Yo, el abajo firmante, declaro que:<br>

                                    <div class="content_checkboxes">
                                    <input type="checkbox" name="careGood" id="careGood"/><label for="careGood" ><span>En la fecha me encuentro en buen estado de salud y mi habilidad no se encuentra de alguna manera reducida.</span></label>
                                    </div>
                                    <br>

                                    Padezco o he padecido las lesiones o enfermedades que a continuación marco: 

                                </div>

                                <div class="main_table">

                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_enfer" id="table_enfer">

                                    <tbody>

                                          <tr>

                                        <td width="29%"><div class="content_checkboxes">

                                            <input type="checkbox" id="Mentales" name="enferm[]" value="mental_psiqui"/>

                                            <label for="Mentales" ><span>Mentales - psiquiátricas</span></label>

                                          </div></td>

                                        <td width="24%"><div class="content_checkboxes">

                                            <input type="checkbox" id="Gastrointestinales" name="enferm[]" value="grastroint"/>

                                            <label for="Gastrointestinales" ><span>Gastrointestinales</span></label>

                                          </div></td>

                                        <td width="26%"><div class="content_checkboxes">

                                            <input type="checkbox" id="Drogadiccion" name="enferm[]" value="drogadiccion"/>

                                            <label for="Drogadiccion" ><span>Drogadicción</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Tabaquismo" name="enferm[]" value="tabaquismo"/>

                                            <label for="Tabaquismo" ><span>Tabaquismo</span></label>

                                          </div></td>

                                        <td width="2%"><div class="content_checkboxes">

                                            <input type="checkbox" id="Alcoholismo" name="enferm[]" value="alcoholismo"/>

                                            <label for="Alcoholismo" ><span>Alcoholismo</span></label>

                                          </div></td>

                                      </tr>

                                          <tr>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Cardiovasculares" name="enferm[]" value="cardiovascu"/>

                                            <label for="Cardiovasculares" ><span>Cardiovasculares</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Cerebrovasculares" name="enferm[]" value="cerebrovascu"/>

                                            <label for="Cerebrovasculares" ><span>Cerebrovasculares</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Hipertension" name="enferm[]" value="hipertension"/>

                                            <label for="Hipertension" ><span>Hipertensión Arterial</span></label>

                                          </div></td>

                                        <td>Cigarrillos Diarios

                                              <div class="content_checkboxes">

                                            <input type="checkbox" id="menos" name="enferm[]" value="cincomenoscigarrillo"/>

                                            <label for="menos" ><span>5 o menos</span></label>

                                          </div></td>

                                        <td> Tragos Semanales

                                              <div class="content_checkboxes">

                                            <input type="checkbox" id="menos-alc" name="enferm[]" value="cincomenosalc"/>

                                            <label for="menos-alc" ><span>5 o menos</span></label>

                                          </div></td>

                                      </tr>

                                          <tr>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Pulmonares" name="enferm[]" value="pulmonares"/>

                                            <label for="Pulmonares" ><span>Pulmonares</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Artritis" name="enferm[]" value="artritis"/>

                                            <label for="Artritis" ><span>Artritis</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Cancer" name="enferm[]" value="cancer"/>

                                            <label for="Cancer" ><span>Cáncer</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="mas" name="enferm[]" value="veinteunomascig"/>

                                            <label for="mas" ><span>21 o mas</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="mas-alc" name="enferm[]" value="veinteunomasalc"/>

                                            <label for="mas-alc"><span>21 o mas</span></label>

                                          </div></td>

                                      </tr>

                                          <tr>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Renales" name="enferm[]" value="renales"/>

                                            <label for="Renales" ><span>Renales</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Sida" name="enferm[]" value="sida"/>

                                            <label for="Sida" ><span>Sida</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="Diabetes" name="enferm[]" value="diabetes"/>

                                            <label for="Diabetes" ><span>Diabetes</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="mas6" name="enferm[]" value="seisveintecig"/>

                                            <label for="mas6" ><span>6 a 20</span></label>

                                          </div></td>

                                        <td><div class="content_checkboxes">

                                            <input type="checkbox" id="mas6-alc" name="enferm[]" value="seisveintealc"/>

                                            <label for="mas6-alc" ><span>6 a 20</span></label>

                                          </div></td>

                                      </tr>

                                        </tbody>

                                  </table>

                                </div>

                                <div class="f14 text-gray marginbottom10 margintop20" style="font-weight:normal;"> 

                                    En caso de haber padecido alguna enfermedad de las mencionadas anteriormente explique: 

                                </div>

                                <div class="main_table">

                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_info table-responsive">

                                    <tbody>

                                    <tr>

                                        <td>Enfermedad<input type="text"  class="w60 margin-left10" name="enfermedad1"/></td>

                                        <td>Año diagnostico<input type="text"  class="w60 margin-left10" name="anio_diag1"/></td>

                                        <td>Tratamiento<input type="text"  class="w60 margin-left10" name="tratamiento1"/></td>

                                    </tr>

                                    <tr>

                                        <td>Enfermedad<input type="text"  class="w60 margin-left10" name="enfermedad2"/></td>

                                        <td>Año diagnostico<input type="text"  class="w60 margin-left10" name="anio_diag2"/></td>

                                        <td>Tratamiento<input type="text"  class="w60 margin-left10" name="tratamiento2"/></td>

                                    </tr>

                                    </tbody>

                                </table>

                                </div>

                                <div class="f10 text-gray marginbottom10" style="font-weight:normal;"> 

                                    *En caso de no haber marcado ninguna de las enfermedades entonces se entenderá que me encuentro en buen estado de salud. 

                                </div>

                                <div class="f14 text-gray marginbottom10" style="font-weight:normal;"> 

                                    <span class="f16 bold"> DECLARACION DE AUTORIZACION</span><br>

                                    Declaro que he leído, entiendo y acepto la información contenida en la presente solicitud individual de seguro, que tengo conocimiento que la póliza se otorgará en consideración a la veracidad de estas declaraciones; y que en el evento de no coincidir ellas  estrictamente con la realidad, el seguro otorgado quedará viciado de nulidad en los términos del artículo 1058 del código de comercio. Autorizo a la aseguradora para que use, consulte y/o reporte a las centrales de información de riesgos , cualquier información relativa a mis hábitos de pago, al cumplimiento que se he dado a mis obligaciones y mi información comercial disponible. Sin perjuicio de lo estipulado por el artículo 34 de la ley 23  de 1981, autorizo a la aseguradora para acceder a mis historias clínicas y demás documentos sobre mi estado de salud, y a los médicos y entidades hospitalarias para que suministren a dicha aseguradora tales documentos, aun después de mi fallecimiento.  Declaro que desarrollo en forma normal mis actividades, que mi profesión u oficio son lícitos y que no tengo ni he tenido amenaza de secuestro o en contra de mi integridad personal en los últimos tres (3) años. declaro que conozco y acepto las condiciones particulares y generales de la póliza de vida grupo a que accede  esta solicitud. 

                                </div>

                                <div class="f14 text-gray marginbottom10" style="font-weight:normal;">

                                    <span class="f16 bold"> TRATAMIENTO DE DATOS PERSONALES</span><br>

                                    Autorizo de manera expresa a Allianz Seguros de vida S.A. y las Compañías del Grupo Allianz para tratar mis datos personales, es decir, realizar operaciones sobre los mismos, como recolección, almacenamiento, uso, reporte, circulación o transferencia. Así mismo, las autorizo para que permitan su tratamiento a: Quiénes sean sus representantes o con quienes celebre contratos de transmisión de datos; Intermediarios, reaseguradores, coaseguradores, FASECOLDA, y sus filiales, operadores y prestadores necesarios para el cumplimiento de los contratos; Encargados dentro y fuera del territorio nacional. Autorizo el tratamiento de mis datos sensibles, en especial, los relativos a la salud y biométricos y entiendo que las preguntas que me hagan sobre estos datos o los de niños (as) y adolecentes, tienen carácter facultativo. Declaro que conozco los fines para los cuales serán tratados mis datos o los de la persona que represento así: (i) Atención de solicitudes, gestión del seguro y de contratos con las compañías; (ii)Control y prevención del fraude; (iii) Oferta de productos o servicios de las compañías o terceros vinculados, encuestas y otros fines comerciales, financieros o publicitarios a través de mensajes de texto, correo electrónico, SMS, entre otros; (iv) Fines estadísticos, de consulta, gremiales y técnicos, así como para fines tributarios, incluidas las autoridades de otros países. Como titular de la información, conozco que me asisten los derechos previstos en la ley, en especial, conocer, actualizar y solicitar la supresión de mis datos. Los responsables del tratamiento son las compañías de Grupo Allianz, ubicadas en la carrera 13A No. 29-24, piso 16 de Bogotá: teléfono en Bogotá 6065903 y a nivel nacional: 018000514405 - opción 2. 

                                </div>

                                <div class="f14 text-gray marginbottom10" style="font-weight:normal;"> 

                                    <span class="f14 bold"> DECLARACION:</span> 

                                    Todos los datos aquí consignados son ciertos, la información que adjunto es veraz y verificable y autorizo su verificación ante cualquier persona, sin limitación alguna, y me obligo a actualizar o confirmar la información una vez al año o cada vez que un producto o servicio lo amerite. Autorizo irrevocablemente durante la vigencia del contrato del seguro que llegare a celebrar con Allianz Seguros de Vida S.A. y por diez años mas después de finalizada la vigencia del mismo a los médicos, clínicas, hospitales, EPS y demás establecimientos que me hayan brindado atención en servicio de salud, para suministrar la información sobre mi historia clínica y/o estado de salud que Allianz Seguros de Vida S.A. les solicite, aun después de mi fallecimiento. <br>

                                <br>

                                    

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-7 col-md-6">

<span class="bold">En constancia de comprensión y conformidad con lo anterior, firma</span><br>

                                El diligenciamiento y suscripción de la presente solicitud  individual de seguro no compromete de ningún modo a la Aseguradora, ni implica obligación alguna de otorgar el Seguro de Vida al que accede. La Aseguradora se reserva el derecho de otorgar la cobertura una vez evaluada y verificada la información aquí consignada por el solicitante del seguro. 

                        

                        </div>                    

                        <div class="col-lg-3 col-md-4 paddingleft20">

                        <br>

                           <br>

                            <div>

                            <span class="bold">Firma</span>&nbsp;_______________________________________

                           <br>

                           <br>

                            <span class="bold">CC</span>&nbsp;&nbsp;_______________________________________

                            

                            </div>                    

                        </div>

                        <div class="col-lg-2 col-md-2">

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
<script src="../js/sekuritas.js" type="text/javascript" charset="utf-8"></script>

<!-- Fin Estilos para imprimir --> 

<!-- JS para imprimir --> 



<script type="text/javascript">

	$(document).ready(function(){

		 

		$('.menu_mobile').click(function(){

		$('#menuP_mobile').stop( true, false).slideToggle();

		$('.mobile_menu').stop( true, false).toggleClass('active_m');

	   });

	   

	   

	   $('.arrow_menu').click(function(){

		   $('#submenu_mobile2').slideUp();

		   $('.arrow_menu2').removeClass('arrow_menu_b2');

		   $('#submenu_mobile').stop( true, false).slideToggle("slow");

		   $('.arrow_menu').stop( true, false).toggleClass('arrow_menu_b');

	   });

	   

	   

	   $('.arrow_menu2').click(function(){

		   $('#submenu_mobile').slideUp();

		   $('.arrow_menu').removeClass('arrow_menu_b');

		   $('#submenu_mobile2').stop( true, false).slideToggle("slow");

		   $('.arrow_menu2').stop( true, false).toggleClass('arrow_menu_b2');

	   });

		$( "#datepicker" ).datepicker({
      dateformat: 'dd/mm/yy',
			inline: true,
      firstDay: 1

		}).datepicker("setDate", new Date());	   

	});

</script>

</body>

</html>

