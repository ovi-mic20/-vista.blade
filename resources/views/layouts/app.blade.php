<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('El Rincón de la Castora')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
            color: #222;
        }

        header {
            background: #111;
            color: white;
            padding: 20px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 30px;
        }

        .producto {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 8px;
        }

        .sin-stock {
            color: red;
            font-weight: bold;
        }

        .con-stock {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <header>
        <h1>¡Bievenido al Rincón de la Castora!</h1>
        <nav>
            <a href="/">Inicio</a>
            <a href="/productos">Productos</a>
            <a href="/contacto">Contacto</a>
            <a href="/nosotros">Nosotros</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Espero que encuentre en nuestros productos 100% orgánicos y de muy buena cálidad el sabor que éstes buscando.</p>
    </footer>

</body>

</html>