<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7c0c6e;">
            <a class="navbar-brand" href="{{ route('public.home') }}">
                <img src="{{ asset('img/LOGO1.png') }}" alt="Logo" style="height: 80px;">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('public.home') }}">Home</a>
                    </li>
                    @auth
                        @if(auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Dashboard de Administrador</a>
                            </li>
                        @endif
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Locais</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">Registrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <h1 class="text-center" style="color: #7c0c6e;">Realizar sonhos é o nosso DESTINO!</h1>

        <p class="text-center" style="color: #555;">Seja bem-vindo</p>

        <div class="carousel-container p-4 my-4 bg-white">
            <h2 class="text-center mb-4" style="color: #7c0c6e;">Destinos</h2>
            <div id="destinosCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-wrap="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino1.jpg') }}" class="card-img-top" alt="Destino 1">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 1</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 1.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino2.jpg') }}" class="card-img-top" alt="Destino 2">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 2</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 2.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino3.jpg') }}" class="card-img-top" alt="Destino 3">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 3</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 3.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino4.jpg') }}" class="card-img-top" alt="Destino 4">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 4</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 4.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino5.jpg') }}" class="card-img-top" alt="Destino 5">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 5</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 5.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino6.jpg') }}" class="card-img-top" alt="Destino 6">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 6</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 6.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Repetir as primeiras duas imagens para completar o carrossel -->
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino1.jpg') }}" class="card-img-top" alt="Destino 1">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 1</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 1.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('img/destino2.jpg') }}" class="card-img-top" alt="Destino 2">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #7c0c6e;">Destino 2</h5>
                                        <p class="card-text" style="color: #555;">Descrição do destino 2.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#destinosCarousel" role="button" data-slide="prev" style="width: 5%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#destinosCarousel" role="button" data-slide="next" style="width: 5%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center py-3">
        <p>&copy; 2023 Sua Empresa. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .carousel-container {
            background-color: #ffffff; /* Fundo branco */
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.2s, filter 0.2s;
        }
        .card-img-top:hover {
            transform: scale(1.05);
            filter: brightness(0.8);
        }
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        .carousel-item {
            transition: transform 1s ease, opacity 1s ease;
        }
    </style>
</body>
</html>