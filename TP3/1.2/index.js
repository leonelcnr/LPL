
const respuesta = document.getElementById('mensajeRespuesta');
const respuesta2 = document.getElementById('mensajeRespuesta2');
const boton_suma = document.getElementById('boton_suma');
const boton_producto = document.getElementById('boton_producto');
const numero = document.getElementById('numero');

function suma(numero1, numero2) {
    return parseInt(numero1) + parseInt(numero2);
};

function producto(numero1, numero2) {
    return parseInt(numero1) * parseInt(numero2);
};

function es_mayor(numero1, numero2) {
    return parseInt(numero1) > parseInt(numero2);
};

function ingreso() {
    return new Promise((resolve) => {
        numero.addEventListener('keypress', function handler(event) {
            if (event.key === 'Enter') {
                const value = numero.value;
                numero.value = '';
                numero.removeEventListener('keypress', handler);
                resolve(value);
            };
        });
    });
};




// CUANDO SE APRETA EL BOTON DE SUMAR
boton_suma.addEventListener('click', async function () {
    fecha();
    numero.placeholder = 'ingrese el primer numero';
    numero.disabled = false;

    const numero_1 = await ingreso();
    numero.placeholder = 'ingrese el segundo numero';
    const numero_2 = await ingreso();
    numero.placeholder = 'La suma es: ' + suma(numero_1, numero_2);
    numero.disabled = true;


});



// CUANDO SE APRETA EL BOTON DE PRODUCTO
boton_producto.addEventListener('click', async function () {
    numero.disabled = false;
    numero.placeholder = 'ingrese el primer numero';
    const numero_1 = await ingreso();
    numero.placeholder = 'ingrese el segundo numero';
    const numero_2 = await ingreso();
    numero.placeholder = 'El producto es: ' + producto(numero_1, numero_2);
    numero.disabled = true;
});

function fecha() {
    fecha = new Date();
    dia_actual = fecha.getDate();
    mes_actual = fecha.getMonth() + 1;
    anio_actual = fecha.getFullYear();
    console.log(dia_actual, mes_actual, anio_actual);
};


//NOTAS

// mostrar los resultados de una mejor forma - hacer las otras funciones 