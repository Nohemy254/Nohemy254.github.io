<?php
session_start();
if (!isset($_SESSION['usuario'])) {
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
    <title>Generar Reportes - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Recursos Humanos, I254-S252</h1>
    </header>

    <div class="container">
        <h2>Generación de Reportes</h2>

        <form action="mostrar_reporte.php" method="post">
            <label for="tipo_reporte">Tipo de Reporte:</label>
            <select id="tipo_reporte" name="tipo_reporte" required>
                <option value="entradas_salidas">Entradas y Salidas</option>
                <option value="ausencias_atrasos">Ausencias y Atrasos</option>
                <option value="vacaciones">Vacaciones</option>
            </select>

            <button type="submit">Generar Reporte</button>
        </form>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
