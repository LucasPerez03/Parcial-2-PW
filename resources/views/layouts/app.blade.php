<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abasto Restaurante - @yield('titulo', 'Cocina con Historia')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&family=Lora:ital,wght@0,400;0,600;1,400&family=Playfair+Display:wght@600;800&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <header>
        <h1>Abasto Restaurante</h1>
        <nav>
            <a href="{{ route('paginas.inicio') }}">Inicio</a>
            <a href="{{ route('paginas.menu') }}">Menú Histórico</a>
            <a href="{{ route('reservas.index') }}">Listado de Reservas</a>
            <a href="{{ route('reservas.create') }}">Reservar Mesa</a>
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