<?php $data = date("d/m/Y")?>
<div class="form-group">
<div class="col-lg-2"></div>

<div class="col-lg-8">
<div class="row">
<div class="col-lg-4">
{!! Form::label('data_atual', 'Data de Cadastro', ['class'=>'label-control']) !!}
{!! Form::text('data_atual',$data ,['disabled'=>'disabled','class'=>'form-control']) !!}
</div>
<div class="col-lg-4">
{!! Form::label('data_expiracao', 'Data de Expiração', ['class'=>'label-control']) !!}
{!! Form::date('data_expiracao',NULL,['class'=>'form-control']) !!}
</div>
<div class="col-lg-4">
{!! Form::label('local', 'Local', ['class'=>'label-control']) !!}
{!! Form::select('local', ['1'=>'Vip','2'=>'Normal'], NULL, ['class'=>'form-control']) !!}
</div>
</div>
{!! Form::label('nome', 'Nome', ['class'=>'label-control']) !!}
{!! Form::text('nome', NULL, ['class'=>'form-control']) !!}

{!! Form::label('link', 'Link', ['class'=>'label-control']) !!}
{!! Form::text('link', NULL, ['class'=>'form-control']) !!}

{!! Form::label('anuncio', 'Anuncio', ['class'=>'label-control']) !!}
{!! Form::textarea('anuncio', NULL, ['class'=>'form-control']) !!}
<hr>
{!! Form::submit('Cadastrar', ['class'=>'btn btn-info pull-right']) !!}
{!! Form::reset(' Cancelar ', ['class'=>'btn btn-danger pull-right']) !!}
</div>
<div class="col-lg-2"></div>
</div>