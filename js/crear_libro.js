console.log("js conectado");

const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('Id');

var miInput = document.getElementById('usuario');
miInput.value = id;
miInput.ariaReadOnly = true;

function subirLibro() {
    var titulo = document.getElementById('titulo').value;

    var enfoque = document.getElementById('enfoque').value;

    // Validación de campos
    if (titulo === '' || enfoque === '') {

        alert('Por favor, Almenos por un titulo y enfoque');
    } else {
        document.getElementById('form').submit();
    }
}


function validarArchivo() {
    var image = document.getElementById('image');

    // Verificar si se ha seleccionado algún archivo
    if (image.files && image.files[0]) {
        var archivo = image.files[0];
        var tipoArchivo = archivo.type;

        // Verificar si el tipo del archivo es una imagen
        if (tipoArchivo && tipoArchivo.startsWith('image/')) {
        } else {
            alert('Por favor, selecciona un archivo de imagen.');
        }
    } else {
        alert('Por favor, selecciona un archivo de imagen');
    }
}

function regresar() {
    window.location.href = "menu_usuario.php";
}

//////////////////////////////////////////////
//  Funciones para esucchar y mostrar en vivo
//////////////////////////////////////////////

// Cambia la imagen al subir una
let input = document.getElementById('image');
let vistaPrevia = document.getElementById('preview_image');
input.addEventListener('change', function () {
    let archivo = input.files[0]; // Obtener el archivo seleccionado

    if (archivo) {
        let lector = new FileReader(); // Crear un lector de archivos

        // Definir la función que se ejecutará al cargar el archivo
        lector.onload = function (event) {
            vistaPrevia.src = event.target.result; // Establecer la vista previa con la imagen cargada
            vistaPrevia.style.display = 'block'; // Mostrar la vista previa
        }

        // Leer el archivo como una URL de datos
        lector.readAsDataURL(archivo);
    } else {
        vistaPrevia.src = ''; // Si no se selecciona ningún archivo, limpiar la vista previa
        vistaPrevia.style.display = 'none'; // Ocultar la vista previa
    }
});

// Modifica el titulo del libro en vivo
let inputTexto = document.getElementById('titulo');
let parrafo = document.getElementById('encabezado');
inputTexto.addEventListener('input', function () {
    parrafo.textContent = inputTexto.value; // Actualizar el contenido del párrafo con el valor del input
});


//Cambio de colord del titulo
let textoColor = document.getElementById('color_titulo');
textoColor.addEventListener('input', function () {
    var colorSeleccionado = textoColor.value;
    parrafo.style.color = colorSeleccionado;
});

//Cambio de color de fondo
let espacio = document.getElementById('preview_portada');
let fondoColor = document.getElementById('color_portada');
fondoColor.addEventListener('input', function () {
    var colorSeleccionado = fondoColor.value;
    espacio.style.backgroundColor = colorSeleccionado;
});

