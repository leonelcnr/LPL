function validarDatos(nombre, apellido) {
    return (nombre != "" && apellido != "")
}

function fechaActual() {
    let fecha = new Date()
    let dia = fecha.getDate()
    let mes = fecha.getMonth() + 1
    let anio = fecha.getFullYear()
    return dia + "/" + mes + "/" + anio
}

document.addEventListener("DOMContentLoaded", function () {
    let nombre = document.getElementById("nombre")
    let apellido = document.getElementById("apellido")
    let boton = document.getElementById("botonIngreso")


    boton.addEventListener("click", function () {
        if (validarDatos(nombre.value, apellido.value)) {
            localStorage.setItem('nombre', nombre.value)
            localStorage.setItem('apellido', apellido.value)
            localStorage.setItem('fecha', fechaActual())
            window.location.href = "./inicio/inicio.html"
        }



        if (apellido == "") {
            apellido.focus()
        }
        if (nombre == "") {
            nombre.focus()
        }

    });

});