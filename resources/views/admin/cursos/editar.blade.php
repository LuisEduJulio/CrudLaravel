@extends('layout.site')
@section('titulo', 'Editar Curso')
@section('conteudo')
<div class="card text-white">
    <form class="formulario" action="{{route('admin.cursos.atualizar',$registro->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.cursos._form')
        <button type="button" class="btn btn-light" type="submit">Atualizar</button>
    </form>
</div>
@endsection