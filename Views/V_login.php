<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Virtual - Login</title>
    <link rel="stylesheet" href="Assets/styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>🏦</h1>
            <h2>Banco Virtual</h2>

            <?php if (!empty($error_mensaje)): ?>
                <div class="error-message"><?php echo htmlspecialchars($error_mensaje); ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                </div>
                <button type="submit" class="btn-login">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>