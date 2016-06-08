@extends('admin.layout.login')

@section('content')
  


  {!! Form::open(['url'=> '/register','role'=>'form', 'class'=>'cadastro-form']) !!}   
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <div class="input-group">
                 <span class="input-group-addon"><i class="icon_profile"></i></span>              
                 {!! Form::text('name', old('name'), ['class'=>'form-control','placeholder'=>'Seu Nome','autofocus']) !!}
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_mail"></i></span>              
                {!! Form::email('email', old('email'), ['class'=>'form-control','placeholder'=>'Seu Email']) !!}
            </div>

            {!! Form::file('imagem', ['class'=>'form-control']) !!}

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Senha']) !!}
            </div>

             <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Senha']) !!}
            </div>

            <label class="checkbox">
            {!! Form::checkbox('remember', NULL, NULL, NULL) !!}
                <input type="checkbox" name="remember"> Lembrar senha
                <span class="pull-right"> <a href="{{ url('/password/reset') }}"> Recuperar senha?</a></span>
            </label>
            
            {!! Form::reset("Cancelar", ['class' => 'btn btn-danger btn-lg btn-block']) !!}
            {!! Form::submit("Cadastrar", ['class' => 'btn btn-info btn-lg btn-block']) !!}
        </div>
      {!! Form::close() !!}   

   
@endsection
