<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a la Gestión de Recursos Humanos, I254-S252</h1>
    </header>
    
    <div class="container">
        <div class="login-container">
            <div class="login-form">
                <h2>Iniciar Sesión</h2>
                <form action="login.php" method="post">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required>
                    
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    
                    <button type="submit">Entrar</button>
                </form>
            </div>
            <div class="login-image">
                <img src="imagenes/empresa_logo.jpg" alt="Logo de la empresa">
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 I254-S252. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
