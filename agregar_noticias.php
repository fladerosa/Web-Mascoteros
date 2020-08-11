<?php include('funciones.php');

$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido'];
$email=$_POST['correo'];
$fecha=$_POST['fecha'];
$tipo_noticia=$_POST['tipo_noticia'];
$nuevo_mensaje=$_POST['mensaje']; 

conectar();
mysqli_query($conexion, "INSERT INTO noticia VALUES(0, '$nombre', '$apellido', '$email', '$fecha', '$tipo_noticia', '$nuevo_mensaje')");

header("Location: index.php?sec=noticias");

?>