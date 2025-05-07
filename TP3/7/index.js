
document.addEventListener("DOMContentLoaded", function () {

    const reloj = document.getElementById("reloj");

    function actualizarReloj() {
        let tiempo = new Date();
        hora = tiempo.getHours() < 10 ? "0" + tiempo.getHours() : tiempo.getHours();
        minutos = tiempo.getMinutes() < 10 ? "0" + tiempo.getMinutes() : tiempo.getMinutes();
        segundos = tiempo.getSeconds() < 10 ? "0" + tiempo.getSeconds() : tiempo.getSeconds();
        reloj.innerHTML = hora + ":" + minutos;
    }
    setInterval(actualizarReloj, 1000);

});