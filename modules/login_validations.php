<?php
include '../db/querys/users.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    user_login_pass($email, $contrasena);
    //header("location: ../views/user_menu_dummy.php"); activar el ejemplo de sesion 
    header("location: ../views/menu_usuario.php");
    exit();
}
