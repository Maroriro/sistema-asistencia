<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Sistema Institucional')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">EET N° 2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/asistencia">Asistencia</a></li>
                    <li class="nav-item"><a class="nav-link" href="/personas">Personas</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Organización</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('cursos.index') }}">Cursos</a></li>
                            <li><a class="dropdown-item" href="#">Divisiones</a></li>
                            <li><a class="dropdown-item" href="#">Especialidades</a></li>
                            <li><a class="dropdown-item" href="#">Ámbitos</a></li>
                            <li><a class="dropdown-item" href="#">Turnos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/reportes">Reportes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('contenido')
    </main>

    <footer class="text-center text-muted py-3 mt-5 border-top">
        EET N° 2 "Prof. Jesús Raúl Salazar" — Sistema de Asistencia
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>