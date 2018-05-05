@extends('layouts.app')

@section('login_title','Smart Greenhouse Analytics')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="login-wrap">
            <div class="login-html">
                {{--<div class="card">--}}
                <div class="col-md-12 main-logo-login">
                    <img src="{{asset('images/login-logo.png') }}">

                    {{--<h5 style="color: #fff; background: red; width: 100px; height: 100px; border-radius: 50px; margin-left: 150px; "><span style=" vertical-align:center; margin-top: 20px;">Smart Hydrophonics</span></h5>--}}
                </div>
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                    In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

                <div class="login-form">
                    <div class="sign-in-htm">
                        {{--<div class="card-header">{{ __('Login') }}</div>--}}

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12 remember-me{{-- offset-md-4--}}">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">

                                    {{-- offset-md-4--}}
                                    <div class="col-md-12 no-padding">
                                        <button type="submit" class="btn btn-default btn-lg btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <div class="forgot-pass">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sign-up-htm">
                        <div class="col-md-12 no-padding-new">
                            <div class="card">
                                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-md-12 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-12">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-12">
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                   class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-12">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                   class="col-md-12 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                            <div class="col-md-12">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12{{-- offset-md-4--}}">
                                                <button type="submit" class="btn btn-default btn-lg btn-block">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
