<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION['usuario']; // Obtener el nombre de usuario desde la sesión

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $headerTitle = "Human Resources Management, I254-S252";
    $title = "Employee Dashboard - I254-S252";
    $welcome = "Welcome,";
    $registerEntry = "Register Entry";
    $registerExit = "Register Exit";
    $requestVacation = "Request Vacation";
    $requestLeave = "Request Leave";
    $logout = "Logout";
    $footerText = "© 2024 I254-S252. All rights reserved.";
} else {
    $headerTitle = "Gestión de Recursos Humanos, I254-S252";
    $title = "Dashboard Empleado - I254-S252";
    $welcome = "Bienvenid@,";
    $registerEntry = "Registrar Entrada";
    $registerExit = "Registrar Salida";
    $requestVacation = "Solicitar Vacaciones";
    $requestLeave = "Solicitar Licencia";
    $logout = "Cerrar Sesión";
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
        <div class="content-wrapper">
            <!-- Sección para la imagen y el mensaje de bienvenida -->
            <aside class="profile-section">
                <p class="welcome-text"><?php echo $welcome . " " . $usuario; ?></p>
                <img style="width: 450px; height: 350px;" src="imagenes/empleado.jpg" alt="Empleado">
            </aside>

            <!-- Botones de acciones del empleado -->
            <main class="actions-section">
                <div class="dashboard-buttons">
                    <a href="empleado_registrar_entrada.php" class="btn-dashboard"><?php echo $registerEntry; ?></a>
                    <a href="empleado_registrar_salida.php" class="btn-dashboard"><?php echo $registerExit; ?></a>
                    <a href="empleado_solicitar_vacaciones.php" class="btn-dashboard"><?php echo $requestVacation; ?></a>
                    <a href="empleado_solicitar_licencia.php" class="btn-dashboard"><?php echo $requestLeave; ?></a>
                </div>
            </main>
        </div>
        <a href="logout.php" class="btn-dashboard"><?php echo $logout; ?></a>
    </div>

    <footer>
        <p><?php echo $footerText; ?></p>
    </footer>
</body>
</html>
