<?php

    include('BDcon.php');
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        //Validacion de que no esten vacios
        if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($contrasena)) {
            // Inicia la sesión y almacena datos en la sesión si es necesario
            $_SESSION['usuario'] = $nombre;
    
            echo "Registro exitoso. Bienvenido, $nombre";
            header("Location: ../templates/Registro_exitoso.html");
            exit();
        } else {
            echo "Por favor, completa todos los campos.";
        }
    }

?>