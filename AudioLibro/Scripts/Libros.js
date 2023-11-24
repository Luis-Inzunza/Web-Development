console.log("js conectado");

function subirLibro() {
    var titulo = document.getElementById('titulo').value;

    var enfoque = document.getElementById('enfoque').value;

    // Validación de campos
    if (titulo === '' || enfoque === '') {

        alert('Por favor, Almenos por un titulo y enfoque');
    } else {
        // Si la validación es exitosa, enviar el formulario
        var imagen_check = document.getElementById('imagen?');

        if (imagen_check.checked) {
            validarArchivo();
        } else {
            document.getElementById('form').submit();
        }
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
            document.getElementById('form').submit();
        } else {
            alert('Por favor, selecciona un archivo de imagen.');
        }
    } else {
        alert('Por favor, selecciona un archivo de imagen');
    }
}

function Regresar() {
    window.location.href = 'Menu_principal.html'; //Recuerda tener que validar con php la sesion
}