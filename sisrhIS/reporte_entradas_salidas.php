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
    <title>Reporte de Entradas y Salidas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Reporte de Entradas y Salidas - I254-S252</h1>
    </header>

    <div class="container">
        <h2>Entradas y Salidas</h2>
        <table>
            <thead>
                <tr>
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>2024-10-01</td>
                    <td>08:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>Ana García</td>
                    <td>2024-10-01</td>
                    <td>08:15</td>
                    <td>17:05</td>
                </tr>
                <!-- Agregar más filas según necesidad -->
            </tbody>
        </table>
        <a href="dashboard_supervisor.php" class="btn-dashboard">Volver al Dashboard</a>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
