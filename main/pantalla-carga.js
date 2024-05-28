// JavaScript
document.addEventListener('DOMContentLoaded', (event) => {
    const pantallaCarga = document.querySelector('#pantalla-carga');
    const botonJugar = document.querySelector('#boton-jugar');
    const botonPantallaCompleta = document.querySelector('#boton-pantalla-completa');
    const iframe = document.querySelector('iframe');

    // Muestra la pantalla de carga cuando la página se carga
    pantallaCarga.classList.remove('hidden');
    botonPantallaCompleta.style.display = 'none';
    // Oculta la pantalla de carga y muestra el iframe en pantalla completa cuando el usuario hace clic en el botón "Jugar"
    botonJugar.addEventListener('click', () => {
        botonPantallaCompleta.style.display = 'block';
        pantallaCarga.classList.add('hidden');
        iframe.style.position = 'fixed';
        iframe.style.top = '0';
        iframe.style.left = '0';
        iframe.style.width = '100% !important';
        iframe.style.height = '100%';
        iframe.style.zIndex = '1000';
    });

    // Vuelve el iframe a su estado normal cuando el usuario hace clic en el botón de pantalla completa
    botonPantallaCompleta.addEventListener('click', () => {
        iframe.style.position = 'static';
        iframe.style.width = 'auto';
        iframe.style.height = 'auto';
    });
});