// user-interface.js

window.onload = function() {
    // Animación para la foto del usuario
    gsap.from(".photo-container img", {
        duration: 1.5,
        opacity: 0,
        scale: 0,
        ease: "elastic.out(1, 0.3)"
    });

    // Animación para la información del usuario
    gsap.from(".info-usuario", {
        duration: 1.5,
        opacity: 0,
        y: 50,
        ease: "power4.out",
        delay: 0.5
    });

    // Animación para el contenedor de información del usuario
    gsap.from("#infoUsuarioContainer h2, #infoUsuarioContainer p", {
        duration: 1,
        opacity: 0,
        y: 20,
        stagger: 0.2,
        ease: "power4.out",
        delay: 1
    });

    // Animación para los enlaces de navegación
    gsap.from(".navigation-views a", {
        duration: 1,
        opacity: 0,
        x: -1000,
        stagger: 0.2,
        ease: "power4.out",
        delay: 0.5
    });
};