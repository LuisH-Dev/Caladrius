<!DOCTYPE html>
<html>
<head>
    <title>Atores</title>
</head>
<body>
    <h1>Atores</h1>

    <ul>
        @foreach($atores as $ator)
            <li>{{ $ator->nome }}</li>
            <li>{{ $ator->data_nascimento }}</li>
        @endforeach
    </ul>
</body>
</html>
