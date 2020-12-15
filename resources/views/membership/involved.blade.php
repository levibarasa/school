@extends('scafold.layout')

@section('content')


<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
            <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                <div class="pd-t-20 wd-100p">

                    @include('membership.message')

                    <h5 class="tx-color-01 mg-b-5">Get Involved</h5>
                    <form class="tx-12 w-100" method="post" action="/get_involved">
                        @csrf
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">First Name</label>
                            </div>
                            <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="First name">
                        </div>

                        <div class="form-group col-md-6">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Last Name</label>
                            </div>
                            <input type="text" name="lastname" class="form-control  @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Phone Number</label>
                            </div>
                            <input type="text" name="phonenumber" class="form-control  @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="254700000000">
                        </div>

                        <div class="form-group col-md-6">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Email</label>
                            </div>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="lewis@gmail.com">
                        </div>
                        <div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="county">County</label>
                              <input type="text" class="form-control  @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" id="county" placeholder="county" name="county">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="constituency">Constituency</label>
                              <input type="constituency" class="form-control  @error('constituency') is-invalid @enderror" name="constituency" value="{{ old('constituency') }}" id="constituency" name="constituency" placeholder="constituency">
                            </div>
                          </div>



                        <div class="form-group">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">What would you like to help out with</label>
                            </div>
                            <div class="row row-sm">
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox ">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" name="activities[]" value="Social Media Campaings" for="customCheck1">Social Media Campaings</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="activities[]"  value="Fund Raisers"  id="customCheck2">
                                        <label class="custom-control-label"  for="customCheck2">Fund Raisers</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="activities[]" value="Call Center"  id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Call Center</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="activities[]" value="Work at HQ" id="customCheck4">
                                        <label class="custom-control-label"  for="customCheck4">Work at HQ</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="activities[]"  value="Purchase Merchandise"  id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Purchase Merchandise</label>
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
