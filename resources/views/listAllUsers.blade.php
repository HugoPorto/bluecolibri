<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nome</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>
                <a href="{{ route('user.show',  ['user' => $user->id ]) }}"  method="POST">
                    Ver Usuário
                </a>
                <form action="{{route('user.destroy', ['user' => $user->id ])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="user" value="{{$user->id}}">
                    <input type="submit" value="Remover">
                </form>
                <form action="{{route('user.show', ['user' => $user->id ])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user" value="{{$user->id}}">
                    <input type="submit" value="Ver">
                </form>
            </td>
        </tr>
        @endforeach()
    </table>
</body>
</html>
