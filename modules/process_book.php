<?php

include '../db/querys/books.php';
function process_book($titulo)
{

    $cursor = find_by_titulo($titulo);

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
//Test
//$libro = process_book("Libro de Juan 1");
//echo $libro;
