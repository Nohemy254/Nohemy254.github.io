<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

if ($language === 'en') {
    $title = "Generate Reports - I254-S252";
    $heading = "Report Generation";
    $reportTypeLabel = "Report Type:";
    $entriesExits = "Entries and Exits";
    $absencesDelays = "Absences and Delays";
    $vacations = "Vacations";
    $generateReport = "Generate Report";
} else {
    $title = "Generar Reportes - I254-S252";
    $heading = "Generación de Reportes";
    $reportTypeLabel = "Tipo de Reporte:";
    $entriesExits = "Entradas y Salidas";
    $absencesDelays = "Ausencias y Atrasos";
    $vacations = "Vacaciones";
    $generateReport = "Generar Reporte";
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
        <h1><?php echo $heading; ?></h1>
    </header>

    <div class="container">
        <h2><?php echo $heading; ?></h2>

        <form action="mostrar_reporte.php" method="post">
            <label for="tipo_reporte"><?php echo $reportTypeLabel; ?></label>
            <select id="tipo_reporte" name="tipo_reporte" required>
                <option value="entradas_salidas"><?php echo $entriesExits; ?></option>
                <option value="ausencias_atrasos"><?php echo $absencesDelays; ?></option>
                <option value="vacaciones"><?php echo $vacations; ?></option>
            </select>

            <button type="submit"><?php echo $generateReport; ?></button>
        </form>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
