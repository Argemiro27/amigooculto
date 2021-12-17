<!-- MEU GRUPO -->
@extends('logged.layout')
@section('content')
<body>
    <table>
    <thead>
        <tr>
        <th>Nome do grupo</th>
        <th>Nomes</th>
        <th>Emails</th>
        <th>Valor máximo</th>
        <th>Valor mínimo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grupos as $grupo)
        <tr>
        <td>{{$grupo->nomegrupo}}</td>
        <td>{{$grupo->nome}}</td>
        <td>{{$grupo->email}}</td>
        <td>{{$grupo->valormax}}</td>
        <td>{{$grupo->valormin}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <a href="{{url('meugrupo/revelar')}}" class="button">Revelar meu amigo oculto</a>
    <a href="{{url('meuperfil')}}" class="button">Voltar para a página de perfil</a>
</body>
@endsection