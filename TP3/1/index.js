
function es_mayusculas(cadena) {
    return cadena === cadena.toUpperCase();
};

function es_minusculas(cadena) {
    return cadena === cadena.toLowerCase();
};

document.addEventListener('DOMContentLoaded', function () {

    document.getElementById('boton').addEventListener('click', function () {
        let respuesta = document.createElement('p');
        respuesta.setAttribute('id', 'respuesta');
        const div = document.getElementById('contenedor');


        // const respuesta = document.getElementById('respuesta');
        let cadena = prompt('ingrese una cadena');

        if (es_mayusculas(cadena)) {
            console.log('mayusculas');
            respuesta.innerHTML = "la cadena es mayuscula";

        }
        else if (es_minusculas(cadena)) {
            console.log("MUNUSCULAS")
            respuesta.innerHTML = "la cadena es minuscula";
        }
        else {
            respuesta.innerHTML = "la cadena es mixta";
        }
        div.appendChild(respuesta);
        // cadena = ingreso();
        console.log(cadena);
        console.log("abc");
    });
});