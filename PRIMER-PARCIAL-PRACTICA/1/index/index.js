function setBienvenida(usuario, primeraVez, fecha, ganadas) {
    //setea el titulo
    let tituloBienvenida = document.getElementById("nombre-bienvenida");
    tituloBienvenida.innerHTML = primeraVez ? usuario : "de nuevo " + usuario;
    condicion ? verdadero : falso;

    let contenedor = document.getElementById("contenedor-bienvenida");

    //setea los textos
    // primera vez guarda la variable como strig, por lo que comparo con otra strig
    if (primeraVez.toLowerCase() == 'true') {

        let textoBienvenida = document.createElement("p")
        textoBienvenida.innerHTML = "Es la primera vez que ingresas, comienza a jugar!"
        contenedor.appendChild(textoBienvenida)

        console.log("Es la primera vez")
    }
    else {
        console.log('No es la primera vez')
        let fechaParrafo = document.createElement("p");
        let ganadasParrafo = document.createElement("p");
        fechaParrafo.innerHTML = "Tu ultimo acceso fue el  " + fecha;
        ganadasParrafo.innerHTML = "Has ganado " + ganadas + " partidas";

        contenedor.appendChild(fechaParrafo);
        contenedor.appendChild(ganadasParrafo);
    }

}




document.addEventListener("DOMContentLoaded", function () {
    let nombreUsuario = localStorage.getItem("usuario");
    let ultimaVez = localStorage.getItem("ultimaVez");
    let partidasGanadas = localStorage.getItem("partidasGanadas");
    let primeraVez = localStorage.getItem("primeraVez");

    let boton = document.getElementById("ingresa-juego");


    setBienvenida(nombreUsuario, primeraVez, ultimaVez, partidasGanadas);

    boton.addEventListener("click", function () {
        window.location.href = "../juego/preJuego.html";
    })
    // deberia ir las opciones de juego aca o en el archivo juego?



});