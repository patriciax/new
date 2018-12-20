<?php
function conectarse(){
// Datos de la base de datos
    // $usuario = "dbo708908714";
    // $password = "leAds_mAniA#2017";
    // $servidor = "db708908714.db.1and1.com";
    // $basededatos = "db708908714";
    $usuario = "root";
    $password = "root";
    $servidor = "localhost";
    $basededatos = "newcartaller";

    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );         

    return $conexion;
}