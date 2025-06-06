function guardarDatos(nombre, apellido, cantidadVisitas) {


    if (typeof localStorage != 'undefined') {
        console.log("Guardando datos");
        localStorage.setItem("nombre", nombre);
        localStorage.setItem("apellido", apellido);
        localStorage.setItem("cantidadVisitas", cantidadVisitas);
        console.log("Datos guardados correctamente");
    }
    else {
        console.log("No se puede guardar");
    }
}

function contarVisitas() {
    let cantidadVisitas = localStorage.getItem("cantidadVisitas");
    let aux = 0;
    if (cantidadVisitas == null) {
        cantidadVisitas = 1;
        console.log("Es la primera visita");
    }
    else {
        console.log("Es una visita posterior");
        aux = parseInt(cantidadVisitas);
        cantidadVisitas = aux + 1;
    }
    localStorage.setItem("cantidadVisitas", cantidadVisitas);
}

function setUltimaVisita() {
    let tiempoActual = new Date();
    let diaActual = tiempoActual.getDate();
    let mesActual = tiempoActual.getMonth() + 1;
    let añoActual = tiempoActual.getFullYear();

    let ultimaVisita = (diaActual + "/" + mesActual + "/" + añoActual);
    localStorage.setItem("ultimaVisita", ultimaVisita);
    return ultimaVisita;
}



document.addEventListener("DOMContentLoaded", function () {

    let botonRegistro = document.getElementById("botonRegistro");

    botonRegistro.addEventListener("click", function () {
        let nombre = document.getElementById("nombre").value;
        let apellido = document.getElementById("apellido").value;
        let cantidadVisitas = contarVisitas();
        let ultimaVisita = setUltimaVisita();




        guardarDatos(nombre, apellido, cantidadVisitas, ultimaVisita);

        // falta hacer la consistencia de los datos
    });

    // PREGUNTAS
    // el local storage puede almacener todos los tipos de datos?
    // el local storage guarda unicamente un valor de cada vez?
    // es decir, si guardo un nuombre y un apellido, si vuelvo a guardar un nombre, se sobreescribe el anterior?
    // el problema es que si ingresa otra persona con otros datos, la cantidad de visitas se mantiene pero se cambia el nombre y apellido
});

//Soluciones posibles a guardar muchos usuarios:
// 1. Guardar los datos en un array y guardar el array en el local storage