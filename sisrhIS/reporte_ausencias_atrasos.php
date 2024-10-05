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
    <title>Reporte de Ausencias y Atrasos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Reporte de Ausencias y Atrasos - I254-S252</h1>
    </header>

    <div class="container">
        <h2>Ausencias y Atrasos</h2>
        <table>
            <thead>
                <tr>
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Motivo</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>2024-10-02</td>
                    <td>Falta justificada</td>
                    <td>Falta</td>
                </tr>
                <tr>
                    <td>Ana García</td>
                    <td>2024-10-03</td>
                    <td>Llegada tarde</td>
                    <td>Atraso</td>
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
