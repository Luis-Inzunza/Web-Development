<?php
/// 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../Estilos/Menu_Principal.css">
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

        <a href="#" class="w3-card w3-center w3-hover-shadow Libro crear" id="redirigir">
            <p>Crear Nuevo Libro</p>
        </a>

    </div>
    <!-- Aqui se colocan los modals/ventanas emergentes cuando quieres ver la informacion de uno de los libros -->

    <script src="../Scripts/Menu_Principal.js"></script>
</body>

</html>