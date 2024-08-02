document.querySelectorAll('.section_game_selector a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.querySelector('.left-arrow').addEventListener('click', function() {
    document.querySelector('.section_game_selector').scrollBy({
        left: -300, // Ajusta este valor según sea necesario
        behavior: 'smooth'
    });
});

document.querySelector('.right-arrow').addEventListener('click', function() {
    document.querySelector('.section_game_selector').scrollBy({
        left: 300, // Ajusta este valor según sea necesario
        behavior: 'smooth'
    });
});