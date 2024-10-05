<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'supervisor') {
    header("Location: index.php");
    exit();
}

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $title = "Supervisor Dashboard - I254-S252";
    $welcome = "Welcome Admin";
    $reportEntries = "View Entries and Exits";
    $reportAbsences = "View Absences and Delays";
    $reportVacations = "View Vacations";
    $generateReports = "Generate Reports";
    $logout = "Logout";
} else {
    $title = "Dashboard Supervisor - I254-S252";
    $welcome = "Bienvenido Admin";
    $reportEntries = "Ver Entradas y Salidas";
    $reportAbsences = "Ver Ausencias y Atrasos";
    $reportVacations = "Ver Vacaciones";
    $generateReports = "Generar Reportes";
    $logout = "Cerrar Sesión";
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
        <div class="dashboard-container">
            <div class="dashboard-buttons">
                <h2><?php echo $welcome; ?></h2>
                <a href="reporte_entradas_salidas.php" class="btn-dashboard"><?php echo $reportEntries; ?></a>
                <a href="reporte_ausencias_atrasos.php" class="btn-dashboard"><?php echo $reportAbsences; ?></a>
                <a href="reporte_vacaciones.php" class="btn-dashboard"><?php echo $reportVacations; ?></a>
                <a href="generar_reporte.php" class="btn-dashboard"><?php echo $generateReports; ?></a>
            </div>
            
            <div class="dashboard-image">
                <img style="width: 350px; height: 350px;" src="imagenes/supervisor.jpg" alt="Supervisor">
            </div>
            <a href="logout.php" class="btn-dashboard"><?php echo $logout; ?></a>
        </div>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
