<?php
    include 'BDcon.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario_id= $_POST['usuario'];
        $titulo = $_POST['titulo'];
        $color_titulo = $_POST['color_titulo'];
        $color_portada = $_POST['color_portada'];
        $enfoque = $_POST['enfoque'];
        if(isset($_FILES['image'])){
            $image_file = $_FILES['image']['name'];
            echo "El nombre del archivo subido es: " . $image_file;
            // Definir la ruta del directorio donde quieres guardar el archivo
            $target_dir = "../Backend/ImgsLibros/";
            // Usar move_uploaded_file() para mover el archivo subido al directorio especificado
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image_file)){
                echo "El archivo ha sido subido exitosamente.";
            } else {
                echo "Hubo un error al subir el archivo.";
            }
        } else {
            $image_file = '';
            echo "No se subió ningún archivo.";
        }

        $sql = "INSERT libros (Usuario_id, Titulo, Color_titulo, Color_fondo, Enfoque, Direc_img) VALUES ('$usuario_id', '$titulo' , '$color_titulo', '$color_portada', '$enfoque', '$image_file')";

        $resultado = $con->query($sql);
        header("Location:../Estructura/Contenido_libro.html?Id=".$usuario_id);
    }
