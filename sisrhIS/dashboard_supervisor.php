<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'supervisor') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Supervisor - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Recursos Humanos, I254-S252</h1>
    </header>

    <div class="container">
        <div class="dashboard-container">
            <div class="dashboard-buttons">
                <h2>Bienvenido Admin</h2>
                <a href="reporte_entradas_salidas.php" class="btn-dashboard">Ver Entradas y Salidas</a>
                <a href="reporte_ausencias_atrasos.php" class="btn-dashboard">Ver Ausencias y Atrasos</a>
                <a href="reporte_vacaciones.php" class="btn-dashboard">Ver Vacaciones</a>
                <a href="generar_reporte.php" class="btn-dashboard">Generar Reportes</a>
                
            </div>
            
            <div class="dashboard-image">
                <img style="width: 350px; height: 350px;" src="imagenes/supervisor.jpg" alt="Supervisor">
            </div>
            <a href="logout.php" class="btn-dashboard">Cerrar Sesion</a>
        </div>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
