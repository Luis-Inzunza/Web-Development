<?php
include '../db/querys/books.php';
include '../db/models/Book.php';

function list_all_user_books () {
    $cursor = select_all_user_books($_SESSION['id']);
    $libros = array();
    
    if($cursor) {
        while ( $fila = $cursor->fetch_assoc() ) {

            $libro = new Book(
                $fila['Titulo'], $fila['Enfoque'], $fila['Direc_img'], $fila['Color_titulo'], $fila['Color_fondo'],
                $fila['Usuario_id'], $fila['ultima_modificacion']
            );
            array_push($libros, $libro);
        }
    }
    return $libros;
}
//Test

//$_SESSION['id'] = 2;
//$books = list_all_user_books();
/*
foreach($books as $libro) {
    echo $libro;
}*/
?>