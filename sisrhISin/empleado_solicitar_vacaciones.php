<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION['usuario']; // Obtener el nombre de usuario

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $headerTitle = "Human Resources Management, I254-S252";
    $title = "Request Vacation - I254-S252";
    $requestVacationTitle = "Request Vacation";
    $startDate = "Start Date:";
    $endDate = "End Date:";
    $reason = "Reason for Request:";
    $submitButton = "Submit Request";
    $backToDashboard = "Back to Dashboard";
    $footerText = "© 2024 I254-S252. All rights reserved.";
} else {
    $headerTitle = "Gestión de Recursos Humanos, I254-S252";
    $title = "Solicitar Vacaciones - I254-S252";
    $requestVacationTitle = "Solicitar Vacaciones";
    $startDate = "Fecha de Inicio:";
    $endDate = "Fecha de Fin:";
    $reason = "Motivo de la Solicitud:";
    $submitButton = "Enviar Solicitud";
    $backToDashboard = "Volver al Dashboard";
    $footerText = "© 2024 I254-S252. Todos los derechos reservados.";
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
        <h1><?php echo $headerTitle; ?></h1>
    </header>

    <div class="container">
        <h2><?php echo $requestVacationTitle; ?></h2>

        <div class="form-container">
            <form action="procesar_vacaciones.php" method="post">
                <label for="fecha_inicio"><?php echo $startDate; ?></label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>

                <label for="fecha_fin"><?php echo $endDate; ?></label>
                <input type="date" id="fecha_fin" name="fecha_fin" required>

                <label for="motivo"><?php echo $reason; ?></label>
                <textarea id="motivo" name="motivo" rows="4" required></textarea>

                <button type="submit" class="btn-dashboard"><?php echo $submitButton; ?></button>
            </form>
            <div class="form-image">
                <img style="width: 300px; height: 200px;" src="imagenes/vacaciones.jpg" alt="Vacaciones">
            </div>
        </div>
        <a href="dashboard_empleado.php" class="btn-dashboard"><?php echo $backToDashboard; ?></a>
    </div>

    <footer>
        <p><?php echo $footerText; ?></p>
    </footer>
</body>
</html>