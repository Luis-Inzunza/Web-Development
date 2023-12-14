<?php

include '../db/querys/pages.php';
//include '../db/models/Book.php';

function find_by_titulo ($titulo) {
    $cursor = find_by_titulo_query($titulo); // Asumo que hay una función llamada find_by_titulo_query en el archivo pages.php
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

$paginas = find_by_titulo("Libro de Juan 1");

foreach($paginas as $pagina){
    echo $pagina;
}
?>