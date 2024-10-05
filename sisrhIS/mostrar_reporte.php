<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

$tipo_reporte = $_POST['tipo_reporte'];

$reporte = [
    'entradas_salidas' => [
        ['Empleado', 'Fecha', 'Hora de Entrada', 'Hora de Salida'],
        ['Juan Pérez', '2024-10-01', '08:00', '17:00'],
        ['Ana García', '2024-10-01', '08:15', '17:05'],
        ['Carlos López', '2024-10-02', '07:55', '17:00'],
        // Añadimos más filas de ejemplo
        ['Luis Fernández', '2024-10-03', '08:10', '17:10'],
        ['Marta Ruiz', '2024-10-03', '08:00', '17:00'],
        ['Pedro Gómez', '2024-10-03', '07:50', '16:55'],
        // ...
    ],
    'ausencias_atrasos' => [
        ['Empleado', 'Fecha', 'Motivo', 'Tipo'],
        ['Juan Pérez', '2024-10-02', 'Falta justificada', 'Falta'],
        ['Ana García', '2024-10-03', 'Llegada tarde', 'Atraso'],
        ['Carlos López', '2024-10-04', 'Llegada tarde', 'Atraso'],
        ['Luis Fernández', '2024-10-05', 'Falta injustificada', 'Falta'],
        ['Marta Ruiz', '2024-10-06', 'Llegada tarde', 'Atraso'],
        // ...
    ],
    'vacaciones' => [
        ['Empleado', 'Fecha de Inicio', 'Fecha de Fin', 'Días'],
        ['Juan Pérez', '2024-10-10', '2024-10-15', 5],
        ['Ana García', '2024-10-12', '2024-10-20', 8],
        ['Carlos López', '2024-10-05', '2024-10-15', 10],
        ['Luis Fernández', '2024-11-01', '2024-11-10', 9],
        ['Marta Ruiz', '2024-12-01', '2024-12-07', 6],
        // ...
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Generado - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestión de Recursos Humanos, I254-S252</h1>
    </header>

    <div class="container">
        <h2>Reporte: <?php echo ucfirst(str_replace('_', ' ', $tipo_reporte)); ?></h2>

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
        <h3>Buscar Empleado</h3>
        <form action="buscar_empleado.php" method="post">
            <label for="busqueda">Nombre o ID del Empleado:</label>
            <input type="text" id="busqueda" name="busqueda" required>
            <button type="submit">Buscar</button>
        </form>

        <!-- Botón de Volver -->
        <a href="dashboard_supervisor.php" class="btn-dashboard">Volver al Dashboard</a>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
