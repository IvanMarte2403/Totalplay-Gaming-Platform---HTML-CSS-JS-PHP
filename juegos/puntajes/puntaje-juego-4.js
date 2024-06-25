window.addEventListener("message", ev => {
    // Envía el valor recolectado a 'game.php' utilizando Fetch
    fetch('juegos/puntajes/guardar-puntaje-4.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'puntaje=' + ev.data,
    })
    .then(response => response.json()) // Cambiado para esperar una respuesta JSON
    .then(data => {
        console.log('Respuesta:', data);
        if (data.success) {
            // Si la operación fue exitosa, redirige a dashboard.php
            window.location.href = 'dashboard.php';
        } else {
            // Manejar el caso de error o éxito falso según sea necesario
            console.error('Error al guardar el puntaje.');
        }
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});