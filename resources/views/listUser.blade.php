<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do App</title>
</head>
<body>
    <h1>User {{ $user->name}}</h1>
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
    <p>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
</body>
</html>
