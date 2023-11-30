<?php

    include 'BDcon.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        if($email == '' || $contrasena == ''){
            header("Location: ../Estructura/Login.html?mensaje=NoLlegaronDatos");
            exit();
        }

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$contrasena'";

        $resultado = $con->query($sql);

        $usuarios = $resultado->num_rows;

        if ($usuarios == 0) {
            header("Location: ../Estructura/Login.html?mensaje=NoExisteUsuario");
            exit();
        }

        while($usuario = $resultado->fetch_assoc()){
            if($usuario['Email'] == $email && $usuario['Contrasena'] == $contrasena){
                header("Location: ../Estructura/Menu_principal.html");
                //iniciar sesion
                exit();
            }
        }


    }
    $con.close();
