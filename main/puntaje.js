window.addEventListener('juegoCompletado', function() {
    // Lee el puntaje y el ID del usuario desde el localStorage
    var puntaje = parseInt(localStorage.getItem('puntaje'));
    var id_usuario = localStorage.getItem('id_usuario'); // Asegúrate de guardar el ID del usuario en el localStorage cuando inicie sesión

    // Envía el puntaje y el ID del usuario al servidor utilizando AJAX
    fetch('guardar_puntaje.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'puntaje=' + puntaje + '&id_usuario=' + id_usuario,
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch((error) => {
      console.error('Error:', error);
    });
});