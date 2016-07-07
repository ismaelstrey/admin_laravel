
<div class="col-lg-12">
    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        {!! Form::label('nome', 'Título') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('nome') }}</small>
    </div>
    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
        {!! Form::label('descricao', 'Título') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('descricao') }}</small>
    </div>
    <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
        {!! Form::label('tags', 'Título') !!}
        {!! Form::text('tags', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('tags') }}</small>
    </div>
    <div class="form-group{{ $errors->has('icone') ? ' has-error' : '' }}">
        {!! Form::label('icone', 'Título') !!}
        <a href="{{ url('http://fontawesome.io/icons/') }}"> Icones</a>
        {!! Form::text('icone', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('icone') }}</small>
    </div>
    <div class="form-group{{ $errors->has('servico') ? ' has-error' : '' }}">
        {!! Form::label('servico', 'Serviço') !!}
        {!! Form::textarea('servico', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('servico') }}</small>
    </div>
    <div class="btn-group pull-right">
        {!! Form::reset($reset, ['class' => 'btn btn-warning']) !!}
        {!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
    </div>
</div>