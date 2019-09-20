@extends('layout.site')
@section('titulo', 'Adicionar Curso')
@section('conteudo')
<div class="card text-white">
    <div class="card-add">
        <form class="formulario" action="{{route('admin.cursos.salvar')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('admin.cursos._form')
            <button class="btn btn-light" type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection