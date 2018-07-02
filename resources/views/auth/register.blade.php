@extends('layouts.app')

@section('nav')
@stop

@section('style')
    <link rel="stylesheet" href="{{ asset('css/todo.css') }}">

@stop

@section('content')
<div class="full-height full-bg">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center>
                    <img class="img-responsive" src="http://todoarts.com/wp-content/uploads/2016/02/TODO_Logo_black_2.png" alt="todo-logo" width="200"><h4 class="desc">Register</h4><br>
                </center>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Name</label>
                        <input id="name" type="text" placeholder="Name" class="form-control theme-form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" >E-Mail Address</label>
                        <input id="email" type="email" placeholder="Email" class="form-control theme-form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Password" class="form-control theme-form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control theme-form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn theme-btn-brand btn-block">
                            Register
                        </button><br>
                        <center>    
                            <a class="btn btn-link" href="{{ route('login') }}">
                                Already have an account?
                            </a>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
