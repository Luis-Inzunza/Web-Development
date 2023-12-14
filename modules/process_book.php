<?php
include '../db/connection/connection.php';
include '../db/models/Book.php';
include '../db/models/Page.php';
function find_by_titulo_book ($titulo) {
    $query = "SELECT * FROM LIBROS WHERE TITULO = '$titulo'";
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
 
function find_by_titulo_pages ($titulo) {
    $query = "SELECT * FROM PAGINAS WHERE TITULO_LIBRO = '$titulo'";
    $query_manager = new QueryManager;
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

function process_book($titulo)
{

    $cursor = find_by_titulo_book($titulo);

    if ($cursor && $fila = $cursor->fetch_assoc()) {
        $libro = new Book(
            $fila['Titulo'],
            $fila['Enfoque'],
            $fila['Direc_img'],
            $fila['Color_titulo'],
            $fila['Color_fondo'],
            $fila['Usuario_id'],
            $fila['ultima_modificacion']
        );
        return $libro;
    }
}

function process_pages_by_titulo ($titulo) {
    $cursor = find_by_titulo_pages($titulo); // Asumo que hay una función llamada find_by_titulo_query en el archivo pages.php
    $paginas = array();

    if ($cursor) {
        while ($fila = $cursor->fetch_assoc()) {
            $pagina = new Pagina(
                $fila['Titulo_libro'],
                $fila['Index_pag'],
                $fila['Texto'],
                $fila['Color_texto'],
                $fila['Color_fondo'],
                $fila['Formato'],
                $fila['Audio'],
                $fila['Voz'],
                $fila['Subrayado'],
                $fila['Direc_img']
            );
            array_push($paginas, $pagina);
        }
    }
    return $paginas;
}
//Test
//$libro = process_book("Libro de Juan 1");
//echo $libro;
