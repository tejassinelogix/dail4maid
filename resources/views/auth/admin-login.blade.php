@extends('layouts.adminapp')

@section('content')
    <div class="divTable">
        <div class="divTableCell">
            <div class="sufee-login d-flex align-content-center flex-wrap">
                <div class="container">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.php">
                                <img class="align-content" src="public/backend/images/logo-white.png" alt="">
                            </a>
                        </div>
                        <div class="login-form">
                            <h6>Admin Login</h6>
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="form-group">
                            
                            <label for="email">{{ __('msg.E-Mail Address') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!--</div>-->
                        </div>

                        <div class="form-group">
                            <label>{{ __('msg.Password') }}</label>

                            <!--<div class="col-md-6">-->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <!--</div>-->
                        </div>

                        <div class="form-group">
                            <!--<div class="col-md-6 offset-md-4">-->
                                <!--<div class="form-check">-->
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('msg.Remember Me') }}
                                    </label>
                                    
                                    <a class="pull-right" href="{{ route('admin.password.request') }}">
                                        {{ __('msg.Forgot Your Password?') }}
                                    </a>
                                <!--</div>-->
                            <!--</div>-->
                        </div>

                        <div class="form-group row mb-0">
                            <!--<div class="col-md-8 offset-md-4">-->
                                <button type="submit"  class="btn btn-primary btn-flat m-b-30 m-t-30">
                                    {{ __('msg.Login') }}
                                </button>

                                
                            <!--</div>-->
                        </div>
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
