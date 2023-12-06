<?php
    include 'BDcon.php';

        if(isset($_GET['Id'])) {
            $Id = $_GET['Id'];

            $sql = "SELECT Nombre, Apellido FROM usuarios WHERE Id = '$Id'";

            $resultado = $con->query($sql);

            $usuario = $resultado->fetch_assoc();

            if ($resultado->num_rows == 0) {
                header('Content-Type: application/json');
                echo json_encode(array("mensaje" => "No se encontraron libros"));
            }else{
                header('Content-Type: application/json');
                echo json_encode(array("Nombre" => $usuario['Nombre'], "Apellido" => $usuario['Apellido']));
            }

        } else {
            echo "No se recibió ninguna URL.";
        }