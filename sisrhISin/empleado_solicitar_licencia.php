<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $headerTitle = "Human Resources Management, I254-S252";
    $title = "Request Leave - I254-S252";
    $requestLeaveTitle = "Request Leave";
    $startDate = "Start Date:";
    $endDate = "End Date:";
    $reason = "Reason for Leave:";
    $submitButton = "Request Leave";
    $backToDashboard = "Back to Dashboard";
    $footerText = "© 2024 I254-S252. All rights reserved.";
} else {
    $headerTitle = "Gestión de Recursos Humanos, I254-S252";
    $title = "Solicitar Licencia - I254-S252";
    $requestLeaveTitle = "Solicitar Licencia";
    $startDate = "Fecha de Inicio:";
    $endDate = "Fecha de Fin:";
    $reason = "Motivo de la Licencia:";
    $submitButton = "Solicitar Licencia";
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
        <div class="login-container">
            <div class="login-form">
                <h2><?php echo $requestLeaveTitle; ?></h2>
                <form action="procesar_licencia.php" method="post">
                    <label for="fecha_inicio"><?php echo $startDate; ?></label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                    
                    <label for="fecha_fin"><?php echo $endDate; ?></label>
                    <input type="date" id="fecha_fin" name="fecha_fin" required>
                    
                    <label for="motivo"><?php echo $reason; ?></label>
                    <textarea id="motivo" name="motivo" required></textarea>
                    
                    <button type="submit"><?php echo $submitButton; ?></button>
                </form>
                <a href="dashboard_empleado.php" class="btn-dashboard"><?php echo $backToDashboard; ?></a>
            </div>
            <div class="login-image">
                <img src="imagenes/licencia.jpg" alt="Imagen de Licencia">
            </div>
        </div>
    </div>

    <footer>
        <p><?php echo $footerText; ?></p>
    </footer>
</body>
</html>
