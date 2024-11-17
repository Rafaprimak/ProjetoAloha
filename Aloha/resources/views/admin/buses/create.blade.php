<!-- resources/views/admin/buses/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Novo Ônibus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
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
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</body>
</html>