<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - I254-S252</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        let isEnglish = false;

        function toggleLanguage() {
    const currentLanguage = isEnglish ? 'es' : 'en';
    document.cookie = "language=" + currentLanguage + "; path=/"; // Guardar el idioma en una cookie
    isEnglish = !isEnglish;

    if (isEnglish) {
        // Cambiar a inglés
        document.querySelector('h1').textContent = 'Welcome to Human Resources Management, I254-S252';
        document.querySelector('h2').textContent = 'Log In';
        document.querySelector('label[for="usuario"]').textContent = 'Username:';
        document.querySelector('label[for="password"]').textContent = 'Password:';
        document.querySelector('button[type="submit"]').textContent = 'Enter';
        document.querySelector('footer p').textContent = '© 2024 I254-S252. All rights reserved.';
        document.querySelector('button[type="button"]').textContent = 'Traducir'; 
    } else {
        // Cambiar a español
        document.querySelector('h1').textContent = 'Bienvenido a la Gestión de Recursos Humanos, I254-S252';
        document.querySelector('h2').textContent = 'Iniciar Sesión';
        document.querySelector('label[for="usuario"]').textContent = 'Usuario:';
        document.querySelector('label[for="password"]').textContent = 'Contraseña:';
        document.querySelector('button[type="submit"]').textContent = 'Entrar';
        document.querySelector('footer p').textContent = '© 2024 I254-S252. Todos los derechos reservados.';
        document.querySelector('button[type="button"]').textContent = 'Translate'; 
    }
}

    </script>
</head>
<body>
    <header>
        <h1>Bienvenido a la Gestión de Recursos Humanos, I254-S252</h1>
        <button type="button" class="translate-button" onclick="toggleLanguage()">Translate</button>

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
