<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'supervisor') {
    header("Location: index.php");
    exit();
}

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $title = "Report of Entries and Exits - I254-S252";
    $heading = "Entries and Exits";
    $employee = "Employee";
    $date = "Date";
    $entryTime = "Entry Time";
    $exitTime = "Exit Time";
    $backToDashboard = "Back to Dashboard";
} else {
    $title = "Reporte de Entradas y Salidas - I254-S252";
    $heading = "Entradas y Salidas";
    $employee = "Empleado";
    $date = "Fecha";
    $entryTime = "Hora de Entrada";
    $exitTime = "Hora de Salida";
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
                    <th><?php echo $date; ?></th>
                    <th><?php echo $entryTime; ?></th>
                    <th><?php echo $exitTime; ?></th>
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
        <a href="dashboard_supervisor.php" class="btn-dashboard"><?php echo $backToDashboard; ?></a>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
