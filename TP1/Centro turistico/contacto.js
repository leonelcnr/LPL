document.addEventListener('DOMContentLoaded', function(){
    console.log('El documento se cargo correctamente')


    const formulario = document.querySelector('form');
    const nombre = document.getElementById('nombre');
    const email = document.getElementById('email');
    const telefono = document.getElementById('telefono');

    formulario.addEventListener
    ('submit', function(event){
    event.preventDefault();

        const datos = {
            nombre: nombre.value,
            email: email.value,
            telefono: telefono.value
        };
        console.log('Los datos son: ', datos);
        formulario.reset();
    });
});



