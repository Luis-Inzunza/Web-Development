<?php 
include('../modules/process_book.php');
$titulo = 'empty';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo_libro'];
}


$libro = find_by_titulo($titulo);

//$paginas = puscar_paginas($titulo);


?>