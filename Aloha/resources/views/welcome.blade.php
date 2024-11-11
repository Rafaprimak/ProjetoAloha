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
                <img src="{{ asset('img/LOGO1.png') }}" alt="Logo" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
                        <a class="nav-link text-white" href="#">Locais</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">Registrar</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <span class="nav-link text-white">{{ auth()->user()->name }}</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign-Out
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <h1 class="text-center" style="color: #7c0c6e;">Página Inicial</h1>

        <p class="text-center" style="color: #555;">Seja bem-vindo ao site da sua empresa.</p>

        <div class="carousel-container p-4 my-4 bg-white">
            <h2 class="text-center mb-4" style="color: #7c0c6e;">Sonhos</h2>
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

        <!-- Nova Div para Pacotes de Viagens -->
        <div class="packages-container p-4 my-4 bg-white">
            <h2 class="text-center mb-4" style="color: #7c0c6e;">Pacotes de Viagens</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/pacote1.jpg') }}" class="card-img-top" alt="Pacote 1">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #7c0c6e;">Pacote 1</h5>
                            <p class="card-text" style="color: #555;">Descrição do pacote 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/pacote2.jpg') }}" class="card-img-top" alt="Pacote 2">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #7c0c6e;">Pacote 2</h5>
                            <p class="card-text" style="color: #555;">Descrição do pacote 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/pacote3.jpg') }}" class="card-img-top" alt="Pacote 3">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #7c0c6e;">Pacote 3</h5>
                            <p class="card-text" style="color: #555;">Descrição do pacote 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nova Div para Google Maps -->
        <div class="map-container p-4 my-4 bg-white">
            <h2 class="text-center mb-4" style="color: #7c0c6e;">Nossa Localização</h2>
            <div class="d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.356497418815!2d-51.479116223735495!3d-25.359365930102413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef37e5f0d42345%3A0x1c341796f1339403!2sALOHA%20TRANSPORTES%20E%20TURISMO.!5e0!3m2!1spt-BR!2sbr!4v1731346336937!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        .navbar-nav .nav-link {
            transition: transform 0.2s, color 0.2s;
        }
        .navbar-nav .nav-link:hover {
            transform: scale(1.1);
            color: #b531a2 !important;
        }
        .carousel-container, .packages-container, .map-container {
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
        .card-title {
            font-weight: 500;
        }
        .card-text {
            font-weight: 400;
            color: #555;
        }
    </style>
</body>
</html>