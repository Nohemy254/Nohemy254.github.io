<?php
session_start();

// Verificar si el usuario ha iniciado sesión y tiene el rol de empleado
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}

// Simular un registro de entrada en la base de datos
$usuario = $_SESSION['usuario'];
$hora_entrada = date("Y-m-d H:i:s"); // Obtener la hora actual

// Aquí puedes agregar el código para insertar el registro en la base de datos
// Ejemplo (pseudocódigo):
// INSERT INTO registros (usuario, hora_entrada) VALUES ('$usuario', '$hora_entrada');

echo "Registro de entrada exitoso para el usuario $usuario a las $hora_entrada.";

// Redireccionar al dashboard después de registrar la entrada
header("Location: dashboard_empleado.php?mensaje=entrada_ok");
exit();
?>
