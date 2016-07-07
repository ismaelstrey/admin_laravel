

<div class="col-lg-12">

    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('nome') }}</small>
    </div>
 <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        {!! Form::label('imagem', 'Imagem') !!}
        {!! Form::file('imagem', ['class' => 'form-control',]) !!}

        <small class="text-danger">{{ $errors->first('nome') }}</small>
    </div>
    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
        {!! Form::label('descricao', 'Descrição') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('descricao') }}</small>
    </div>

    <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::text('tags', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('tags') }}</small>
    </div>

    <div class="form-group{{ $errors->has('postagen') ? ' has-error' : '' }}">
        {!! Form::label('postagen', 'Postagen') !!}
        {!! Form::textarea('postagen', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('postagen') }}</small>
    </div>

    <div class="btn-group pull-right">
        {!! Form::reset($reset, ['class' => 'btn btn-warning']) !!}
        {!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
    </div>
</div>