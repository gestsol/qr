var parametro1="hhhh45";

var texto = document.getElementById('texto');
texto.innerHTML=parametro1;

function redireccion(){

    location.href="http://localhost/qr/qr2.php?patente="+parametro1;
}