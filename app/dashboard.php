<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - SIRCAR</title>
  <!-- Bootstrap CSS -->
  <link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="../public/img/ico_unsis.ico" type="image/x-icon">

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

    /* Contenedor del contenido */
    .content-container {
      position: relative;
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      background: rgba(5, 20, 40, 0.8); /* Azul más oscuro para el contenido */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      z-index: 1; /* Asegura que el contenido esté sobre el video y la capa oscura */
      color: #ffffff; /* Letras blancas */
    }

    .navbar-custom {
      background-color: rgba(5, 20, 40, 0.8); /* Fondo azul oscuro para la barra de navegación */
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
      color: #ffffff; /* Letras blancas */
    }

    .navbar-custom .nav-link:hover {
      color: #007bff; /* Color azul al pasar el mouse */
    }

    .btn-primary {
      background-color: #007bff; /* Color azul Bootstrap */
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3; /* Color azul más oscuro al pasar el mouse */
      border-color: #0056b3;
    }

    /* Estilo para el logo en la esquina superior derecha */
    .logo-universidad {
      position: fixed;
      top: 10px;
      right: 10px;
      width: 40px; /* Tamaño ajustable */
      height: auto;
      z-index: 2; /* Sobre el video y la capa oscura */
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

  <!-- Logo de la Universidad en la esquina superior derecha -->
  <img src="../public/img/logo_unsis.png" alt="Logo Universidad" class="logo-universidad">

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIRCAR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Inicio</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="f1_infopersonal.php">Nuevo Paciente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perfiles</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="index.php">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenedor del contenido -->
  <div class="content-container">
    <h1>Bienvenido al Sistema de Información de Riesgo Cardiovascular</h1>
    <p>Este es el panel de control donde puedes gestionar pacientes, ver perfiles y más.</p>
    <a href="f1_infopersonal.php" class="btn btn-primary">Nuevo paciente</a>
    <a href="perfiles.php" class="btn btn-primary">Perfiles</a>
    <a href="trabajando.php" class="btn btn-primary">Administrar entrevistadores</a>
    <!--<a href="f1_infopersonal.php" class="btn btn-primary">Administrar usuarios</a>-->
  </div>

  <footer style="
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
    padding: 10px 0;
    background-color: rgba(5, 20, 40, 0.8); /* Fondo azul oscuro */
    color: rgb(30, 100, 153); /* Letras azules claras */
    z-index: 2; /* Asegura que esté sobre el video y la capa oscura */
  ">
    Todos los derechos reservados - Universidad de la Sierra Sur
  </footer>

  <!-- Bootstrap JS (opcional, si necesitas funcionalidades JS) -->
  <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
