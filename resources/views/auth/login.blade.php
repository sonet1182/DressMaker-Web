<?php $page = 'login'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                <div class="col-md-6 offset-md-3">

                    <!-- Login Content -->
                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                            <div class="login-right">
                                <div class="login-header text-center">
                                    <a href="{{ route('home') }}"><img src="assets/img/logo-01.png" alt="logo" class="img-fluid"></a>
                                    <h3>Welcome Back</h3>
                                    <p>Don't miss your next opportunity. Sign in to stay updated on your professional world.
                                    </p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input id="email" type="email"
                                            class="form-control floating @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input id="password" type="password"
                                            class="form-control floating @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="focus-label">Password</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom_check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="checkmark"></span> Remember password
                                        </label>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                    <div class="login-or">
                                        <p>Or login with</p>
                                    </div>
                                    <div class="row social-login">
                                        <div class="col-4">
                                            <a href="#" class="btn btn-twitter btn-block"> Twitter</a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="btn btn-facebook btn-block"> Facebook</a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="btn btn-google btn-block"> Google</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <a class="forgot-link" href="forgot-password">Forgot Password ?</a>
                                            @if (Route::has('password.request'))
                                                <a class="forgot-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-6 text-end dont-have">New to DressMaker? <a href="/register">Click
                                                here</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Content -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    </div>
    <!-- /Main Wrapper -->
@endsection
