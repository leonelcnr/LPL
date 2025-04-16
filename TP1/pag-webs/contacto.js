// utilice AJAX para enviar una peticion a procesar.php y que suba los datos a la base de datos
// Los datos se envian en un JSON con el metodo application/json
// REVISAR CUAL USAMOS EN LA CURSADA - hay dos formas de enviar, en formato JSON o en Formato XMLHttpRequest

//JavaScript depende principalmente del método HTTP utilizado en la petición AJAX (GET o POST) y del formato de los datos enviados (por ejemplo, application/x-www-form-urlencoded, application/json).


document.addEventListener("DOMContentLoaded", function () {
    console.log("El documento se cargo correctamente");

    const formulario = document.getElementById('formulario');
    const mensajeRespuesta = document.getElementById('mensajeRespuesta');
    //en mensajeRespuesta deberia ir un mensaje para mostrarse en la pagina directamente 


    formulario.addEventListener('submit', function (e) {
        e.preventDefault();

        if (document.getElementById("email").value !== document.getElementById("confirmar-email").value) {
            return alert("EMAILS DISTINTOS")
        }
        else {
            const data = {
                nombre: document.getElementById('nombre').value,
                apellido: document.getElementById('apellido').value,
                email: document.getElementById('email').value,
                // 'confirmar-email': document.getElementById('confirmar-email').value
            };

            //puse los campos como requeridos para enviar, hace falta hacer la concistencia de datos?


            fetch("procesar.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Error en la petición. Código de estado: ${response.status}`);
                    }
                    return response.text();
                })
                .then(data => {
                    console.log("Respuesta del servidor: ", data);
                    alert(data);
                    // mensajeRespuesta.innerHTML = data;
                })
                .catch(error => {
                    console.error("Hubo un error: ", error);
                    alert(error)
                    // mensajeRespuesta.innerHTML = "Ocurrió un error al procesar el formulario";
                });
        }
    });
});



// terminar de entender lo que hace cada cosa
// ver que muestre los resultados de forma mas amigable al usuario
// ver de mejorar el codigo,para que quede separado


