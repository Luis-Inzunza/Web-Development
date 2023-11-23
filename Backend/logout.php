<?php
      session_start();

      // Verificar si hay una sesión existente
      if (!empty($_SESSION['usuario'])) {
            // Si la sesión existe, destruirla
            session_unset(); // Elimina todas las variables de sesión
            session_destroy(); // Destruye la sesión
            echo 'Sesión de usuario destruida.';
      } else {
            // Si no hay sesión, realizar alguna acción alternativa o redirigir, etc.
            echo 'No hay sesión de usuario.';
      }
      header("Location: ../templates/login.html");
?>