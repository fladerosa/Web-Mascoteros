<script type="text/javascript" src="js/ventana_confirmacion.js"></script>

 				<div id="formulario" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="imagen_form" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
 					<img src="imagenes\concurso.jpg" class="img-responsive img-thumbnail"><h4>Bases y Condiciones</h4>
					<p class="text-justify">En Mascoteros, decidimos organizar un concurso para nuestras queridas mascotas. 
					El proximo 20/03/2018, sorteamos alimento balanceado por un año.
					Solo es necesario completar el formulario que esta a la derecha con los datos tuyos y de tu mascota. Ademas podes subir una foto junto a tu mascota mas querida.
					Accede a nuestras redes sociales y dale like, para sumar mas oportunidades.
					 </p> 
					</div>
				<div id="form" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		 		 	<form method="POST" action="registrar_a_concurso.php" enctype="multipart/form-data"><h4>Carga de datos personales para concurso</h4>
				  		<div class="form-group"> 
				   			<label for="nombre" class="control-label">Ingresa tu nombre completo</label>
				    		<input type="nombre" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" maxlength="100" required>
				 		</div>
				  		<div class="form-group"> 
				   			<label for="email" class="control-label">Ingresa tu email</label>
				    		<input type="email" class="form-control" id="email" name="email" placeholder="name@dominio.com.ar"  maxlength="60" required>
				  		</div>
				 		<div class="form-group"> 
				   			<label for="mascota_edad" class="control-label">Ingresa la edad de tu mascota(años)</label>
				    		<input type="mascota_edad" class="form-control" id="mascota_edad" name="mascota_edad" placeholder="edad mascota"  maxlength="2" required>
				  		</div>	
				  		<div class="form-group"> 
				   			<label for="mascota" class="control-label">Ingresa el nombre de tu mascota</label>
				    		<input type="mascota" class="form-control" id="mascota" name="mascota" placeholder="Nombre mascota"  maxlength="12">
				  		</div>
				  		<div class="form-group">
						<label for="tipo_mascota" class="control-label">Elegi tipo de mascota </label>
							<select class="custom-select" id="tipo_mascota" name="tipo_mascota" onchange="if(this.value=='Otro') {document.getElementById('otrotipo').disabled = false;} else {document.getElementById('otrotipo').disabled = true;} ">

								<option selected></option>
								<option value="Perro">Perro</option>
								<option value="Gato">Gato</option>
								<option value="Otro">Otro</option> <!--hay que arreglar el cuadro y una ventana de que se agrego JQuery-->
									
								<input type="text" id="otrotipo" name="otrotipo" size="30" placeholder="Carga otro si no esta en la lista" disabled>

							</select>
						</div>
						<div  class="custom-file">
						<label for="foto" class="control-label"><h6>Subi una foto divertida de tu mascota </h6></label>
							<input type="file" id="foto" name="foto" class="custom-file-input">
								<span class="custom-file-control"></span>
						</div>					
				  <div class="form-group"  id="subir_foto">
				  <button type="submit" onclick="pregunta()">Enviar</button>
				  </div>
				</form>
				</div>
				</div>


