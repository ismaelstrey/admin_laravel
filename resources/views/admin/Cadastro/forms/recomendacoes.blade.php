<div class="col-lg-12">
        {!! Form::hidden('id_nome', Auth::user()->id )!!}
    <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('titulo') }}</small>
    </div>
    <div class="form-group{{ $errors->has('mensagem') ? ' has-error' : '' }}">
        {!! Form::label('mensagem', 'Mensagem') !!}
        {!! Form::textarea('mensagem', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('menssagem') }}</small>
    </div>
    <div class="btn-group pull-right">
        {!! Form::reset($reset, ['class' => 'btn btn-warning']) !!}
        {!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
    </div>
</div>