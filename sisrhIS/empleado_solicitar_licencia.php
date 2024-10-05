<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
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
    <title>Solicitar Licencia - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Recursos Humanos, I254-S252</h1>
    </header>

    <div class="container">
        <div class="login-container">
            <div class="login-form">
                <h2>Solicitar Licencia</h2>
                <form action="procesar_licencia.php" method="post">
                    <label for="fecha_inicio">Fecha de Inicio:</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                    
                    <label for="fecha_fin">Fecha de Fin:</label>
                    <input type="date" id="fecha_fin" name="fecha_fin" required>
                    
                    <label for="motivo">Motivo de la Licencia:</label>
                    <textarea id="motivo" name="motivo" required></textarea>
                    
                    <button type="submit">Solicitar Licencia</button>
                </form>
                <a href="dashboard_empleado.php" class="btn-dashboard">Volver al Dashboard</a>

            </div>
            <div class="login-image">
                <img src="imagenes/licencia.jpg" alt="Imagen de Licencia">
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
