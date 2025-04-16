document.addEventListener('DOMContentLoaded', function() {

    console.log('Documento cargado');

    const formulario = document.querySelector('form');
    const nombre = document.getElementById('nombre');
    const apellido = document.getElementById('apellido');
    const segundoApellido = document.getElementById('segundo-apellido');
    const domicilio = document.getElementById('domicilio');
    const codigoPostal = document.getElementById('codigo-postal');
    const telefono = document.getElementById('telefono');
    const email = document.getElementById('email');
    const confirmarEmail = document.getElementById('confirmar-email');



    formulario.addEventListener('submit', function(event) {
        event.preventDefault();

        const datos = {
            nombre: nombre.value,
            apellido: apellido.value,
            segundoApellido: segundoApellido.value,
            domicilio: domicilio.value,
            codigoPostal: codigoPostal.value,
            telefono: telefono.value,
            email: email.value,
            confirmarEmail: confirmarEmail.value
        };

        if (email.value !== confirmarEmail.value) {
            alert('Los correos electrónicos no coinciden');
            return;
        }

        console.log('Los datos son:',datos);
        
    })
})
