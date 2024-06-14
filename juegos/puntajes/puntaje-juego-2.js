window.addEventListener("message", ev => {
    console.log("Valor recibido:", ev.data); // Depura el valor recibido

    // Verifica si ev.data es un objeto y tiene la propiedad score
    if (typeof ev.data === 'object' && ev.data.hasOwnProperty('score')) {
        // Intenta convertir el valor de la propiedad score a número
        const puntaje = Number(ev.data.score);

        // Verifica si el valor convertido es un número
        if (!isNaN(puntaje)) {
            // Si es un número, procede con el envío
            fetch('juegos/puntajes/guardar-puntaje-2.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body:    'puntaje=' + puntaje,
            })
            .then(response => response.text())
            .then(data => {
                console.log('Respuesta:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        } else {
            // Si no es un número, maneja el error
            console.error('El valor de score recibido no es un número.');
        }
    } else {
        // Si el objeto recibido no tiene la propiedad score, maneja el error
        console.error('El objeto recibido no tiene la propiedad score.');
    }
});