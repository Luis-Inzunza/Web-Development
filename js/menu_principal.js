//Inicio de javascript
console.log("js conectado");


let datos;
let usuario;




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


// Redireccionar a crear libro
let enlace = document.getElementById('redirigir');


