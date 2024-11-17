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
                <div style="background-color: white; border-radius: 12px">
                    <img src="{{ asset('img/LOGO1.png') }}" alt="Logo" style="height: 60px;">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('public.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('locais') }}">Locais</a>
                </li>
                    @auth
                        @if(auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Dashboard de Administrador</a>
                            </li>
                        @endif
                    @endauth
                </ul>
                <ul class="navbar-nav ml-auto">
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


    <main style="display: flex; height: 100vh;">
    <background-image>
        <img src="{{ asset('img/busbg.png') }}" alt="Logo" style="height: 100vh; object-fit: cover; opacity: 0.1;">
    </background-image>
    <div class="right-side" style="flex: 1; display: flex; align-items: center; justify-content: center;">
        <div class="form-container" style="width: 100%; max-width: 400px; padding: 20px; background: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">
            <h1 style="text-align: center;">Login</h1>
            <form method="POST" action="{{ route('login') }}" style="display: flex; flex-direction: column;">
                @csrf
                <label for="email" style="margin-bottom: 5px;">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required style="margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="password" style="margin-bottom: 5px;">Senha:</label>
                <input type="password" id="password" name="password" required style="margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                
                <button type="submit" style="padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Entrar</button>
            </form>
            <div class="text-center mt-4" style="margin-top: 20px;">
                <p>Não possui uma conta?</p>
                <a href="{{ route('register') }}" class="btn btn-secondary" style="color: #007bff; text-decoration: none;">Registrar</a>
            </div>

            @if ($errors->any())
                <div style="color:red; margin-top: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</main>

<footer class="bg-light text-center py-3 fixed-bottom">
    <p>&copy; 2023 Sua Empresa. Todos os direitos reservados.</p>
</footer>


    <footer class="bg-light text-center py-3 fixed-bottom">
        <p>&copy; 2023 Sua Empresa. Todos os direitos reservados.</p>
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
        main {
            flex: 1;
            background-image: url('{{ asset('img/backgroundrio.jpg') }}');
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat;
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
    </style>
</body>
</html>
</body>
</html>