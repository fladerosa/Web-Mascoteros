<?php 			
include('buscar_adopcion.php');
?>
	<div id="recomendacion" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">									
		<form id="buscador" name="buscador" method="POST">
			<input id="buscar" name="buscar" type="search" size="30" placeholder="Escribi aca la zona" autofocus >
			<input type="submit" name="buscador" class="boton" value="Buscar">
		</form>
				<?php
					echo "$registros";
					echo "$texto";
				?>
		<img src="imagenes/adoptar.jpg" class="img-responsive img-rounded">
	</div>				
