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
    $title = "Register Entry - I254-S252";
    $registerEntryTitle = "Register Entry";
    $entryTime = "Entry Time:";
    $comments = "Comments (optional):";
    $submitButton = "Register";
    $backToDashboard = "Back to Dashboard";
    $footerText = "© 2024 I254-S252. All rights reserved.";
} else {
    $headerTitle = "Gestión de Recursos Humanos, I254-S252";
    $title = "Registrar Entradas - I254-S252";
    $registerEntryTitle = "Registrar Entrada";
    $entryTime = "Hora de Entrada:";
    $comments = "Comentarios (opcional):";
    $submitButton = "Registrar";
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
                <h2><?php echo $registerEntryTitle; ?></h2>
                <form action="procesar_entrada.php" method="post">
                    <label for="hora_entrada"><?php echo $entryTime; ?></label>
                    <input type="time" id="hora_entrada" name="hora_entrada" required>
                    
                    <label for="comentarios"><?php echo $comments; ?></label>
                    <textarea id="comentarios" name="comentarios"></textarea>
                    
                    <button type="submit"><?php echo $submitButton; ?></button>
                </form>
            </div>
            <div class="login-image">
                <img src="imagenes/entrada.jpg" alt="Imagen de Entrada">
            </div>
        </div>
        <a href="dashboard_empleado.php" class="btn-dashboard"><?php echo $backToDashboard; ?></a>
    </div>

    <footer>
        <p><?php echo $footerText; ?></p>
    </footer>
</body>
</html>
