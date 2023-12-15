<?php
include __DIR__ . '/../connection/connection.php';
include __DIR__ . '/../models/Book.php';
session_start();
if(!isset($_SESSION['id'])){
    header("location: ../views/menu_usuario.php");
}

function select_all_user_books($id_usuario){
    $query = "SELECT * FROM LIBROS WHERE USUARIO_ID = '$id_usuario'";
    $query_manager = new QueryManager;
    try {
        $result_query = $query_manager->execute_query($query);
        if($result_query) return $result_query;
    }catch (Exception $e) {
        if($e->getMessage() == 'data_base_error_exception'){
            echo '<div class="error">Base de datos no disponible</div>';
        }
    }
}

function add_book (Book $book)
{
    $id_user = $_SESSION['id'];
    $query = $sql = "INSERT libros (Usuario_id, Titulo, Color_titulo, Color_fondo, Enfoque, Direc_img)".
    " VALUES ('$id_user', '$book->titulo' , '$book->color_titulo', '$book->color_fondo', '$book->enfoque', '$book->direc_img')";
    $query_manager = new QueryManager;
    try {
        $result_query = $query_manager->execute_query($query);
        if($result_query) echo '<div class="insert_book">Libro salvado</div>';
    }catch (Exception $e) {
        if($e->getMessage() == 'data_base_error_exception'){
            echo '<div class="error">Base de datos no disponible</div>';
        }
    }
}


?>