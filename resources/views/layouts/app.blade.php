<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelMind @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logopng.png') }}" alt="PixelMind Logo" style="height: 40px;">
            <span>PixelMind</span>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('conocenos') }}">
                        <i class="fas fa-users"></i> Conócenos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios') }}">
                        <i class="fas fa-cogs"></i> Servicios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">
                        <i class="fas fa-envelope"></i> Contacto
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="text-center mt-4 py-3">
    <p>© 2024 PixelMind.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>