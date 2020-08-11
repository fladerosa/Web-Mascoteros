<?php
//define('HOST_DB', "localhost"); 
define('USER_DB', 'id4512223_fderosa'); 
//define('USER_DB', "root"); 
define('PASS_DB', 'flavia2017'); 
//define('PASS_DB', "");
define('NAME_DB', 'id4512223_mibase'); 
//define('NAME_DB', "mibase");

function conectar(){
	global $conexion; 
	$conexion = mysqli_connect(HOST_DB, USER_DB, PASS_DB, NAME_DB)
	or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS');
	mysqli_select_db($conexion, NAME_DB)
	or die ('NO SE ENCUENTRA LA BASE DE DATOS '. NAME_DB);
}
function desconectar(){
	global $conexion;
	mysqli_close($conexion);
}

//// datos Xampp 
//$datos_conexion=mysqli_connect("localhost", "root", "", "webmaster");
?>
