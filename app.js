const botonAgregar = document.querySelector('#btn-agregar');
const botonCerrar = document.querySelector('.boton-cerrar');
const formulario = document.querySelector('.material');

botonAgregar.addEventListener('click', () => {
    formulario.style.display = 'block';

});
botonCerrar.addEventListener('click', (e) => {
    e.preventDefault();
    formulario.style.display = 'none';

});