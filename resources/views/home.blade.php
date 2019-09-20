@extends('layout.site')
@section('titulo', 'Home')
@section('conteudo')

<div class="card-home text-white">
    <div class="container">
        <div class="row">
            @foreach($cursos as $curso)
                <div class="col-sm">
                    <div class="card shadow" style="width: 20rem; margin-bottom:2rem">
                        <img src="{{asset($curso->imagem) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{$curso->titulo}} </h5>
                            <p class="card-text"> {{$curso->texto}} </a>
                        </div>
                        <button type="button" class="btn btn-light" type="submit">Visualizar</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection