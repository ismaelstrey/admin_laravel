@extends('admin.layout.login')

@section('content')

   
  {!! Form::open(['url'=> '/login','class'=>'login-form','role'=>'form']) !!}   
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>              
            {!! Form::email('email', old('email'), ['class'=>'form-control','placeholder'=>'Seu Email','autofocus']) !!}           
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Senha']) !!}
               
            </div>
            <label class="checkbox">
            {!! Form::checkbox('remember', NULL, NULL, NULL) !!}
                <input type="checkbox" name="remember"> Lembrar senha
                <span class="pull-right"> <a href="{{ url('/password/reset') }}"> Recuperar senha?</a></span>
            </label>
            
            {!! Form::reset("Login", ['class' => 'btn btn-primary btn-lg btn-block']) !!}
            {!! Form::submit("Signup", ['class' => 'btn btn-info btn-lg btn-block']) !!}
        </div>
 {!! Form::close() !!}
               

@endsection
