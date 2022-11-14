<!DOCTYPE html>
<html lang="en" onclick="pular()">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
    margin: 0;
    padding: 0;
}
#game{
    width: 100%;
    height: 400px;
    border: 1px solid red;
    margin: 0 auto;
}

#personagem{
    width: 400px;
    height: 120px;
    background-image: url('/img/peixe.png');
    position: relative;
    top: 280px;
}


#quadrado{
    width: 20px;
    height: 80px;
    background-color: red;
    position: relative;
    top: 200px;
    left: 1900px;
    animation: quadrado 5s infinite linear;
}

.animar{
    animation: personagem 5000ms infinite;
}

@keyframes quadrado{
    0%{left:1900px;}
    100%{left:-40px;}
}
@keyframes personagem {
    0%{top:300px;}
    10%{top:0px;}
    40%{top:150px;}
    100%{top:300px;}
}

    </style>


    <title>Game</title>
</head>
<body style="background-image: url('img/back.jpg')">
    <form method="POST" action="{{route('deslogar')}}">
        @csrf <!-- {{ csrf_field() }} -->
    <a style="position: flex; margin-left: 15px; margin-top: 25px" class="btn btn-dark" href="index">Index</a>
    <a style="position: flex;  margin-top: 25px" class="btn btn-dark" href="create">Create</a>

        <button type="submit" style="position: flex;  margin-top: 25px" class="btn btn-dark">Logout</button>

    </form>
    <br><br><br><br><br><br><br><br><br><br>
    <div id="game">
        <div id="personagem">

        </div>
        <div id="quadrado">

        </div>
    </div>
    <script>let personagem = document.querySelector('#personagem')
        let quadrado = document.querySelector('#quadrado')
        
        function pular(){
            if(personagem.classList != 'animar'){
                personagem.classList.add('animar')
            }
        
            setTimeout(function(){
                personagem.classList.remove('animar')
            }, 500)
        }</script>
</body>
</html>