console.log("js conectado");

window.addEventListener('load', () => {
    let loginFormulario = document.getElementById('formularioLogin');

    loginFormulario.addEventListener('submit', function (event) {
        reventDefault();
        let email = document.getElementById('email').value;
        if (!validarEmail(email)) {
            let emailInput = document.getElementById('email');
            emailInput.style.border = "2px solid red";
            emailInput.focus();
        }
    })
});

function validarEmail(email) {
    // Expresión regular para validar el formato de un email
    const regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return regexEmail.test(email);
};
