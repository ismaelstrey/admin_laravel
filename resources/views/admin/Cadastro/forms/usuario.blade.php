<div class="form-group">
<div class="col-lg-2"></div>
<div class="col-lg-8">
<label for="nome">Nome</label>
<input class="form-control m-bot15" type="text" name="name" placeholder="Nome">
<label for="email">Email</label>
<input class="form-control m-bot15" type="text" name="email" placeholder="Email">
<label for="senha">Senha</label>
<input class="form-control m-bot15" type="password" name="password" placeholder="********">
<label for="tipo">Tipo</label>
<select class="form-control m-bot15" name="tipo">
<option value="0">Admin</option>
<option value="1">Técnico</option>
<option value="2">Vendedor</option>
</select>
<hr>
{!! Form::submit(' Cadastrar ', ['class'=>'btn btn-success pull-right']) !!}
{!! Form::reset(' Cancelar ', ['class'=>'btn btn-danger pull-right']) !!}

</div>
<div class="col-lg-2"></div>
</div>