<?php

include '../db/querys/pages.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo $_POST['imagen'];
    if(isset($_FILES['image'])){
        $image_file = $_FILES['image']['name'];
        echo "El nombre del archivo subido es: " . $image_file;
        $target_dir = "../img/";
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

    echo $image_file;

    $audioLibro = isset($_POST['audioLibro']) ? 1 : 0;
    $subrayado = isset($_POST['subrayado']) ? 1 : 0;

    $page = new Pagina(
        $_POST['titulo_libro'],
        $_POST['index_pag'],
        $_POST['texto'],
        $_POST['colorTexto'],
        $_POST['colorFondo'],
        $_POST['formato'],
        $audioLibro,
        $_POST['voces'],
        $subrayado,
        $_FILES['image']['name']
    );
    save_page($page);
    header("location: ../views/menu_usuario.php");
    exit();
}
