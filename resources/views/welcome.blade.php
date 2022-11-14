<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
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

</body>
</html>