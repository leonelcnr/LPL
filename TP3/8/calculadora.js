
// Calcula la operacion del input
function calcular(operacion) {
    return eval(operacion);
}


// Agrega los numeros al input
function agregarNumero(botones) {
    console.log('hola')
    botones.forEach(function (boton) {
        boton.addEventListener("click", function (e) {
            let valor = e.target;
            let input = document.getElementById("input-numero");
            input.value += valor.value;
        })
    })
};

function borrarTodo() {
    let input = document.getElementById("input-numero");
    input.value = "";
};

function borrarUltimoElemento() {
    let input = document.getElementById("input-numero");
    input.value = input.value.slice(0, -1)
}

function borrarUltimoTermino() {
    let input = document.getElementById("input-numero");
    let ultimoTermino = input.value.match(/[\d.]+$|[-+*/%]$/);
    input.value = input.value.slice(0, (input.value.length - ultimoTermino[0].length));
}


document.addEventListener("DOMContentLoaded", function () {
    let botones = document.querySelectorAll(".numeros");
    let botonIgual = document.getElementById("botonIgual");
    let botonBorrarTodo = document.getElementById("borrarTodo")
    let botonCE = document.getElementById("botonCe");
    let botonRetr = document.getElementById("botonRetr");

    agregarNumero(botones);
    // Hace el calculo cuando se apreta el boton de igual
    botonIgual.addEventListener("click", function () {
        let operacion = document.getElementById("input-numero").value;
        let resultado = calcular(operacion);
        document.getElementById("input-numero").value = resultado;
    });

    // boton C que borra todo
    botonBorrarTodo.addEventListener("click", function () {
        borrarTodo();
    })

    // boton CE que borra ultimo termino
    botonCE.addEventListener("click", function () {
        borrarUltimoTermino();
    })

    botonRetr.addEventListener("click", function () {
        borrarUltimoElemento()
    })
});