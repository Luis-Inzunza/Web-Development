// Momento  de ejecucion
console.log("js conectado");
RespuestaLogin();


// Funciones

function validarFormulario() {

    let email = document.getElementById('email');
    let contrasena = document.getElementById('contrasena');

    if (email.value === '' || contrasena.value === '') {
        alert('Por favor, completa todos los campos.');
    } else if (EsScript(email) || EsScript(contrasena)) {
        alert('El campo contiene instrucciones sospechosas. Por favor, introduzca lo indicado');
    } else if (validarEmail(email)) {
        console.log("LLego al ajaxS");
        document.getElementById('Login').submit();
        //submit_ajax(email.value, contrasena.value)
    } else {
        alert('El email no es correcto.'); //Mejorar el manejo de esta parte;
    }
}


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

function validarEmail(email) {
    const regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return regexEmail.test(email.value);
};

function RespuestaLogin() {
    const urlParams = new URLSearchParams(window.location.search);
    const mensaje = urlParams.get('mensaje');
    //console.log(mensaje);

    if (mensaje == 'NoLlegaronDatos')
        MostrarMensaje(mensaje, 'yellow');

    if (mensaje == 'NoExisteUsuario')
        MostrarMensaje("No se encontro al usuario", 'yellow');

    if (mensaje == 'ConnectionLost')
        MostrarMensaje("No encontramos una coneccion a la base de datos", 'red');
};

function MostrarMensaje(mensaje, color) {
    let alerta = `
        <div class="w3-panel w3-` + color + `" id="panel">
            <h3>ERROR!</h3>
            <p>`+ mensaje + `</p>
        </div>
    `;
    let mensajeElemento = document.createElement('section');
    mensajeElemento.innerHTML = alerta;

    window.onload = function () {
        document.body.insertBefore(mensajeElemento, document.getElementById('Login'));
    }
};

function submit_ajax(email, contrasena) {
    const http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("prueba").innerHTML = this.responseText;
            console.log(this.responseText);
        }
    };

    const params = "email=" + encodeURIComponent(email) + "&contrasena=" + encodeURIComponent(contrasena);

    http.open("POST", "../tribunales_amigables/modules/login_validations.php", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(params);
}

