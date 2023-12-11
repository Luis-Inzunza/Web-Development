<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/register_style.css">
    <script src="../js/validation_register.js"></script>
    <title>Registro</title>
</head>

<body>
    <h1>Sistema de creacion de cuentos Web</h1>

    <form id="form-register" method="post">
        <h4>Registrate para Crear!</h4>
        <p><label for="nombre">Nombre</label></p>
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">

        <p><label for="apellido">Apellido</label></p>
        <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">

        <p><label for="email">Email</label></p>
        <input class="controls" type="email" name="email" id="email" placeholder="Ejemplo@correo.com">

        <p><label for="contrasena">Ingrese una Contrasena</label></p>
        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="*****">

        <p><label for="contrasena_2">Confirme Contrasena</label></p>
        <input class="controls" type="password" name="contrasena_2" id="contrasena_2" placeholder="*****">

        <div id="Terminos w3-container">
            <p>Estoy de acuerdo con los <a onclick="Terminos_Condiciones()">Terminos y Condiciones</a></p>
        </div>

        <input class="botons" id="subir" type="button" value="Registrar" onclick="validarFormulario()">

        <a href="../index.php">
            <p>Ya tengo Cuenta</p>
        </a>

    </form>
</body>

</html>