<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SIRCAR</title>
  <!-- Bootstrap CSS -->
  <link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="../public/img/ico_unsis.ico" type="image/x-icon">
  <!-- jQuery -->

  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden; /* Evita el scroll */
    }

    /* Contenedor del video de fondo */
    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1; /* Lo envía al fondo */
      object-fit: cover; /* Cubre toda la pantalla */
    }

    /* Capa azul oscuro sobre el video */
    .video-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(10, 31, 61, 0.7); /* Azul oscuro semi-transparente */
      z-index: 0; /* Se coloca sobre el video pero debajo del contenido */
    }

    /* Contenedor del formulario */
    .login-container {
      position: relative;
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background: rgba(5, 20, 40, 0.8); /* Azul más oscuro para el formulario */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      z-index: 1; /* Asegura que el formulario esté sobre el video y la capa oscura */
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      max-width: 100px;
      margin-bottom: 10px;
    }

    .sistema-siglas {
      font-size: 2.5rem;
      font-weight: bold;
      color: #ffffff; /* Letras blancas */
      text-align: center;
      margin-bottom: 10px;
    }

    .sistema-nombre {
      font-size: 1rem;
      color: #ffffff; /* Letras blancas */
      text-align: center;
      margin-bottom: 20px;
      opacity: 0.8; /* Ligera transparencia */
    }

    .form-label {
      color: #ffffff; /* Letras blancas para las etiquetas */
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.1); /* Fondo semi-transparente para los inputs */
      color: #ffffff; /* Letras blancas para los inputs */
      border: 1px solid rgba(255, 255, 255, 0.3); /* Borde semi-transparente */
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.2); /* Fondo más claro al enfocar */
      border-color: #ffffff; /* Borde blanco al enfocar */
      color: #ffffff; /* Letras blancas al enfocar */
    }

    .btn-primary {
      background-color: #007bff; /* Color azul Bootstrap */
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3; /* Color azul más oscuro al pasar el mouse */
      border-color: #0056b3;
    }

    /* Agrega estos estilos para el fondo oscuro */
    #overlay {
      display: none; /* Oculto por defecto */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7); /* Fondo oscuro semitransparente */
      z-index: 1000; /* Asegura que esté por encima de todo */
    }

  </style>
</head>
<body>
  <!-- Video de fondo -->
  <video class="video-background" autoplay muted loop>
    <source src="../public/img/video.mp4" type="video/mp4">
    <source src="../public/img/video.webm" type="video/webm">
    Tu navegador no soporta videos HTML5.
  </video>

  <!-- Capa azul oscuro sobre el video -->
  <div class="video-overlay"></div>

  <!-- Contenedor del formulario -->
  <div class="login-container">
    <!-- Logo de la Universidad -->
    <div class="logo">
      <img src="../public/img/logo_unsis.png" alt="Logo Universidad">
    </div>

    <!-- Siglas del Sistema -->
    <div class="sistema-siglas">
      SIRCAR
    </div>

    <!-- Nombre Completo del Sistema -->
    <div class="sistema-nombre">
      Sistema de Información de Riesgo Cardiovascular
    </div>

    <!-- Formulario de Logueo -->
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
    </form>
  </div>

  
 

  <footer style="
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  padding: 10px 0;
  background-color: rgba(5, 20, 40, 0.8); /* Fondo azul oscuro */
  color:rgb(30, 100, 153); /* Letras azules claras */
  z-index: 2; /* Asegura que esté sobre el video y la capa oscura */
">
  Todos los derechos reservados - Universidad de la Sierra Sur
</footer>

  <!-- Bootstrap JS (opcional, si necesitas funcionalidades JS) -->
  <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--<script>
    document.addEventListener("DOMContentLoaded", function() {
      const video = document.querySelector(".video-background");
      video.playbackRate = 0.7; // Reduce la velocidad a la mitad
    });
  </script>-->

</body>





</html>