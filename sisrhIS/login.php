<?php
// Iniciar sesión
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Simular roles: "admin" es el supervisor, y otros usuarios son empleados
if ($usuario === "admin" && $password === "2024") {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = 'supervisor';
    header("Location: dashboard_supervisor.php");
} elseif ($password === "2000") {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = 'empleado';
    header("Location: dashboard_empleado.php");
} else {
    echo "Usuario o contraseña incorrectos.";
    exit();
}
?>
