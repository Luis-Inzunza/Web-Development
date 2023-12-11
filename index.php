<?php
?>

<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login_style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Login</title>
</head>

<body>
    <h1>Sistema de creacion de cuentos Web</h1>
    <form id="Login" method="POST" action="../Backend/Login.php">
        <h2>Bienvenido</h2>

        <input type="email" id="email" name="email" placeholder="Email" class="error" />
        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" />

        <input type="button" id="Ingresar" value="Ingresar" onclick="validarFormulario()">
        <div id="prueba">

        </div>
        <p><a href="views/registro.php">Aún no tengo cuenta</a></p>
    </form>
    <script src="js/validacion_login.js"></script>

    <!--<a href="views/cosas.php">ey</a>-->
</body>

</html>