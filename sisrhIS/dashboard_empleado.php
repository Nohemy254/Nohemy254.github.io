<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION['usuario']; // Obtener el nombre de usuario desde la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Empleado - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Recursos Humanos, I254-S252</h1>
    </header>

    <div class="container">
        <div class="content-wrapper">
            <!-- Sección para la imagen y el mensaje de bienvenida -->
            <aside class="profile-section">
            <p class="welcome-text">Bienvenid@, <?php echo $usuario; ?></p>
            <img style="width: 450px; height: 350px;" src="imagenes/empleado.jpg" alt="Empleado">
            </aside>

            <!-- Botones de acciones del empleado -->
            <main class="actions-section">
                <div class="dashboard-buttons">
                    <a href="empleado_registrar_entrada.php" class="btn-dashboard">Registrar Entrada</a>
                    <a href="empleado_registrar_salida.php" class="btn-dashboard">Registrar Salida</a>
                    <a href="empleado_solicitar_vacaciones.php" class="btn-dashboard">Solicitar Vacaciones</a>
                    <a href="empleado_solicitar_licencia.php" class="btn-dashboard">Solicitar Licencia</a>
                </div>
            </main>
        </div>
        <a href="logout.php" class="btn-dashboard">Cerrar Sesion</a>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
