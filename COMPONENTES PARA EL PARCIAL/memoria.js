// 1. Array de elementos (pares)
let elementos = ["🍎", "🍌", "🍇", "🍓", "🍒", "🍍", "🥝", "🍉"];
let cartas = elementos.concat(elementos); // 2. Duplica para pares

// 3. Mezcla el array (Fisher-Yates)
for (let i = cartas.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1));
    [cartas[i], cartas[j]] = [cartas[j], cartas[i]];
}

// 4. Crea las cartas en el DOM
let tablero = document.getElementById("tablero");
cartas.forEach((valor, index) => {
    let carta = document.createElement("div");
    carta.className = "carta";
    carta.dataset.valor = valor;
    carta.innerText = ""; // Oculto al inicio
    carta.addEventListener("click", girarCarta);
    tablero.appendChild(carta);
});

let cartasGiradas = [];

function girarCarta(e) {
    let carta = e.target;
    if (cartasGiradas.length < 2 && carta.innerText === "") {
        carta.innerText = carta.dataset.valor;
        cartasGiradas.push(carta);

        if (cartasGiradas.length === 2) {
            setTimeout(comprobarCartas, 1000);
        }
    }
}

function comprobarCartas() {
    if (cartasGiradas[0].dataset.valor === cartasGiradas[1].dataset.valor) {
        // Si son iguales, las dejamos destapadas o las eliminamos
        cartasGiradas[0].style.visibility = "hidden";
        cartasGiradas[1].style.visibility = "hidden";
    } else {
        // Si no son iguales, las tapamos de nuevo
        cartasGiradas[0].innerText = "";
        cartasGiradas[1].innerText = "";
    }
    cartasGiradas = [];
}