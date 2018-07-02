@extends('layouts.app')

@section('nav')
@stop

@section('style')
    <link rel="stylesheet" href="{{ asset('css/todo.css') }}">

@stop

@section('content')
<div class="full-height full-bg">
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <center>
                    <img class="img-responsive" src="http://todoarts.com/wp-content/uploads/2016/02/TODO_Logo_black_2.png" alt="todo-logo" width="200">
                    <h4 class="desc">LOGIN</h4>
                    <br>
                </center>
                
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>
                        <input id="email" placeholder="Email" type="email" class="form-control theme-form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" >Password</label>
                        <input id="password" placeholder="Password" type="password" class="form-control  theme-form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn theme-btn-brand btn-block">
                            Login
                        </button>
                    </div>

                    <center>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </center>

                    <center>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                        <a class="btn btn-link" href="{{ route('register') }}">
                            Don't have an account yet?
                        </a>
                    </center>
                </form>
            </div> 
        </div>
        
    </div>
</div>
@endsection
