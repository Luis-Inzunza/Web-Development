<?php
include '../db/querys/users.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    user_login_pass($email, $contrasena);
    header("location: ../views/template_libro_completo.html");
    exit();
}
