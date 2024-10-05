<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$motivo = $_POST['motivo'];

// Aquí procesaríamos los datos (por ejemplo, guardarlos en la base de datos)

// Redirigir a una página de confirmación o mostrar un mensaje de éxito
header("Location: empleado_solicitar_vacaciones.php?success=1");
exit();
?>
