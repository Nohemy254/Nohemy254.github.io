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
    <title>Registrar Entradas - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Recursos Humanos, I254-S252</h1>
    </header>

    <div class="container">
        <div class="login-container">
            <div class="login-form">
                <h2>Registrar Entrada</h2>
                <form action="procesar_entrada.php" method="post">
                    <label for="hora_entrada">Hora de Entrada:</label>
                    <input type="time" id="hora_entrada" name="hora_entrada" required>
                    
                    <label for="comentarios">Comentarios (opcional):</label>
                    <textarea id="comentarios" name="comentarios"></textarea>
                    
                    <button type="submit">Registrar</button>
                </form>
            </div>
            <div class="login-image">
                <img src="imagenes/entrada.jpg" alt="Imagen de Entrada">
            </div>
        </div>
        <a href="dashboard_empleado.php" class="btn-dashboard">Volver al Dashboard</a>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
