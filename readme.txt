El sitio Mascoteros con 5 secciones:

Inicio : plugin de pagina (Facebook) + introduccion del sitio + carrousel implementado con boostrap + blockquote con citas de referencia a las imagenes

Noticias : form de carga de noticias, que se puede ocultar y volver a mostrar, contiene un plugin de nicEdit que permite dar herramientas al textarea.
	   Este formulario trae los datos insertados de la tabla y muestra los mensajes completos.
	   Los formularios tienen ventana de confirmacion de datos cargados, realizado con un script + nota recomendada usando distintos tipos de modal, que permiten mostrar mas informacion al hacer click.

Donde Adoptar : se realizo un buscador que trae de la BD, las direcciones completas y los nombres, segun la zona que se cargue.

Proximo Concurso : tiene un form de carga a una tabla en la BD, que permite, ademas, adjuntar imagenes, las cuales se guardan en una carpeta en el servidor, tiene un selector que se desabilita segun la opcion que se elija.

Vacunacion : se agrego un iframe con un vinculo a un google calendar embebido, el cual tiene eventos relacionados con campañas de vacunacion para perros y gatos

---------------
Cuenta con un solo index.php, donde con un switch determina cada seccion, esto para no repetir el header con su contenido y el footer.

Logo + Marca + 2 iconos con vinculo a las redes sociales + la fecha actual a traves de un script.js

Fue desarrollado para sea lo mas responsive posible.