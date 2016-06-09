@extends('admin.layout.login')

@section('content')
  


  {!! Form::open(['url'=> '/register','role'=>'form', 'class'=>'cadastro-form']) !!}   
        <div class="login-wrap">
        <img src="images/logo.png" id="logo_img" class="center" alt="dragonfruit website template" title="Cadastro de usuario Speed sul " />
        <h2 align="center">Faça seu cadastro</h2>
            

            <div class="input-group">
                 <span class="input-group-addon"><i class="icon_profile"></i></span>              
                 {!! Form::text('name', old('name'), ['class'=>'form-control','placeholder'=>'Seu Nome','autofocus']) !!}
@if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
@endif
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_mail"></i></span>              
                {!! Form::email('email', old('email'), ['class'=>'form-control','placeholder'=>'Seu Email']) !!}
@if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
            </div>

           

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Senha']) !!}
            </div>
@if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif

             <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Repita Senha']) !!}
            </div>
@if ($errors->has('password_confirmation'))
    <span class="help-block">
        <strong>{{ $errors->first('password_confirmation') }}</strong>
    </span>
@endif

          
            {!! Form::submit("Cadastrar", ['class' => 'btn btn-info btn-lg btn-block']) !!}
            {!! Form::reset("Cancelar", ['class' => 'btn btn-danger btn-lg btn-block']) !!}
         
        </div>
      {!! Form::close() !!}   

   
@endsection
