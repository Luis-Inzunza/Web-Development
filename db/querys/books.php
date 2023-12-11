<?php 
include __DIR__ . '/../connection/connection.php';
session_start();

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

//test
select_all_user_books(1);