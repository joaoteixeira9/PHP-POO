<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg p-4 nav-underline mb-3 w-100 bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="/"><i class="bi bi-body-text"></i> TechEvents</a>
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light rounded" href="/">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light rounded" href="/events/create">Criar evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light rounded" href="/events/sing">Entrar/Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light rounded" href="/contact">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>João Teixeira &copy; 2025</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>