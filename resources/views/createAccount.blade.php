
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New account</title>
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
        input{
            text-align: center;
        }
    </style>
    <form method="POST" action="{{route('usuario.store')}}" >
        @csrf
        <br><br> <br><br>
        <div style="background-color:rgb(140, 211, 211, 0.5); width: 25%; height: 400px; border-radius:25px; margin:0 auto">
            <br>
        <h1 style="text-align: center; color: white">Criar conta</h1>
        <div > <br>
            <input style="display:block; margin: 0 auto" name="login" type="string" style="margin-top: 50px" class="form-group" placeholder="Login"> <br><br>
            <input style="display:block; margin: 0 auto" name="senha" type="password" class="form-group" placeholder="Senha"><br> <br>
            <input style="display:block; margin: 0 auto" name="email" type="email" class="form-group" placeholder="Email">   <br><br>
        </div>
        <input style="display:block; margin: 0 auto" type="submit" value="Salvar">
    </div>
    </form>
</body>
</html>