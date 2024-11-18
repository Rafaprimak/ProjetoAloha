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

    <main class="container mt-4">
        <h1 class="text-center" style="color: black;">Realizar Sonhos é o Nosso Destino</h1>

        <p class="text-center" style="color: #555;">Seja bem-vindo ao site da Aloha Turismo</p>

        <div class="carousel-container p-4 my-4 bg-white">
            <h2 class="text-center mb-4" style="color: black;">DESTINOS</h2>
            <div id="destinosCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-wrap="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino1.jpg') }}" class="card-img-top" alt="Destino 1"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Aparecida do Norte</h5>
                                        <p class="card-text" style="color: #555;">A Cidade de Aparecida está situada no Vale do Paraíba, interior de São Paulo e é destaque no turismo religioso mundial recebendo mais de 12 milhões de turistas e peregrinos todos os anos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino2.jpg') }}" class="card-img-top" alt="Destino 2"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Buenos Aires</h5>
                                        <p class="card-text" style="color: #555;">Buenos Aires tem uma energia impossível de ignorar. A cidade oferece comidas e bebidas como Malbec e carnes incrivelmente boas, além de fazer você virar a noite em boates e salões de dança.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino3.jpg') }}" class="card-img-top" alt="Destino 3"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Gramado</h5>
                                        <p class="card-text" style="color: #555;">A pequena cidade brasileira de Gramado é um refúgio pitoresco e verdejante que abriga algumas surpresas encantadoras.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino4.jpg') }}" class="card-img-top" alt="Destino 4"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Rio de Janeiro</h5>
                                        <p class="card-text" style="color: #555;">Com belas praias, montanhas espetaculares e a trilha sonora de samba e bossa nova, o Rio de Janeiro encanta os visitantes. A famosa praia de Ipanema continua sendo o lugar perfeito para caminhar, pegar um bronzeado e desfilar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino5.jpg') }}" class="card-img-top" alt="Destino 5"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">São Paulo</h5>
                                        <p class="card-text" style="color: #555;">A culinária e a arte de São Paulo, a maior cidade da América do Sul, é tão multinacional quanto sua diversificada população de mais de 11 milhões de habitantes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino6.jpg') }}" class="card-img-top" alt="Destino 6"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Natal</h5>
                                        <p class="card-text" style="color: #555;">Portal para as deslumbrantes praias do Rio Grande do Norte, a cidade de Natal fica no alto da costa atlântica do Brasil, na foz do Rio Potengi.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Repetir as primeiras duas imagens para completar o carrossel -->
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino1.jpg') }}" class="card-img-top" alt="Destino 1"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Aparecida do Norte</h5>
                                        <p class="card-text" style="color: #555;">A Cidade de Aparecida está situada no Vale do Paraíba, interior de São Paulo e é destaque no turismo religioso mundial recebendo mais de 12 milhões de turistas e peregrinos todos os anos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/destino2.jpg') }}" class="card-img-top" alt="Destino 2"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Buenos Aires</h5>
                                        <p class="card-text" style="color: #555;">Buenos Aires tem uma energia impossível de ignorar. A cidade oferece comidas e bebidas como Malbec e carnes incrivelmente boas, além de fazer você virar a noite em boates e salões de dança.</p>
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

        <!-- Pacotes de Viagens -->
        <div class="packages-container p-4 my-4 bg-white">
            <h2 class="text-center mb-4" style="color: black;">PACOTES DE VIAGENS</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/pacote1.jpg') }}" class="card-img-top" alt="Pacote 1"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: black;">Visita ao maracanã</h5>
                            <p class="card-text" style="color: #555;">O maior estádio do Rio de Janeiro, este pacote inclui uma visita completa ao estádio, conhecendo todo o interior dele, como cabines especiais, vestiário dos jogadores, sala de trófeus e muito mais!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/pacote2.jpg') }}" class="card-img-top" alt="Pacote 2"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: black;">Resort All Inclusive em Natal</h5>
                            <p class="card-text" style="color: #555;">Passe suas férias neste Resort 5 estrelas com tudo incluso na cidade de Natal, muitas piscinas, recreação para crianças e águas quentes!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <a class="navbar-brand" href="{{ route('contatos') }}"><img src="{{ asset('img/pacote3.jpg') }}" class="card-img-top" alt="Pacote 3"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="color: black;">Visita a pontos Turisticos Aparecida</h5>
                            <p class="card-text" style="color: #555;">Conheça todos os pontos turisticos da cidade de Aparecida do Norte, incluindo passeio de bondinho, caminhada da passarela e muito mais!.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nova Div para Google Maps -->
        <div class="map-container p-4 my-4 bg-white">
            <h2 class="text-center mb-4" style="color: black;">Nossa Localização</h2>
            <div class="d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.356497418815!2d-51.479116223735495!3d-25.359365930102413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef37e5f0d42345%3A0x1c341796f1339403!2sALOHA%20TRANSPORTES%20E%20TURISMO.!5e0!3m2!1spt-BR!2sbr!4v1731346336937!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="contact-form-container p-4 my-4 bg-light rounded">
                    <h2 class="text-center mb-4" style="color: black;">Assine nossa newsletter e receba as ofertas da Aloha Turismo</h2>
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control" placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="Seu Email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Assinar</button>
                    </form>

                    @if(isset($errors) && $errors->any())
                        <div class="mt-3">
                            <ul class="text-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="mt-3 text-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

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
        .btn{
            background-color: #7c0c6e;
            border: none;
        }
        .btn:hover{
            background-color: #b531a2;
        }
    </style>
</body>
</html>