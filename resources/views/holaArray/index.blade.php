<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Array - Laravel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }
        .array-section {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            border-left: 4px solid #ff6b6b;
        }
        .array-title {
            color: #ff6b6b;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }
        .array-item {
            background: white;
            padding: 0.5rem 1rem;
            margin: 0.5rem 0;
            border-radius: 5px;
            border: 1px solid #e9ecef;
            display: inline-block;
            margin-right: 0.5rem;
        }
        .code-example {
            background: #2d3748;
            color: #e2e8f0;
            padding: 1rem;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            margin: 1rem 0;
            overflow-x: auto;
        }
        .highlight {
            color: #ff6b6b;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Hola Array! 🚀</h1>

        <div class="array-section">
            <div class="array-title">Arrays en PHP</div>
            <p>Los arrays son estructuras de datos fundamentales en PHP que permiten almacenar múltiples valores.</p>

            <div class="code-example">
              $frutas = ['manzana', 'banana', 'naranja', 'uva'];
              $numeros = [1, 2, 3, 4, 5];
              $mixto = ['texto', 42, true, null];
            </div>
        </div>

        <div class="array-section">
            <div class="array-title">Tipos de Arrays</div>

            <div style="margin-bottom: 1rem;">
                <strong>Array Indexado:</strong>
                <div class="array-item">manzana</div>
                <div class="array-item">banana</div>
                <div class="array-item">naranja</div>
            </div>

            <div style="margin-bottom: 1rem;">
                <strong>Array Asociativo:</strong>
                <div class="array-item">nombre: Juan</div>
                <div class="array-item">edad: 25</div>
                <div class="array-item">ciudad: Madrid</div>
            </div>

            <div>
                <strong>Array Multidimensional:</strong>
                <div class="code-example">
                  $usuarios = [
                      ['nombre' => 'Ana', 'edad' => 30],
                      ['nombre' => 'Carlos', 'edad' => 28]
                  ];
                </div>
            </div>
        </div>

        <div class="array-section">
            <div class="array-title">Funciones Útiles de Arrays</div>
            <ul>
                <li><span class="highlight">count()</span> - Contar elementos</li>
                <li><span class="highlight">array_push()</span> - Agregar elemento al final</li>
                <li><span class="highlight">array_pop()</span> - Eliminar último elemento</li>
                <li><span class="highlight">array_merge()</span> - Combinar arrays</li>
                <li><span class="highlight">in_array()</span> - Buscar elemento</li>
            </ul>
        </div>

        <div class="array-section">
            <div class="array-title">En Laravel Blade</div>
            <p>En las plantillas Blade puedes iterar arrays fácilmente:</p>
            <div class="code-example">
              @foreach($frutas as $fruta)
                  &lt;li&gt;{{ $fruta }}&lt;/li&gt;
              @endforeach
            </div>
        </div>
    </div>
</body>
</html>
