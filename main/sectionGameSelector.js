document.addEventListener('DOMContentLoaded', function() {
    // Datos de ejemplo para los juegos, incluyendo el título
    const juegosInfo = {
        'game-1': {
            titulo: 'Big Trivia',
            imgSrc: 'img/juegos/portada/juego-portada-general-1.png',
            descripcion: 'Juego de preguntas con ruleta. Cinco categorías. Acumula puntos por respuestas correctas.',
            estrellas: 5,
            href: 'game.php'
        },
        'game-2': {
            titulo: 'Fruit Ninja',
            imgSrc: 'img/juegos/portada/juego-portada-general-2.png',
            descripcion: 'Detén enemigos, mejora cañonazos, acumula puntos. ¡Diviértete!',
            estrellas: 4,
            href: 'game2.php'
        }, 
        
        'game-3': {
            titulo: 'Flappy Bird',
            imgSrc: 'img/juegos/portada/juego-portada-general-3.png',
            descripcion: 'Juego de habilidad. ¡Diviértete!, presiona ESPACIO para avanzar',
            estrellas: 5,
            href: 'game3.php'
        },
        'game-4': {
            titulo: 'Tower Stack',
            imgSrc: 'img/juegos/portada/juego-portada-general-4.png',
            descripcion: '¡Que se apile ese edificio como stack!',
            estrellas: 3,
            href: 'game4.php'
        },
        'game-5': {
            titulo: 'Memoria',
            imgSrc: 'img/juegos/portada/juego-portada-general-5.png',
            descripcion: 'Juego de memoria con tarjetas únicas sobre football soccer. ¡Diviértete!',
            estrellas: 4,
            href: 'game5.php'
        },
    };

    // Función para actualizar la información del juego principal
    function actualizarJuegoPrincipal(juegoId) {
        const juego = juegosInfo[juegoId];
        if (!juego) return;

        document.getElementById('sectionGameImage').innerHTML = `<img src="${juego.imgSrc}" alt="">`;
        document.getElementById('sectionGameInformation').querySelector('h3').textContent = juego.titulo;
        document.getElementById('sectionGameInformation').querySelector('.descripcion-juego').textContent = juego.descripcion;
        document.getElementById('sectionGameInformation').querySelector('a').href = juego.href;

        // Actualizar estrellas
        const estrellasContainer = document.getElementById('sectionGameInformation').querySelector('.estrellas');
        estrellasContainer.innerHTML = ''; // Limpiar estrellas actuales
        for (let i = 0; i < juego.estrellas; i++) {
            estrellasContainer.innerHTML += '<i class="fas fa-star"></i>';
        }
    }

    // Añadir evento de clic a cada enlace de juego
    document.querySelectorAll('.section_game_selector a').forEach(enlace => {
        enlace.addEventListener('click', function(e) {
            e.preventDefault(); // Prevenir la navegación
            const juegoId = this.id;
            actualizarJuegoPrincipal(juegoId);
        });
    });
});