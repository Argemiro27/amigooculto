<!-- PÁGINA INICIAL - PERFIL -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SECRET FRIEND</title>
  <link rel="stylesheet" href="{{asset('css/layout.css')}}" />
</head>
<body>
  <main>
    <h2>Seu perfil</h2>
    <br></br>
    <h3>Olá, {{$user->name}}!</h3>
    <br></br>
    <div class="button">
        <br>
        <a href="/criarjogo">CRIAR JOGO</a>
    </div>
    <div class="buttontext">
        <br>
        <h3>Jogos que você participa</h3>
    </div>
    <br></br>
    <div class="amigosdebar">
        <h4 >AMIGOS DO BAR.<h4><br></br>
        <h4>Participantes: Junim, Clebim, Rossim, Zezim, Dudu</h4>
    </div>
    <div class="amigosdaroca">
        <h4 >AMIGOS DA ROÇA.<h4><br></br>
        <h4>Participantes: Jão, Zé, Gardinho, Regis</h4>
    </div>    
    <div class="buttontext">
        <br>
        <h3>Jogos que você criou</h3>
    </div> 
    <br> 
    <h3>Você não criou nenhum jogo ainda!</h3>
  </main>
</body>

</html>