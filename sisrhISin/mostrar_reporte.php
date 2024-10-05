<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

$tipo_reporte = $_POST['tipo_reporte'];

// Leer el idioma de la cookie
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'es';

// Definir los encabezados y pies de página según el idioma
if ($language === 'en') {
    $reporte = [
        'entradas_salidas' => [
            ['Employee', 'Date', 'Entry Time', 'Exit Time'],
            ['Juan Pérez', '2024-10-01', '08:00', '17:00'],
            ['Ana García', '2024-10-01', '08:15', '17:05'],
            ['Carlos López', '2024-10-02', '07:55', '17:00'],
            ['Luis Fernández', '2024-10-03', '08:10', '17:10'],
            ['Marta Ruiz', '2024-10-03', '08:00', '17:00'],
            ['Pedro Gómez', '2024-10-03', '07:50', '16:55'],
        ],
        'ausencias_atrasos' => [
            ['Employee', 'Date', 'Reason', 'Type'],
            ['Juan Pérez', '2024-10-02', 'Justified Absence', 'Absence'],
            ['Ana García', '2024-10-03', 'Late Arrival', 'Delay'],
            ['Carlos López', '2024-10-04', 'Late Arrival', 'Delay'],
            ['Luis Fernández', '2024-10-05', 'Unjustified Absence', 'Absence'],
            ['Marta Ruiz', '2024-10-06', 'Late Arrival', 'Delay'],
        ],
        'vacaciones' => [
            ['Employee', 'Start Date', 'End Date', 'Days'],
            ['Juan Pérez', '2024-10-10', '2024-10-15', 5],
            ['Ana García', '2024-10-12', '2024-10-20', 8],
            ['Carlos López', '2024-10-05', '2024-10-15', 10],
            ['Luis Fernández', '2024-11-01', '2024-11-10', 9],
            ['Marta Ruiz', '2024-12-01', '2024-12-07', 6],
        ]
    ];
    $headerText = "Human Resources Management, I254-S252";
    $footerText = "© 2024 I254-S252. All rights reserved.";
} else {
    $reporte = [
        'entradas_salidas' => [
            ['Empleado', 'Fecha', 'Hora de Entrada', 'Hora de Salida'],
            ['Juan Pérez', '2024-10-01', '08:00', '17:00'],
            ['Ana García', '2024-10-01', '08:15', '17:05'],
            ['Carlos López', '2024-10-02', '07:55', '17:00'],
            ['Luis Fernández', '2024-10-03', '08:10', '17:10'],
            ['Marta Ruiz', '2024-10-03', '08:00', '17:00'],
            ['Pedro Gómez', '2024-10-03', '07:50', '16:55'],
        ],
        'ausencias_atrasos' => [
            ['Empleado', 'Fecha', 'Motivo', 'Tipo'],
            ['Juan Pérez', '2024-10-02', 'Falta justificada', 'Falta'],
            ['Ana García', '2024-10-03', 'Llegada tarde', 'Atraso'],
            ['Carlos López', '2024-10-04', 'Llegada tarde', 'Atraso'],
            ['Luis Fernández', '2024-10-05', 'Falta injustificada', 'Falta'],
            ['Marta Ruiz', '2024-10-06', 'Llegada tarde', 'Atraso'],
        ],
        'vacaciones' => [
            ['Empleado', 'Fecha de Inicio', 'Fecha de Fin', 'Días'],
            ['Juan Pérez', '2024-10-10', '2024-10-15', 5],
            ['Ana García', '2024-10-12', '2024-10-20', 8],
            ['Carlos López', '2024-10-05', '2024-10-15', 10],
            ['Luis Fernández', '2024-11-01', '2024-11-10', 9],
            ['Marta Ruiz', '2024-12-01', '2024-12-07', 6],
        ]
    ];
    $headerText = "Gestión de Recursos Humanos, I254-S252";
    $footerText = "© 2024 I254-S252. Todos los derechos reservados.";
}

// Títulos y textos según idioma
if ($language === 'en') {
    $reportTitle = "Report: " . ucfirst(str_replace('_', ' ', $tipo_reporte));
    $searchTitle = "Search Employee";
    $searchLabel = "Employee Name or ID:";
    $searchButton = "Search";
    $backToDashboard = "Back to Dashboard";
} else {
    $reportTitle = "Reporte: " . ucfirst(str_replace('_', ' ', $tipo_reporte));
    $searchTitle = "Buscar Empleado";
    $searchLabel = "Nombre o ID del Empleado:";
    $searchButton = "Buscar";
    $backToDashboard = "Volver al Dashboard";
}
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $reportTitle; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo $headerText; ?></h1>
    </header>

    <div class="container">
        <h2><?php echo $reportTitle; ?></h2>

        <table>
            <thead>
                <tr>
                    <?php foreach ($reporte[$tipo_reporte][0] as $header): ?>
                        <th><?php echo $header; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i < count($reporte[$tipo_reporte]); $i++): ?>
                    <tr>
                        <?php foreach ($reporte[$tipo_reporte][$i] as $data): ?>
                            <td><?php echo $data; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <!-- Formulario de búsqueda de empleado -->
        <h3><?php echo $searchTitle; ?></h3>
        <form action="buscar_empleado.php" method="post">
            <label for="busqueda"><?php echo $searchLabel; ?></label>
            <input type="text" id="busqueda" name="busqueda" required>
            <button type="submit"><?php echo $searchButton; ?></button>
        </form>

        <!-- Botón de Volver -->
        <a href="dashboard_supervisor.php" class="btn-dashboard"><?php echo $backToDashboard; ?></a>
    </div>

    <footer>
        <p><?php echo $footerText; ?></p>
    </footer>
</body>
</html>
