<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abasto Restaurante - @yield('titulo', 'Cocina con Historia')</title>
    
    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;1,400&family=Playfair+Display:wght@600;800&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <header>
        <h1>Abasto Restaurante</h1>
        <p class="subtitulo">Tradición, historia y sabores de antaño desde 1924</p>
        <nav>
            <a href="{{ route('paginas.inicio') }}">Inicio</a>
            <a href="{{ route('paginas.menu') }}">Menú Histórico</a>
            <a href="{{ route('paginas.contacto') }}">Contacto y Ubicación</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Abasto Restaurante — Todos los derechos reservados.</p>
    </footer>

</body>
</html>