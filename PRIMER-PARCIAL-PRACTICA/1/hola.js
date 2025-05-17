
document.addEventListener("DOMContentLoaded", function () {

    let input = document.getElementById("nombre");
    let boton = document.getElementById("boton-enviar");

    boton.addEventListener("click", function () {

        let nombre = input.value;
        localStorage.setItem("nombre", nombre);
    })
})