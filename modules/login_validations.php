<?php
include '../db/querys/users.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    if(user_login_pass($email, $contrasena) == 1){
        echo $_SESSION['id'];
    }
}
