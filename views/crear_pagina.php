<?php
session_start();
$titulo = 'empty';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo_libro'];
  $_SESSION['titulo'] = $_POST['titulo_libro'];
}

if (isset($_SESSION['titulo'])) {
  $titulo = $_SESSION['titulo'];
}
echo '<p>' . $titulo . '</p>';
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario y Div</title>
  <link rel="stylesheet" href="../css/Contenido_libro.css">
  <link rel="stylesheet" href="../css/chat_style.css">
</head>

<body>
  <button id="btnInicio" onclick="openChat()" class="open-chat-button">Abrir Chat</button>


  <div class="chat-popup" id="myChat">
    <div class="chat-container">
      <div class="chat">
        <div class="message system">ChatBot...</div>
        <div class="message user">
          <label for="userInput">Tú:</label>
          <input type="text" id="userInput" onkeypress="checkEnter(event)">
          <button onclick="getResponse()">Enviar</button>
        </div>
        <div class="message ai" id="response">Respuesta del ChatBot:</div>
      </div>
    </div>
    <button type="button" onclick="closeChat()" class="cancel" id="btnCerrar">Cerrar</button>
  </div>



  <div class="container">
    <form class="formulario" action="../modules/save_page.php" method="POST" enctype="multipart/form-data">
      <label for="index_pag">Número de pagina</label>
      <input type="text" id="index_pag" name="index_pag">
      <label for="texto">Texto</label>
      <textarea name="texto" id="texto" cols="30" rows="10"></textarea>

      <label for="colorTexto">Color de texto</label>
      <input type="color" id="colorTexto" name="colorTexto">

      <label for="colorFondo">Color de fondo</label>
      <input type="color" id="colorFondo" name="colorFondo">

      <label for="formato">Formato</label>
      <select id="formato" name="formato">
        <option value="1">Opción 1</option>
        <option value="2">Opción 2</option>
        <option value="3">Opción 3</option>
      </select>

      <label for="image">Imagen</label>
      <input type="file" name="image" id="image" accept="image/*">

      <label for="audioLibro" class="checkbox-label">
        Audio Libro
        <input type="checkbox" id="audioLibro" name="audioLibro" class="checkbox-input">
        <span class="checkbox-custom"></span>
      </label>

      <label for="voces">Voces</label>
      <select id="voces" name="voces">
        <option value="1">Voz 1</option>
        <option value="2">Voz 2</option>
        <option value="3">Voz 3</option>
      </select>

      <label for="subrayado" class="checkbox-label">
        Subrayado al hablar
        <input type="checkbox" id="subrayado" name="subrayado" class="checkbox-input" value="off">
        <span class="checkbox-custom"></span>
      </label>
      <input type="hidden" name="titulo_libro" value="<?php
                                                      if ($titulo == 'empty') {
                                                        echo $_SESSION['titulo'];
                                                      } else {
                                                        echo $titulo;
                                                      }

                                                      ?>">
      <button type="submit">Enviar</button>
      
    </form>
    

    <div id="preliminar" style="display: flex;">
      <div id="texto_current" style="order: 2;"></div>
      <div id="img_cuento" style="order: 1;"></div>
    </div>

    <button id="cerrar">Cerrar</button>
    
  </div>
  <script src="../js/app.js"></script>
  <script src="../js/eventos_preliminares.js"></script>

  
</body>

</html>