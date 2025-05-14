function primeraVez() {
    if (localStorage == undefined || localStorage == null) {
        console.log("entro a la funcion primera vez")
        return true
    }
    return false;
}

function ultimaVez() {
    let ahora = new Date();
    let dia = ahora.getDate();
    let mes = ahora.getMonth() + 1;
    let año = ahora.getFullYear();

    return dia + "/" + mes + "/" + año;
}


document.addEventListener('DOMContentLoaded', function () {
    let boton = document.getElementById("boton")
    boton.addEventListener("click", function () {

        let nombreUsuario = document.getElementById("nombre-usuario").value
        let usuarioLocal = localStorage.getItem("usuario")

        if (primeraVez() || usuarioLocal != nombreUsuario) {
            localStorage.setItem("usuario", nombreUsuario)
            localStorage.setItem("primeraVez", true)
            localStorage.setItem("ultimaVez", ultimaVez())
            localStorage.setItem("partidasGanadas", 0)

            // si es la primera vez, setea las variables del local storage
            // o es otro usuario
        }
        else {
            localStorage.setItem("ultimaVez", ultimaVez())
            localStorage.setItem("primeraVez", false)
            // si no es, solo setea la ultima vez que entro
        }
        window.location.href = "../index/index.html"
    })

});

//local storage debe tener
// usuario
// es la primera vez que entra
// ultima vez que entro
// cuantas partidas gano