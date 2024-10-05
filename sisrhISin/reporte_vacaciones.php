<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'supervisor') {
    header("Location: index.php");
    exit();
}

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $title = "Vacation Report - I254-S252";
    $heading = "Vacations";
    $employee = "Employee";
    $startDate = "Start Date";
    $endDate = "End Date";
    $days = "Days";
    $backToDashboard = "Back to Dashboard";
} else {
    $title = "Reporte de Vacaciones - I254-S252";
    $heading = "Vacaciones";
    $employee = "Empleado";
    $startDate = "Fecha de Inicio";
    $endDate = "Fecha de Fin";
    $days = "Días";
    $backToDashboard = "Volver al Dashboard";
}
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>

    <div class="container">
        <h2><?php echo $heading; ?></h2>
        <table>
            <thead>
                <tr>
                    <th><?php echo $employee; ?></th>
                    <th><?php echo $startDate; ?></th>
                    <th><?php echo $endDate; ?></th>
                    <th><?php echo $days; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>2024-10-10</td>
                    <td>2024-10-15</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Ana García</td>
                    <td>2024-10-12</td>
                    <td>2024-10-20</td>
                    <td>8</td>
                </tr>
                <!-- Agregar más filas según necesidad -->
            </tbody>
        </table>
        <a href="dashboard_supervisor.php" class="btn-dashboard"><?php echo $backToDashboard; ?></a>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
