@extends('templates.outs.auth')

@section('content')

  <div class="special-form">
      <a href="{{ route('home') }}"><img src="{{ \App\Helpers\Helpers::logoUrl()  }}" alt=""></a>
      <h3 class="text-center">登陆</h3>
      @if ($errors->first())
          <span class="status-msg error-msg">{{ $errors->first() }}</span>
      @endif
      <hr>
    {!! Form::open(array('action' => 'UsersController@login')) !!}
        <div class="form-group">
            <label for="email" class="color-primary">邮箱:</label>
            {!! Form::text( 'email', null, array('class' => 'form-control', "placeholder" => "邮箱","autofocus" => "true" )) !!}
        </div>
        <div class="form-group">
            <label for="password" class="color-primary">密码:</label>
            {!! Form::password( 'password', array('class' => 'form-control', "placeholder" => "密码" )) !!}
        </div>
        <div class="form-group">
            {!! Form::submit( '登陆', array('class' => 'btn btn-primary btn-wide')) !!}
        </div>
    {!! Form::close() !!}
    <p>未拥有账号? <a href="{{ route('register') }}">注册</a></p>
  </div>

@stop