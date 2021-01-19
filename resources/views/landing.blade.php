@extends('scafold.layout')

@section('content')
<div class="home-slider">
    <div class="home-lead">
        <!--<div class="df-logo-initial mg-b-15"><p>PDp</p></div>--> 

        <h6 class="home-headline"><span>School Management System</span></h6>

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
                <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="#">Contact Admin</a></div>


      <!--  <div class="tx-12 mg-t-40"> 
            <a href="#" target="_blank" class="link-03 mg-l-10 mg-sm-l-20">TOC's</a>
            <a href="#" target="_blank" class="link-03 mg-l-10 mg-sm-l-20">Privacy Policy</a>
        </div>--> 
    </div>
    <!-- <div class="home-slider-img">
         <div><img src="assets/img/dashboard-1.png" alt=""></div>
         <div><img src="assets/img/dashboard-2.png" alt=""></div>
         <div><img src="assets/img/dashboard-2.png" alt=""></div>
     </div>-->
    <div class="home-slider-bg-one"></div>
</div><!-- home-slider -->



@endsection
