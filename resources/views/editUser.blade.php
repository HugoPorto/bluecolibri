<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('us.edit', ['user' => $user->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="Nome Usuário"></label>
        <input type="text" name="name" value="{{$user->name}}">

        <label for="E-mail"></label>
        <input type="email" name="email" value="{{$user->email}}">

        <label for="Senha"></label>
        <input type="password" name="password" value="">

        <input type="submit" value="Editar Usuário">
    </form>
</body>
</html>