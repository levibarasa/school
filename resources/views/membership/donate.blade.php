@extends('scafold.layout')

@section('content')


<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
            <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                <div class="pd-t-20 wd-100p">

                    @include('membership.message')

                    <h4 class="tx-color-01 mg-b-5">Donations</h4>
                    <p class="tx-color-03 tx-16 mg-b-40">For a greater course.</p>

                    <form class="tx-12 w-100" method="post" action="/donate">
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
                                <label class="mg-b-0-f">Phone Number</label>
                            </div>
                            <input type="text" name="phonenumber" class="form-control" placeholder="254700000000">
                        </div>


                        <div class="form-group">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Amount</label>
                            </div>
                            <input type="number" name="amount" class="form-control" placeholder="500">
                        </div>



                        <div class="form-group">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Mode of Payment</label>
                            </div>
                            <div class="row row-sm">
                                <div class="col-md-6 mg-t-20 mg-md-t-0">

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1">Mpesa </label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Bank Payment</label>
                                    </div>

                                </div>

                            </div>


                        </div>






                        <div class="form-group tx-12" >
                           Thank you for choosing to support us.We highly appreciate your effort.
                        </div><!-- form-group -->

                        <button class="btn btn-brand-02 btn-block">Donate</button>
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
                   <!-- <img src="assets/img/img16.png" class="img-fluid" alt="">-->
                </div>

            </div>

            <!-- media-body -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->





@push('custom-scripts')


@endpush

@endsection
