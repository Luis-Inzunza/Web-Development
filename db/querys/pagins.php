<?php
include __DIR__ . '/../connection/connection.php';
include('../models/Pagin.php');
session_start();

function save_pagin(Pagina $pagina)
{
    $titulo_libro = $_SESSION['titulo_libro'];

    $query = "INSERT INTO Paginas (Titulo_libro, Index_pag, Texto, Color_texto, Color_fondo, Formato, Audio, Voz, Subrayado)" .
        "VALUES ($titulo_libro, $pagina->index_pag, $pagina->text, $pagina->color_texto, $pagina->color_fondo, $pagina->formato, $pagina->audio, $pagina->voz, $pagina->subrayado)";

    $query_manager = new QueryManager;

    try {
        $result_query = $query_manager->execute_query($query);
        if ($result_query) echo '<div class="insert_book">Libro salvado</div>';
    } catch (Exception $e) {
        if ($e->getMessage() == 'data_base_error_exception') {
            echo '<div class="error">Base de datos no disponible</div>';
        }
    }
}
