<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control border border-secondary" id="titulo" name="titulo" placeholder="Titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control border border-secondary" id="descricao" name="descricao"  placeholder="Descrição" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
</div>
<div class="form-group">
    <label for="texto">Sobre o curso</label>
    <textarea type="text" class="form-control border border-secondary" id="texto" name="texto" placeholder="Escreva sobre o curso" value="{{isset($registro->texto) ? $registro->texto : ''}}"></textarea>
</div>
<div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control border border-secondary" id="valor" placeholder="Valor" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
</div>
<div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="imagem">
</div>
@if(isset($registro->imagem))
<div>
    <img width="150" src="{{asset($registro->imagem)}}" />
</div>
@endif
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}} value="true">
    <label class="custom-control-label" for="customCheck1" name="publicar">Publicar?</label>
    <br><br>
</div>