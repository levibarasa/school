@extends('layouts.app')

@section('content')
<div class="container">
    <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
        <div class="media-body align-items-center d-none d-lg-flex">
            <div class="mx-wd-600">
                <img src="{{asset('assets/img/img16.png')}}" class="img-fluid" alt="">
            </div>

        </div><!-- media-body -->
        <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
                <h3 class="tx-color-01 mg-b-5">Sign In</h3>
                <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between mg-b-5">
                        <label class="mg-b-0-f">Password</label>
                        <a href="#" class="tx-13">Forgot password?</a>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <button class="btn btn-brand-02 btn-block">Sign In</button>
                <div class="divider-text">or</div>
                </form>
                <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="/register">Create an Account</a></div>
            </div>
        </div><!-- sign-wrapper -->
    </div><!-- media -->
</div>
@endsection


<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
