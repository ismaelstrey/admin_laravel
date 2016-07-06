
<div class="col-lg-12">

    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        {!! Form::label('nome', 'Nome') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('nome') }}</small>
    </div>

    <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
        {!! Form::label('link', 'Link') !!}
        {!! Form::text('link', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('link') }}</small>
    </div>

    <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
        {!! Form::label('img', 'Imagen') !!}
        {!! Form::file('img', ['class' => 'form-control',]) !!}
        <small class="text-danger">{{ $errors->first('nome') }}</small>
    </div>

    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
        {!! Form::label('descricao', 'Descrição') !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('descricao') }}</small>
    </div>


    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div>
</div>