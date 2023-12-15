<?php
include('../modules/process_book.php');
session_start();
$titulo = 'empty';
function devolver_libro($json_libro)
{
  echo $json_libro;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo_libro'];
  $libro = process_book($titulo);

  $paginas = process_pages_by_titulo($titulo);

  foreach ($paginas as $pagina) {
    $libro->agregar_pagina($pagina);
  }
  $dataJson  = json_encode($libro, JSON_UNESCAPED_UNICODE);
  $json_fix = addslashes($dataJson);
  $_SESSION['json'] =  $json_fix;
}


//header('location.. : template_libro_complato.html');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Libro_completo.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Titulo del libro</title>
</head>

<body>

  <header>
    <h2 id="Titulo">Hola libro</h2>
  </header>
  <section id="section-lectura">
    <button class="scroll-button" id="left-btn">←</button>
    <section id="pagina">
    </section>
    <button class="scroll-button" id="right-btn">→</button>

  </section>


  <section id="Slider">
    <div class="carrusel" id="carrusel">
    </div>
  </section>

  <script>
    var datosLibro = JSON.parse( '<?php echo$_SESSION['json']; ?>' );
    console.log(datosLibro);
  </script>
  <script src="../js/html2canvas.min.js"></script>
  <script src="../js/Libro_completo.js"></script>

</body>

</html>