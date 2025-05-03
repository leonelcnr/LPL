function primeraVisita() {
    var nombreCookie = "visitas";
    var vigencia = 20;
    var DNI = ""
    var posCookie = document.cookie.search(nombreCookie);
    if (posCookie == -1) { //
        document.cookie = nombreCookie + "=1; max-age=" + vigencia + "; DNI=" + DNI;
        return true;
    }
};
// unicamente devuelvo true si es la primera visita, si no lo es no devuelvo nada


function letraAsociada(DNI) {
    let letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E", "T"];
    let resultado = 0;
    resultado = parseInt(DNI) % 23;
    return letras[resultado];
}

function chequeoVistas() {
    let titulo = document.getElementById("tituloBienvenida");
    let divpadre = document.getElementById("contenedorBienvenida");
    let boton = document.getElementById("boton");
    let dni = document.getElementById("DNI");
    let letra = document.createElement("input");

    letra.setAttribute("type", "text");
    letra.setAttribute("id", "letra");
    letra.setAttribute("placeholder", "INGRESAR LA LETRA ASOCIADA");
    letra.setAttribute("maxlength", "1");
    letra.setAttribute("required", "true")
    letra.setAttribute("autocomplete", "off")


    if (primeraVisita()) { // si es la primera visita devuelve true, si no lo es pasa al else
        titulo.innerHTML = "Bienvenido";
        boton.innerHTML = "Generar";
        return true;
    }
    else {
        titulo.innerHTML = "Bienvenido de nuevo";
        boton.innerHTML = "Verificar";
        divpadre.appendChild(letra);
        // dni.value = document.cookie.split("=")[2];
        // console.log(d)
        return false;
    };
};

function mostrarMensaje(elemento, mensaje, tiempoVisible) {

    elemento.appendChild(mensaje)

    setTimeout(() => {
        elemento.removeChild(mensaje)
    }, tiempoVisible);
}


document.addEventListener('DOMContentLoaded', () => {
    var primeraVez = chequeoVistas();  // hace falta que se llame en este evento?

    document.getElementById("boton").addEventListener("click", () => {
        let DNI = document.getElementById("DNI").value;
        let divRespuesta = document.getElementById("contenedorBienvenida");

        // Si hay una respuesta anterior, la elimino para que no se acumulen
        let respuestaAnterior = document.getElementById("respuesta");
        if (respuestaAnterior != null) {
            divRespuesta.removeChild(respuestaAnterior)
        };

        // Creo el label para mostrar la respuesta
        let respuesta = document.createElement("label");
        respuesta.setAttribute("id", "respuesta");

        // Si es la primera vez que se entra, muestro unicamente la letra asociada al DNI
        if (primeraVez) {
            respuesta.innerHTML = "Letra asociada: " + letraAsociada(DNI);
            divRespuesta.appendChild(respuesta);
            document.cookie = "DNI=" + DNI;
        }
        else { // Si no es la primera vez, muestro si el DNI es correcto o incorrecto
            let letra = document.getElementById("letra");
            respuesta.innerHTML = letraAsociada(DNI) == letra.value.toUpperCase() ? "LETRA CORRECTA" : "LETRA INCORRECTA";
            mostrarMensaje(divRespuesta, respuesta, 5000);
        }
    });
});


//COSAS QUE ARREGLAR
// SIMPLIFICAR EL CODIGO, SE PUEDE ABSTRAER
// MOSTRAR LOS MENSAJES MAS AMIGABLEMENTE
// GUARDAR EL DNI EN UNA COOKIE Y MOSTRARLO EN EL INPUT
