<?php

    include 'BDcon.php';

    if(isset($_GET['Id'])) {
        $Id = $_GET['Id'];

        $sql = "SELECT * FROM libros WHERE usuario_id = '$Id'";

        $resultado = $con->query($sql);

        $libros = $resultado->num_rows;

        $datos = array();

        if ($libros == 0) {
            echo json_encode(array("mensaje" => "No se encontraron libros"));
            exit();
        }

        while($libro = $resultado->fetch_assoc()){
            if($libro['Usuario_ID'] == $Id){
                $datos[] = array(
                    "titulo" => $libro['Titulo'],
                    "img" => $libro['Direc_img'],
                    "color" => $libro['Color'],);
            }
        }


        if(!empty($datos)){
            $json_datos = json_encode($datos);
            header('Content-Type: application/json');
            echo $json_datos;
            //Mandar json
            exit();
        }


    } else {
        echo "No se recibió ninguna URL.";
    }
    $con.close();