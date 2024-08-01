// animationDashboard.js

// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
	// Seleccionar todos los enlaces dentro de la sección_game_selector
	const links = document.querySelectorAll(".section_game_selector a");

	// Crear la animación con GSAP
	gsap.from(links, {
		duration: 1, // Duración de la animación
		x: 300, // Desplazamiento inicial en el eje X (desde la derecha)
		opacity: 0, // Opacidad inicial
		stagger: 0.2, // Retraso entre cada animación de los enlaces
		ease: "power2.out" // Tipo de easing
	});
});