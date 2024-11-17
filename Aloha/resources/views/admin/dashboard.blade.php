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

    <h1>Bem-vindo ao Dashboard do Admin</h1>

    <!-- Add Bus Button -->
    <a href="{{ route('buses.create') }}" class="btn btn-primary mb-3">Adicionar Novo Ônibus</a>

    <!-- Bus CRUD Operations -->

    <!-- Display Bus List -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Ônibus</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buses as $bus)
            <tr>
                <td>{{ $bus->id }}</td>
                <td>{{ $bus->name }}</td>
                <td>
                    <form action="{{ route('buses.updateStatus', $bus) }}" method="POST">
                        @csrf
                        <select name="status" onchange="this.form.submit()" class="form-control">
                            <option value="Ativo" {{ $bus->status == 'Ativo' ? 'selected' : '' }}>Ativo</option>
                            <option value="Inativo" {{ $bus->status == 'Inativo' ? 'selected' : '' }}>Inativo</option>
                            <option value="Em Viagem" {{ $bus->status == 'Em Viagem' ? 'selected' : '' }}>Em Viagem</option>
                            <option value="Na Garagem" {{ $bus->status == 'Na Garagem' ? 'selected' : '' }}>Na Garagem</option>
                        </select>
                    </form>
                </td>
                <td>
                    @if($bus->status == 'Inativo')
                        <form action="{{ route('buses.destroy', $bus) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este ônibus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="map-container p-4 my-4 bg-white">
        <h2 class="text-center mb-4" style="color: #7c0c6e;">Localização Ônibus</h2>
        <div class="d-flex justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.356497418815!2d-51.479116223735495!3d-25.359365930102413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef37e5f0d42345%3A0x1c341796f1339403!2sALOHA%20TRANSPORTES%20E%20TURISMO.!5e0!3m2!1spt-BR!2sbr!4v1731346336937!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
</html>