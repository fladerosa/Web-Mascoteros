<?php 
include('funciones.php');
$texto = ' ';
$registros = ' ';

if($_POST){
  $busqueda = trim($_POST['buscar']);
  $entero = 0;
  
  if (empty($busqueda)){
	  $texto = 'Búsqueda sin resultados';
  }else{
	  conectar();
      mysqli_set_charset($conexion, 'utf8');  
	  $sql = "SELECT * FROM adopcion WHERE direccion LIKE '%" .$busqueda. "%' ORDER BY direccion";
	  
	  $resultado = mysqli_query($conexion, $sql); 
  	
	  if (mysqli_num_rows($resultado) > 0){ 
	     
		 $registros = '<p>Hay ' . mysqli_num_rows($resultado) . ' registros :)!! </p>';
	    
		 while($fila = mysqli_fetch_assoc($resultado)){ 
              $texto .= $fila['nombre'].', '.$fila['direccion'].'<br />';
			 }
		
	  }else{
			   $texto = "No hay resultados en tu busqueda :(";	
	  }
	 desconectar();
  }
}


?>