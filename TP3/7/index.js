
function abrirVentana() {
    const anchoVentanaAbrir = 500;
    const altoVentanaAbrir = 600;
    const anchoVentana = (window.screen.width / 2) - (anchoVentanaAbrir / 2);
    const altoVentana = (window.screen.height / 2) - (altoVentanaAbrir / 2);

    const especificaciones = "width=" + anchoVentanaAbrir + ", height=" + altoVentanaAbrir + ", top=" + altoVentana + ", left=" + anchoVentana + ", status=yes, resizable=no, scrollbars=no";

    window.open("ventanaEmergente.html", "", especificaciones);
}


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


    document.getElementById("botonAbrir").addEventListener("click", function () {

        abrirVentana();
    });
});