<!-- View Perfil -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <main class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h1>Perfil do Utilizador</h1>
            <p class="card-text"><strong>Nome:</strong> {{ $nome }}</p>
            @if ($ano === 2)
                <p class="alert alert-info">Está no último ano do CTeSP.</p>
            @endif
            <p class="card-text"><strong>Curso:</strong> {{ $curso }}</p>
            <p class="h5"><strong>Interesses: ({{ count($interesses ?? []) }})</strong></p>
            <ul class= "list-group list-group-flush">
                @foreach ($interesses as $interesse)
                    <li class="list-group-item">{{ $interesse }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
