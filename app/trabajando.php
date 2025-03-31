<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pacientes - SIRCAR</title>
  <!-- Bootstrap CSS -->
  <link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="../public/img/ico_unsis.ico" type="image/x-icon">

  <style>
    /* Tus estilos actuales */
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      object-fit: cover;
    }

    .video-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(10, 31, 61, 0.7);
      z-index: 0;
    }

    .content-container {
      position: relative;
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      background: rgba(5, 20, 40, 0.8);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      z-index: 1;
      color: #ffffff;
    }

    .navbar-custom {
      background-color: rgba(5, 20, 40, 0.8);
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
      color: #ffffff;
    }

    .navbar-custom .nav-link:hover {
      color: #007bff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .logo-universidad {
      position: fixed;
      top: 10px;
      right: 10px;
      width: 40px;
      height: auto;
      z-index: 2;
    }

    .patient-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .patient-table th, .patient-table td {
      padding: 10px;
      border: 1px solid #007bff;
      text-align: left;
    }

    .patient-table th {
      background-color: #007bff;
      color: #ffffff;
    }

    .patient-table tr:nth-child(even) {
      background-color: rgba(5, 20, 40, 0.6);
    }

    .patient-table tr:hover {
      background-color: rgba(5, 20, 40, 0.9);
    }

    .action-buttons button {
      margin: 2px;
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenedor del contenido -->
  <div class="content-container">
    <h1>Trabajando para ver cambios directo en el contenedor</h1>
    <table class="patient-table">
      <thead>
        <tr>
          <th>N1</th>
          <th>n2</th>
          <th>n3</th>
          <th>n4</th>
        </tr>
      </thead>
      <tbody id="patient-table-body">
        <!-- Filas de pacientes se generarán dinámicamente -->
      </tbody>
    </table>

    <h2>Sección</h2>
    <p><strong>I:</strong> [Fecha de inicio]</p>
  </div>

</body>
</html>