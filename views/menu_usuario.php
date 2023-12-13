<?php
include('../modules/process_books.php');
$books = list_all_user_books();

$length = count($books);
/*
*/
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/Menu_Principal.css">
    <title>Menu de Libros</title>
</head>

<body>

    <header class="w3-container w3-light-blue">
        <div class="w3-bar">
            <h2 class="w3-bar-item" id="usuario">Libros de <?php echo $_SESSION['nombre']?></h2>
            <a href="../modules/logout.php" class="w3-bar-item w3-right" id="cerrar" >
                <h2>Cerrar sesion</h2>
            </a>
        </div>
    </header>

    <div class="w3-container w3-center" id='Libreria'>

        <?php
        $index_book  = 0;
        foreach ($books as $book) {

            echo '<div class="w3-card w3-center w3-hover-shadow Libro" id="idBook' . $index_book . '" onclick="abrirModal(\'modal' . $index_book . '\')">';
            echo '<img src="../img/pico.jpeg" ' . /*$book->direc_img*/ 'alt="#p_Imagen del libro" class="w3-round">';
            echo '<div class="w3-center">';
            echo '<p>' . $book->titulo . '</p>';
            echo '</div>';
            echo '</div>';

            echo '<div id="modal' . $index_book . '" class="w3-modal w3-animate-zoom" st="display:none;">';
            echo '<div class="w3-modal-content modales">';
            echo '<span onclick="cerrarModal(\'modal' . $index_book . '\')" class="w3-button w3-display-topright">&times;</span>';
            echo '<p>Titulo:' . $book->titulo . '</p>';
            echo '<p>Autor:'  /*. author->nombre*/ . '</p>';
            echo '<p>Ultimo Cambio :'  . $book->ultima_modificacion . '</p>';
            echo '<p>Enfoque :'  . $book->enfoque . '</p>';
            echo '</div>';
            echo '<div class="w3-bar">';
            echo '<form method="POST" action="ejemplo.php" id="" class="w3-bar-item w3-button w3-hover-red w3-green w3-center">';
            echo '<button class="w3-bar-item w3-button w3-hover-aqua w3-green w3-center" onclick="redirigir()">Editar</button>';
            echo '</form>';

            echo '<form method="POST" action="crear_pagina.php" id="borrar_form' . $index_book . '" class="w3-bar-item w3-button w3-hover-red w3-green w3-center">';
            echo '<button class="w3-bar-item w3-button w3-hover-red w3-green w3-center" onclick="nueva_pagina(' . $index_book . ',' . $book->titulo . ')">Borrar</button>';
            echo '</form>'; //Fixear

            echo '<form method="POST" id="nueva_pagina_form_"'. $index_book . ' action="crear_pagina.php" class="w3-bar-item w3-button w3-hover-red w3-green w3-center">';
            echo '<input type="hidden" name="titulo_libro" value="' . $book->titulo . '">';
            echo '<button class="w3-bar-item w3-button w3-hover-red w3-green w3-center" onclick="nueva_pagina(' . $index_book . ')">Nueva Página</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            $index_book++;
        }
        ?>



        <a href="crear_libro.php" class="w3-card w3-center w3-hover-shadow Libro crear" id="redirigir">
            <p>Crear Nuevo Libro</p>
        </a>

        <script>
            function nueva_pagina(id) {
                document.getElementById('nueva_pagina_form_' + id).submit();
            }
        </script>

    </div>
    <!-- Aqui se colocan los modals/ventanas emergentes cuando quieres ver la informacion de uno de los libros -->

    <script src="../js/menu_principal.js"></script>
</body>

</html>