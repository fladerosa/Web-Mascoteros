<?php
include('funciones.php');

	$masnoticia = $_GET['id'];
	conectar();
	$respuesta = mysqli_query($conexion, "SELECT * from noticia where id_noticia = $masnoticia");

	$registro= mysqli_fetch_assoc($respuesta);
	
	echo "<h4>".$registro['nombre']."</h4>";
	echo "<p>".$registro['mensaje']."</p>";
?>
