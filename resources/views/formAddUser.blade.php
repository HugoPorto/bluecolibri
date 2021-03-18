<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('us.store')}}" method="post">
        @csrf
        <label for="Nome Usuário"></label>
        <input type="text" name="name" id="">

        <label for="E-mail"></label>
        <input type="email" name="email" id="">

        <label for="Senha"></label>
        <input type="password" name="password" id="">

        <input type="submit" value="Cadastrar Usuário">
    </form>
</body>
</html>