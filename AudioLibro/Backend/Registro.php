<?php

    include 'BDcon.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

         // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        //Almecenamos los datos
        $datos = array($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['contrasena']);

        //Validacion de que no esten vacios
        if (camposCompletos($datos)) {

            // Consulta SQL para insertar un nuevo registro
            $sql = "INSERT INTO usuarios (nombre, apellido, email, contrasena)
            VALUES ('$nombre', '$apellido', '$email', '$contrasena')";

            if ($con->query($sql) === true) {
                header("Location: ../Estructura/Registro.html?mensaje=RegistroExitoso");

                $_SESSION['usuario'] = $nombre;
            } else {
                header("Location: ../Estructura/Registro.html?mensaje=RegistroFallido");
            }

            exit();
        } else {
            header("Location: ../Estructura/Registro.html?mensaje=AlgoSalioMal");
        }
    }

    function camposCompletos($campos) {
        foreach ($campos as $campo) {
            if (empty($campo)) {
                return false; // Si algún campo está vacío, devuelve falso
            }
        }
        return true; // Si todos los campos están completos, devuelve verdadero
    }

    $con->close();
