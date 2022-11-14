<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body style="background-image: url('img/back.jpg')">
    <form method="POST" action="{{route('deslogar')}}">
        @csrf <!-- {{ csrf_field() }} -->
    <a style="position: flex; margin-left: 15px; margin-top: 25px" class="btn btn-dark" href="index">Index</a>
    <a style="position: flex;  margin-top: 25px" class="btn btn-dark" href="create">Create</a>
    @if ($logado == false)
    <a style="position: flex;  margin-top: 25px" class="btn btn-dark" href="login">Login</a>
    @endif
    @if ($logado == true)
    <button type="submit" style="position: flex;  margin-top: 25px" class="btn btn-dark">Logout</button>
    @endif
    </form>
    <style>

    </style>
    <form method="POST" action="{{route('login.store')}}">
        @csrf
        <br><br> <br> <br>
        <h1 style="color: red; text-align:center">{{$mensagemFalha}}</h1>


        <div style="background-color: rgba(107, 108, 187, 0.4); width:25%; height: 400px; margin: 0 auto; border-radius:50px;">
                <br><br>
                <h3 style="color:white; text-align: center">Faça o login</h3><br><br><br>
                <input style="display:block; margin: 0 auto; text-align: center; border-radius:20px" name="login" type="text"placeholder="Login..."> <br>
                <input style="display:block; margin: 0 auto; text-align: center; border-radius:20px" name="senha" type="text" placeholder="Senha...">
                <br><br>

                <input type="submit" style="width: 100px; border-radius: 25px; margin: 0 auto; display:block;" class="btn btn-secondary" value="entrar">
            </div>

        </div>

    </form>

</body>
</html>