<!DOCTYPE html>
<html>
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
            <div style="background-color: white; border-radius: 12px;">
                <img src="{{ asset('img/LOGO1.png') }}" alt="Logo" style="height: 60px;">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('public.home') }}" style="font-size: 1.1rem; margin-right: 15px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('locais') }}" style="font-size: 1.1rem; margin-right: 15px;">Locais</a>
                </li>
                @auth
                    @if(auth()->user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('admin.dashboard') }}" style="font-size: 1.1rem; margin-right: 15px;">Dashboard de Administrador</a>
                        </li>
                    @endif
                @endauth
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}" style="font-size: 1.1rem; margin-left: 15px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}" style="font-size: 1.1rem; margin-left: 15px;">Registrar</a>
                    </li>
                @else
                    <li class="nav-item">
                        <span class="nav-link text-white" style="font-size: 1.1rem;">{{ auth()->user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                        style="font-size: 1.1rem; margin-left: 15px;">
                            Sign-Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    </header>


<main>

<div class="container mt-4 " style="text-align: justify;">
    <h1 class="text-center">Locais em {{ $pais->nome }}</h1>
    <div class="row">
        @foreach($locais as $local)
            <div class="col-md-6 mb-4" style="text-align: justify">
                <div class="card">
                    <div class="card-body text-center" style="text-align: justify;">
                        <h2 class="card-title" style="color: #7c0c6e;">{{ $local->nome }}</h2>
                        <p class="card-text" style="text-align: justify">{{ $local->descricao }}</p>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</main>

<footer class="bg-light text-center py-5">
    <div class="container">
        <div class="row">
            <!-- Aloha Turismo -->
            <div class="col-md-4">
                <h5>Aloha Turismo</h5>
                <ul class="list-unstyled">
                    <li>Sobre Nós</li>
                    <li>Fale Conosco</li>
                    <li>Onde Estamos</li>
                </ul>
            </div>
            <!-- Central de Atendimento -->
            <div class="col-md-4">
                <h5>Central de Atendimento</h5>
                <ul class="list-unstyled">
                    <li>Suporte</li>
                    <li>Horário de Atendimento</li>
                    <li>Central de Ajuda</li>
                </ul>
            </div>
            <!-- Termos -->
            <div class="col-md-4">
                <h5>Termos</h5>
                <ul class="list-unstyled">
                    <li>Condição de Uso do Site</li>
                    <li>Política de Privacidade</li>
                    <li>Condições Gerais</li>
                </ul>
            </div>
        </div>
        <hr>
        <!-- Formas de Pagamento -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h5>Formas de Pagamento</h5>
                <img src="{{ asset('img/pix.png') }}" alt="Pix" style="width:50px; margin-right:10px;">
                <img src="{{ asset('img/cartaocredito.png') }}" alt="Cartão" style="width:50px;">
            </div>
        </div>
        <!-- Redes Sociais -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h5>Siga-nos nas redes sociais</h5>
                <a href="#" class="mr-3">
                    <img src="{{ asset('img/instagram_icon.png') }}" alt="Instagram" style="width:40px;">
                </a>
                <a href="#">
                    <img src="{{ asset('img/facebook-logo-1-2.png') }}" alt="Facebook" style="width:40px;">
                </a>
            </div>
        </div>
        <hr>
        <p>&copy; 2024 Aloha Turismo. Todos os direitos reservados.</p>
    </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
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
    .card-title {
        font-size: 1.5rem;
    }
    .img-thumbnail {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>
