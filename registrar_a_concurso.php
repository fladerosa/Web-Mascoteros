<?php
$nombre=$_POST['nombre']; 
$email=$_POST['email'];
$mascota_edad=$_POST['mascota_edad'];
$mascota=$_POST['mascota'];
$tipo=$_POST['tipo_mascota'];
$foto=$_FILES['foto']; 

$nombre_imagen = time()."-".$foto['name']; 

$destino_mail="flaviderosa@gmail.com";

$destino_foto = "fotos_subidas/".$nombre_imagen;

$origen = $foto['tmp_name'];
move_uploaded_file($origen, $destino_foto);

$asunto="Mensaje enviado desde https://misproyectosflaviaderosa.000webhostapp.com/";

$cuerpo="Nombre: ".$nombre."\r\n";
$cuerpo.="Correo: ".$email."\r\n";
$cuerpo.="Edad mascota: ".$mascota_edad."\r\n";
$cuerpo.="Nombre Mascota: ".$mascota."\r\n";
$cuerpo.="tipo: ".$tipo."\r\n";
$cuerpo.="Imagen: ".$nombre_imagen;

$remitente="From: $nombre <$email>";

mail($destino_mail, $asunto, $cuerpo, $remitente);
include('funciones.php');

conectar();
mysqli_query($conexion, "INSERT INTO concurso VALUES(0, '$nombre', '$email', '$mascota_edad', '$mascota', '$tipo mascota', NOW(),  '$nombre_imagen')");

header("Location: index.php?sec=concurso");
?>






