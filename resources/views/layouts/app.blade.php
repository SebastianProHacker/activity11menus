<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Menús</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .active {
            font-weight: bold;
            color: #2563eb !important;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px;
            background-color: #f8f9fa;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse">
               <!-- ... (código anterior igual) ... -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Menú Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('fotos') ? 'active' : '' }}" href="{{ route('fotos') }}">Fotos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
<!-- ... (código posterior igual) ... -->
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>

    <footer class="mt-auto">
        Actividad realizada por Sebastian Navarro
    </footer>
</body>
</html>