<!-- REVELAR AMIGO SECRETO -->
@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="py-4 text-center">
        </div>
        <div class="row">
                <div class="col-md-12">
                    <h2 class="card-title">Sorteio realizado</h2>
                    <p class="card-text">
                        <h4>Seu amigo secreto é:  {{$amigo->name}}</h4>
                        <h4>Dica de presente: {{$amigo->dicaPresente}}</h4>
                    </p>
                    <a href="/meugrupo" class="btn btn-primary btn-sm" role="button">Voltar</a>
                </div>
        </div>
    </div>
</div>
@endsection