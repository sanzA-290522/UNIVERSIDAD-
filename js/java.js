// Selecciona el menú y submenú
const menu = document.querySelector('.menu');
const submenu = document.querySelector('.submenu-maestrias');

// Muestra el submenú al pasar el cursor sobre el menú
menu.addEventListener('mouseenter', () => {
    submenu.style.display = 'block';
});

// Oculta el submenú después de un breve tiempo al salir del menú
menu.addEventListener('mouseleave', () => {
    setTimeout(() => {
        submenu.style.display = 'none';
    }, 300); // Ajusta el tiempo de espera si lo prefieres
});
