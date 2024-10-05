<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'empleado') {
    header("Location: index.php");
    exit();
}
$usuario = $_SESSION['usuario']; // Obtener el nombre de usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Vacaciones - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Recursos Humanos, I254-S252</h1>
    </header>

    <div class="container">
        <h2>Solicitar Vacaciones</h2>

        <div class="form-container">
            <form action="procesar_vacaciones.php" method="post">
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>

                <label for="fecha_fin">Fecha de Fin:</label>
                <input type="date" id="fecha_fin" name="fecha_fin" required>

                <label for="motivo">Motivo de la Solicitud:</label>
                <textarea id="motivo" name="motivo" rows="4" required></textarea>

                <button type="submit" class="btn-dashboard">Enviar Solicitud</button>
            </form>
            <div class="form-image">
                <img style="width: 300px; height: 200px;" src="imagenes/vacaciones.jpg" alt="Vacaciones">
            </div>
        </div>
        <a href="dashboard_empleado.php" class="btn-dashboard">Volver al Dashboard</a>

    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
