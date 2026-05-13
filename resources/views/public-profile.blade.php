<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Publiek profiel</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>

    <p>Favoriete ploeg: {{ $user->profile?->favorite_team ?? 'Nog niet ingevuld' }}</p>

    <p>Bio: {{ $user->profile?->bio ?? 'Nog geen bio beschikbaar' }}</p>
</body>
</html>



