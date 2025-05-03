document.addEventListener("DOMContentLoaded", () => {

    const modal = document.getElementById('modal');
    const imagenAmpliada = document.getElementById('imagenAmpliada');
    const botonCerrar = document.getElementById('cerrarModal');
    const imagenes = document.querySelectorAll('.imagenes img');


    imagenes.forEach(img => {
        img.addEventListener('click', () => {
            imagenAmpliada.src = img.src;
            modal.showModal();
        });
    });



    botonCerrar.addEventListener('click', () => {


        modal.close();

    });




});