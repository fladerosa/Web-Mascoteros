			
<script type="text/javascript" src="js/nicEdit.js"></script>
<script type="text/javascript" src="js/ventana_confirmacion.js"></script>
<script type="text/javascript" src="js/nicEdit.js"></script>
<script type="text/javascript" src="js/ventana_confirmacion.js"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<script languague="javascript">
        function mostrar() {
            div = document.getElementById('beneficios_adoptar');
            div.style.display = 'inline-block';
        }

        function cerrar() {
            div = document.getElementById('beneficios_adoptar');
            div.style.display = 'none';
        }
</script>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form>
					<input type="button" value="Mostrar" onclick = "mostrar(this)"/>	
				</form>
				<div id="beneficios_adoptar" style="display: inline-block;" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">						
					<form>
					<input type="button" value="Ocultar" onclick = "cerrar(this)"/>		
					</form>

				<form id="form_carga" method="POST" action = "agregar_noticias.php">
					<h5>Carga una noticia de interes</h5>
       			 <ul id="cargar_noticia">
           			<li>Nombre:   <input type="text" id="nombre" name="nombre" required/></li>
            		<li>Apellido: <input type="text" id="apellido" name="apellido"  required/></li>
            		<li>Email:    <input type="email" id="correo" name="correo" required/></li>
            		<li>Fecha: <input type="date" id="fecha" name="fecha"></li>
            		<li>Noticia: <select class="custom-select" id="tipo_noticia" name="tipo_noticia">
						 <option selected></option>
               			 <option value="Adopcion">Adopcion</option>
                		 <option value="Pedido">Pedido</option>
                		 <option value="Sugerencias">Sugerencias</option>
            		</select></li>
            		<li>Mensaje: <textarea type="text" name="mensaje" id="mensaje" cols= "30" rows="5" style="background-color: white"></textarea> 
            		</li>
           		   <button type="submit" onclick="pregunta()">Enviar Noticia</button>          		    
        		</ul>
    			</form>			
    			</div>
			<div id="nota_recomendada_a" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img src="imagenes\ayuda.jpg" class="img-responsive img-thumbnail"><h4 class="text-center">Nota Recomendada</h4>
				<p class="text-justify"><span class="info_de_nota">La relación entre un perro y un hombre es un vínculo único. 
				Nuestras mascotas tienen una manera mágica de hacer que el estrés y la tensión del día se evaporen.</span></p>
				<p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#nota">Leer más</a></p>
					<div class="modal fade" id="nota" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<a href="#" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
								<h3>El mejor amigo del Hombre</h3>
								</div>
							<div class="modal-body">
								<p>Los perros aceptan a sus dueños tal y como son -con defectos y todo. Esto es un regalo invaluable durante el proceso de recuperación. El compañerismo de un perro ofrece resultados inmediatos, tanto físicos como mentales.</p>
								<p>Recientemente en una encuesta británica donde participaron 1,000 personas de un universo de 7 millones, todos dueños de perros en el Reino Unido, demostró que un 55% se sentía más relajado después de pasar un tiempo con su perro. Y un 44% estaban menos preocupados por los problemas cotidianos de la vida como la seguridad laboral o los problemas financieros.</p>
								<p>Al principio de la rehabilitación en la etapa de recuperación, los adictos tienen la seguridad que están vigilados y seguros de cualquier tentación. Es por eso, que un fuerte vínculo emocional entre la persona y un perro puede ofrecer tanto confort. Esto aplica especialmente para aquellos que se les dificulta relacionarse con otros o les resulta difícil abrirse durante las reuniones de grupo. Además, el cuidado de otro ser vivo da a los adictos en recuperación un sentido muy necesaria de responsabilidad.</p>
							</div>
							<div class="modal-footer">
								<a href="#" class="btn btn-primary" data-dismiss="modal">Cerrar</a>
							</div>
							</div>
						</div>
					</div>
			</div>
			<div id="noticias_cargadas" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<h4 class="text-center" >Noticias de nuestros Mascoteros</h4>
			<?php
			include('funciones.php');
			conectar();

			$respuesta = mysqli_query($conexion, "SELECT id_noticia, nombre, noticia, fecha, LEFT(mensaje, 50) AS resumen FROM noticia ORDER BY fecha DESC");

			while($registro = mysqli_fetch_assoc($respuesta)){
				?>	
				<h4><?php echo $registro['nombre']?></h4>
					
			<span>
			<?php
			$fecha = strtotime($registro['fecha']);
			$fechaformato = date("j/n/Y", $fecha);
			echo $fechaformato;
			?>
			</span>

			<p><?php echo $registro['noticia']; ?></p>
			<p><?php echo $registro['resumen']; ?>...</p>
			<a href="index.php?sec=noticia_completa&id=<?php echo $registro['id_noticia']; ?>">Seguir Leyendo</a>	
			<?php 
			}
			?>
			<div id="video" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 video-responsive">
				<hr><iframe width="240" height="180" src="https://www.youtube.com/embed/JyQySbL37ZA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
           	</div>  	 
			</div>	
		</div>