console.log("conectado a registro.js");

function validarFormulario() {
    var nombre = document.getElementById('nombre').value;

    var apellido = document.getElementById('apellido').value;

    var email = document.getElementById('email').value;

    var contrasena = document.getElementById('contrasena').value;

    // Validación de campos
    if (nombre === '' || apellido === '' || email === '' || contrasena === '') {
        alert('Por favor, completa todos los campos.');
    } else {
        // Si la validación es exitosa, enviar el formulario
        document.getElementById('Registro').submit();
    }
}