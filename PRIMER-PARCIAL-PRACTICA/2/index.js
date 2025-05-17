function comprobarCartas() {
    let cartasGiradas = document.querySelectorAll('.cartas-giradas');
    if (cartasGiradas[0].dataset.valor === cartasGiradas[1].dataset.valor) { // condicion de cartas iguales
        cartasGiradas.forEach(carta => {
            carta.classList.remove('cartas-giradas');
            carta.classList.add('cartas-ocultas');
        });
    }
    else {
        cartasGiradas.forEach(carta => {
            carta.classList.remove('cartas-giradas');
        });
    }
}



document.addEventListener('DOMContentLoaded', function () {
    const elementosMap = new Map([
        ['manzana', '🍎'],
        ['banana', '🍌'],
        ['uva', '🍇'],
        ['fresa', '🍓'],
        ['cereza', '🍒'],
        ['piña', '🍍'],
        ['kiwi', '🥝'],
        ['sandia', '🍉']
    ]);
    let claves = Array.from(elementosMap.keys());
    let pares = claves.concat(claves);
    for (let i = pares.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        [pares[i], pares[j]] = [pares[j], pares[i]];
    }
    let divsCartas = document.querySelectorAll('.cartas');
    divsCartas.forEach((div, index) => {
        let clave = pares[index];
        div.dataset.valor = elementosMap.get(clave); // Guarda el emoji en data-valor
        // Si quieres mostrar el emoji directamente (solo para pruebas):
        // div.innerText = elementosMap.get(clave);
        div.innerText = '';
    });



    // AYUDA DE CHAT GPT ^ LO DE ARRIBA 


    let cartas = document.querySelectorAll('.cartas');
    let cartasNormales = Array.from(cartas);
    let cartasGiradas = [];

    console.log(cartasGiradas);

    cartasNormales.forEach(carta => {
        carta.addEventListener('click', () => {

            // console.log(cartasGiradas)
            // deberia meter un tiempo o agregar una condicion para que no se giren muchas cartas al mismo tiempo?

            if (!carta.classList.contains('cartas-ocultas')) {
                carta.classList.toggle('cartas-giradas');
                console.log(cartasGiradas); // ACA LO DEJE POR ULTIMA VEZ
                // LAS CARTAS GIRADAS QUEDAN EN EL ARRAY


                if (carta.classList.contains('cartas-giradas')) {
                    carta.innerText = carta.dataset.valor;
                }
                else {
                    carta.innerText = '';
                }


                cartasGiradas = Array.from(document.querySelectorAll('.cartas-giradas'));
                if (cartasGiradas.length === 2) {
                    setTimeout(() => {
                        comprobarCartas();
                        cartasNormales.forEach(c => {
                            if (!c.classList.contains('cartas-giradas')) {
                                c.innerText = "";
                            }
                        });
                    }, 500);
                    cartasNormales = cartasNormales.filter(elemento => !cartasGiradas.includes(elemento));
                }
            }
        });
    })

})



//prblema
// 1. el array de cartas normales no se actualiza, por lo que se puede volver a seleccionar la misma carta

// ideas
// CUANDO HAGA CLICK SE LE ASIGNA UNA CLASE DE CSS LO QUE LO HACE GIRAR
// CUANDO SE LE DA CLICK GIRA UNICAMENTE CON JS


//IDEAS DE COMO GUARAR COSAS RANDOMS EN LAS
// HACER UN DICCIONARIO Y


// COSAS QUE MEJORAR
// algunas cosas del codigo no se entienden
// si tocas las cartas muy rapido se pueden dar vuelta mas de dos
