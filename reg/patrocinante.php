<?php
include '../conectar.php';
include '../enlaces.php';
$conexion = conectarse();
$rows = enlaces('rows');
  sort($rows);
	foreach ($rows as $valor) {
		$enlacePatrocinador =$valor['enlacePatrocinador'];
		$datos_personales =$valor['datos_personales'];
	}
if(@$_POST['btn']){
  $email= $_POST['email'];
  $land = "macbook";
  $consulta = "SELECT * FROM $datos_personales dp INNER JOIN $enlacePatrocinador e ON dp.email= e.email where dp.email = '$email' AND land = '$land'";
  $datos= mysqli_query( $conexion,$consulta);
  if ($d = $datos->num_rows > 0) {
    echo "ya esta registrado";  
  }else{
    echo $consulta;
    foreach ($_POST['checkedBox'] as $key ) {
      $sql = "insert into $enlacePatrocinador (email, idPatrocinador, activo, land)value('$email','$key','si','$land')";
      if (mysqli_query($conexion, $sql)) {
        echo "";
      } else {
        echo "Error: " . $sql . "" . mysqli_error($conexion);
      }
    }
  }
}