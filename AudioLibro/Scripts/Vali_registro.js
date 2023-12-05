// Validacion para Registro //

console.log("js conectado");

//Validacion directa del formulario
function validarFormulario() {
    let nombre = document.getElementById('nombre').value;

    let apellido = document.getElementById('apellido').value;

    let email = document.getElementById('email').value;

    let contrasena = document.getElementById('contrasena').value;

    // Validación de campos
    if (nombre.value !== '' || apellido.value !== '' || email.value !== '' || contrasena.value !== '') {

        if (EsScript(nombre) || EsScript(apellido) || EsScript(email) || EsScript(contrasena)) {
            alert('Alugno de los campos contiene instrucciones sospechosas. Por favor, introduzca lo indicado');

        } else {

            if (!validarEmail(email)) {
                document.getElementById('form-register').submit();
            } else {
                alert('Por favor, introduzca un correo electrónico válido.');
            }

        }
    } else {
        alert('Por favor, completa todos los campos.');
    }
}

function validarEmail(email) {
    const regexEmail = /^[a-zA-Z0-9]+(?:[._-][a-zA-Z0-9]+)*@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/;
    return regexEmail.test(email.value);
};


function EsScript(input) {
    let valor = input.value;

    let regexPatronSospechoso = /(\b(?:function|eval|include|script|php|sql)\b)/i;

    if (regexPatronSospechoso.test(valor)) {
        input.value = '';
        return true;
    } else {
        return false;
    }
};

// Muentra los terminos y condiciones
function Terminos_Condiciones() {
    insertarModalEnDocumento();
    abrirModal();
}


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


// Mientras la pagina esta activa
window.addEventListener('load', () => {

    document.getElementById("nombre").addEventListener("keydown", function (e) {
        if (isFinite(e.key) && e.key != " ") {
            e.preventDefault();
        }
    });

    document.getElementById("apellido").addEventListener("keydown", function (e) {
        if (isFinite(e.key) && e.key != " ") {
            e.preventDefault();
        }
    });

})


// Elementos Constantes //

var modalHTML = `
<div id="id02" class="w3-modal w3-animate-zoom" st="display:none;">
<div class="w3-modal-content">
    <div class="w3-container">
        <span onclick="cerrarModal()" class="w3-button w3-display-topright">&times;</span>
        <h2>Terminos y Condiciones</h2>
        <p>Bienvenido al servicio de creación de libros web proporcionado por estudiantes de la Universidad
            Autónoma de Yucatán, un proyecto escolar supervisado por el tutor Víctor Hugo Menéndez
            Domínguez. Al utilizar este servicio, aceptas los siguientes términos y condiciones:
            <br> <br>
            <strong>Uso del Servicio:</strong> Este servicio te permite crear libros web utilizando HTML, CSS y JavaScript de
            manera gratuita. Al registrarte, aceptas utilizar este servicio únicamente para fines educativos
            y no comerciales.
            <br> <br>
            <strong>Registro:</strong> Para acceder a este servicio, es necesario proporcionar un correo electrónico válido y
            tu nombre completo. La información proporcionada será utilizada únicamente para la gestión de tu
            cuenta y para comunicaciones relacionadas con el servicio.
            <br> <br>
            <strong>Propiedad Intelectual:</strong> Los libros web creados utilizando este servicio son de tu propiedad y
            responsabilidad. Los estudiantes y el tutor no reclaman derechos sobre los contenidos generados
            por los usuarios.
            <br> <br>
            <strong>Responsabilidad del usuario:</strong> Eres responsable del contenido que crees utilizando este servicio.
            No debes compartir contenido que infrinja derechos de autor, sea ofensivo, difamatorio, ilegal o
            viole la privacidad de terceros.
            <br> <br>
            <strong>Disponibilidad del Servicio:</strong> Los estudiantes y el tutor se esforzarán por mantener este servicio
            disponible, pero no garantizan su disponibilidad ininterrumpida. Se podrán realizar
            interrupciones temporales por mantenimiento o actualizaciones.
            <br> <br>
            <strong>Modificaciones:</strong> Los términos y condiciones de este servicio pueden ser modificados en cualquier
            momento. Los usuarios serán notificados sobre cambios importantes. El uso continuado del
            servicio después de la modificación de los términos constituye la aceptación de los mismos.
            <br> <br>
            <strong>Privacidad:</strong> Tu información personal será tratada de acuerdo con nuestra política de privacidad.
            No compartiremos tus datos con terceros sin tu consentimiento, excepto cuando sea requerido por
            ley.
            <br> <br>
            <strong>Finalizacion de la cuenta:</strong> Si incumples estos términos y condiciones, los estudiantes y el tutor
            se reservan el derecho de terminar tu cuenta y acceso al servicio.
            <br> <br>
            Al registrarte y utilizar este servicio, aceptas cumplir estos términos y condiciones. Si tienes
            alguna pregunta o inquietud, contáctanos en <a
                href="emailto: a21216307@alumnos.uady.mx"></a>a21216307@alumnos.uady.mx
            <br> <br>
            Última actualización: 1 de Diciembre del 2023
        </p>
    </div>
</div>
</div>
`;
