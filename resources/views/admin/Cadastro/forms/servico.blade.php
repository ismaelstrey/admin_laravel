<div class="form-group">
	<div class="col-lg-12">
	<label for="nome">Título</label>
	<input class="form-control m-bot15" type="text" name="nome" placeholder="Nome">
	<label for="link">Descrição</label>
	<input class="form-control m-bot15" type="text" name="descricao" placeholder="Descrição">
	<label for="link">Tags</label>
	<input class="form-control m-bot15" type="text" name="tags" placeholder="Tags">		
	<label for="link">Icone</label>
	<input class="form-control m-bot15" type="text" name="icone" placeholder="Icone">	
	<label for="descricao">Serviço</label>
	<textarea name="servico" class="form-control ckeditor" rows="10"></textarea>
	<hr>	
	{!! Form::submit(' Cadastrar ', ['class'=>'btn btn-success pull-right']) !!}
	{!! Form::reset(' Cancelar ', ['class'=>'btn btn-danger pull-right']) !!}
	</div>
</div>