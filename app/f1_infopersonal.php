<?php
// Aquí puedes incluir la lógica de procesamiento del formulario, conexión a base de datos, etc.
// Por ejemplo:
// $conexion = mysqli_connect("localhost", "usuario", "contraseña", "sircar_db");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario - SIRCAR</title>
  <!-- Bootstrap CSS -->
  <link href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="../public/img/ico_unsis.ico" type="image/x-icon">

  <style>
    body {
      background-color: #0a1929;
      color: white;
    }
    
    .header {
      background-color: #051224;
      color: white;
      padding: 15px;
    }
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between; /* Distribuye el espacio entre los elementos */
    }
    .header .ms-auto {
      margin-left: auto; /* Fuerza el botón a la derecha */
    }
    
    .section-title {
      background-color: #0c2042;
      color: white;
      padding: 10px;
      border-radius: 4px;
      border-left: 4px solid #1565c0;
    }
    
    .form-container {
      background-color: #102a43;
      padding: 20px;
      border-radius: 4px;
      margin-bottom: 20px;
      border: 1px solid #1e3a5f;
    }
    
    .form-control {
      background-color: #15395b;
      border: 1px solid #1e3a5f;
      color: white;
    }
    
    .form-control:focus {
      background-color: #1c4269;
      color: white;
      border-color: #2574c5;
      box-shadow: 0 0 0 0.25rem rgba(37, 116, 197, 0.25);
    }
    
    .form-control::placeholder {
      color: #a0b0c5;
    }
    
    .form-select {
      background-color: #15395b;
      border: 1px solid #1e3a5f;
      color: white;
    }
    
    .form-select:focus {
      background-color: #1c4269;
      color: white;
      border-color: #2574c5;
      box-shadow: 0 0 0 0.25rem rgba(37, 116, 197, 0.25);
    }
    
    .step-btn {
      min-width: 80px;
      color: #2574c5;
      border-color: #2574c5;
      background-color: transparent;
    }
    
    .step-btn.active {
      background-color: #2574c5;
      color: white;
      border-color: #2574c5;
    }
    
    .step-btn:hover:not(.active) {
      background-color: #1e3a5f;
      color: white;
      border-color: #2574c5;
    }
    
    .btn-primary {
      background-color: #2574c5;
      border-color: #2574c5;
    }
    
    .btn-primary:hover {
      background-color: #1565c0;
      border-color: #1565c0;
    }
    
    .btn-outline-secondary {
      color: #2574c5;
      border-color: #2574c5;
      background-color: transparent;
    }
    
    .btn-outline-secondary:hover {
      background-color: #1e3a5f;
      border-color: #2574c5;
      color: white;
    }
    
    .card {
      background-color: #0c1c2e;
      border-color: #1e3a5f;
    }

    .card-body {
      background-color: #0c1c2e;
      color: white;
    }
    
    .card-footer {
      background-color: #051224;
      color: #6c8bb5 !important;
      border-top: 1px solid #1e3a5f;
    }
    
    /* Estilos para formularios */
    .form-page {
      display: none;
    }
    
    .form-page.active {
      display: block;
    }
    
    .form-label {
      color: #b8cce4;
      font-weight: 500;
    }
    
    .text-muted {
      color: #6c8bb5 !important;
    }
    
    .nav-bg {
      background-color: #0a1929 !important;
      border: 1px solid #1e3a5f;
    }
    
    input:read-only {
      background-color: #0f2842 !important;
      color: #a0b0c5;
    }
  </style>
</head>
<body>
  <div class="container mt-4 mb-4">
    <div class="card shadow">
      <!-- Cabecera -->
      
      <div class="header d-flex align-items-center">
        <img src="../public/img/logo_unsis.png" alt="Logo Universidad" height="50" class="me-3">
        <h1 class="text-center flex-grow-1 mb-0" style="margin-left: 20px;">SIRCAR</h1>
        <!-- Botón para regresar al dashboard, alineado a la derecha -->
        <div class="ms-auto">
          <a href="dashboard.php" class="btn btn-outline-secondary">Regresar</a>
        </div>
      </div>
   

      <div class="card-body">
        <form id="formularioRiesgo" method="post" action="procesar_formulario.php">
          <!-- Formulario 1: Información del entrevistador y personal -->
          <div id="form1" class="form-page active">
            <h3 class="section-title text-center mb-3">Ficha de Identificación</h3>
            <div class="form-container">
              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="entrevistador" class="form-label">Entrevistador</label>
                  <input type="text" class="form-control" id="entrevistador" name="entrevistador">
                </div>
                <div class="col-md-4">
                  <label for="caso" class="form-label">N° de caso</label>
                  <input type="text" class="form-control" id="caso" name="caso">
                </div>
                <div class="col-md-4">
                  <label for="fecha" class="form-label">Fecha evaluación</label>
                  <input type="date" class="form-control" id="fecha" name="fecha">
                </div>
              </div>
            </div>

            <h3 class="section-title text-center mb-3">Información Personal</h3>
            <div class="form-container">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="apellido_paterno" class="form-label">Apellido paterno</label>
                  <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
                </div>
                <div class="col-md-6">
                  <label for="apellido_materno" class="form-label">Apellido materno</label>
                  <input type="text" class="form-control" id="apellido_materno" name="apellido_materno">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="nombre" class="form-label">Nombre(s)</label>
                  <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="col-md-6">
                  <label for="licenciatura" class="form-label">Licenciatura</label>
                  <input type="text" class="form-control" id="licenciatura" name="licenciatura">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="grupo" class="form-label">Grupo</label>
                  <input type="text" class="form-control" id="grupo" name="grupo">
                </div>
                <div class="col-md-6">
                  <label for="sexo" class="form-label">Sexo</label>
                  <select class="form-select" id="sexo" name="sexo">
                    <option value="">Seleccione</option>
                    <option value="F">Femenino (F)</option>
                    <option value="M">Masculino (M)</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="edad" class="form-label">Edad (años cumplidos)</label>
                  <input type="number" class="form-control" id="edad" name="edad">
                </div>
              </div>
            </div>
          </div>

          <!-- Formulario 2: Antecedentes médicos -->
          <!-- Formulario 2: Antecedentes médicos -->
          <div id="form2" class="form-page">
            <h3 class="section-title text-center mb-3">Antecedentes Heredofamiliares</h3>
            <div class="form-container">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="antecedentes_familiares" class="form-label">Antecedentes familiares cardiovasculares</label>
                  <select class="form-select" id="antecedentes_familiares" name="antecedentes_familiares">
                    <option value="">Seleccione una opción</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="diabetes" class="form-label">Diabetes</label>
                  <select class="form-select" id="diabetes" name="diabetes">
                    <option value="">Seleccione una opción</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="hipertension" class="form-label">Hipertensión</label>
                  <select class="form-select" id="hipertension" name="hipertension">
                    <option value="">Seleccione una opción</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="tabaquismo" class="form-label">Tabaquismo</label>
                  <select class="form-select" id="tabaquismo" name="tabaquismo">
                    <option value="">Seleccione una opción</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>
              <!-- Agregar más campos si es necesario -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="neoplasias" class="form-label">Neoplasias</label>
                  <select class="form-select" id="neoplasias" name="neoplasias">
                    <option value="">Seleccione una opción</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="parentesco" class="form-label">Parentesco</label>
                  <input type="text" class="form-control" id="parentesco" name="parentesco">
                </div>
              </div>
            </div>
          </div>

          <!-- Formulario 3: Medidas antropométricas -->
          <!-- Formulario 3: Medidas Antropométricas y Factores de Riesgo Cardiovascular -->
          <div id="form3" class="form-page">
            <h3 class="section-title text-center mb-3">Factores de Riesgo Cardiovascular</h3>
            <div class="form-container">
              <!-- Presión arterial -->
              <h4 class="section-title mb-3">Presión Arterial</h4>
              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="presion_sistolica" class="form-label">Presión Sistólica (mmHg)</label>
                  <input type="number" class="form-control" id="presion_sistolica" name="presion_sistolica">
                </div>
                <div class="col-md-4">
                  <label for="presion_diastolica" class="form-label">Presión Diastólica (mmHg)</label>
                  <input type="number" class="form-control" id="presion_diastolica" name="presion_diastolica">
                </div>
                <div class="col-md-4">
                  <label for="deteccion_oportuna" class="form-label">Detección Oportuna</label>
                  <select class="form-select" id="deteccion_oportuna" name="deteccion_oportuna">
                    <option value="">Seleccione una opción</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>

              <!-- Perfil Lipídico -->
              <h4 class="section-title mb-3">Perfil Lipídico</h4>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="trigliceridos" class="form-label">Trigliricéridos (mg/dl)</label>
                  <input type="number" class="form-control" id="trigliceridos" name="trigliceridos" step="0.1">
                </div>
                <div class="col-md-6">
                  <label for="colesterol" class="form-label">Colesterol Total (mg/dl)</label>
                  <input type="number" class="form-control" id="colesterol" name="colesterol" step="0.1">
                </div>
              </div>

              <!-- Tabaquismo -->
              <h4 class="section-title mb-3">Tabaquismo</h4>
              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="cigarros_dia" class="form-label">Número de cigarros al día</label>
                  <input type="number" class="form-control" id="cigarros_dia" name="cigarros_dia">
                </div>
                <div class="col-md-4">
                  <label for="nivel_tabaquismo" class="form-label">Nivel de tabaquismo</label>
                  <select class="form-select" id="nivel_tabaquismo" name="nivel_tabaquismo">
                    <option value="">Seleccione una opción</option>
                    <option value="leve">Leve</option>
                    <option value="moderado">Moderado</option>
                    <option value="grave">Grave</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="tiempo_exposicion" class="form-label">Tiempo de exposición (meses)</label>
                  <input type="number" class="form-control" id="tiempo_exposicion" name="tiempo_exposicion">
                </div>
              </div>
            </div>
          </div>

          <!-- Formulario 4: Signos vitales -->
          <!-- Formulario 4: Mediciones Corporales -->
          <div id="form4" class="form-page">
            <h3 class="section-title text-center mb-3">Composición Corporal</h3>
            <div class="form-container">
              <!-- Peso y Talla -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="peso" class="form-label">Peso (kg)</label>
                  <input type="number" class="form-control" id="peso" name="peso" step="0.1">
                </div>
                <div class="col-md-6">
                  <label for="talla" class="form-label">Talla (metros)</label>
                  <input type="number" class="form-control" id="talla" name="talla" step="0.01">
                </div>
              </div>

              <!-- IMC y Categoría -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="imc" class="form-label">IMC</label>
                  <input type="text" class="form-control" id="imc" name="imc" readonly>
                </div>
                <div class="col-md-6">
                  <label for="categoria_imc" class="form-label">Categoría según el IMC</label>
                  <input type="text" class="form-control" id="categoria_imc" name="categoria_imc" readonly>
                </div>
              </div>

              <!-- Circunferencias -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="circunferencia_cintura" class="form-label">Circunferencia de cintura (cm)</label>
                  <input type="number" class="form-control" id="circunferencia_cintura" name="circunferencia_cintura" step="0.1">
                </div>
                <div class="col-md-6">
                  <label for="circunferencia_cadera" class="form-label">Circunferencia de cadera (cm)</label>
                  <input type="number" class="form-control" id="circunferencia_cadera" name="circunferencia_cadera" step="0.1">
                </div>
              </div>

              <!-- Riesgos -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="riesgo_cintura" class="form-label">Riesgo por Cintura</label>
                  <input type="text" class="form-control" id="riesgo_cintura" name="riesgo_cintura" readonly>
                </div>
                <div class="col-md-6">
                  <label for="riesgo_cadera" class="form-label">Riesgo por Cadera</label>
                  <input type="text" class="form-control" id="riesgo_cadera" name="riesgo_cadera" readonly>
                </div>
              </div>
            </div>
          </div>

          <!-- Formulario 5: Resultados de laboratorio -->
          <!-- Formulario 5: Actividad Física -->
          <div id="form5" class="form-page">
            <h3 class="section-title text-center mb-3">Actividad Física</h3>
            <div class="form-container">
              <!-- Tipo de actividad física -->
              <div class="row mb-3">
                <div class="col-md-12">
                  <label for="tipo_actividad" class="form-label">Tipo de actividad física que realiza</label>
                  <input type="text" class="form-control" id="tipo_actividad" name="tipo_actividad">
                </div>
              </div>

              <!-- Días y minutos de actividad física -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="dias_semana" class="form-label">Días de la semana que la realiza</label>
                  <input type="number" class="form-control" id="dias_semana" name="dias_semana" min="0" max="7">
                </div>
                <div class="col-md-6">
                  <label for="minutos_dia" class="form-label">Minutos al día que la realiza</label>
                  <input type="number" class="form-control" id="minutos_dia" name="minutos_dia" min="0">
                </div>
              </div>

              <!-- Promedio y nivel de actividad física -->
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="promedio_actividad" class="form-label">Promedio de actividad física (min/semana)</label>
                  <input type="number" class="form-control" id="promedio_actividad" name="promedio_actividad" readonly>
                </div>
                <div class="col-md-6">
                  <label for="nivel_actividad" class="form-label">Nivel de actividad física</label>
                  <select class="form-select" id="nivel_actividad" name="nivel_actividad">
                    <option value="">Seleccione una opción</option>
                    <option value="sedentario">Sedentario</option>
                    <option value="ligero">Ligero</option>
                    <option value="moderado">Moderado</option>
                    <option value="intenso">Intenso</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- Barra de navegación -->
          <div class="d-flex justify-content-center mt-4 nav-bg p-3 rounded">
            <button type="button" class="btn btn-outline-secondary me-2" id="prev-btn">&lt;</button>
            <button type="button" class="btn btn-outline-primary step-btn active me-2" data-form="form1">Paso 1</button>
            <button type="button" class="btn btn-outline-primary step-btn me-2" data-form="form2">Paso 2</button>
            <button type="button" class="btn btn-outline-primary step-btn me-2" data-form="form3">Paso 3</button>
            <button type="button" class="btn btn-outline-primary step-btn me-2" data-form="form4">Paso 4</button>
            <button type="button" class="btn btn-outline-primary step-btn me-2" data-form="form5">Paso 5</button>
            <button type="button" class="btn btn-outline-secondary" id="next-btn">&gt;</button>
          </div>
        </form>
      </div>
      
      <!-- Footer -->
      <div class="card-footer text-center">
        Todos los derechos reservados - Universidad de la Sierra Sur
      </div>
    </div>
  </div>

  <!-- Bootstrap JS y dependencias -->
  <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const formPages = document.querySelectorAll('.form-page');
      const stepButtons = document.querySelectorAll('.step-btn');
      const prevBtn = document.getElementById('prev-btn');
      const nextBtn = document.getElementById('next-btn');
      let currentFormIndex = 0;

      // Función para mostrar el formulario actual
      function showForm(index) {
        formPages.forEach(form => form.classList.remove('active'));
        stepButtons.forEach(btn => btn.classList.remove('active'));
        
        formPages[index].classList.add('active');
        stepButtons[index].classList.add('active');
        
        currentFormIndex = index;
        
        // Habilitar/deshabilitar botones de navegación
        prevBtn.disabled = currentFormIndex === 0;
        nextBtn.disabled = currentFormIndex === formPages.length - 1;
      }

      // Event listeners para los botones de pasos
      stepButtons.forEach((btn, index) => {
        btn.addEventListener('click', () => showForm(index));
      });

      // Event listeners para los botones de navegación
      prevBtn.addEventListener('click', () => {
        if (currentFormIndex > 0) {
          showForm(currentFormIndex - 1);
        }
      });

      nextBtn.addEventListener('click', () => {
        if (currentFormIndex < formPages.length - 1) {
          showForm(currentFormIndex + 1);
        }
      });

      // Calcular IMC automáticamente
      const pesoInput = document.getElementById('peso');
      const alturaInput = document.getElementById('altura');
      const imcInput = document.getElementById('imc');
      
      function calcularIMC() {
        if (pesoInput.value && alturaInput.value) {
          const peso = parseFloat(pesoInput.value);
          const altura = parseFloat(alturaInput.value) / 100; // convertir a metros
          const imc = peso / (altura * altura);
          imcInput.value = imc.toFixed(2);
        }
      }
      
      pesoInput.addEventListener('input', calcularIMC);
      alturaInput.addEventListener('input', calcularIMC);
    });
  </script>
</body>
</html>