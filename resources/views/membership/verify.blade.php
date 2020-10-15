@extends('scafold.layout')

@section('content')


<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
            <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                <div class="pd-t-20 wd-100p">
                    <h4 class="tx-color-01 mg-b-5">Member Verification</h4>
                    <p class="tx-color-03 tx-16 mg-b-40">this Will  only take a minute.</p>

                        <form method="post" action="/verify">
                            @csrf
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="mg-b-0-f">First Name</label>
                        </div>
                        <input type="text" name="firstname" class="form-control" placeholder="First name">
                    </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between mg-b-5">
                                    <label class="mg-b-0-f">Last Name</label>
                                </div>
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                            </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="mg-b-0-f">Member ID number</label>
                        </div>
                        <input type="text" name="docnumber" class="form-control" placeholder="Member ID Number">
                    </div>

                    <div class="form-group tx-12">
                        By clicking <strong>Verify </strong> below, you agree to our terms of service and privacy statement.
                    </div><!-- form-group -->

                    <button class="btn btn-brand-02 btn-block">Verify</button>
                        </form>

                </div>
            </div><!-- sign-wrapper -->
            @isset($userdata)
            <div class="alert alert-{{$userdata['status']}}" role="alert">
                <h4 class="alert-heading">Alert !</h4>
                <hr>
                <p class="mb-0">{{$userdata['message']}}</p>
            </div>
            @endisset

            <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
                <div class="mx-lg-wd-500 mx-xl-wd-550">
                    <img src="assets/img/img16.png" class="img-fluid" alt="">
                </div>

            </div>

            <!-- media-body -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->





@push('custom-scripts')


@endpush

@endsection
