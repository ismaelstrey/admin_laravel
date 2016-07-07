
<div class="col-lg-12">

    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('nome') }}</small>
    </div>

    <div class="form-group{{ $errors->has('velocidade') ? ' has-error' : '' }}">
        {!! Form::label('velocidade', 'Velocidade') !!}
        {!! Form::number('velocidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('velocidade') }}</small>
    </div>

       <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
        {!! Form::label('img', 'Imagen') !!}
        {!! Form::file('img', ['class'=>'form-control input-sm m-bot15']) !!}
        <small class="text-danger">{{ $errors->first('img') }}</small>
    </div>

    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
        {!! Form::label('descricao', 'Descrição') !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('descricao') }}</small>
    </div>


    <div class="btn-group pull-right">
        {!! Form::reset($reset, ['class' => 'btn btn-warning']) !!}
        {!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
    </div>
</div>