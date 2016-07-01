<div class="form-group">
<div class="col-lg-2"></div>
<div class="col-lg-8">
<label for="nome">Nome</label>
<input class="form-control m-bot15" type="text" name="nome" placeholder="Nome">
<label for="link">Veloçidade</label>
<input class="form-control m-bot15" type="number" name="velocidade" placeholder="Velocidade">
<label for="img">Imagem</label>
{!! Form::file('img', ['class'=>'form-control input-sm m-bot15']) !!}

<label for="descricao">Descrição</label>
<textarea name="descricao" class="form-control ckeditor" rows="6"></textarea>
<hr>
{!! Form::submit(' Cadastrar ', ['class'=>'btn btn-success pull-right']) !!}
{!! Form::reset(' Cancelar ', ['class'=>'btn btn-danger pull-right']) !!}

</div>
<div class="col-lg-2"></div>
</div>