@extends('scafold.layout')

@section('content')


<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
            <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                <div class="pd-t-20 wd-100p">
                    <h4 class="tx-color-01 mg-b-5">Hi {{$userdata->name}},</h4>
                    <p class="tx-color-03 tx-16 mg-b-40">this Will  only take a minute.</p>

                        <form method="post" action="/complete_registartion_update">
                            @csrf
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="mg-b-0-f">Password</label>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="mg-b-0-f">Confirm Password</label>
                        </div>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Re Enter your password">
                    </div>
                    <input hidden name="id" value="{{$userdata->id}}" type="text">
                    <div class="form-group tx-12">
                        By clicking <strong>Complete </strong> below, you agree to our terms of service and privacy statement.
                    </div><!-- form-group -->

                    <button class="btn btn-brand-02 btn-block">Complete</button>
                        </form>
                    <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="/login">Sign In</a></div>
                </div>
            </div><!-- sign-wrapper -->
            <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
                <div class="mx-lg-wd-500 mx-xl-wd-550">
                    <img src="assets/img/img16.png" class="img-fluid" alt="">
                </div>

            </div><!-- media-body -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->





@push('custom-scripts')


@endpush

@endsection
