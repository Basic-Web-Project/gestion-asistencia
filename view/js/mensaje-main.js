function escribirMensaje(arrMensaje, indiceMensaje, indicePalabra, intervalo) {
    var mensajeDinamico = arrMensaje[indicePalabra].substring(0, indiceMensaje);
    document.getElementById('mensaje-dinamico').innerText = mensajeDinamico;
    
    if (indiceMensaje < arrMensaje[indicePalabra].length) {
        setTimeout(function() {
            escribirMensaje(arrMensaje, indiceMensaje + 1, indicePalabra, intervalo);
        }, intervalo);
    } else {
        setTimeout(function() {
            borrarMensaje(arrMensaje, indiceMensaje, indicePalabra, intervalo);
        }, 2000); // Esperar 2 segundos antes de borrar el mensaje
    }
}

function borrarMensaje(arrMensaje, indiceMensaje, indicePalabra, intervalo) {
    if (indiceMensaje >= 0) {
        var mensajeDinamico = arrMensaje[indicePalabra].substring(0, indiceMensaje);
        document.getElementById('mensaje-dinamico').innerText = mensajeDinamico;
        
        setTimeout(function() {
            borrarMensaje(arrMensaje, indiceMensaje - 1, indicePalabra, intervalo);
        }, intervalo);
    } else if (indicePalabra < arrMensaje.length - 1) {
        setTimeout(function() {
            escribirMensaje(arrMensaje, 0, indicePalabra + 1, intervalo);
        }, 2000); // Esperar 2 segundos antes de escribir el siguiente mensaje
    } else {
        setTimeout(function() {
            escribirMensaje(arrMensaje, 0, 0, intervalo);
        }, 2000); // Esperar 2 segundos antes de empezar de nuevo con la primera palabra
    }
}

// Mensaje estático y mensaje dinámico
// var mensajeDinamico = document.getElementById('mensaje-dinamico');
var arrMensaje = ["esfuerzo", "perseverancia", "dedicación"];

// Intervalo de tiempo entre cada caracter (en milisegundos)
var intervalo = 100;

// Comenzar a escribir el mensaje
escribirMensaje(arrMensaje, 0, 0, intervalo);
