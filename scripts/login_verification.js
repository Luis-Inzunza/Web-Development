window.addEventListener('load', () => {
    let loginFormulario = document.getElementById('formularioLogin');
    
    loginFormulario.addEventListener('submit', function (event) {
        event.preventDefault();
        let email = document.getElementById('email').value;
        if (!emailVerificacion(email)) {
            let emailInput = document.getElementById('email');
            emailInput.style.border = "2px solid red";
            emailInput.focus();
        }
    })
})


function emailVerificacion(email) {
    const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
    console.log("emailVerificacion:", result);
    return emailRegex.test(email);
}

