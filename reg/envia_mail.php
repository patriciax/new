<?php
include '../conectar.php';
include '../enlaces.php';
$conexion = conectarse();
$rows = enlaces('rows');
  sort($rows);
  foreach ($rows as $valor) {
    $datos_personales =$valor['datos_personales'];//tabla BD
    // $respuestas =$valor['respuestas'];//tabla BD
    $linkdelsorteo = $valor['linkdelsorteo'];
  }
// $pregunta1=$_POST['pregunta1'];
// $pregunta2=$_POST['pregunta2'];
// $pregunta3=$_POST['pregunta3'];
// $pregunta4=$_POST['pregunta4'];
$dni=0; 

$nombre=$_POST['nombre1']; 
$email=$_POST['email1'];
// $presupuesto=$_POST['presupuesto'];

$from="Concurso Manía <soporte@concursomania.com>";
$to = $email;
$subject = 'Estás a un solo click de participar' ;
//$codigo_verificacion1 = 543534545;
$codigo_verificacion1=(rand(10,1000000));

// NO SE ACONSEJA CAMBIAR ESTOS VALORES
//$message = $_POST [ "message" ] ;
$headers = 'From: ' . $from . PHP_EOL ;

$rows=0;

function encriptar2($cadena){
    $key='16437037';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = utf8_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));
    return $encrypted; //Devuelve el string encriptado
 
}
 
function desencriptar2($cadena){
     $key='16437037';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
     $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), utf8_decode($cadena), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    return $decrypted;  //Devuelve el string desencriptado
}


$email_encriptar = base64_encode($email);
$encoded = base64_encode($string);
$decoded = base64_decode($encoded);

$fecha=date("Y-m-d H:i:s");    
    $consulta = "SELECT * FROM $datos_personales  WHERE email='$email'";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    while ($columna = mysqli_fetch_array( $resultado )){
        $rows=1;
    }

         if($rows==0){
            $sql = "INSERT INTO $datos_personales (dni,email,fecha)VALUES ($dni','$email','$fecha')"; 
            if (mysqli_query($conexion, $sql)) {
               echo "";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conexion);
            }
           //////////////////////////////////////// insert

            $sqlm = "UPDATE $datos_personales SET codigo_verificacion='$codigo_verificacion1' where email='$email'"; 
            if (mysqli_query($conexion, $sqlm)) {
               echo "";
            } else {
               echo "Error: " . $sqlm . "" . mysqli_error($conexion);
            }
            ////////////////////////////////////            
          }  
            ////////////////////////////////////      
   
     mysqli_close( $conexion );
//doy las gracias por el envio

        //Estoy recibiendo el formulario, compongo el cuerpo
if($rows==0)
{          
    $cuerpo .= '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <style type="text/css">
body{ margin:0px; padding:0px; width:100%; }        </style>
    </head>
    <body>
        <table align="center" background-color="#fff" bgcolor="#ebebeb" border="0" cellpadding="0" cellspacing="0" style="padding:0px; margin:0px;" width="100%">
            <tbody>
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                            <tbody>
                                <tr>
                                    <td align="center" style="display:block; padding-top:15px; font-size:12px; font-family:Helvetica, Arial, sans-serif; color:#777777;" valign="top"><BR>
                                        </td>
                                </tr>
                                <tr>
                                    <td align="left" height="20" valign="top"><img alt="" src="'.$linkdelsorteo.'/reg/images/top-shadow-basica.png" style="display: block; width: 600px; height: 20px;" /></td>
                              </tr>
                              <tr>
                                    <td align="left" height="20" valign="top"><img alt="" src="'.$linkdelsorteo.'/reg/images/fondoMail.png" style="display: block; width: 600px; height: 200px;" /></td>
                              </tr>
                              <tr>
                                    <td align="left" bgcolor="#ffffff" height="15" valign="top"><img alt="" src="'.$linkdelsorteo.'/reg/images/shadow-basica.png" style="display: block; width: 600px; height: 15px;" /></td>
                              </tr>
                                <tr>
                                    <td align="left" bgcolor="#ffffff" valign="top" style="text-align:right;padding:0 20px;font-family:Arial, Helvetica, sans-serif;font-size:12px;">.'.$fecha.'. </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff" background-color="#fff">
                            <tbody>
                                <tr>    
                                  <td width="600" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif;padding-right:20px;">
                                    <p><span style="font-size:20px;font-weight:bold;padding-bottom:10px;">Hola '.$nombre. ' </span>
                                       <span style="font-size:14px;"><br>Estás a un solo click de participar en nuestra promoción gratuita:</span>
                                    </p>
                                    
                                    <p><span style="font-size:20px;font-weight:bold;padding-bottom:10px;">Cambia tus neumáticos con nosotros 
y participa en un SORTEO QUINCENAL
de un cambio de neumáticos gratis</span><br><br>
                                       <span style="font-size:20px;font-weight:bold;padding-bottom:10px;">Haz click en el siguiente botón para confirmar: </span>
                                       <span style="font-size:14px;"><br>Recuerda, sólo obtendrán premio las participaciones confirmadas.<br /><br /></span>
                                    </p>   
                                  </td>
                              </tr>
                            </tbody>
                        </table>
                         <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                  <td width="100"></td>
                                  <td width="400">
                                    <p style=""><center><a href="'.$linkdelsorteo.'/confirmar/?c='.$codigo_verificacion1.'&d='.$email_encriptar.'" style="background-color:rgb(249,77,254);line-height:52px;text-align:center;display:block;color:#000000;text-decoration:none;float:center">SI, CONFIRMO LA PARTICIPACIÓN</a></p>
                                  </td>
                                  <td width="100"></td>
                              </tr> 
                            </tbody>
                        </table>

                         <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                  <td width="100"></td>
                                  <td width="400">
                                      <center><p><span style="font-size:20px;font-weight:bold;padding-bottom:10px;">¡Gracias por elegirnos, <br>te deseamos mucha suerte!</span><br><br>
                                       </span>
                                    </p></center>   
                                  </td>
                                  <td width="100"></td>
                              </tr> 
                            </tbody>
                        </table>                        


                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                            <tbody>
                                <tr>
                                    <td align="left" valign="top" bgcolor="aba8a8" style="padding:18px 20px 10px 20px;color:#FFFFFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;">CONCURSO MANIA
                                      <a href="#"><img alt="" src="'.$linkdelsorteo.'/reg/images/twitter.png" style="display: block; width: 32px; height: 32px;float:right;margin-top:-8px;border:0;" /></a>
                                    <a href="#"><img alt="" src="'.$linkdelsorteo.'/reg/images/facebook.png" style="display: block; width: 32px; height: 32px;float:right;margin-right:10px;margin-top:-8px;border:0;" /></a>                                      </td>
                              </tr>
                                <tr>
                                    <td align="left" height="15" valign="top">
                                        <img alt="" src="'.$linkdelsorteo.'/reg/images/shadow-basica.png" style="display: block; width: 600px; height: 15px;" /></td>
                                </tr>
                                
                            </tbody>
                        </table>
                  <br />
                        <table align="center" border="0" cellpadding="0" cellspacing="0" height="176" width="600">
                            <tbody>
                                <tr>
                                    <td style="display:block; padding-bottom:15px; font-size:12px; font-family:Helvetica, Arial, sans-serif; color:#777777;" valign="top">
                                    En caso de que el enlace no funcione: <br> Pega el siguiente link en la barra de dirección de tu navegador y pulsa ENTER: <br>
                                    <a href="'.$linkdelsorteo.'/confirmar/?c='.$codigo_verificacion1.'&d='.$email_encriptar.'">'.$linkdelsorteo.'/confirmar/?c='.$codigo_verificacion1.'&d='.$email_encriptar.'</a>
                                    <br><br>
                                    Te aconsejamos: <br>
                                    Incorpora este email soporte@concursomania.com a tu libreta de contactos para evitar que futuras comunicaciones nuestras lleguen a tu bandeja de correo no deseado.<br><br>
                                   

                                    
                                        <div style="text-align: justify;">
                                            Recibes esta publicidad por estar inscrito en la base de datos de VRASUR DIGITAL S.L. <br />
                                            Si no deseas recibir mas información, puedes darte de baja de nuestra BDD aquí: <a href="'.$linkdelsorteo.'/baja/?c='.$codigo_verificacion1.'&d='.$email_encriptar.'"><strong><span style="font-size:12px;color:#666666">PINCHE AQUÍ</span></strong></a><br />
                                                Si lo prefieres, envía un email a: ejercicioderechos@vrasur.com<br>                                            
                                            
                                            <br />
                                            <br />
                                            &nbsp;</div>
                                        
                                        <br />
                                        &nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>

    ';
  

    //mando el correo...
    mail($to, $subject, $cuerpo,"MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\n".$headers."");
  //  mail ( $to, $subject, $cuerpo, $headers ) ;

 
}//if rows=0   
?>
