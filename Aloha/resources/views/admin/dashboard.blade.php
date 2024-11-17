<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Bem-vindo ao Dashboard do Admin</h1>

    <!-- Bus CRUD Operations -->

    <!-- Display Bus List -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Ônibus</th>
                <th>Status</th>
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
                        <select name="status" onchange="this.form.submit()">
                            <option value="Ativo" {{ $bus->status == 'Ativo' ? 'selected' : '' }}>Ativo</option>
                            <option value="Inativo" {{ $bus->status == 'Inativo' ? 'selected' : '' }}>Inativo</option>
                            <option value="Em Viagem" {{ $bus->status == 'Em Viagem' ? 'selected' : '' }}>Em Viagem</option>
                            <option value="Na Garagem" {{ $bus->status == 'Na Garagem' ? 'selected' : '' }}>Na Garagem</option>
                        </select>
                    </form>
                </td>
                <td>
                    <!-- Ações -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>