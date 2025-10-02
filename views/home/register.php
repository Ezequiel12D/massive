<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro - Massive</title>
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo"><a href="index.php" style="text-decoration:none; color:#111;">Massive</a></div>
        <ul class="nav-links">
            <li><a href="index.php">Volver al Home</a></li>
        </ul>
    </nav>

    <div class="form-container">
        <h2>Crear cuenta</h2>
        <form method="post" action="index.php?c=user&m=register">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Registrarme</button>
        </form>
        <p>¿Ya tenés cuenta? <a href="index.php?c=user&m=login">Ingresá aquí</a></p>
        <p><a href="index.php">← Volver al inicio</a></p>
    </div>
</body>

</html>