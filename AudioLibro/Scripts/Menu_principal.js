console.log("js conectado");

var modalHTML = `
  <div id="id01" class="w3-modal" st="display:none;">
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
  let modal = document.getElementById('id01');
  modal.style.display = 'block';
}

// Función para cerrar el modal
function cerrarModal() {
  let modal = document.getElementById('id01');
  modal.style.display = 'none';
}

function cerrarSesion() {
  console.log("cerraste sesion");
}
