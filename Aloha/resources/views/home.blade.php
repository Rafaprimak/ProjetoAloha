<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
</head>
<body>
    <h1>Página Inicial</h1>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Deslogar</button>

</form>
    <div>
        <a href="{{ route('login') }}">
            <button>Login</button>
        </a>
        @auth
            @if(auth()->user()->is_admin)
                <a href="{{ route('admin.dashboard') }}">
                    <button>Dashboard de Administrador</button>
                </a>
            @endif
        @endauth
        <a href="{{ route('register') }}">
            <button>Cadastro</button>
        </a>
    </div>
    <h2>Opções de Viagens</h2>
    <ul>
        <li>Viagem 1: Descrição da viagem 1</li>
        <li>Viagem 2: Descrição da viagem 2</li>
        <li>Viagem 3: Descrição da viagem 3</li>
        <!-- Adicione mais opções de viagens conforme necessário -->
    </ul>
</body>
</html>