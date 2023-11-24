// Validacion para Registro //

console.log("js conectado");

//Validacion directa del formulario
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

// Mientras la pagina esta activa
window.addEventListener('load', () => {

    document.getElementById("nombre").addEventListener("keydown", function (e) {
        if (isFinite(e.key) && e.key != " ") {
            console.log("tecla: " + e.key);
            e.preventDefault();
        }
    });

})



