<?php

include __DIR__ . '/../connection/connection.php';
session_start();

function user_login_pass ($email, $contrasena) {
    $query_manager = new QueryManager();
    $query = "SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$contrasena' ";
    try {
        $result_query = $query_manager->execute_query($query);

        if(mysqli_num_rows($result_query) == 1){
            $user_fields = mysqli_fetch_assoc($result_query);
            $_SESSION['id'] = $user_fields['Id'];
            return true;
        } else {
            return false;
        } 
    } catch (Exception $e) {
        throw $e;
    }
}

?>