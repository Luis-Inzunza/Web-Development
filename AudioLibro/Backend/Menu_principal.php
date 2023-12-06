<?php

    include 'BDcon.php';

    if(isset($_GET['Id'])) {
        $Id = $_GET['Id'];

        $sql = "SELECT * FROM Libros WHERE Usuario_id = '$Id'";

        $resultado = $con->query($sql);

        $libros = $resultado->num_rows;

        $datos = array();

        if ($libros == 0) {
            echo json_encode(array("mensaje" => "No se encontraron libros"));
            exit();
        }

        while($libro = $resultado->fetch_assoc()){
            if($libro['Usuario_id'] == $Id){
                $datos[] = array(
                    "titulo" => $libro['Titulo'],
                    "enfoque" => $libro['Enfoque'],
                    "img" => $libro['Direc_img'],
                    "color_titulo" => $libro['Color_titulo'],
                    "color_fondo" => $libro['Color_fondo'],
                    "fecha" => $libro['ultima_modificacion']);
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