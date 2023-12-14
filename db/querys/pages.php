<?php
session_start();
include __DIR__ . '/../connection/connection.php';
include __DIR__ . '/../models/Page.php';


function save_page(Pagina $pagina)
{
    $query = "INSERT INTO Paginas (Titulo_libro, Index_pag, Texto, Color_texto, Color_fondo, Formato, Audio, Voz, Subrayado, Direc_img)" .
        "VALUES ('$pagina->titulo_libro', $pagina->index_pag, '$pagina->text', '$pagina->color_texto', '$pagina->color_fondo', $pagina->formato, $pagina->audio, $pagina->voz, $pagina->subrayado, '$pagina->imagen')";
    $query_manager = new QueryManager();
    try {
        $result_query = $query_manager->execute_query($query);
        if ($result_query) {
            echo '<div class="insert_book">Pagina Insertada</div>';
        } else {
            echo '<div class="error">Error al intentar insertar la pagina</div>';
        }
    } catch (Exception $e) {
        if ($e->getMessage() == 'data_base_error_exception') {
            echo '<div class="error">Base de datos no disponible</div>';
        } else {
            echo '<div class="error">Error desconocido: ' . $e->getMessage() . '</div>';
        }
    }
}


function find_by_titulo_query ($titulo) {
    $query = "SELECT * FROM PAGINAS WHERE TITULO_LIBRO = '$titulo'";
    echo $query;
    $query_manager = new QueryManager();
    try {
        $result_query = $query_manager->execute_query($query);
        if ($result_query) {
            return $result_query;
            echo '<div class="insert_book">Sentencia ejecutada correctamente</div>';
        } else {
            echo '<div class="error">Error al intentar insertar el libro</div>';
        }
    } catch (Exception $e) {
        if ($e->getMessage() == 'data_base_error_exception') {
            echo '<div class="error">Base de datos no disponible</div>';
        } else {
            echo '<div class="error">Error desconocido: ' . $e->getMessage() . '</div>';
        }
    }
}
