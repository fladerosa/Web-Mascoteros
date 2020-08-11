<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mascoteros</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
	<link href="css/icomoon.css" rel="stylesheet">
	<link href="favicon.ico" rel="shortcut icon">
  </head>

  <body>

  	<div id="fb-root"></div>
		<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  				if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
 			js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12';
 			 fjs.parentNode.insertBefore(js, fjs);  
            }(document, 'script', 'facebook-jssdk'));
		</script>
  	<?php
if(isset($_GET['sec'])) {
    $seccion=$_GET['sec'];
} else {
    $seccion='inicio';
}	
	?>

 <section  id="contenedor" class="container">
	<header id="cabecera" class="row">
	  <div id="cabecera_completa" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="logo" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="logo/logo.jpg" class="img-responsive"> <!--cambiar la imagen del logo-->
		</div>
		<div id="marca" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
				<h1 class="text-center"><big>Mascoteros</big></h1>	
		</div>
		<div id="redes_sociales" class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
        <a href="https://www.facebook.com/grupoMascoteros/" target="new"><span class="icon-facebook2"></a></span>
        <a href="https://twitter.com/search?q=mascoteros&src=typd" target="new"><span class="icon-twitter"></a></span>
    </div>
		
		<div id="fecha_hoy"><span id="fecha_actual"><h6 class ="text-right">Lunes 5 de Marzo, 2017</h6></span></div>
	  </div>
		
		<nav id="botonera_navegacion" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar">
			<ul class="nav nav-pills nav-justified">

		<?php include('secciones.php');
			 foreach ($menu as $ancla => $rotulo) 
			 	{ 
    				$queseccion = ($seccion == $ancla) ? 'class = "actual"' : ""; 
    				echo '<li '.$queseccion.'><a href="index.php?sec='.$ancla.'">'.$rotulo.'</a></li>';
   				 }
        ?>
        	</ul>
		</nav>		
	
	</header>	
		<section class="row" id="contenido">
			 <?php 
            switch ($seccion) {
                case 'inicio':
                case 'noticias':
                case 'adopcion':
                case 'concurso':
                case 'vacunas':
                case 'noticia_completa':
                
                    include($seccion.'.php');
                    break;
                
                default:
                    include('error.php');
                    break;
            }
        ?>
			
		</section>
   <footer id="pie" class="row">
	 <div id="pie_izq" class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	 	<h5 class="text-center">&copy Mascoteros 2018 <span class="glyphicon glyphicon-hand-up aria-hidden=true"></span> Todos los derechos reservados</h5></div>   
   </footer>
  </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

  </body>
</html>