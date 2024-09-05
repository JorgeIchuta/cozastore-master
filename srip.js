const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const lista = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

cargarEventListeners();

function cargarEventListeners() {
    elementos1.addEventListener('click', comprarElemento);
    carrito.addEventListener('click', eliminarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
}

function comprarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.parentElement;
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento) {
    const infoElemento = {
        imagen: elemento.querySelector('img').src,
        titulo: elemento.querySelector('h3').textContent,
        precio: elemento.querySelector('.precio').textContent,
        id: elemento.querySelector('a').getAttribute('data-id')
    };
    insertarCarrito(infoElemento);
}

function insertarCarrito(elemento) {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${elemento.imagen}" width="100">
        </td>
        <td>
            ${elemento.titulo}
        </td>
        <td>
            ${elemento.precio}
        </td>
        <td>
            <a href="#" class="borrar" data-id="${elemento.id}">X</a>
        </td>
    `;
    lista.appendChild(row);
    guardarCarritoLocalStorage(elemento);
}

function eliminarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('borrar')) {
        e.target.parentElement.parentElement.remove();
        const elementoId = e.target.getAttribute('data-id');
        eliminarElementoLocalStorage(elementoId);
    }
}

function vaciarCarrito() {
    while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }
    vaciarLocalStorage();
    return false;
}

function guardarCarritoLocalStorage(elemento) {
    let elementos = obtenerCarritoLocalStorage();
    elementos.push(elemento);
    localStorage.setItem('carrito', JSON.stringify(elementos));
}

function obtenerCarritoLocalStorage() {
    let elementos;
    if (localStorage.getItem('carrito') === null) {
        elementos = [];
    } else {
        elementos = JSON.parse(localStorage.getItem('carrito'));
    }
    return elementos;
}

function eliminarElementoLocalStorage(id) {
    let elementos = obtenerCarritoLocalStorage();
    elementos = elementos.filter(elemento => elemento.id !== id);
    localStorage.setItem('carrito', JSON.stringify(elementos));
}

function vaciarLocalStorage() {
    localStorage.clear();
}

document.addEventListener('DOMContentLoaded', () => {
    let elementos = obtenerCarritoLocalStorage();
    elementos.forEach(elemento => insertarCarrito(elemento));
});
