//Inicio de javascript
console.log("js conectado");

const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('Id');

let datos;
let usuario;

obtenerNombreUsuario();
mandarUrlPhp();
insertarLibrosEnDocumento();


// Funciones //

function obtenerNombreUsuario() {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', '../Backend/Menu_principal_usuario.php?Id=' + id, false);

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Respuesta del servidor (PHP)
      usuario = JSON.parse(xhr.responseText);
      console.log(usuario);
    }
  };
  xhr.send();
  let elementoNombre = document.querySelector('#usuario');
  elementoNombre.innerHTML = usuario.Nombre + " " + usuario.Apellido;
}

function mandarUrlPhp() {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', '../Backend/Menu_principal.php?Id=' + id, false);

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Respuesta del servidor (PHP)
      datos = JSON.parse(xhr.responseText);
    }
  };
  xhr.send();
}


function insertarLibrosEnDocumento() {

  if (datos.mensaje) {
    console.log("No se encontraron libros");
    return;
  }
  let librosCont = 0;
  datos.map(function (libro) {
    librosCont++;

    let LibroHTML = `
    <!-- Tarjeta x libro-->
    <div class="w3-card w3-center w3-hover-shadow Libro" id="id`+ librosCont + `" onclick="abrirModal('modal` + librosCont + `')">
      <img src="../Backend/ImgsLibros/`+ libro.img + `" alt="#p_Imagen del libro" class="w3-round">
      <div class="w3-center">
          <p>`+ libro.titulo + `</p>
      </div>
    </div>
    <!-- /tarjeta -->
    `;


    let modalHTML = `
    <div id="modal`+ librosCont + `" class="w3-modal w3-animate-zoom" st="display:none;">
      <div class="w3-modal-content modales">
        <div class="w3-container">
          <span onclick="cerrarModal('modal` + librosCont + `')" class="w3-button w3-display-topright">&times;</span>
          <p>Titulo: `+ libro.titulo + `</p>
          <p>Autor: `+ usuario.Nombre + ` ` + usuario.Apellido + `</p>
          <p>Ultimo Cambio:`+ libro.fecha + ` </p>
          <p>Enfoque: `+ libro.enfoque + `</p>
        </div>
        <div class="w3-bar">
        <button class="w3-bar-item w3-button w3-hover-aqua w3-center">Editar</button>
      </div>
    </div>
    `;


    let elementoCrear = document.querySelector('.crear');
    elementoCrear.insertAdjacentHTML('beforebegin', LibroHTML);
    insertarModalEnDocumento(modalHTML);
  });
};


// Función para insertar el HTML del modal en el cuerpo del documento
function insertarModalEnDocumento(modal) {
  let modalContainer = document.createElement('div');
  modalContainer.innerHTML = modal;
  document.body.appendChild(modalContainer);
}

// Función para abrir el modal
function abrirModal(modal_id) {
  setTimeout(function () {
    let modal = document.querySelector('#' + modal_id);
    console.log(modal);
    modal.style.display = 'block';
  }, 0);
}

// Función para cerrar el modal
function cerrarModal(id) {
  let modal = document.getElementById(id);
  modal.style.display = 'none';
}

function cerrarSesion() {
  console.log("cerraste sesion");
}
