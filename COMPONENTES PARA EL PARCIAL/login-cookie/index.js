function setCookies(nombre, tiempo, valor) {
    let nombreCookie = nombre
    let tiempoCookie = tiempo
    let valorCookie = valor
    // let postCookie = document.cookie.search(nombreCookie)
    document.cookie = nombreCookie + "=" + valorCookie + "; max-age=" + tiempoCookie;

}

// function getCookies(nombreCookie) {

//     // Decodifica las cookies y las separa en un array
//     let cookies = document.cookie.split(';');
//     for (let i = 0; i < cookies.length; i++) {
//         let cookie = cookies[i].trim();
//         // Busca la cookie por nombre
//         if (cookie.indexOf(nombreCookie + "=") === 0) {
//             // Devuelve el valor de la cookie
//             return cookie.substring((nombreCookie + "=").length, cookie.length);
//         }
//     }
//     // Si no la encuentra, devuelve cadena vacía
//     return "";
// }

function getCookies(nombreCookie) {
    let cookies = document.cookie;
    let pos = cookies.search(nombreCookie + "=");
    if (pos === -1) {
        return "";
    } else {
        let principio = pos + nombreCookie.length + 1;
        let end = cookies.indexOf(";", principio);
        if (end === -1) {
            end = cookies.length;
        }
        return cookies.substring(start, end);
    }
}


document.addEventListener("DOMContentLoaded", function () {

    let botonIngreso = document.getElementById("botonIngreso");
    let botonMostrar = document.getElementById("get");
    let mostrarCookies = document.getElementById("mostrar-cookies");

    botonIngreso.addEventListener("click", function () {
        let nombreUsuario = document.getElementById("nombre");
        // let ultimaVisita = document.getElementById("ultima-visita");
        console.log(nombreUsuario.value);

        setCookies("nombreUsuario", 300, nombreUsuario.value);
        setCookies("ultimaVisita", 300, new Date().toLocaleString('es-AR'));
    });

    botonMostrar.addEventListener("click", function () {

        mostrarCookies.innerHTML = 'nombre =' + getCookies('nombreUsuario') + '  ultima visita =' + getCookies('ultimaVisita');



    });
});