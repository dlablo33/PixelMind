<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelMind - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('conocenos') }}">Conócenos</a>
            <a href="{{ route('servicios') }}">Servicios</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2024 PixelMind. Building Digital Visions.</p>
    </footer>
</body>
</html>
