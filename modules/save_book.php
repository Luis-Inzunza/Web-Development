<?php
include '../db/querys/books.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image_file = 'empty';
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

    $book = new Book(
        $_POST['titulo'],
        $_POST['enfoque'],
        $image_file,
        $_POST['color_titulo'],
        $_POST['color_portada'],
        $_SESSION['id'],
        date("Y-m-d")
    );
    add_book($book);
    header("location: ../views/menu_usuario.php");
    exit();
}
?>