<?php 
function enlaces(){
/***********************BASE DATOS***********************************/
	$datos_personales ="land_newcar_datos_personales";
	// $respuestas ="land_new_respuestas";
	$patrocinadores = "patrocinador";
	$enlacePatrocinador = "enlacePatrocinador";
/***********************METAS******************************************/
	$url = "http://sorteo-quincenal-newcar.gana-vales-gratis.com/";
	
	$type= "website";
	$title= "Sorteo caunchos gartis series 222aaaaaaaaaaaaaaaaaaaaaaaaaaaa3";
	$description= "¿Amas estar navegando? Entonces este sorteo es para ti! Empeñados en premiar a nuestros participantes, Concurso Manía ahora ofrece este imperdible sorteo de un , este sorteo es completamente gratuito y legal! Ánimo amigos, no hay nada que perder y hay mucho que ganar! asi que entra y participa!";
	$image="";
/*****************************PRINCIPAL*********************************/
	$maincolor = 'rgba(3, 121, 174, 0.82)';//color formulario
	$secondcolor = 'rgb(0,0,0)'; //borde 
	$borde = 'rgb(0,0,0)';
	$textshadow = 'text-shadow: -2px -2px 0 '.$secondcolor.', -2px -1px 0 '.$secondcolor.', -2px 0 0 '.$secondcolor.';';
	$letrascolormenu = '#ffa500;';
	$politicaprivacidadcolor = 'rgb(201,210,255)';
	$bannerpremio = '<span class="head-main">Cambia tus neumáticos con nosotros <br> <span>y participa en un <span style=color:#ffa500;>SORTEO QUINCENAL</span><br> de un cambio de neumáticos gratis</span></span> ';
	// $premio = "Responde las siguientes preguntas y confirma tus datos para recibir este increible premio
	// en caso de ser seleccionado";
	$bannersrc = '';
	$iconosrc = 'assets/img/banner/icono.png';
	
/***********************************FACEBOOK**********************************/
	// $facebook_appId= '1592676017505890';
	// $facebook_version='v2.11';
/**********************************RECAPCHA***********************************/
	$recaptcha_sitekey = '6LdquD8UAAAAAFzl4mVtWhm-47SyNeMwJvrrFJlP' ;
/**********************************LINKSORTEO*******************************/
	 $linkdelsorteo = 'http://sorteo-quincenal-newcar.gana-vales-gratis.com/';
	$google_ID ='';
	/*menucolor' =>$menucolor ,'colorsombraletras'=>$colorsombraletras,*/
$rows = array(
		array(
			'datos_personales' => $datos_personales,
			//  'respuestas' => $respuestas, 
			 'patrocinadores'=>$patrocinadores, 
			 'enlacePatrocinador'=>$enlacePatrocinador,
			'maincolor' =>$maincolor,
			'secondcolor'=>$secondcolor ,'textshadow'=> $textshadow,
			'letrascolormenu'=> $letrascolormenu,  'borde'=>$borde,
			'politicaprivacidadcolor'=> $politicaprivacidadcolor,
			'bannerpremio'=> $bannerpremio ,'premio'=>$premio, 
			'bannersrc'=> $bannersrc,'iconosrc'=>$iconosrc, 'linkdelsorteo'=> $linkdelsorteo,
			'recaptcha_sitekey' => $recaptcha_sitekey, 'facebook_appId'=> $facebook_appId,
			'facebook_version' => $facebook_version, 'google_ID'=> $google_ID,
			 'url' =>$url, 'type'=>$type, 'title'=>$title, 
			'description'=>$description, 'image'=>$image
		)
		
	);
	return $rows;
}