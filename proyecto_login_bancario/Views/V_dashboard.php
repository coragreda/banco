<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 50px 60px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 8px;
        }

        h1 span {
            color: #1a3a6b;
        }

        p {
            color: #888;
            font-size: 15px;
            margin-bottom: 30px;
        }

        form button {
            background: #1a3a6b;
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        form button:hover {
            background: #0a1f4a;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Bienvenido, <span><?php echo htmlspecialchars($nombre_usuario); ?></span> 👋</h1>
        <p>Has iniciado sesión correctamente.</p>
        <form method="POST">
            <button type="submit" name="logout">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>