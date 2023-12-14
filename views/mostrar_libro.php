<?php 
include('../modules/process_book.php');
$titulo = 'empty';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo_libro'];
}


$libro = process_book($titulo);

$paginas = process_pages_by_titulo($titulo);

foreach($paginas as $pagina) {
  $libro->agregar_pagina($pagina);
  echo $pagina;
}

$json_libro = json_encode($libro);

echo $json_libro;
?>