@extends('layout.site')
@section('titulo', 'Cursos')
@section('conteudo')

<div class="menu-curso">
    <ul class="nav justify-content-end">
        <div class="titulo-curso">
            <h3 class="text-dark">Cursos</h3>
        </div>
        <li class="nav-item">
            <a href="{{route('admin.cursos.adicionar')}}"><i class="fa fa-plus-square-o fa-2x" aria-hidden="true"></i></a>
        </li>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 border border-secondary" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
        </form>
    </ul>
</div>
<div class="tabela">
    <table class="table table-hover text-white">
        <thead>
            <tr>
                <th class="titulo-table" scope="col">Id</th>
                <th class="titulo-table" scope="col">Título</th>
                <th class="titulo-table" scope="col">Decrição</th>
                <th class="titulo-table" scope="col">Imagem</th>
                <th class="titulo-table" scope="col">Publicado</th>
                <th class="titulo-table" scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
                <tr>
                    <th class="item-table" scope="row">{{$registro->id}}</th>
                    <td class="item-table">{{$registro->titulo}}</td>
                    <td class="item-table">{{$registro->descricao}}</td>
                    <td class="item-table"> <img height="60" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
                    <td class="item-table">{{$registro->publicado}}</td>
                    <td class="item-table">
                        <div>
                            <a href="{{route('admin.cursos.deletar',$registro->id)}}"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                            <a href="{{route('admin.cursos.editar',$registro->id)}}"><i class="fa fa-refresh fa-2x" aria-hidden="true"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
    
</div>
@endsection