<?php
include '../db/querys/users.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    if(user_login_pass($email, $contrasena) == 1){
        header("location: ../views/menu_usuario.php");
    }else{
        header("location: ../index.php");
    }
    //header("location: ../views/user_menu_dummy.php"); activar el ejemplo de sesion
    exit();
}
