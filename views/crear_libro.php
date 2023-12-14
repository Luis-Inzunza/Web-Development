
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/Contenido_libro.css">
    <title>Crear libro</title>
</head>

<body>
    <div id="form-container">
        <form id="form" method="post" action="../modules/save_book.php" enctype="multipart/form-data">


            <label for="titulo">Título del libro</label>
            <input id="titulo" name="titulo" type="text" placeholder="Llama la atencion" required>
            <br>
            <label for="color_titulo">Color del Titulo</label>
            <input type="color" id="color_titulo" name="color_titulo" required> <br>

            <br>
            <label for="color_portada">Color de fondo de portada</label>
            <input type="color" id="color_portada" name="color_portada" required> <br>

            <br>
            <label for="enfoque">Cual es el enfoque de tu libro?</label>
            <input id="enfoque" name="enfoque" type="text" placeholder="Que te inspira o que mensaje daras?" required>

            <br>
            <input type="file" name="image" id="image" accept="image/*">

        </form>
        <div id="preview_portada">
            <img id="preview_image" src="" alt="Preview Image">
            <header id="encabezado">Titulo</header>
        </div>
    </div>

    <div class="container">
        <input type="search" id="searchInput" placeholder="Ingrese su búsqueda">
        <button onclick="buscarImagenes()">Buscar</button>
        <div id="resultados"></div>
    </div>
    <script src="../js/generar.js"></script>
    <div>
        <button id="btn-cerrar" onclick="regresar()">Cancelar y volver</button>
        <button id="btn-crear" onclick="subirLibro()">Crear Libro</button>
    </div>
    <script src="../js/crear_libro.js"></script>
</body>

</html>