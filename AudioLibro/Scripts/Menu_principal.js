//Inicio de javascript
console.log("js conectado");

const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('Id');

let datos;

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
      datos = JSON.parse(xhr.responseText);
      console.log(datos);
    }
  };
  xhr.send();
  let elementoNombre = document.querySelector('#usuario');
  elementoNombre.innerHTML = datos.Nombre + " " + datos.Apellido;
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
    <div class="w3-card w3-center w3-hover-shadow Libro" onclick="abrirModal()">
      <img src="../Backend/ImgsLibros/`+ libro.img + `" alt="#p_Imagen del libro" class="w3-round">
      <div class="w3-center">
          <p>`+ libro.titulo + `</p>
      </div>
    </div>
    <!-- /tarjeta -->
    `;

    let modalHTML = `
    <div id="id`+ librosCont + `" class="w3-modal w3-animate-zoom" st="display:none;">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="cerrarModal()" class="w3-button w3-display-topright">&times;</span>
          <p>Titulo: #p_Titulo</p>
          <p>Autor: #p_Usuario</p>
          <p>Ultimo Cambio: #p_fecha de modificacion</p>
          <p>Numero de Paginas: #p_NumPag</p>
          <p>Enfoque: #p_Enfoque</p>
        </div>
        <button>Editar</button>
      </div>
    </div>
    `;
    let elementoCrear = document.querySelector('.crear');
    elementoCrear.insertAdjacentHTML('beforebegin', LibroHTML);
  });
  for (let libro in datos) {

  }
};

let modalHTML = `
<div id="id02" class="w3-modal w3-animate-zoom" st="display:none;">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="cerrarModal()" class="w3-button w3-display-topright">&times;</span>
      <p>Titulo: #p_Titulo</p>
      <p>Autor: #p_Usuario</p>
      <p>Ultimo Cambio: #p_fecha de modificacion</p>
      <p>Numero de Paginas: #p_NumPag</p>
      <p>Enfoque: #p_Enfoque</p>
    </div>
    <button>Editar</button>
  </div>
</div>
`;


// Función para insertar el HTML del modal en el cuerpo del documento
function insertarModalEnDocumento() {
  let modalContainer = document.createElement('div');
  modalContainer.innerHTML = modalHTML;
  document.body.appendChild(modalContainer);
}

// Función para abrir el modal
function abrirModal() {

  insertarModalEnDocumento();
  let modal = document.getElementById('id02');
  modal.style.display = 'block';
}

// Función para cerrar el modal
function cerrarModal() {
  let modal = document.getElementById('id02');
  modal.style.display = 'none';
}

function cerrarSesion() {
  console.log("cerraste sesion");
}
