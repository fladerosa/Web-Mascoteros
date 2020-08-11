var hoy = new Date();
var fechahoy = hoy.getDate();
var diahoy = hoy.getDay();
var meshoy = hoy.getMonth();
var aniohoy = hoy.getFullYear();

var dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

var meses = ["Enero", "Febrero", "Marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

console.log(dias[diahoy] + "/"+ fechahoy+ "/"+ meses[meshoy] + "/" + aniohoy );

var contenedorfecha = document.getElementById('fecha_actual');

contenedorfecha.innerHTML = dias[diahoy] + " "+ fechahoy+ " de "+ meses[meshoy] + ", " + aniohoy;

//funcion que permite traer la fecha actual, al index.php, apareciendo en todas las secciones

