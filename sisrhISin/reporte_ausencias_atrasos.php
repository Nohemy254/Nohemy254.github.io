<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'supervisor') {
    header("Location: index.php");
    exit();
}

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $title = "Report of Absences and Delays - I254-S252";
    $heading = "Absences and Delays";
    $employee = "Employee";
    $date = "Date";
    $reason = "Reason";
    $type = "Type";
    $backToDashboard = "Back to Dashboard";
} else {
    $title = "Reporte de Ausencias y Atrasos - I254-S252";
    $heading = "Ausencias y Atrasos";
    $employee = "Empleado";
    $date = "Fecha";
    $reason = "Motivo";
    $type = "Tipo";
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
                    <th><?php echo $reason; ?></th>
                    <th><?php echo $type; ?></th>
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
        <a href="dashboard_supervisor.php" class="btn-dashboard"><?php echo $backToDashboard; ?></a>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
