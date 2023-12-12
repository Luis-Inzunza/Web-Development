<?php
include ('../modules/process_books.php');
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
            <h2 class="w3-bar-item" id="usuario">Libros de #p_Nombre de usuario</h2>
            <a href="../Backend/Logout.php" class="w3-bar-item w3-right" id="cerrar" onclick="cerrarSesion()">
                <h2>Cerrar sesion</h2>
            </a>
        </div>
    </header>

    <div class="w3-container w3-center" id='Libreria'>

    <?php 
    $index_book  = 0;
    foreach($books as $book) {
        
        echo '<div class="w3-card w3-center w3-hover-shadow Libro" id="idBook' . $index_book . '" onclick="abrirModal(\'modal' .$index_book . '\')">';
        echo '<img src="../img/pico.jpeg" '. /*$book->direc_img*/ 'alt="#p_Imagen del libro" class="w3-round">';
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
        echo '<button class="w3-bar-item w3-button w3-hover-aqua w3-center">Editar</button>';
        echo '</div>';
        echo '</div>';
        $index_book++;
    }
    ?>
    
   

        <a href="crear" class="w3-card w3-center w3-hover-shadow Libro crear" id="redirigir">
            <p>Crear Nuevo Libro</p>
        </a>

    </div>
    <!-- Aqui se colocan los modals/ventanas emergentes cuando quieres ver la informacion de uno de los libros -->

    <script src="../js/menu_principal.js"></script>
    <script>
        for(i = 0; i< <?php echo $length; ?> ; i++){
            let elementoCrear = document.querySelector('crear');
            libro = document.getElementById('idBook'+ i);
            elementoCrear.insertAdjacentHTML('beforebegin', libro);
            modal = document.getElementById("modal" + i);
            insertarModalEnDocumento(modal);
        }
    </script>
</body>

</html>