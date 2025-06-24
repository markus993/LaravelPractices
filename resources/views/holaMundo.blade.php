<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo - Laravel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
        }
        h1 {
            color: #333;
            margin-bottom: 1rem;
        }
        p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
        }
        .highlight {
            color: #667eea;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Hola Mundo!</h1>
        <p>Bienvenido a tu primer template <span class="highlight">Blade</span> en Laravel.</p>
        <p>Este es el template <span class="highlight">holaMundo.blade.php</span> usando camelCase.</p>
        <p>¡Felicitaciones por dar tus primeros pasos en Laravel!</p>
    </div>
</body>
</html>
