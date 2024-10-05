<?php
session_start();

// Verificar si el usuario ha iniciado sesión y tiene el rol de empleado
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}

// Simular un registro de salida en la base de datos
$usuario = $_SESSION['usuario'];
$hora_salida = date("Y-m-d H:i:s"); // Obtener la hora actual

// Aquí puedes agregar el código para insertar el registro en la base de datos
// Ejemplo (pseudocódigo):
// UPDATE registros SET hora_salida = '$hora_salida' WHERE usuario = '$usuario' AND fecha_actual = hoy;

echo "Registro de salida exitoso para el usuario $usuario a las $hora_salida.";

// Redireccionar al dashboard después de registrar la salida
header("Location: dashboard_empleado.php?mensaje=salida_ok");
exit();
?>
