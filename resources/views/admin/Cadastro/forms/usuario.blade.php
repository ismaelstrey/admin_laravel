<div class="col-lg-12">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password', 'Senha') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        {!! Form::label('password_confirmation', 'Confirmação da senha') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
    </div>
      <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
        {!! Form::label('imagem', 'Imagem') !!}
        {!! Form::file('imagem', ['class' => 'form-control',]) !!}
        <small class="text-danger">{{ $errors->first('imagem') }}</small>
    </div>

      <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
        {!! Form::label('tipo', 'Tipo') !!}
        {!! Form::select('tipo', ['0'=>'Administrador', '1'=>'Técnico', '2'=>'Vendedor', '3' => 'Cliente'], NULL, ['class'=>'form-control m-bot15']) !!}
        <small class="text-danger">{{ $errors->first('tipo') }}</small>
    </div>


    <div class="btn-group pull-right">
        {!! Form::reset($reset, ['class' => 'btn btn-warning']) !!}
        {!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
    </div>
</div>