<!-- resources/views/admin/buses/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Novo Ônibus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container {
            background-color: #e6e8e3;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
            margin-top: 120px;
        }
        h1 {
            color: black;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-success {
            background-color: #7c0c6e;
            border-color: #7c0c6e;
        }
        .btn-success:hover {
            background-color: #b531a2;
            border-color: #b531a2;
        }
    </style>
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
    <div class="container" >
        <h1>Adicionar Novo Ônibus</h1>
        <form action="{{ route('buses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome do Ônibus</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                    <option value="Em Viagem">Em Viagem</option>
                    <option value="Na Garagem">Na Garagem</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-block">Salvar</button>
        </form>
    </div>


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

</style>
</body>
</html>