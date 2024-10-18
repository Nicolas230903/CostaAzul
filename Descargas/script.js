// script.js
document.querySelectorAll('a[download]').forEach(button => {
    button.addEventListener('click', () => {
        alert('¡Gracias por descargar el catálogo!');
    });
});