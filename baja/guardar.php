<?php
include "../enlaces.php";
include '../conectar.php';
$conexion = conectarse();
$rows = enlaces('rows');
  sort($rows);
  foreach ($rows as $valor) {
    $datos_personales =$valor['datos_personales'];//tabla BD
    // $respuestas =$valor['respuestas'];//tabla BD
    $bannerConf_Baja = $valor['bannerConf_Baja'];
  }

$email=$_POST['email'];
//$dni1=$_POST['dni_desencriptar'];
$codigo_verificacion=$_POST['codigo_verificacion'];
$darse_baja="si";
$rows=0;
$r=0;
$d=base64_encode($email);
$fecha=date("Y-m-d H:i:s");     

    $consulta = "SELECT * FROM $datos_personales WHERE email='$email'AND codigo_verificacion='$codigo_verificacion' AND email='$email'";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    while ($columna = mysqli_fetch_array( $resultado ))
    {
        $rows=1;
    }

      if($rows==1)
     {
           //////////////////////////////////////// insert
            $r=1;

            $sql = "UPDATE $datos_personales SET darse_baja='$darse_baja',fecha_darse_baja='$fecha'  where email='$email' AND codigo_verificacion='$codigo_verificacion' AND email='$email' "; 
            if (mysqli_query($conexion, $sql)) {
               echo "";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conexion);
            }
            ////////////////////////////////////

     }
 

     mysqli_close( $conexion );

       echo '<script>

              window.location=".?r='.$r.'&c='.$codigo_verificacion.'&d='.$d.'";

            </script> ';      
//doy las gracias por el envio

        //Estoy recibiendo el formulario, compongo el cuerpo
//if($rows==0)
//{          
 
?>
