function consistenciaDatos() {
    let elementos = []
    elementos = document.getElementById("campos-solicitados").value.split(",")

    for (let index = 0; index < elementos.length; index++) {
        const element = elementos[index];

        elementos[index] = element.trim()
        if (elementos[index] === "" || elementos[index] === " ") {
            console.log(elementos[index])
            console.log("elemento vacio")
            elementos.splice(index, 1) //FUNCION QUE ELIMINA ELEMENTOS DE UN ARRAY
            // EL PRIMER PARAMETRO ES LA POSICION DEL ARRAY Y EL SEGUNDO ES LA CANTIDAD DE ELEMENTOS QUE SE QUEREN ELIMINAR DESDE ESA POSICION
            // Y PUEDE TENER MAS PARAMETROS, QUE SON LOS ELEMENTOS QUE SE QUIEREN AGREGAR EN ESA POSICION
        };

    };
    return elementos

    //arreglar esta funcion, quedan espacios en blanco si se usa muchas , 

}


document.addEventListener("DOMContentLoaded", function () {

    let botonGenerar = document.getElementById("generar-formulario")
    botonGenerar.addEventListener("click", function () {
        let formulario = document.getElementById("formulario")

        //borrar elementos del formulario
        formulario.innerHTML = ""


        let elementos = consistenciaDatos()
        console.log(elementos)
        // genera elementos vacios igualmente

        for (let index = 0; index < elementos.length; index++) {
            let element = elementos[index];

            let labelCreado = document.createElement("label")
            //crea los labels
            labelCreado.innerHTML = element
            //crea los inputs 
            let input = document.createElement("input")
            input.setAttribute("name", element)

            formulario.appendChild(labelCreado)
            formulario.appendChild(input)
        }
    });
});

//por cada elemento generar un label y un input