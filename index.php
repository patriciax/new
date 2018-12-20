<?php 
include 'enlaces.php';
include 'conectar.php';
$conexion = conectarse();
$rows = enlaces('rows');
sort($rows);
foreach ($rows as $valor) {
	$patrocinadores = $valor['patrocinadores'];
	$url = $valor['url'];
	$type = $valor['type'];
	$title = $valor['title'];
	$description = $valor['description'];
	$image = $valor['image'];
	$maincolor = $valor['maincolor'];
	$secondcolor = $valor['secondcolor'];
	$textshadow = $valor['textshadow'];
	$borde = $valor['borde'];
	$letrascolormenu = $valor['letrascolormenu'];//color de las letras de los labels
	$politicaprivacidadcolor = $valor['politicaprivacidadcolor'];
	$bannerpremio = $valor['bannerpremio'];
	$premio = $valor['premio'];
	$bannersrc = $valor['bannersrc'];
	$iconosrc = $valor['iconosrc'];
		// $facebook_appId = $valor['facebook_appId'];
		// $facebook_version= $valor['facebook_version'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107221585-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107221585-3');
</script>


	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<title>Concurso Mania &#8211; Concursos y Sorteos Gratis en España</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

	<link rel='stylesheet' href='assets/css/bootstrap.min.css'/>
	<link rel='stylesheet' href='assets/css/animate.min.css'/>
	<link rel='stylesheet' href="assets/css/font-awesome.min.css"/>
	<link rel='stylesheet' href="assets/css/style.css"/>

	<!-- Simple Line Icons-->
	<link rel="stylesheet" href="assets/css/simple-line-icons.css"/>    

	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/css/animate.css"/>  

	<!-- Fonts -->

	<link href="assets/css/cookie.css" rel="stylesheet"/>    
	<link rel="shortcut icon" href="" type="image/vnd.microsoft.icon" />

	<!--/////////////////// CSS DEL LEAD //////////////////////// -->
	<link rel="stylesheet" type="text/css" href="assets/leadstyle.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

	<script src="assets/leadjs.js"></script> 

	<style>
	.tooltiptext {
	display:none;
    width: 200px;
    background-color: #fff;
    color: black;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
	margin-top:5px;
	font-size: 10px;

    /* Position the tooltip */
    position: absolute;
    z-index: 10;
	
	box-shadow: 1px 1px 1px 1px black;
	}
  .rad{
    border-radius: 3px;
  }

</style>
</head>

<style>

.dl{
	background-color:<?= $maincolor ?>;
}

label{
	color:<?= $letrascolormenu ?>;
}

.text-center{
	color:<?= $letrascolormenu ?>;
}

<?php
$stroke = '0px';
$stroke2 = '0px';
$sombra = '1px';
?>

.premio{
	text-shadow: -<?= $stroke ?> 0 <?= $sombra ?> <?= $borde ?>, 0 <?= $stroke ?> <?= $sombra ?> <?= $borde ?>, <?= $stroke ?> 0 <?= $sombra ?> <?= $borde ?>, 0 -<?= $stroke ?> <?= $sombra ?> <?= $borde ?>;
	color: red;
}


img{
	max-width:100%;
	height: auto;
}

</style>

<?php
$ano = date("Y");
$mes = date("m");
$dia = date("d");
$rest_año = ($ano - 18);
$fecha_rest = "$rest_año-$mes-$dia";
?> 

<body >



<div id="notification" style="display: none;">
  <span class="dismiss"><a title="dismiss this notification">x</a></span>
</div>

<!-- Intro
  ================================================== -->  
    <!--Header section  -->    
    <div id="home" >
				<img src="assets/img/banner/logoa.png" alt=""     width="60%" style="    padding: 50px 0 30px;display:none" class="logo2" >   
			<div class="container-full franja">
								  <h1 class="lighter wow rubberBand" data-wow-duration="1s" data-wow-delay="0.1s"><font > <?= $bannerpremio ?></font></h1> 
							 </div>
    <div class="container" >
        <div class="row home1">
            <div class="col-md-8 col-sm-6 col-xs-12"  id="maintext">
               
                <div class="col-md-6 col-sm-12 col-xs-12 " style="display:none">
                   <img src="<?= $iconosrc ?>" >
                </div> 
                <div class="col-md-6 col-sm-12 col-xs-12 ">
                 <div class="">
									   <h2 class="premio lighter wow  fadeInLeft" ><?= $premio ?></h2>
								 </div>
                </div>                     
            </div>  		
            <div class="col-md-4 col-sm-6 col-xs-12">
			
<!-- /////////////////////////////////////////////////////// PRIMER CUESTIONARIO-->  
           			<img src="assets/img/banner/logoa.png" alt=""     width="60%" style="    padding: 50px 0 30px;" class="logo1" >     
           

								 <div class="dl">   
								                               
                    <form action="reg/" method="POST" name="fvalida"  onSubmit="return false;">  
                        <div id="flotante" > 
                            <div class="row">  
                              
                                  <h4 class="text-center">REGÍSTRATE AHORA</h4>
								  								  
					  <!-- <div class="row">
					  	<div class="col-md-12">
					  		<div class="fblogbutton m" onclick="login()">
							Autocompletar
					  </div>
					  	</div>
					  </div> -->
						<!--primer segmento-->	  
                                    <div class="descr col-md-12  ">
                                       <div class="form-group">                                   
                                          <input  maxlength="100" type="text" name="nombre" class="rad form-control" placeholder="Nombre*" pattern="[A-Z,a-z]{1,15}" />
                                          <span class="tooltiptext">Debe rellenar el campo</span>
                                       </div>   
                                       <div class="form-group">
                                          <input  maxlength="100" type="text" name="apellido" class="rad form-control" placeholder="Apellidos*" pattern="[A-Z,a-z]{1,15}" />
                                          <span class="tooltiptext">Debe rellenar el campo</span>
                                       </div> 
                                       <div class="form-group">
                                          <input maxlength="100" type="text" name="email" id="email" class="rad form-control" placeholder="Correo electronico" onblur="validaemail(fr.email)" /><p ></p>
                                          <span class="tooltiptext">Debe rellenar el campo</span>
                                       </div>                                                                    
                                    </div> 
                                 
                                   
                                    <!-- <div class="col-md-12 col-lg-6">
                                       <div class="form-group">
                                          <label>Sexo</label><br>
                                          <select name="sexo" class="rad form-control">
                                             <option value="">Seleccione</option>
                                             <option value="M">Masculino</option>
                                             <option value="F">Femenino</option>
                                          </select>
                                          <span class="tooltiptext">Debe rellenar el campo</span>
                                       </div>   
                                    </div>                                   -->

                                  <div class="col-md-12">
                                        <div class="form-group">
                                            
                                            <!-- <p class="aviso" style="color:<?= $politicaprivacidadcolor ?>"><label><input type="checkbox" value="0" name="termin" id="termin" />
																						<span class="tooltiptext">Debe rellenar el campo</span></label>Acepto las <a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-condi">Condiciones del Sorteo</a>, la totalidad de condiciones el <a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-aviso">Aviso Legal</a> incluidas de forma expresa Titularidad, Condiciones Generales de Uso, Política de Cookies y <a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-politica">Política de Privacidad</a></p>        -->
																						
																						<p class="aviso" style="color: rgb(255, 255, 255);
    font-weight: 800;"><label><input type="checkbox" value="0" name="termin" id="termin">
							<span class="tooltiptext">Debe rellenar el campo</span></label>Acepto las <a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-condi">politicas de privacidad</a>, y de <a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-aviso">Cookies</a> de MDirector </p>
                                            <!-- <p class="aviso" style="color:<?= $politicaprivacidadcolor ?>"><label><input type="checkbox" value="0" name="termin2" id="termin2" />
                                            <span class="tooltiptext">Debe rellenar el campo</span></label> Acepto la  cesión de datos a terceros con las finalidades de recibir comunicaciones comerciales del Titular y los 
                                            <a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-patrocinadores">Patrocinadores. selecciona de esta lista.</a></p>                                          -->
                                        </div>
                                  </div>   
                                        <div class="form-group s" style="text-align:center">
																				
																					<a href="#" type="button" onclick="valida_envia(); enviar();" class="opbutton ">REGISTRAR</a>
																				
                                        </div>

                            </div>                                  
                        </div>
						
                        <!-- //////////////////////////////////////////////// SEGUNDO CUESTIONARIO -->
                        <div id="flotante2" style="display:none;">
                            <div  class="row">  
                                  <div class="discount alizarin">                
                                     <div class="type">
                                         ¿Serás nuestro próximo ganador?
                                      </div>
                                  </div><br>
                                  <h4 class="text-center">¿Quién recibirá el premio?</h4>
                                  <div class="descr col-md-12 ">
                                   <div class="form-group">
                                    <input id="first_name" class="form-control" name="codigo_postal" class="text-medium" validate="text" placeholder="Código Postal" type="text">
                                    <span class="tooltiptext">Debe rellenar el campo</span>
								   </div>                                                               
                                   <div class="form-group">
                                    <input maxlength="9" id="first_name" class="form-control" name="telefono" class="text-medium" validate="text" placeholder="Teléfono" type="text" pattern="^[9|8|7|6]\d{8}$">
                                    <span class="tooltiptext">Debe rellenar el campo</span>
								   </div>                                   
                                  </div>                                   
                                  <div class="col-sm-12">          
                                        <div><br><br><br><br></div>
                                        <div class="form-group">
                                            <button class="opbutton" type="button" onclick="form2valida(); enviar();">Continuar</button>
                                        </div>                                                                         
                                    </div>  
                            </div>                     
                        </div>  <!-- FIn Section2 -->                  
                    </form> 
      
										</div> <!-- FIN D! -->    
									

										</div>     
                
            </div>                       
        </div>
		</div>
			<div class="franja2">
				<h2>¡Regístrate , Pide Presupuesto Y Participa en el Sorteo!</h2>
    </div>
<section id="about" >
<div class="wrapsection">
  <div class="container">
    <div class="row">
      <small>Concurso gratuito sin obligación de compra - Ganador determinado por sorteo de conformidad a condiciones de sorteo - Fotos no contractuales -<a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-condi"> Condiciones del Sorteo </a> -<a target="_blank" href="href=#" data-toggle="modal" data-target="#login-modal-aviso"> Aviso Legal </a></small>    
    </div>
  </div>
</div>
</section>

<!--//BLOQUE COOKIES-->
<div id="barraaceptacion" class="container-fluid">
  <div class="row inner">
    <br>Este Sitio Web utiliza cookies propias y de terceros para mejorar la experiencia de navegación del Usuario y realizar análisis estadísticos sobre su utilización. Si continúa navegando se considerará que acepta la totalidad de condiciones del <a href="#" data-toggle="modal" data-target="#login-modal-aviso" class="info">AVISO LEGAL</a>, incluida la Política de Cookies. Pulse Aceptar para dejar de visualizar este mensaje.
    <a href="javascript:void(0);" class="ok" onClick="PonerCookie();"><b>Aceptar</b></a>   
  </div>
</div>

<!--//FIN BLOQUE COOKIES-->
  <!-- patrocinadores -->
<?php 

$consulta = "SELECT * FROM $patrocinadores";
$resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");
?>
<div class="modal fade" id="login-modal-patrocinadores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="loginmodal-container2">
			<span class="dismiss"><a data-dismiss="modal" >x</a></span>
			<div class="modal-header">
				<h5 class="modal-title">Patrocinadores </h5>
			</div>
			<p>
				<input type="checkbox" id="marcarTodo" name="marcarTodo" checked>
				<label for="marcarTodo" id="boton">Darme de baja  de todos los patrocinadores</label>
			</p>
			<div class="modal-body">
				<form action="reg/patrocinadores.php" method="post" id="formid">
				<?php 
			while ($columna = mysqli_fetch_array($resultado)) {
				echo
					'
					<div class="contenido">
						<div class="patrocinante">
							<div id="img" >
								<img src="' . $columna['fotoPatrocinador'] . '" alt="">
							</div>
							<div id="datosPatro">
								<h5>' . $columna['nombPatrocinador'] . '</h5>
								<p><strong>CFI: </strong>' . $columna['cfi'] . '</p>
								<p>' . $columna['direccionPatrocinador'] . '</p>
								<p><strong>Aviso Legal: </strong><a href="' . $columna['avisoLegal'] . '" target="_blank">' . $columna['avisoLegal'] . '</a></p>
							</div>
						</div>
						<div id="aceptar">
							<input type="checkbox" checked name="checkAceptar[]" id="checkAceptar" value="' . $columna['idPatrocinador'] . '">
							<label>Acepto que obtenga mis datos</label>
						</div>
					</div>
				';
			}
			?>
				</form>
			</div>
		</div>
	</div>
</div>

   <!-- Condiciones del Sorteo -->
   <div class="modal fade" id="login-modal-politica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
		<span class="dismiss"><a  data-dismiss="modal" >x</a></span>
      <!-- Fin Modal -->
<h4>Política de privacidad</h4><br><br>

<p><strong>1. Responsables:</strong></p>

A continuación se identifica al Responsable del tratamiento de los datos recabados por medio de este Sitio Web:<br><br>

VRASUR DIGITAL S.L. con NIF: B11939923 con domicilio en Ctra. De Lebrija, 10, 3ª Planta. Centro de Negocios Sojetel. 11.407. Jerez de la Frontera. Cádiz. Registro Mercantil de Cádiz: Tomo: 2223, Folio 117, Inscripción: 1º, hoja: CA 51265.<br><br>
   
El usuario puede consultar permanentemente el listado de entidades PATROCINADORAS y acceder a sus respectivas políticas de privacidad <a href="#"> aquí</a>.<br><br>

<p><strong>2. Finalidad:</strong></p>

Los datos personales del usuario de este Sitio Web se tratarán para las siguientes finalidades:<br><br>

1. Posibilitar y gestionar la participación del usuario en los concursos, sorteos y promociones ofertados en el Sitio Web.<br><br>

Los datos tratados con esta finalidad se conservarán durante todo el tiempo de vigencia del concurso, sorteo o promoción en que el usuario decida participar y, tras ello, durante los tres años legalmente previstos para la prescripción de las infracciones muy graves en materia de protección de datos personales.<br><br>

2. Mantener informado al usuario, incluso por medios electrónicos, acerca de los productos, servicios y novedades de VRASUR y los de terceras empresas pertenecientes a los siguientes sectores de actividad:<br><br>

• Financiero: Prestados por entidades financieras, Aseguradoras y de Previsión social.  Intermediación financiera e intermediación de seguros.<br><br>

&nbsp; Ocio: Editorial, Turismo, Deportes, Coleccionismo, Fotografía, Pasatiempos, Juguetería, Transporte, Jardinería, Hobbies, Ocio para adultos, Comunicación y entretenimiento, Viajes.<br><br>

• Formación: Educación.<br><br>

• Gran consumo: Electrónica, Informática, Textil, Moda, Imagen y Sonido, Complementos, Hogar, Bazar, Droguería y limpieza, Cuidado personal (Cosmética, Perfumería, Parafarmacia, especialidades Farmacéuticas publicitarias), electrodoméstico y menaje, joyería y electrónica, Mobiliario y decoración, Alimentación y Bebidas, Material de oficina.<br><br>

• Telecomunicaciones: Productos y Servicios de telecomunicaciones y tecnología (Internet, Televisión, Telefonía).<br><br>

• Automoción: Productos y Servicios relacionados con el Automóvil, Motocicletas, Camiones.<br><br>

&nbsp; Energía y agua: Productos relacionados con la Electricidad, Hidrocarburos, Gas y Agua.<br><br>

• ONG: Productos y Servicios relacionados con ONGs.<br><br>

• Juegos: Loterías, peñas de loterías, apuestas y sorteos.<br><br>

• Servicios de salud. Óptica y optometría, salud  bucodental.<br><br>

• Propaganda electoral.<br><br>

Los datos tratados con esta finalidad se conservarán hasta el momento en que el usuario retire su consentimiento dado para la recepción de dichas comunicaciones, o ejerza el derecho de supresión.<br><br>

3. Comunicar los datos del usuario a empresas pertenecientes a los sectores de actividad antes indicados, para que puedan mantener informado al usuario, incluso por medios electrónicos, acerca de sus productos, servicios y novedades.<br><br>

Los datos tratados con esta finalidad se conservarán hasta el momento en que el usuario retire su consentimiento dado para la comunicación de sus datos, o ejerza el derecho de supresión.<br><br>

<strong>El usuario sabe y acepta que la participación en los concursos, sorteos y promociones ofertados en el Sitio Web está obligatoriamente condicionada a la plena aceptación inicial de todas las finalidades antes indicadas. En caso de no aceptar tal condición, el usuario debe abstenerse de participar en dichos concursos, sorteos y promociones.</strong><br><br>

<p><strong>3. Legitimación</strong></p>

La base jurídica para llevar a cabo los tratamientos de datos especificados en el apartado anterior es la siguiente:<br><br>

• El consentimiento del usuario dado para su participación en los concursos, sorteos y promociones ofertados en el Sitio Web.<br><br>
• El consentimiento del usuario dado para la recepción de dichas comunicaciones.<br><br>
• El consentimiento del usuario dado para la comunicación de sus datos.<br><br>

<p><strong>4. Destinatarios</strong></p>

De conformidad con lo previsto en la finalidad de tratamiento 3ª, los datos recogidos para los concursos, sorteos y promociones ofertados en el Sitio Web podrían ser comunicados a Notarios encargados de la realización del sorteo, y/o a puntos de venta de los productos sorteados y/o regalados.<br><br>

Los datos captados para ser comunicados a terceras empresas, organizaciones y/o entidades interesadas en llevar a cabo acciones publicitarias se comunicarán a las empresas pertenecientes a los sectores de actividad especificados.<br><br>

<strong>5. Derechos</strong>

El usuario puede ejercer ante VRASUR los siguientes derechos relacionados con sus datos personales: acceso; rectificación; supresión; limitación del tratamiento; portabilidad de los datos y oposición.<br><br>

De igual modo, en los tratamientos de los datos del usuario cuya legitimación se basa en el consentimiento dado por el usuario, éste tiene el derecho a retirar dicho consentimiento en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada.<br><br>

El usuario puede ejercer sus derechos dirigiéndose directa y gratuitamente a la siguiente dirección de correo electrónico <strong>ejercicioderechoS@vrasur.com</strong> indicando en el asunto <strong>“EJERCICIO DE DERECHOS”</strong> o mediante comunicación escrita a la siguiente dirección: VRASUR DIGITAL, S.L. con domicilio en Ctra. De Lebrija, 10, 3ª Planta. Centro de Negocios Sojetel. 11.407. Jerez de la Frontera. Cádiz, España. Su solicitud deberá incluir fecha, nombre y apellidos, petición en que se concreta la solicitud, dirección a efectos de notificaciones. Con el fin de disipar cualquier duda razonable sobre la identidad de la persona física que cursa la solicitud, se solicita la aportación del DNI o documento de naturaleza análoga o similar, para confirmar la identidad del mismo.<br><br>
      </div>
	  </div>
	  </div>
	  
<div class="modal fade" id="login-modal-condi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
		<span class="dismiss"><a data-dismiss="modal" title="dismiss this notification">x</a></span>
      <!-- Fin Modal -->
<h4>Condiciones del Sorteo</h4><br><br>

<p><strong>1. Organizador de la Promoción</strong></p>
 

VRASUR DIGITAL S.L, en adelante “El Organizador”, con NIF: B11939923 con domicilio en Av. de Lebrija N°10 Centro de Negocios 1407 Jerez de la Frontera-Cádiz, sociedad inscrita en el Registro Mercantil de Cádiz Tomo: 2223, Folio 117, Inscripción:1º, hoja: CA 51265 como empresa organizadora del sorteo promocional, convoca y efectúa a nivel mundial la promoción denominada “captación de leads” a través de la participación en el mismo disponible o accesible a través de los sitios web del organizador y que se relacionan a continuación:<br><br>

<p><strong>2. Participación y Reglas de la promoción</strong></p>
Para participar en la promoción es necesario que el participante sea persona física, mayor de edad, con residencia legal en España o acreditación de la misma y que haya aceptado las presentes bases legales así como el resto de condiciones asociadas a dicha participación. No podrán ser ganadores u optar al premio de la promoción, aun cumpliendo los requisitos precedentes, aquellos trabajadores y familiares de éstos que pertenezcan a la entidad que conforma El Organizador y empresas vinculadas o asociadas a aquellos así como todas aquellas personas pertenecientes a las empresas que, directa o indirectamente, se encuentren vinculadas en la promoción o formen parte en la realización del mismo, aglutinándose dentro de éstos los distintos patrocinadores y/o proveedores de servicios, tales como: El Notario si fuera necesario designar para la protocolización de estas bases, ni ninguno de los empleados de dicha Notaría; Los dueños y empleados de los partners comerciales que trabajen con El Organizador; Cualquier otra persona física que haya participado directa o indirectamente en esta Promoción o haya estado involucrado directa o indirectamente en su preparación o desarrollo (agencia, proveedores, etc.)<br><br>

La participación es gratuita, debiendo completar todos los campos que, a tal efecto, se disponen, con datos veraces y exactos, durante las fechas y horas que estará vigente la participación: las 00:00 del día 01 de Diciembre del 2017 hasta las 23:59 del 31 de diciembre del 2018. Fuera del presente rango temporal no se ostentará la condición de participante y, por tanto, no podrá optar al premio de la promoción. 
<br><br>

El hecho de participar en la presente promoción supone aceptar íntegramente lo dispuesto en las presentes Bases Legales, formando parte de las mismas, como contrato de adhesión y participación las condiciones y clausulado establecidos en los enlaces que se disponen en el formulario de participación, todas ellas conformando la posibilidad de participar en la promoción. <br><br>

El sorteo tiene como finalidad promocionar los servicios del Organizador y de los patrocinadores del mismo a través del acceso y reproducción en los distintos sitios Web a través de los cuales se puede participar, eligiendo el ganador de forma aleatoria entre todos los participantes que cumplan los requisitos de participación. El ganador, será notificado, a tal efecto, hasta un máximo de dos ocasiones por correo electrónico, pudiendo la empresa organizadora intentar dicha comunicación vía telefónica o postal, disponiendo de 48 horas desde la comunicación en su condición de ganador para aceptar el premio. En caso que el ganador no aceptará el premio expresamente dentro del plazo establecido o en caso que no fuere posible la comunicación con aquel por causas imputables al mismo, el premio quedará desierto. La entrega del premio se establecerá con el ganador en el momento de la aceptación de aquel, siendo imprescindible acreditar la identidad a través de documento nacional de identidad u otro documento válidamente reconocido. <br><br>

Exclusivamente se admitirá una participación por persona participante, no admitiéndose como válida y, en su caso, no ostentando la condición de participante, aquellas participaciones que no hayan completado todos los campos dispuestos en el formulario o no hayan procedido a completar los trámites de participación establecidos y/o se hayan inscrito fuera del rango temporal de la promoción. <br><br>

La elección del ganador/es se efectuará mediante el siguiente procedimiento: combinación aleatoria a través de programa informático específico para sorteos en los que se procede a obtener un número que coincide con la asignación numérica asignada a un participante. <br><br>

<p><strong>3. Premio</strong></p>
El premio no es canjeable por cualquier otro premio, excepto el previsto en cada sorteo. Así mismo, el organizador de dicho sorteo no se hará responsable de cualquier incidencia material y técnica que se produzca tras la entrega o en relación con el premio suministrado. El premio no incluye,en el caso de que fuera un terminal móvil,los gastos derivados o que pudieren incurrir en relación a la contratación del proveedor de telefonía móvil así como aquellos derivados de la contratación con proveedores terceros de servicios asociados.
A lo largo de todo el periodo de participación en la presente Promoción, el Organizador se reserva la facultad de sustituir el premio en especie por otro de naturaleza similar, si bien el nuevo premio deberá tener un valor de mercado igual o superior al premio original.<br><br>

<p><strong>4. Condiciones asociadas a la participación</strong></p>
Está expresamente prohibido comercializar y/o revender la participación o adjudicación o el derecho a su obtención. En el supuesto de que el participante se hubiera registrado con datos falsos, su participación no será tenida en cuenta y quedará excluido del sorteo promocional. La entidad organizadora queda exenta ante cualquier participación que utilice información o datos personales de terceros sin su consentimiento. A tal efecto, se llevará a cabo mecanismos de acreditación de la persona ganadora y participante en el sorteo promocional. No se admitirá, en caso que se produjere, la repetición de un mismo ganador, siendo aquellos diferentes y únicos.<br><br>

El organizador no se hace responsable del mal funcionamiento de las redes de comunicación electrónicas que impidan el normal desarrollo del mismo por causas ajenas a aquellas y especialmente por actos externos contrarios a la buena fe. <br><br>

En la presente promoción el Organizador queda exonerado de cualquier responsabilidad que pudiera derivarse de cualquier circunstancia imputable a terceros que pudiere afectar al desarrollo y disfrute del premio.
Queda igualmente exonerado el Organizador de cualquier tipo de contingencia que pudiere producirse como consecuencia del disfrute del premio.<br><br>

<p><strong>5. Reclamación</strong></p>
El plazo de reclamación de la presente promoción caduca el día 31 de enero de 2019. La adjudicación de los premios no se podrá impugnar en ningún caso por un error cometido involuntariamente por el Organizador.<br><br>

<p><strong>6. Datos personales y derechos asociados</strong></p>
El ganador del premio acepta que su imagen y sus datos personales de participación en la condición de premiado pudiere ser reproducida con la finalidad de informar en los medios de comunicación de la entidad organizadora o sus patrocinadores respecto al resultado del premio, incluyéndose, pero no limitándose en las propias redes sociales titularidad aquella/s, sin que aquel tenga derecho a contraprestación económica alguna. <br><br>

Los datos de carácter personal completados por los participantes serán tratados de conformidad con la ley de protección de datos española y conforme a lo estándares vigentes en la Unión Europea. Las informaciones recogidas las empleamos para configurar las ofertas que resulten más atractivas e interesantes. Nuestra principal finalidad es velar por la satisfacción y seguridad de los usuarios, siendo la finalidad del tratamiento la participación, gestión y obtención de premios derivados de las promociones y sorteos que se realizan a través de los distintos sitios web titularidad del Organizador, cumpliendo y garantizando, en todo momento, su adecuación a la normativa de protección de datos de carácter personal aplicable.<br><br>

De conformidad con el principio de transparencia e información, precisamos de su consentimiento expreso para tratar sus datos personales asociados a finalidades independientes, siendo aplicable y, en su caso, precisando de su consentimiento expreso, en relación a las condiciones que podrá visualizar y reproducir a través del enlace Privacidad y condiciones asociadas en el formulario de participación. <br><br>

Con la aceptación voluntaria para participar en la promoción consiente que la entidad organizadora pueda remitirle comunicaciones electrónicas con la finalidad de proporcionarle información sobre los productos y/o actividades de la entidad y/o de aquellas entidades con las que se suscriba un acuerdo a tal fin, así como productos y/o actividades de patrocinadores y/o colaboradores, incluyéndose el envío de comunicaciones comerciales a través de medios de comunicación a distancia, disponiendo, en todo momento, la posibilidad de desistir de las mismas.<br><br>

La empresa organizadora comunica a los participantes que, adicionalmente, tratará sus datos personales asociados a la navegación y respecto de la información que nos suministre a través de la participación con finalidades estadísticas, históricas y comportamentales, disponiendo de información al respecto en la Política de Cookies inserta y accesible a través del presente Sitio Web, así como de las condiciones de navegación y privacidad disponibles en sus respectivos enlaces. De igual modo, consiente que la información asociada a la participación sea tratada para las finalidades descritas en el presente parágrafo, incluyéndose la posibilidad de ser segmentados con fines comportamentales o publicitarios. En concreto se podrá tratar la información a partir de su participación con la finalidad de controlar el tráfico y la comunicación de datos, realizar la solicitud de inscripción o participación en una promoción, utilizar elementos de seguridad durante la navegación, observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo o el seguimiento y análisis del comportamiento de los usuarios o para proceder a la medición de la actividad de los sitios web, aplicación o plataforma y para la elaboración de perfiles de navegación de los usuarios y estadísticas, con el fin de introducir mejoras en función del análisis de los datos. <br><br>

El participante y, en su caso, el titular de los datos personales facilitados podrá ejercitar su derecho de acceso, rectificación, oposición y cancelación dirigiendo comunicación escrita por email con asunto “Ejercicio de Derechos”, a ejercicioderechos@vrasur.comdesde la misma cuenta que el Usuario facilitó, incluyendo en tal comunicación el nombre del participante, derecho que ejercita y acreditación de identidad.<br><br>

<p><strong>7. Modificaciones de la promoción</strong></p>
El Organizador se reserva la facultad de modificar las presentes Bases, así como la organización, y/o gestión de la presente promoción en cualquier momento. En el supuesto de que se produzca dicha circunstancia, ésta será comunicada inmediatamente a todos los participantes ya inscritos en los Sitios web, rigiéndose la participación desde la fecha de la actualización y, en todo caso, desde su publicación dentro del mismo espacio de participación. <br><br>

<p><strong>8. Fiscalidad</strong></p>
El premio y su valor pueden estar sujeto a impuestos asociadas a la promoción de conformidad con la normativa fiscal aplicable en el país del ganador. A tal efecto, correrá a cuenta y cargo del ganador cualesquiera cargas tributarias que la aceptación del premio pudiera suponerle en virtud de lo establecido en la Ley 36/2006 del Impuesto de la Renta de las Personas Físicas, así como cualquier otro gasto derivado de la promoción que no esté expresamente asumido por El Organizador en las presentes Bases Legales. En este sentido y, de acuerdo con lo establecido en la Ley 36/2006 del Impuesto de la Renta de las Personas Físicas, El Organizador practicará, en su caso, una retención sobre el valor económico del premio entregado. <br><br>

<p><strong>9. Consultas, Faqs e Incidencias</strong></p>
Para cualquier consulta o incidencia relacionada con la promoción podrá contactar o dirigir aquella/s a la siguiente dirección de correo electrónico: info@vrasur.com. De igual forma, la entidad organizadora, en caso de querer realizar alguna reclamación relativa a la presente promoción, pueden realizarla mediante un escrito dirigido a VRASUR DIGITAL S.L. Ctra. De Lebrija, 10, 3ª Planta. Centro de Negocios Sojetel. 11.407. Jerez de la Frontera. Cádiz. <br><br>

Si tiene alguna pregunta, rogamos que se ponga en contacto con nosotros enviando un email a info@vrasur.com <br>
<p><strong>10. Legislación y Jurisdicción. </strong></p>
Las presentes condiciones que eventualmente se puedan establecer se rigen por la legislación española. En caso de disputa o controversia relacionada con la aplicación o interpretación de las mismas, las partes se someterán a los Juzgados y Tribunales de Jerez de la frontera, Cádiz. En todo caso, en cumplimiento de nuestro deber de información, le indicamos que, en relación con la Resolución de litigios en línea en materia de consumo, conforme a lo previsto en el Art. 14.1 del Reglamento (UE) 524/2013, la Comisión Europea pone a su disposición una plataforma de resolución de litigios en línea que se encuentra disponible en el siguiente enlace:<br><br>

https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home.chooseLanguage.<br><br>

Si tiene alguna pregunta, rogamos que se ponga en contacto con nosotros enviando un email a info@vrasur.com<br><br>

<p><strong>11.- LIMITACIONES</strong></p>
Se considerarán nulas aquellas participaciones que se hayan realizado posteriormente a la fecha de finalización de la Promoción, así como las que no incluyan todos los datos, características y requisitos solicitados, o las que hayan consignado datos falsos o inexactos. Todos los datos facilitados por los participantes deberán ser veraces. La identidad de los participantes y ganadores se acreditará exclusivamente por medio de documentos oficiales.<br><br>

El Organizador se reserva el derecho de excluir de la Promoción a aquellos participantes que sospeche o detecte que hayan participado de cualquier manera fraudulenta o que no entreguen la documentación solicitada.
Si se evidenciase que el ganador no cumple con los requisitos exigidos en las Bases, o los datos proporcionados para participar no fueran válidos, o bien no acreditara lo que le sea solicitado, su participación se considerará nula y quedará automáticamente excluido de la Promoción perdiendo todo derecho sobre el premio otorgado en virtud de esta Promoción.<br><br>

El Organizador se reserva el derecho de emprender acciones judiciales contra aquellas personas que realicen cualquier tipo de acto susceptible de ser considerado manipulación o falsificación de la Promoción.<br><br>

El premio que sea entregado no será susceptible de cambios, alteraciones o compensaciones a petición de los participantes, no pudiendo ser canjeado por cualquier otro producto ni, en su caso, por dinero.<br><br>

El Organizador no se responsabiliza de las posibles pérdidas, deterioros, robos, retrasos o cualquiera otra circunstancia imputable a terceros que puedan afectar al desarrollo de la presente Promoción.<br><br>

En ningún caso El Organizador será responsable de los servicios de cualquier otra entidad con la que esta colabore en la prestación de los servicios a los agraciados, como consecuencia de los premios entregados, así como los derivados de una actuación negligente en el disfrute de los mismos.<br><br>

El Organizador no se responsabiliza del uso que haga el participante respecto del regalo objeto de la presente Promoción, y no asume responsabilidad alguna por ningún daño o perjuicio de cualquier tipo que pudieren sufrir los participantes o terceros. <br><br>

El Organizador excluye cualquier responsabilidad por daños y perjuicios de toda naturaleza que puedan deberse a la falta temporal de disponibilidad o de continuidad del funcionamiento de las redes de telecomunicaciones o de la aplicación o redes sociales. <br><br>

El Organizador no asume responsabilidad en casos de fuerza mayor o caso fortuito que pudieran impedir la realización de la Promoción o el disfrute total o parcial de su premio.<br><br>

En caso de que esta Promoción no pudiera realizarse, bien por fraudes detectados en la misma, errores técnicos, o circunstancias que no estén bajo el control de El Organizador y que afecte al normal desarrollo de la Promoción, o cualquier otro motivo que de acuerdo al criterio del Organizador impida la realización de la misma, El Organizador se reserva el derecho, previa comunicación, a cancelar, modificar o suspender la Promoción, incluyendo los Sitios web de participación.<br><br>
        </div>
    </div>
 </div> 

<!--///////////////// Aviso Legal /////////////////////// -->
<div class="modal fade" id="login-modal-aviso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
		<span class="dismiss"><a title="dismiss this notification"  data-dismiss="modal" >x</a></span>
      <!-- Fin Modal -->
<h4> Aviso Legal</h4><br><br>

<p><strong>Titularidad</strong></p><br>

El presente dominio es un dominio en Internet propiedad de VRASUR DIGITAL S.L. con NIF: B11939923 con domicilio en Ctra. De Lebrija, 10, 3ª Planta. Centro de Negocios Sojetel. 11.407. Jerez de la Frontera. Cádiz. Registro Mercantil de Cádiz: Tomo: 2223, Folio 117, Inscripción: 1º, hoja: CA 51265. (En adelante el Titular)
VRASUR es una empresa dedicada a servicios de Internet y redes sociales, que mediante sitios Web capta clientes potenciales para sus clientes y realiza campañas de promoción y marketing telefónico y online. <br><br>

<p><strong>Condiciones Generales de Uso.</strong></p><br>

<u>1. Aceptación y disponibilidad de las Condiciones Generales de Usos</u><br>
Al acceder al Sitio Web el Usuario declara que ha leído y acepta las presentes Condiciones. En todo caso, las Condiciones Generales de Uso aquí contenidas tienen carácter obligatorio y vinculante; cualquier persona que no acepte estas condiciones deberá abstenerse de utilizar el Sitio Web y/o los servicios promocionados por el Titular, a través del mismo. Estas Condiciones Generales de Uso no crean ningún contrato de sociedad, de mandato, de franquicia, o relación laboral entre el Titular y los Usuarios. 
Las presentes condiciones, regulan el uso de este Sitio Web, el cual pone el Titular a disposición de las personas que accedan con el fin de proporcionarles información sobre productos y servicios propios y/o de terceros colaboradores, y facilitarles el acceso y la contratación de los mismos.<br><br>

<u>2. Normas aplicables </u><br>
El presente Aviso Legal está sujeto a lo dispuesto en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, su Reglamento de Desarrollo, RD 1720/07, Reglamento UE 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos y por el que se deroga la Directiva 95/46/CE (Reglamento general de protección de datos), la Ley 34/2002 de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, el Real Decreto-ley 13/2012, de 30 de marzo, por el que se transponen directivas en materia de mercados interiores de electricidad y gas y en materia de comunicaciones electrónicas, y por el que se adoptan medidas para la corrección de las desviaciones por desajustes entre los costes e ingresos de los sectores eléctrico y gasista, así como cualquier normativa posterior que las modifican o desarrollan.
Tanto el acceso al sitio Web propiedad del Titular como el uso que pueda hacerse de la información y contenidos incluidos en el mismo, será de la exclusiva responsabilidad de quien lo realice. Las condiciones de acceso al Sitio Web estarán supeditadas a la legalidad vigente y los principios de la buena fe y uso lícito por parte del Usuario de la misma, quedando prohibido con carácter general cualquier tipo de actuación en perjuicio del Titular. Se considerará terminantemente prohibido el uso del Sitio Web con fines ilegales o no autorizados.<br><br>

<u>3. Modificación de las Condiciones Generales de Uso</u><br>
El Titular se reserva el derecho de modificar, en cualquier momento, la presentación y configuración del Sitio Web, así como las presentes Condiciones Generales de Uso. Por ello, El Titular recomienda al Usuario leerlas atentamente cada vez que acceda al Sitio Web. Siempre dispondrán de las Condiciones Generales de Uso en un sitio visible, libremente accesible para cuantas consultas quiera realizar. <br><br>

<u>4. Descripción de los servicios</u><br>
El presente dominio es el Sitio Web del Titular y sirve de herramienta tanto de promoción de los servicios ofrecidos y de captación de contactos para bases de datos comerciales.<br><br>

<u>5. Registro </u><br>
Para solicitar información serán necesarios los datos del Usuario pero no será necesario un registro.<br><br>

<u>6. Terminación</u><br>
El Titular se reserva el derecho de interrumpir o cancelar el Sitio Web o cualquiera de los servicios en el mismo, en cualquier momento y sin previo aviso, por motivos técnicos o de cualquier otra índole, pudiendo así mismo modificar unilateralmente tanto las condiciones de acceso, como la totalidad o parte de los contenidos en él incluidos todo ello sin perjuicio de los derechos adquiridos en dicho momento. <br><br>

<u>7.  Responsabilidades</u><br>
Los enlaces contenidos en el Sitio Web pueden dirigir a Sitios Web de terceros. El Titular no asume ninguna responsabilidad por el contenido, informaciones o servicios que pudieran aparecer en dichos sitios, que tendrán exclusivamente carácter informativo y que en ningún caso implican relación alguna entre el Titular y las personas o entidades titulares de tales contenidos o titulares de los sitios donde se encuentren. <br><br>

El Titular no se hace responsable bajo ningún concepto por ningún tipo de daño que pudiesen ocasionar los Usuarios al presente Sitio Web, o a cualquier otra, por el uso ilegal o indebido de la misma, o de los contenidos e informaciones accesibles o facilitadas a través de ella.<br><br>

El Titular no será responsable de las infracciones realizadas por usuarios de su Web que afecten a terceros.<br><br>

El Titular no garantiza la fiabilidad, la disponibilidad ni la continuidad de su Sitio Web ni de los Servicios, por lo que la utilización de los mismos por parte del usuario se lleva a cabo por su propia cuenta y riesgo, sin que, en ningún momento, puedan exigirse responsabilidades por ello al Titular.<br><br>

El Titular no será responsable en caso de que existan interrupciones de los servicios, demoras, mal funcionamiento del mismo y, en general, demás inconvenientes que tengan su origen en causas que escapan del control del Titular, y/o debida a una actuación dolosa o culposa del usuario y/o tenga por origen causas de caso fortuito o fuerza mayor. Sin perjuicio de lo establecido en el artículo 1105 del Código Civil, se entenderán incluidos en el concepto de fuerza mayor, además, y a los efectos de las presentes Condiciones Generales de Uso, todos aquellos acontecimientos acaecidos fuera del control del Titular, tales como: fallo de terceros, operadores o compañías de servicios, actos de Gobierno, falta de acceso a redes de terceros, actos u omisiones de las Autoridades Públicas, aquellos otros producidos como consecuencia de fenómenos naturales, cortes de suministro, etc y el ataque de hackers o terceros especializados en la seguridad o integridad del sistema informático, siempre que el Titular, haya adoptado las medidas de seguridad razonables de acuerdo con el estado de la técnica. En cualquier caso, sea cual fuere su causa, el Titular no asumirá responsabilidad alguna ya sea por daños directos o indirectos, daño emergente y/o por lucro cesante.<br><br>

El Titular tratará en la medida de lo posible de actualizar y rectificar aquella información alojada en su Sitio Web que no cumpla con las mínimas garantías de veracidad. No obstante informa que puede existir cualquier tipo de error sin intencionalidad y siendo el Usuario libre de contrastar el contenido. <br><br>

El Titular no podrá ser considerado responsable del uso del presente Sitio Web por personas ajenas o referencias que pudieran existir en sitios ajenos. <br><br>

<u>8. Indemnización</u><br>
Los Usuarios mantendrán al Titular indemne por cualquier reclamación o demanda de terceros relacionada con las actividades promovidas dentro del Sitio Web o por el incumplimiento de las Condiciones Generales de Uso y demás políticas que se entienden incorporadas al presente documento, o por la violación de cualesquiera leyes o derechos de terceros.<br><br>

<u>9. Nulidad e ineficacia de las Cláusulas</u><br>
Si cualquier cláusula incluida en estas Condiciones Generales de Uso fuese declarada, total o parcialmente, nula o ineficaz, tal nulidad o ineficacia afectará tan sólo a dicha disposición o a la parte de la misma que resulte nula o ineficaz, subsistiendo las Condiciones Generales de Uso en todo lo demás, teniéndose tal disposición, o la parte de la misma que resultase afectada, por no incluida.<br><br>

<u>10. Notificaciones</u><br>
Todas las notificaciones, requerimientos, peticiones y otras comunicaciones que hayan de efectuarse por las partes en relación con las presentes Condiciones Generales de Uso, deberán realizarse por escrito y se entenderá que han sido debidamente realizadas cuando hayan sido entregadas en mano o bien remitidas por correo ordinario al domicilio de la otra parte o al correo electrónico de ésta, o bien a cualquier otro domicilio o correo electrónico que a estos efectos cada parte pueda indicar a la otra.<br><br>

<u>11. Propiedad Intelectual e Industrial</u><br>
Los derechos de propiedad intelectual de este Sitio Web, su código fuente, diseño, estructuras de navegación y los distintos elementos en ella contenidos son titularidad exclusiva del Titular a quien corresponde el ejercicio de los derechos de explotación de los mismos en cualquier forma y, en especial, los derechos de reproducción, distribución, comunicación pública y transformación, de acuerdo con la legislación española y de la Unión Europea aplicable.<br><br>

Queda totalmente prohibida la reproducción total o parcial de los contenidos de este Sitio Web sin consentimiento expreso y por escrito por parte del Titular. La utilización no autorizada de estos contenidos por cualquier otra persona o empresa dará lugar a las responsabilidades legalmente establecidas.<br><br>

El Titular podrá mostrar en el Sitio Web Marcas Registradas de terceros. Éstos son los propietarios legítimos de las Marcas Registradas y del material promocional que puedan poner a disposición para la promoción del producto o servicio y conceden al Titular la autorización necesaria para el uso de los mismos sin considerarse en ningún caso una cesión de su propiedad, siendo éste el responsable exclusivo de cualquier demanda interpuesta por terceros en relación al uso de la Marca Comercial, eximiendo al Titular cualquier responsabilidad sobre los derechos de propiedad intelectual.<br><br>

Queda prohibida cualquier modalidad de explotación, incluyendo todo tipo de reproducción, distribución, cesión a terceros, comunicación pública y transformación, mediante cualquier tipo de soporte y medio, de las obras antes referidas, creaciones y signos distintivos sin autorización previa y expresa de sus respectivos titulares. El incumplimiento de esta prohibición podrá constituir infracción sancionable por la legislación vigente.<br><br>

Queda prohibido, salvo en los casos que expresamente lo autorice el Titular presentar este Sitio Web o la información contenida en ella bajo frames o marcos, signos distintivos, marcas o denominaciones sociales o comerciales de otra persona, empresa o entidad incluyendo de forma expresa el contenido fotográfico que se considera propiedad exclusiva del Titular.<br><br>

La infracción de cualquiera de los citados derechos puede constituir una vulneración de las presentes Condiciones Generales de Uso, así como un delito castigado de acuerdo con los artículos 270 y siguientes del Código Penal.<br><br>

<u>12. Jurisdicción</u><br>
Para cuantas cuestiones se susciten sobre la interpretación, aplicación y cumplimiento de este Aviso Legal, así como de las reclamaciones que puedan derivarse de su uso, todos las partes intervinientes se someten a los Jueces y Tribunales que correspondan según su fuero. <br><br>

<p><strong>Política de privacidad.</strong></p><br>
El Titular se compromete a cumplir con la normativa en materia de Protección de Datos de carácter personal y a respetar la privacidad de los Usuarios. El objetivo es ofrecerle el mejor servicio y para ello necesitamos contar con ciertos datos. <br><br>

De acuerdo a lo establecido en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, su Reglamento de Desarrollo RD 1720/07 y Reglamento UE 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos y por el que se deroga la Directiva 95/46/CE (Reglamento general de protección de datos), le informamos de que los datos personales que facilite a través del presente Sitio Web o mediante envíos de correos electrónicos, serán incorporados a un fichero propiedad del Titular. <br><br>

Podrán ejercerse los derechos previstos por la normativa actual, enviando solicitud por email con asunto “Ejercicio de Derechos”, a ejercicioderechos@vrasur.com  desde la misma cuenta que el Usuario facilitó.<br><br>

El Usuario que se inscriba en el servicio de Newsletter, consiente de forma expresa a recibir comunicaciones con la finalidad de poder prestar y ofrecer los servicios del Titular y darle trámite, así como, enviarle información y publicidad sobre las ofertas, promociones y recomendaciones que el Titular crea pueda ser de interés para el Usuario relacionadas con cualquier tipo de servicio prestado actualmente o en el futuro, pudiendo en cualquier momento oponerse a la recepción de publicidad enviando email desde la misma cuenta en la que se reciban las comunicaciones.<br><br>

Por la propia naturaleza del servicio y contenidos del Sitio Web, es imprescindible poder remitir a los Usuarios comunicaciones comerciales por correo electrónico. Por lo tanto, en caso de que se produjera la revocación del consentimiento prevista, ello conllevará de manera automática la cesación y abandono en la condición de Usuario Registrado de este Sitio Web por parte de quien ejecuta tal revocación.<br><br>

<u>1. Campos de texto libre</u><br>
Los campos de texto libre que, a disposición del Usuario, puedan aparecer en los formularios del Sitio Web tienen como única y exclusiva finalidad el recabar información para mejorar la calidad de los Servicios.<br><br>

El Usuario no incluirá, en aquellos espacios que el Sitio Web pueda ofertar como "campos de texto libre", ningún dato de carácter personal que pueda ser calificado dentro de aquellos datos para los que se exige un nivel de protección de tipo medio o alto, entendiéndose como datos de tipo medio o alto, a título enunciativo y no limitativo, los relativos a situación económico-financiera, perfiles psicológicos, ideología, religión, creencias, afiliación sindical, salud, origen racial y/o vida sexual.<br><br>

<u>2. Campos no obligatorios</u><br>
El Titular comunica al Usuario el carácter no obligatorio de la recogida de algunos datos, salvo en los campos que se indique lo contrario mediante una advertencia. No obstante, la no cumplimentación de dichos datos podrá impedir prestar todos aquellos Servicios vinculados a tales datos, liberándole de toda responsabilidad por la no prestación o prestación incompleta de estos Servicios.<br><br>

<u>3. Acceso y rectificación de los datos personales</u><br>
El Usuario se compromete a proporcionar información cierta en relación con sus datos personales, y mantener los datos facilitados al Titular siempre actualizados. El Usuario responderá, en cualquier caso, de la veracidad de los datos facilitados, reservándose el Titular el derecho de excluir de los servicios a todo Usuario que haya facilitado datos falsos, sin perjuicio de las demás acciones que procedan en Derecho. Los datos facilitados por el Usuario se presumirán correctos, por lo que, en caso de envío erróneo de sus datos por parte del Usuario, el Titular, declina cualquier responsabilidad en caso de la incorrecta ejecución o no ejecución del envío, así como el incorrecto cumplimiento de los trámites administrativos necesarios.<br><br>

<u>4. Comunicación de datos personales</u><br>
Los datos facilitados voluntariamente por el Usuario al Titular en este Sitio Web, pasarán a formar parte de una base de datos con las finalidades de realizar acciones comerciales por cualquier medio propio o de terceros, incluyendo vía telefónica o por correo electrónico, que podrá ser cedida a cualquier tipo de entidad. El listado de entidades a las que se cederán estos datos está presente en este Sitio Web y es continuamente actualizado para que el Usuario pueda en todo momento estar informado de las mismas.<br><br>

El Usuario en todo caso podrá ejercer los derechos previstos por la normativa actual incluyendo acceso, rectificación, cancelación y oposición, así como el de exclusión de envíos publicitarios, enviando solicitud por email con asunto “Ejercicio de Derechos”, a ejercicioderechos@vrasur.com  desde la misma cuenta que facilitó. <br><br>

En relación a la gestión de los servicios los datos de los Usuarios podrán ser tratados por empresas que presten al Titular diversos servicios, entre otros, de envío, mensajería, contabilidad, asesoría, mantenimiento informático, o cualquier otro que por su condición de Encargada del Tratamiento sea indispensable o inevitable que accedan o traten estos datos. Este tratamiento no será considerado en ningún caso una cesión de datos. <br><br>

<u>5. Confidencialidad</u><br>
Además, también tendrá la condición de confidencial la información de cualquier tipo que las partes intercambien entre sí, aquella que éstas acuerden que tiene tal naturaleza, o la que simplemente verse sobre el contenido de dicha información. La visualización de datos a través de Internet, no supondrá el acceso directo a los mismos, salvo consentimiento expreso de su titular para cada ocasión.<br><br>

<u>6. Fotografías</u><br>
En cumplimiento de lo establecido en la L. O. 15/99 de Protección de Datos de Carácter Personal y su Reglamento R. D. 1720/07 informamos que las fotografías en las que aparezcan personas tienen consideración de dato de carácter personal. Con esta comunicación se informa que en este Sitio Web pueden aparecer fotografías de personas con motivos de promoción y que voluntariamente han accedido a ello. Si en algún caso, cualquier persona que aparezca en ellas desea que no se muestre alguna fotografía, rogamos se pongan en contacto y se procederá a su retirada a la mayor brevedad posible.<br><br><br>

<p><strong>Política de Cookies </strong></p><br>

<u>1. Definición y funciones de las cookies.</u><br>
Una cookie es un fichero que se descarga en el equipo del Usuario al acceder a determinados sitios web. Las cookies permiten al sitio web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación del Usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al Usuario.<br><br>

<u>2. Tipos de cookies que puede utilizar este Sitio Web.</u><br>

• Cookies propias: Son aquéllas que se envían al equipo terminal del Usuario desde un equipo o dominio gestionado por el Titular y desde el que se presta el servicio solicitado por el Usuario.<br><br>

• Cookies de terceros: Son aquéllas que se envían al equipo terminal del Usuario desde un equipo o dominio que no es gestionado por el Titular, sino por otra entidad que trata los datos obtenidos través de las cookies.<br><br>

• Cookies de sesión: Son un tipo de cookies diseñadas para recabar y almacenar datos mientras el Usuario accede a un sitio web.<br><br>

• Cookies persistentes: Son un tipo de cookies en el que los datos siguen almacenados en el terminal y pueden ser accedidos y tratados durante un periodo definido por el responsable de la cookie, y que puede ir de unos minutos a varios años. <br><br>

• Cookies de análisis:  Son  aquéllas  que  bien  tratadas  por  el Titular o por  terceros,  permiten  cuantificar  el  número  de  Usuarios  y  así realizar la medición y análisis estadístico de la utilización que hacen los Usuarios del servicio ofertado. Para ello se analiza su navegación con el fin de mejorar la oferta de productos o servicios que se ofrecen.<br><br>

• Cookies publicitarias: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el Titular haya incluido en el Sitio Web, aplicación o plataforma desde la que presta el servicio solicitado en base a criterios como el contenido editado o la frecuencia en la que se muestran los anuncios.<br><br>

• Cookies de publicidad comportamental: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el Titular haya incluido en el Sitio Web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los Usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo. Asimismo es posible que al visitar algún sitio web o al abrir algún email donde se publique algún anuncio o alguna promoción sobre los productos o servicios ofrecidos se instale en el navegador alguna cookie que sirva para mostrar posteriormente publicidad relacionada con la búsqueda que se ha realizado, desarrollar un control de los anuncios en relación, por ejemplo, con el numero de veces que son vistos, donde aparecen, a que hora se ven, etc.<br><br>

<u>3. Revocación y eliminación de cookies.</u><br>
El Usuario puede permitir, bloquear o eliminar las cookies instaladas en el equipo mediante la configuración de las opciones del navegador instalado, en caso que no permita la instalación de cookies en su navegador es posible que no pueda acceder a alguna de las secciones del Sitio Web. Se puede encontrar información sobre cómo configurar las cookies según el navegador utilizado en los siguientes enlaces (enlaces válidos a la fecha de edición del presente texto)<br><br>

Para más información sobre cómo bloquear el uso de cookies en Explorer pulse aquí. http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9  <br><br>

Para más información sobre cómo bloquear el uso de cookies en Chrome pulse aquí. http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647 <br><br>

Para más información sobre cómo bloquear el uso de cookies en Firefox pulse aquí. http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we <br><br>

Para más información sobre cómo bloquear el uso de cookies en Safari pulse aquí. http://support.apple.com/kb/ph5042 <br><br>

El Titular no se hace responsable del contenido y veracidad de las políticas de privacidad de los terceros incluidos en los enlaces de este Aviso Legal.<br><br>


<u>4. Terceros prestadores de servicios. </u><br>
En concreto los terceros con los que se ha gestionado algún servicio para el que es necesaria la utilización de cookies son:<br><br>


<table border="2">
  <tr>
   <td bgcolor="#ccc">Nombre del proveedor</td>
    <td bgcolor="#ccc">Finalidad de la cookie</td>
    <td bgcolor="#ccc">Descripción de la finalidad de la cookie</td>
    <td bgcolor="#ccc">Si desea mas información sobre el uso</td>
  </tr>
  <tr>    
    <td>Google Tag Manager</td>
    <td>Administrador de etiquetas</td>
    <td>Herramienta que permite al Sitio Web administrar de forma sencilla sus etiquetas</td>
    <td><a href="http://www.google.com/tagmanager/">http://www.google.com/tagmanager/ </a></td>
  </tr>  
  <tr>    
    <td>Google Analytics</td>
    <td>Analítica Web</td>
    <td>Estadísticas sobre visitas al Sitio Web</td>
    <td><a href="http://www.google.es/intl/es/analytics/">http://www.google.es/intl/es/analytics/ </a></td>
  </tr>   
</table><br><br>
     

El Titular declina cualquier responsabilidad respecto al contenido y veracidad de la información y políticas de privacidad relativas a las cookies de terceros.<br><br>

Para más información sobre el uso de cookies en este Sitio Web el Usuario puede solicitarla a través del formulario de contacto.<br><br>

La presente política fue modificada a fecha el 12 de octubre de 2017.<br><br>

<u>5. Analítica Web - Google Analytics </u><br>
El presente Sitio Web puede utilizar Google Analytics, una herramienta de analítica de web prestado por Google, Inc., cuyo domicilio social está ubicado en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos ("Google"). Esta herramienta permite al Titular saber el grado de implicación de los Usuarios con el Sitio Web, con la posibilidad de consultar varios informes en los que se describe cómo interactúan los Usuarios con el Sitio Web con el propósito de mejorarlo. Google Analytics recaba información de forma anónima, es decir, informa de las tendencias del Sitio Web sin identificar a sus usuarios.<br><br>

Google Analytics emplea "cookies" de origen, que son archivos de texto ubicados en el ordenador, para realizar un seguimiento de las interacciones de los Usuarios en el Sitio Web. Estas cookies se utilizan para almacenar información como, por ejemplo, la hora de la visita, si el Usuario ha estado antes en el sitio y qué sitio le ha recomendado al Usuario visitar este Sitio Web en cuestión. Los navegadores no comparten cookies de origen de un mismo dominio.<br><br>

Todos los equipos y dispositivos conectados a Internet tienen asignado un número exclusivo que se conoce como la "dirección de protocolo de Internet" o "dirección IP". Puesto que estos números se suelen asignar en función del país, las direcciones IP a menudo se utilizan para identificar el país, el estado y la ciudad desde la que el equipo se encuentra conectado a Internet. Google Analytics registra la dirección IP de los Usuarios que visitan el Sitio Web para que el Titular pueda saber desde qué puntos del planeta se está visitando el sitio. Este método se denomina "geolocalización de IP". Google Analytics no proporciona información sobre la dirección IP real.<br><br>

Las condiciones del servicio de Google Analytics prohíben el seguimiento o la obtención de datos personales que identifiquen a una persona (como por ejemplo, el nombre, la dirección de correo electrónico o los datos de facturación, así como otros datos asociados) mediante Google Analytics o bien la asociación de información personal con datos de analítica web.<br><br>

El Titular puede controlar la información que puede usar Google y decidir si quiere que Google emplee estos datos o no a través de las opciones para compartir datos de Google Analytics. Los datos sirven para mejorar los productos y servicios de Google. <br><br>

Con el fin de ofrecer a los Usuarios más opciones en cuanto a la forma que tiene Google Analytics de recabar sus datos, se ha creado el complemento de inhabilitación para navegadores de Google Analytics. Este complemento indica al código JavaScript (ga.js) de Google Analytics que la información sobre la visita al sitio web no debe enviarse a Google Analytics. Sin embargo, no impide que se envíe información al propio sitio web o a otros servicios de analítica web. El Usuario podrá rechazar el tratamiento de los datos o la información rechazando el uso de cookies mediante la selección de la configuración apropiada de su navegador sin embargo, el Usuario debe saber que si lo hace puede ser que no pueda usar la plena funcionalidad de este Sitio Web. <br><br>

Al utilizar este Sitio Web el Usuario consiente el tratamiento de su información por Google y el Titular en la forma y para los fines arriba indicados. Para más información sobre esta herramienta y la política de privacidad de Google se recomienda a los Usuarios que visiten el siguiente enlace: <a href="http://www.google.es/intl/es/policies/">http://www.google.es/intl/es/policies/ </a><br><br>






        </div>
    </div>
 </div> 
<!-- ///////////// Condiciones de Sorteo -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
		<span class="dismiss"><a data-dismiss="modal" title="dismiss this notification">x</a></span>
      <!-- Fin Modal -->
<h4> Aviso Legal </h4><br><br>
<p>&nbsp;</p>
<p><strong>Titularidad</strong></p>
<p><a href="http://www.sherrytel.com/">http://www.sojetel.</a>net y <a href="http://www.sherrytel.com/">http://www.sojetel.c</a>om son dominios en Internet propiedad de SOJETEL ON-LINE S.L. con CIF: B11897527  y domicilio en Ctra. Lebrija-Jerez nº10 Parque Empresarial de Jerez, 11407, Jerez de la Frontera, Cadiz, sociedad inscrita en el Registro Mercantil de Cadiz, en el tomo 2050, folio 213, inscripcion 1 hora CA-43458.</p>
<p>SOJETEL ON-LINE S.L. es una empresa con gran experiencia especializada en servicios de contact center.</p>
<p><strong>Condiciones Generales de Uso.</strong></p>
<ol>
<li>Aceptación y disponibilidad de las Condiciones Generales de Usos</li>
</ol>
<p>Al acceder a esta página Web declara que ha leído y acepta las presentes Condiciones. En todo caso, las Condiciones Generales de Uso aquí contenidas tienen carácter obligatorio y vinculante; cualquier persona que no acepte estas condiciones deberá abstenerse de utilizar el Sitio Web y/o los servicios promocionados por el Titular, a través del mismo. Estas Condiciones Generales de Uso no crean ningún contrato de sociedad, de mandato, de franquicia, o relación laboral entre el Titular y los Usuarios.</p>
<p>Las presentes condiciones, regulan el uso de este Sitio Web, el cual pone el Titular a disposición de las personas que accedan con el fin de proporcionales información sobre servicios, propios y/o de terceros.</p>
<ol start="2">
<li>Normas aplicables</li>
</ol>
<p>Las presentes Condiciones Generales de Uso, están sujetas a lo dispuesto en la Ley 34/2002 de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico y la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal y su Reglamento de Desarrollo R.D. 1720/2007.</p>
<p>Tanto el acceso al sitio Web propiedad del Titular como el uso que pueda hacerse de la información y contenidos incluidos en el mismo, será de la exclusiva responsabilidad de quien lo realice. Las condiciones de acceso al Sitio Web estarán supeditadas a la legalidad vigente y los principios de la buena fe y uso lícito por parte del Usuario de la  misma, quedando prohibido con carácter general cualquier tipo de actuación en perjuicio del Titular. Se considerará terminantemente prohibido el uso del Sitio Web con fines ilegales o no autorizados.</p>
<ol start="3">
<li>Modificación de las Condiciones Generales de Uso</li>
</ol>
<p>El Titular se reserva el derecho de modificar, en cualquier momento, la presentación y configuración del Sitio Web, así como las presentes Condiciones Generales de Uso. Por ello, El Titular recomienda al Usuario leerlas atentamente cada vez que acceda al Sitio Web. Siempre dispondrán de las Condiciones Generales de Uso en un sitio visible, libremente accesible para cuantas consultas quiera realizar.</p>
<ol start="4">
<li>Descripción de los servicios</li>
</ol>
<p>www.sojetel.net es el Sitio Web de la empresa SOJETEL ON-LINE S.L., sirviendo de presentación de la empresa y catálogo de sus servicios.</p>
<ol start="5">
<li>Registro</li>
</ol>
<p>Actualmente este Sitio Web no cuenta con ningún tipo de servicio que para su acceso requiera el registro como usuario.</p>
<ol start="6">
<li>Terminación</li>
</ol>
<p>El Titular se reserva el derecho de interrumpir o cancelar el Sitio Web o cualquiera de los servicios en el mismo, en cualquier momento y sin previo aviso, por motivos técnicos o de cualquier otra índole, pudiendo así mismo modificar unilateralmente tanto las condiciones de acceso, como la totalidad o parte de los contenidos en él incluidos todo ello sin perjuicio de los derechos adquiridos en dicho momento.</p>
<ol start="7">
<li>Responsabilidades</li>
</ol>
<p>Los enlaces contenidos en el sitio Web pueden dirigir a Sitios Web de terceros. El Titular no asume ninguna responsabilidad por el contenido, informaciones o servicios que pudieran aparecer en dichos sitios, que tendrán exclusivamente carácter informativo y que en ningún caso implican relación alguna entre el Titular y a las personas o entidades titulares de tales contenidos o titulares de los sitios donde se encuentren.</p>
<p>El Titular no se hace responsable bajo ningún concepto por ningún tipo de daño que pudiesen ocasionar los Usuarios a la presente página Web, o a cualquier otra, por el uso ilegal o indebido de la misma, o de los contenidos e informaciones accesibles o facilitadas a través de ella.</p>
<p>El Titular no será responsable de las infracciones realizadas por usuarios de su Web que afecten a terceros.</p>
<p>El Titular no se hace responsable de la veracidad, exactitud y calidad del presente Sitio Web, sus servicios, información y materiales. Dichos servicios, información y materiales son presentados tal y como aparecen y son accesibles sin garantías de ninguna clase.</p>
<p>En consecuencia, el Titular no garantiza la fiabilidad, la disponibilidad ni la continuidad de su Sitio Web ni de los Servicios, por lo que la utilización de los mismos por parte del usuario se lleva a cabo por su propia cuenta y riesgo, sin que, en ningún momento, puedan exigirse responsabilidades por ello al Titular.</p>
<p>El Titular no será responsable en caso de que existan interrupciones de los servicios, demoras, errores, mal funcionamiento del mismo y, en general, demás inconvenientes que tengan su origen en causas que escapan del control del Titular, y/o debida a una actuación dolosa o culposa del usuario y/o tenga por origen causas de caso fortuito o fuerza mayor. Sin perjuicio de lo establecido en el artículo 1105 del Código Civil, se entenderán incluidos en el concepto de fuerza mayor, además, y a los efectos de las presentes Condiciones Generales de Uso, todos aquellos acontecimientos acaecidos fuera del control del Titular, tales como: fallo de terceros, operadores o compañías de servicios, actos de Gobierno, falta de acceso a redes de terceros, actos u omisiones de las Autoridades Públicas, aquellos otros producidos como consecuencia de fenómenos naturales, cortes de suministro, etc y el ataque de hackers o terceros especializados en la seguridad o integridad del sistema informático, siempre que el Titular, haya adoptado las medidas de seguridad razonables de acuerdo con el estado de la técnica. En cualquier caso, sea cual fuere su causa, el Titular no asumirá responsabilidad alguna ya sea por daños directos o indirectos, daño emergente y/o por lucro cesante.</p>
<p>El Titular excluye cualquier responsabilidad por los daños y perjuicios de toda naturaleza que puedan deberse a la falta de veracidad, exactitud, exhaustividad y/o actualidad de los servicios y productos transmitidos, difundidos, almacenados, puestos a disposición o recibidos, obtenidos o a los que se haya accedido a través del Sitio Web así como por los servicios y productos prestados u ofertados por terceras personas o entidades. El Titular tratará en la medida de lo posible de actualizar y rectificar aquella información alojada en su Sitio Web que no cumpla con las mínimas garantías de veracidad. No obstante quedará exonerado de responsabilidad por su no actualización o rectificación así como por los contenidos e informaciones vertidos en la misma, salvo los supuestos en que así lo exija la legislación vigente o cuando sea requerido por una Autoridad Judicial o Administrativa competente.</p>
<p>El Titular no podrá ser considerado responsable del uso de nuestra Web por personas ajenas o referencias que pudieran existir en páginas ajenas.</p>
<p>El Usuario se obliga a mantener indemne al Titular por cualquier daño, perjuicio, sanción, gasto (incluyendo, sin limitación, honorarios de abogados) o responsabilidad civil, administrativa o de cualquier otra índole, que guarde relación con el incumplimiento o cumplimiento parcial o defectuoso por su parte de lo establecido en las presentes Condiciones Generales o en la legislación aplicable, y, en especial, en relación con sus obligaciones relativas a protección de datos de carácter personal recogidas en las presentes condiciones o establecidas en la LOPD y normativa de desarrollo.</p>
<ol start="8">
<li>Indemnización</li>
</ol>
<p>Los Usuarios mantendrán al Titular indemne por cualquier reclamación o demanda de terceros relacionada con las actividades promovidas dentro del Sitio Web o  por el incumplimiento de las Condiciones Generales de Uso y demás políticas que se entienden incorporadas al presente documento, o por la violación de cualesquiera leyes o derechos de terceros.</p>
<ol start="9">
<li>Nulidad e ineficacia de las Cláusulas</li>
</ol>
<p>Si cualquier cláusula incluida en estas Condiciones Generales de Uso fuese declarada, total o parcialmente, nula o ineficaz, tal nulidad o ineficacia afectará tan sólo a dicha disposición o a la parte de la misma que resulte nula o ineficaz, subsistiendo las Condiciones Generales de Uso en todo lo demás, teniéndose tal disposición, o la parte de la misma que resultase afectada, por no incluida.</p>
<ol start="10">
<li>Notificaciones</li>
</ol>
<p>Todas las notificaciones, requerimientos, peticiones y otras comunicaciones que hayan de efectuarse por las partes en relación con las presentes Condiciones Generales de Uso, deberán realizarse por escrito y se entenderá que han sido debidamente realizadas cuando hayan sido entregadas en mano o bien remitidas por correo ordinario al domicilio de la otra parte o al correo electrónico de ésta, o bien a cualquier otro domicilio o correo electrónico que a estos efectos cada parte pueda indicar a la otra.</p>
<ol start="11">
<li>Propiedad Intelectual el Industrial</li>
</ol>
<p>Los derechos de propiedad intelectual de este Sitio Web, su código fuente, diseño, estructuras de navegación y los distintos elementos en ella contenidos son titularidad exclusiva del Titular a quien corresponde el ejercicio de los derechos de explotación de los mismos en cualquier forma y, en especial, los derechos de reproducción, distribución, comunicación pública y transformación, de acuerdo con la legislación española y de la Unión Europea aplicable.</p>
<p>Queda totalmente prohibida la reproducción total o parcial de los contenidos de este Sitio Web sin consentimiento expreso y por escrito por parte del Titular. La utilización no autorizada de estos contenidos por cualquier otra persona o empresa dará lugar a las responsabilidades legalmente establecidas.</p>
<p>Queda prohibida cualquier modalidad de explotación, incluyendo todo tipo de reproducción, distribución, cesión a terceros, comunicación pública y transformación, mediante cualquier tipo de soporte y medio, de las obras antes referidas, creaciones y signos distintivos sin autorización previa y expresa de sus respectivos titulares. El incumplimiento de esta prohibición podrá constituir infracción sancionable por la legislación vigente.</p>
<p>Queda prohibido, salvo en los casos que expresamente lo autorice el Titular presentar la página Web o la información contenida en ella bajo frames o marcos, signos distintivos, marcas o denominaciones sociales o comerciales de otra persona, empresa o entidad incluyendo de forma expresa el contenido fotográfico que se considera propiedad exclusiva del Titular.</p>
<p>La infracción de cualquiera de los citados derechos puede constituir una vulneración de las presentes Condiciones Generales de Uso, así como un delito castigado de acuerdo con los artículos 270 y siguientes del Código Penal.</p>
<ol start="12">
<li>Jurisdicción</li>
</ol>
<p>Para cuantas cuestiones se susciten sobre la interpretación, aplicación y cumplimiento de este Aviso Legal, así como de las reclamaciones que puedan derivarse de su uso, todos las partes intervinientes se someten a los Jueces y Tribunales de Jerez de la Frontera (Cádiz), renunciando de forma expresa a cualquier otro fuero que pudiera corresponderles.</p>
<p><strong>Política de privacidad.</strong></p>
<p>El Titular se compromete a cumplir con la normativa en materia de Protección de Datos de carácter personal y a respetar la privacidad de todos sus usuarios. Nuestro objetivo es ofrecerle el mejor servicio y para ello necesitamos contar con sus datos.</p>
<p>De acuerdo a lo establecido en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal (LOPD) y su Reglamento de Desarrollo aprobado por el Real Decreto 1720/2007, de 21 de diciembre, le informamos de que los datos personales que facilite a través de nuestro Sitio Web o mediante envíos de correos electrónicos, serán incorporados a un fichero propiedad del Titular. Podrán ejercitarse los derechos de acceso, rectificación, cancelación y oposición por correo postal adjuntando copia de documento acreditativo de su identidad a la dirección: C/ Sócrates, 40. 11.407 Jerez Fra. (Cádiz) indicando “Protección de Datos”</p>
<ol>
<li>Campos de texto libre y envío de documentos.</li>
</ol>
<p>Los campos de texto libre que, a disposición del Usuario, puedan aparecer en los formularios del Sitio Web tienen como única y exclusiva finalidad el recabar información para mejorar la calidad de los Servicios.</p>
<p>El Usuario no incluirá, en aquellos espacios que el Sitio Web pueda ofertar como &#8220;campos de texto libre&#8221;, ningún dato de carácter personal que pueda ser calificado dentro de aquellos datos para los que se exige un nivel de protección de tipo medio o alto, entendiéndose como datos de tipo medio o alto, a título enunciativo y no limitativo, los relativos a situación económico-financiera, perfiles psicológicos, ideología, religión, creencias, afiliación sindical, salud, origen racial y/o vida sexual. De igual forma se respetarán los mismos requisitos para los documentos remitidos mediante la opción disponible para el envío de currículum.</p>
<ol start="2">
<li>Campos no obligatorios</li>
</ol>
<p>El Titular comunica al Usuario el carácter no obligatorio de la recogida de algunos datos, salvo en los campos que se indique lo contrario mediante un (*). No obstante, la no cumplimentación de dichos datos podrá impedir prestar todos aquellos Servicios vinculados a tales datos, liberándole de toda responsabilidad por la no prestación o prestación incompleta de estos Servicios.</p>
<ol start="3">
<li>Calidad de los datos personales</li>
</ol>
<p>El Usuario se compromete a proporcionar información cierta en relación con sus datos personales, y mantener los datos facilitados al Titular siempre actualizados. El Usuario responderá, en cualquier caso, de la veracidad de los datos facilitados, reservándose el Titular el derecho de excluir de los servicios a todo Usuario que haya facilitado datos falsos, sin perjuicio de las demás acciones que procedan en Derecho. Los datos facilitados por el Usuario se presumirán correctos, por lo que, en caso de envío erróneo de sus datos por parte del Usuario, el Titular, declina cualquier responsabilidad en caso de la incorrecta ejecución o no ejecución del envío, así como el incorrecto cumplimiento de los trámites administrativos necesarios.</p>
<ol start="4">
<li>Comunicación de datos personales</li>
</ol>
<p>Para la gestión de nuestros servicios puntualmente sus datos podrán ser tratados por cualquier empresa que nos preste sus servicios de administración, gestión, asesoramiento, mantenimiento informático, o cualquier otro que por su condición de Encargada del Tratamiento sea indispensable o inevitable que accedan o traten estos datos. Todos ellos se comprometen mediante el contrato de prestación de servicios celebrado con nuestra empresa a disponer de las mismas medidas de seguridad y a respetar en todo caso la confidencialidad e integridad de sus datos personales. Este tratamiento no será considerado en ningún caso una cesión de datos.</p>
<p>El Titular no cederá sus datos a terceras personas, salvo en las excepciones recogidas por la Ley.</p>
<ol start="5">
<li>Confidencialidad</li>
</ol>
<p>Además, también tendrá la condición de confidencial la información de cualquier tipo que las partes intercambien entre sí, aquella que éstas acuerden que tiene tal naturaleza, o la que simplemente verse sobre el contenido de dicha información. La visualización de datos a través de Internet, no supondrá el acceso directo a los mismos, salvo consentimiento expreso de su titular para cada ocasión.</p>
<p><strong>Política de Cookies</strong></p>
<ol>
<li>Definición y funciones de las cookies.</li>
</ol>
<p>Una cookie es un fichero que se descarga en el equipo del Usuario al acceder a determinados sitios web. Las cookies permiten al sitio web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación del Usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al Usuario.</p>
<ol start="2">
<li>Tipos de cookies que puede utilizar este Sitio Web.</li>
</ol>
<ul>
<li>Cookies propias: Son aquéllas que se envían al equipo terminal del Usuario desde un equipo o dominio gestionado por el Titular y desde el que se presta el servicio solicitado por el Usuario.</li>
<li>Cookies de tercero: Son aquéllas que se envían al equipo terminal del Usuario desde un equipo o dominio que no es gestionado por el Titular, sino por otra entidad que trata los datos obtenidos través de las cookies.</li>
<li>Cookies de sesión: Son un tipo de cookies diseñadas para recabar y almacenar datos mientras el Usuario accede a un sitio web.</li>
<li>Cookies persistentes: Son un tipo de cookies en el que los datos siguen almacenados en el terminal y pueden ser accedidos y tratados durante un periodo definido por el responsable de la cookie, y que puede ir de unos minutos a varios años.</li>
<li>Cookies de análisis: Son aquéllas  que  bien  tratadas  por  el Titular o por  terceros,  permiten  cuantificar  el  número  de  Usuarios  y  así realizar la medición y análisis estadístico de la utilización que hacen los Usuarios del servicio ofertado. Para ello se analiza su navegación con el fin de mejorar la oferta de productos o servicios que se ofrecen.</li>
</ul>
<ol start="3">
<li>Revocación y eliminación de cookies.</li>
</ol>
<p>El Usuario puede permitir, bloquear o eliminar las cookies instaladas en el equipo mediante la configuración de las opciones del navegador instalado, en caso que no permita la instalación de cookies en su navegador es posible que no pueda acceder a alguna de las secciones del Sitio Web. Se puede encontrar información sobre cómo configurar las cookies según el navegador utilizado en los siguientes enlaces (enlaces válidos a la fecha de edición del presente texto)</p>
<p>Para más información sobre cómo bloquear el uso de cookies en Explorer pulse aquí. http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9</p>
<p>Para más información sobre cómo bloquear el uso de cookies en Chrome pulse aquí. http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647</p>
<p>Para más información sobre cómo bloquear el uso de cookies en Firefox pulse aquí. http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</p>
<p>Para más información sobre cómo bloquear el uso de cookies en Safari pulse aquí. http://support.apple.com/kb/ph5042</p>
<p>El Titular no se hace responsable del contenido y veracidad de las políticas de privacidad de los terceros incluidos en los enlaces de este Aviso Legal.</p>
<ol start="4">
<li>Terceros prestadores de servicios.</li>
</ol>
<p>En concreto los terceros con los que se ha gestionado algún servicio para el que es necesaria la utilización de cookies son:</p>
<table>
<tbody>
<tr>
<td width="91"><strong>Nombre del proveedor </strong><strong> </strong></td>
<td width="132"><strong>Finalidad de la cookie</strong></td>
<td width="168"><strong>Descripción de la finalidad de la cookie</strong><strong> </strong></td>
<td width="201"><strong>Si desea mas información sobre el uso</strong><strong> </strong></td>
</tr>
<tr>
<td width="91">Google</td>
<td width="132">Analítica Web</td>
<td width="168">Estadísticas sobre visitas al Sitio Web</td>
<td width="201"><a href="http://www.google.es/intl/es/analytics/">http://www.google.es/intl/es/analytics/</a></td>
</tr>
<tr>
<td width="91">Facebook Connect</td>
<td width="132">Widget, Social</td>
<td width="168">Conexión de los usuarios con la red social</td>
<td width="201"><a href="http://developers.facebook.com/">http://developers.facebook.com/</a></td>
</tr>
<tr>
<td width="91">Google+ Platform</td>
<td width="132">Interacción Social</td>
<td width="168">Google permite que la información de la WEB sea compartida en su red social, Google +</td>
<td width="201"><a href="http://www.google.com/policies/privacy/">http://www.google.com/policies/privacy/</a></td>
</tr>
<tr>
<td width="91">Facebook Social Plugins</td>
<td width="132">Widget, Social</td>
<td width="168">Herramienta para compartir experiencia con otros usuarios  de la red social, desde otros sitios webs</td>
<td width="201"><a href="http://www.facebook.com/">http://www.facebook.com/</a></td>
</tr>
<tr>
<td width="91">Twitter Button</td>
<td width="132">Widgets, Social</td>
<td width="168">Herramienta para compartir elementos con otros usuarios  de la red social, desde otros sitios webs</td>
<td width="201"><a href="http://twitter.com/about">http://twitter.com/about</a></td>
</tr>
<tr>
<td width="91">LinkedIn Widgets</td>
<td width="132">Widgets, Social</td>
<td width="168">Herramienta para compartir elementos con otros usuarios  de la red social, desde otros sitios webs</td>
<td width="201"><a href="https://www.linkedin.com/about-us">https://www.linkedin.com/about-us</a></td>
</tr>
<tr>
<td width="91">GoogleDoubleClick</td>
<td width="132">Publicidad</td>
<td width="168">Gestión de publicidad en el Sitio Web</td>
<td width="201"><a href="http://www.google.com/doubleclick/">http://www.google.com/doubleclick/</a></td>
</tr>
<tr>
<td width="91"></td>
<td width="132"></td>
<td width="168"></td>
<td width="201"></td>
</tr>
<tr>
<td width="91"></td>
<td width="132"></td>
<td width="168"></td>
<td width="201"></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>El Titular declina cualquier responsabilidad respecto al contenido y veracidad de la información y políticas de privacidad relativas a las cookies de terceros.</p>
<p>Para más información sobre el uso de cookies en este Sitio Web el Usuario puede solicitarla a través del formulario de contacto</p>
<p>La presente política fue modificada a fecha el 6 de mayo de 2016</p>
<ol start="5">
<li>Analítica Web &#8211; Google Analytics</li>
</ol>
<p>El presente Sitio Web puede utilizar Google Analytics, una herramienta de analítica de web prestado por Google, Inc., cuyo domicilio social está ubicado en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos (&#8220;Google&#8221;). Esta herramienta permite al Titular saber el grado de implicación de los Usuarios con el Sitio Web, con la posibilidad de consultar varios informes en los que se describe cómo interactúan los Usuarios con el Sitio Web con el propósito de mejorarlo. Google Analytics recaba información de forma anónima, es decir, informa de las tendencias del Sitio Web sin identificar a sus usuarios.</p>
<p>Google Analytics emplea &#8220;cookies&#8221; de origen, que son archivos de texto ubicados en el ordenador, para realizar un seguimiento de las interacciones de los Usuarios en el Sitio Web. Estas cookies se utilizan para almacenar información como, por ejemplo, la hora de la visita, si el Usuario ha estado antes en el sitio y qué sitio le ha recomendado al Usuario visitar este Sitio Web en cuestión. Los navegadores no comparten cookies de origen de un mismo dominio.</p>
<p>Todos los equipos y dispositivos conectados a Internet tienen asignado un número exclusivo que se conoce como la &#8220;dirección de protocolo de Internet&#8221; o &#8220;dirección IP&#8221;. Puesto que estos números se suelen asignar en función del país, las direcciones IP a menudo se utilizan para identificar el país, el estado y la ciudad desde la que el equipo se encuentra conectado a Internet. Google Analytics registra la dirección IP de los Usuarios que visitan el Sitio Web para que el Titular pueda saber desde qué puntos del planeta se está visitando el sitio. Este método se denomina &#8220;geolocalización de IP&#8221;. Google Analytics no proporciona información sobre la dirección IP real.</p>
<p>Las condiciones del servicio de Google Analytics prohíben el seguimiento o la obtención de datos personales que identifiquen a una persona (como por ejemplo, el nombre, la dirección de correo electrónico o los datos de facturación, así como otros datos asociados) mediante Google Analytics o bien la asociación de información personal con datos de analítica web.</p>
<p>El Titular puede controlar la información que puede usar Google y decidir si quiere que Google emplee estos datos o no a través de las opciones para compartir datos de Google Analytics. Los datos sirven para mejorar los productos y servicios de Google.</p>
<p>Con el fin de ofrecer a los Usuarios más opciones en cuanto a la forma que tiene Google Analytics de recabar sus datos, se ha creado el complemento de inhabilitación para navegadores de Google Analytics. Este complemento indica al código JavaScript (ga.js) de Google Analytics que la información sobre la visita al sitio web no debe enviarse a Google Analytics. Sin embargo, no impide que se envíe información al propio sitio web o a otros servicios de analítica web. El Usuario podrá rechazar el tratamiento de los datos o la información rechazando el uso de cookies mediante la selección de la configuración apropiada de su navegador sin embargo, el Usuario debe saber que si lo hace puede ser que no pueda usar la plena funcionalidad de este Sitio Web.</p>
<p>Al utilizar este Sitio Web el Usuario consiente el tratamiento su información por Google y el Titular en la forma y para los fines arriba indicados. Para más información sobre esta herramienta y la política de privacidad de Google se recomienda a los Usuarios que visiten los siguientes enlaces: http://www.google.com/intl/es/analytics/privacyoverview.html http://www.google.com/intl/es/policies/privacy/tools/</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
        </div>
    </div>

<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="ajax1.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.localScroll.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/common.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
