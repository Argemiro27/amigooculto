<!-- CRIAR JOGO -->
@extends('adm.layout')
@section('content')
@if(count($errors) > 0)
<ul class="validator">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form method="POST" action="{{url('criarjogo')}}">
  @csrf
  @method('POST')
  <a href="/meugrupo"><button type="submit" class="button">SORTEAR NOMES</button></a>
  <div class="row">
    <label class="col-2" for="Nome do grupo">Nome do grupo</label>
    <input type="test" name="Nome do grupo" id="nomegrupo" class="col-5" value="{{ old('nomegrupo') }}" />
  </div>
  <div class="row">
    <label class="col-2" for="Data da revelação">Data da revelação</label>
    <input type="test" name="Data da revelação" id="datarevelacao" class="col-5" value="{{ old('datarevelacao') }}" />
  </div>
  <div class="row">
    <label class="col-2" for="Valor máximo do presente">Valor máximo do presente</label>
    <input type="test" name="Valor máximo do presente" id="valormax" class="col-5" value="{{ old('valormax') }}" />
  </div>
  <div class="row">
    <label class="col-2" for="Valor mínimo do presente">Valor mínimo do presente</label>
    <input type="test" name="Valor mínimo do presente" id="valormin" class="col-5" value="{{ old('valormin') }}" />
  </div>
  <br></br>
  <div class="row">
    <h4>Adicione o nome e e-mail do participante:</h4>
    <label class="col-2" for="Nome">Nome</label>
    <input type="test" name="Nome" id="nome" class="col-5" value="{{ old('nome') }}" />
  </div>  
  <div class="row">
    <label class="col-2" for="E-mail">E-mail</label>
    <input type="test" name="E-mail" id="email" class="col-5" value="{{ old('email') }}" />
  </div>
  <div class="form-group">
    <label for="dicaPresente">Uma dica do que o participante quer ganhar</label>
    <input type="text" class="form-control" name="dicaPresente" id="dicaPresenbte" value="{{$dados->dicaPresente}}">
  </div>
</form>

@endsection