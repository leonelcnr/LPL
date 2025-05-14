document.addEventListener("DOMContentLoaded", function () {

    let botonJugar = document.getElementById("botonJugar");
    botonJugar.addEventListener("click", function () {
        // si apreta jugar, guarda la cantidad de letras
        let cantidadLetras = document.getElementById("cantidad-letras").value;
        localStorage.setItem("cantidadLetras", cantidadLetras);
        window.location.href = "juego.html";

    });
})