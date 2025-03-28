<?php
// login.php

// Datos de conexión a la base de datos
$host = "db";
$dbname = "myappdb";
$username = "myappuser";
$password = "myapppassword";

// Conexión a la base de datos
try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error de conexión: " . $e->getMessage());
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"];
  $pass = $_POST["password"];

  // Consulta para verificar el usuario
  $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = :correo AND password = :password");
  $stmt->bindParam(":correo", $user);
  $stmt->bindParam(":password", $pass);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    // Usuario autenticado
    session_start();
    $_SESSION["correo"] = $user;
    header("Location: dashboard.php"); // Redirigir al panel de control
    exit();
  } else {
    // Credenciales incorrectas
    echo '<script type="text/javascript">
      alert("¡Usuario o contraseña inválidos!");
      window.location.href = "index.php"; // Redirigir al index.php
    </script>';
    exit();
  }
}
?>