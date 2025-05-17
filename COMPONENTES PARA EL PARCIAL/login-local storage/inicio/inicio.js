document.addEventListener("DOMContentLoaded", function () {

    let nombreUsuario = document.getElementById("nombre-bienvenida");
    let ultimaVisita = document.getElementById("ultima-visita");


    nombreUsuario.innerHTML = localStorage.getItem("nombre");
    ultimaVisita.innerHTML = localStorage.getItem("fecha");

})