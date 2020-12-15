@extends('scafold.layout')

@section('content')

<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
            <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
                <div class="pd-t-20 wd-100p">
                    <h4 class="tx-color-01 mg-b-5">Welcome</h4>
                    <p class="tx-color-03 tx-16 mg-b-40">Party Membership Registration.</p>
                    <form action="register" method="post" id="voterForm">
                        @csrf
                    <div id="wizard2">
                        <h3>Personal Information</h3>
                        <section>

                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                            @endforeach
                            @endif
                            <div class="row row-sm">

                                <div class="col-md-6">
                                    <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                                    <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required="" data-parsley-id="3"><ul class="parsley-errors-list" id="parsley-id-3"></ul>
                                </div><!-- col -->
                                <div class="col-md-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                                    <input id="lastname" class="form-control" name="lastname" placeholder="Enter secondname" type="text" required="" data-parsley-id="5"><ul class="parsley-errors-list" id="parsley-id-5"></ul>
                                </div><!-- col -->
                            </div>

                            <div class="row row-sm">
                                <div class="col-md-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                                    <input id="dob" class="form-control datepicker" data-provide="datepicker" name="dob" placeholder="Enter DOB" type="text" required="" value="01-01-2002" data-parsley-id="7">
                                    <ul class="parsley-errors-list" id="parsley-id-7"></ul>
                                </div><!-- col -->

                                <div class="col-md-6">
                                    <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                                    <select class="select2 form-control" name="gender" id="gender" required="" data-parsley-id="10">
                                        <option disabled selected>Select one</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select><ul class="parsley-errors-list" id="parsley-id-10"></ul>
                                </div><!-- col -->

                            </div>
                            <div class="row row-sm">

                                <div class="col-md-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                                    <input id="phonenumber" class="form-control" name="phonenumber" placeholder="254700000000" type="text" required="" data-parsley-id="8"><ul class="parsley-errors-list" id="parsley-id-8"></ul>

                                </div><!-- col -->

                                <div class="col-md-6">
                                    <label class="form-control-label">Email: </label>
                                    <input id="email" class="form-control" name="email" placeholder="user@gmail.com" type="email" required="" data-parsley-id="9"><ul class="parsley-errors-list" id="parsley-id-9"></ul>

                                </div><!-- col -->


                            </div>


                        </section>
                        <h3>Voter's Identification</h3>
                        <section>

                            <div class="row row-sm">

                                <div class="col-md-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">ID Document Type: <span class="tx-danger">*</span></label>
                                    <select class="custom-select form-control" name="doctype" id="doctype" required="" data-parsley-id="11">
                                        <option disabled selected>Select one</option>
                                        <option value="1">National ID</option>
                                        <option value="2">passport</option>
                                    </select><ul class="parsley-errors-list" id="parsley-id-11"></ul>

                                </div><!-- col -->

                                <div class="col-md-6">
                                    <label class="form-control-label">Document Number: </label>
                                    <input id="docnumber" class="form-control" name="docnumber" placeholder="ID or Passport number" type="text" required="" data-parsley-id="12">
                                    <ul class="parsley-errors-list" id="parsley-id-12"></ul>

                                </div><!-- col -->


                            </div>


                            <div class="row row-sm">

                          <!--      <div class="col-md-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">ID Document Type: <span class="tx-danger">*</span></label>
                                    <select class="custom-select form-control" name="doctype" id="doctype" required="" data-parsley-id="11">
                                        <option disabled selected>Select one</option>
                                        <option value="1">National ID</option>
                                        <option value="2">passport</option>
                                    </select><ul class="parsley-errors-list" id="parsley-id-11"></ul>

                                </div>--><!-- col -->

                                <div class="col-md-6">
                                    <label class="form-control-label">Voter's Registration Number: </label>
                                    <input id="voterid" class="form-control" name="voterid" placeholder="Voter's ID" type="text" required="" data-parsley-id="15">
                                    <ul class="parsley-errors-list" id="parsley-id-15"></ul>

                                </div><!-- col -->


                            </div>



                        </section>
                        <h3>Location Information</h3>
                        <section>
<!--                            <p class="mg-b-20">The next and previous buttons help you to navigate through your content.</p>
-->
                            <div class="row row-sm">

                                <div class="col-md-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">County: <span class="tx-danger">*</span></label>
                                    <select class="select2 form-control" name="county" id="county" required="" data-parsley-id="12">
                                             <option disabled selected>Select one</option>
                                            <option value="baringo">Baringo</option>
                                            <option value="bomet">Bomet</option>
                                            <option value="bungoma">Bungoma</option>
                                            <option value="busia">Busia</option>
                                            <option value="ELEGEYO+MARAKWET">ELEGEYO MARAKWET</option>
                                            <option value="embu">Embu</option>
                                            <option value="garissa">Garissa</option>
                                            <option value="homa+bay">Homa Bay</option>
                                            <option value="isiolo">Isiolo</option>
                                            <option value="kajiado">Kajiado</option>
                                             <option value="kakamega">Kakamega</option>
                                             <option value="kericho">Kericho</option>
                                            <option value="kiambu">Kiambu</option>
                                            <option value="kilifi">Kilifi</option>
                                            <option value="kirinyaga">Kirinyaga</option>
                                            <option value="kisii">Kisii</option>
                                            <option value="kisumu">Kisumu</option>
                                            <option value="kitui">Kitui</option>
                                            <option value="kwale">Kwale</option>
                                            <option value="laikipia">Laikipia</option>
                                            <option value="lamu">Lamu</option>
                                            <option value="machakos">Machakos</option>
                                            <option value="makueni">Makueni</option>
                                            <option value="mandera">Mandera</option>
                                            <option value="meru">Meru</option>
                                            <option value="migori">Migori</option>
                                            <option value="marsabit">Marsabit</option>
                                            <option value="mombasa">Mombasa</option>
                                            <option value="muranga">Muranga</option>
                                            <option value="nairobi">Nairobi</option>
                                            <option value="nakuru">Nakuru</option>
                                            <option value="nandi">Nandi</option>
                                            <option value="narok">Narok</option>
                                            <option value="nyamira">Nyamira</option>
                                            <option value="nyandarua">Nyandarua</option>
                                            <option value="nyeri">Nyeri</option>
                                            <option value="samburu">Samburu</option>
                                            <option value="siaya">Siaya</option>
                                            <option value="taita+taveta">Taita Taveta</option>
                                            <option value="tana+river">Tana River</option>
                                            <option value="tharaka+nithi">Tharaka Nithi</option>
                                            <option value="trans+nzoia">Trans Nzoia</option>
                                            <option value="turkana">Turkana</option>
                                            <option value="uasin+gishu">Uasin Gishu</option>
                                            <option value="vihiga">Vihiga</option>
                                            <option value="wajir">Wajir</option>
                                            <option value="west+pokot">West Pokot</option>

                                    </select><ul class="parsley-errors-list" id="parsley-id-12"></ul>

                                </div><!-- col -->

                                <div class="col-md-6">
                                    <label class="form-control-label">Constituency: <span class="tx-danger">*</span></label>
                                    <select class="select2 form-control w-100" name="constituency" id="constituency" required="" data-parsley-id="13">
                                        <option disabled selected>Select one</option>

                                    </select><ul class="parsley-errors-list" id="parsley-id-13"></ul>

                                </div><!-- col -->


                            </div>

                            <div class="row row-sm">

                                <div class="col-md-6 mg-t-20 mg-md-t-0">
                                    <label class="form-control-label">Ward: <span class="tx-danger">*</span></label>
                                    <select class="select2 form-control" name="ward" id="ward" required="" data-parsley-id="13">
                                        <option disabled selected>Select one</option>

                                    </select><ul class="parsley-errors-list" id="parsley-id-13"></ul>

                                </div><!-- col -->

                                <div class="col-md-6">
                                    <label class="form-control-label">Polling Station: <span class="tx-danger">*</span></label>
                                    <input id="pollingstation" class="form-control" name="pollingstation" placeholder="polling station" type="text" required="" data-parsley-id="14">
                                    <ul class="parsley-errors-list" id="parsley-id-14"></ul>


                                </div><!-- col -->


                            </div>

                        </section>
                        <h3>Party Membership</h3>
                        <section>
                            <div class="row row-sm">
                                <input type="text" hidden="">
                                <div class="row justify-content-center">
                                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 d-flex flex-column">
                                        <div class="tx-100 lh-1"><i class="icon ion-ios-ribbon"></i></div>
                                        <h3 class="mg-b-25">Imara</h3>
                                        <p class="tx-color-03 mg-b-25">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum.</p>
                                        <h1 class="tx-rubik tx-18 mg-b-30 mg-t-auto">KES 100.00</h1>
                                        <a href="#" class="btn btn-primary btn-block" value="100">Choose Plan</a>
                                    </div><!-- col -->
                                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 mg-t-40 mg-sm-t-0 d-flex flex-column">
                                        <div class="tx-100 lh-1"><i class="icon ion-ios-trophy"></i></div>
                                        <h3 class="mg-b-25">Silver</h3>
                                        <p class="tx-color-03 mg-b-25">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                        <h1 class="tx-rubik tx-18 mg-b-30 mg-t-auto">KES 10,000</h1>
                                        <a href="#" class="btn btn-primary btn-block" value="10,000">Choose Plan</a>
                                    </div><!-- col -->
                                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 mg-t-40 mg-md-t-0 d-flex flex-column">
                                        <div class="tx-100 lh-1"><i class="icon ion-ios-boat"></i></div>
                                        <h3 class="mg-b-25">Gold</h3>
                                        <p class="tx-color-03 mg-b-25">Nemo enim ipsam volu ptatem quia voluptas sit asp ernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione.</p>
                                        <h1 class="tx-rubik tx-18 mg-b-30 mg-t-auto">KES  225,000</h1>
                                        <a href="#" class="btn btn-primary btn-block .btn-member" value="225000">Choose Plan</a>
                                    </div><!-- col -->

                                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 mg-t-40 mg-md-t-0 d-flex flex-column">
                                        <div class="tx-100 lh-1"><i class="icon ion-ios-rocket"></i></div>
                                        <h3 class="mg-b-25">Platinum</h3>
                                        <p class="tx-color-03 mg-b-25">Nemo enim ipsam volu ptatem quia voluptas sit asp ernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione.</p>
                                        <h1 class="tx-rubik tx-18 mg-b-30 mg-t-auto">KES 550,000</h1>
                                        <a href="#" class="btn btn-primary btn-block .btn-member" value="550000">Choose Plan</a>
                                    </div><!-- col -->

                                </div>



                            </div>

                        </section>

                        <h3>Payment Instructions</h3>
                        <section>

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

                        </section>

                    </div>
                    </form>

                </div>
            </div><!-- sign-wrapper -->
            <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
                <div class="mx-lg-wd-500 mx-xl-wd-550">
                    <img src="../../assets/img/img16.png" class="img-fluid" alt="">
                </div>
                <div class="pos-absolute b-0 r-0 tx-12">
<!--                    Social media marketing vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
-->                </div>
            </div><!-- media-body -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->

@push('custom-scripts')
<script type="text/javascript" src="lib/jquery-steps/build/jquery.steps.min.js"></script>

<script src="lib/select2/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
<script>
    $(function(){
        'use strict'

        $('.datepicker').datepicker({
            startDate: '+1y'
        });

        $('#wizard2').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
             onStepChanging: function (event, currentIndex, newIndex) {
                if(currentIndex < newIndex) {
                     // Step 1 form validation
                     if(currentIndex === 0) {
                         var fname = $('#firstname').parsley();
                         var phonenumber = $('#phonenumber').parsley();
                         var lname = $('#lastname').parsley();
                         var email = $('#email').parsley();
                         var gender = $('#gender').parsley();
                         var dob = $('#dob').parsley();

                         if(fname.isValid() && lname.isValid() && phonenumber.isValid() && email.isValid() && dob.isValid()) {
                             return true;
                         } else {


                             fname.validate();
                             lname.validate();
                             dob.validate();
                             email.validate();
                             gender.validate();
                             phonenumber.validate();
                         }
                     }

                     // Step 2 form validation
                     if(currentIndex === 1) {
                         var doctype = $('#doctype').parsley();
                         var docnumber = $('#docnumber').parsley();
                         if(doctype.isValid() && docnumber.isValid() ) {
                             return true;
                         } else {
                             doctype.validate();
                             docnumber.validate();

                         }
                     }

                    if(currentIndex === 2) {
                        var county = $('#county').parsley();
                        var constituency = $('#constituency').parsley();
                        var ward = $('#ward').parsley();
                        if(county.isValid() && constituency.isValid() ) {
                            return true;
                        } else {
                            county.validate();
                            constituency.validate();

                        }
                    }
                    if(currentIndex === 2) {
                        return true;
                    }
                    if(currentIndex === 3) {
                        return true;
                    }


                     // Always allow step back to the previous step even if the current step is not valid.
                 } else { return true; }
             },
            onFinished: function (event, currentIndex) {
                $("#voterForm").submit();
            },
        });

        $('.select2').select2({
            placeholder: "Choose one",
            allowClear: true
        });

       var wardselect= $('#ward').select2({
           placeholder: "Choose one",
           allowClear: true
       });

        var constituency= $('#constituency').select2();
       var constituencies=[];
        $('#county').on("select2:select", function(e) {

            $("#constituency").empty().trigger("change");
            $("#ward").empty().trigger("change");
            console.log( e.params.data.text),

            $.ajax({
                type: 'GET',
                url: "/api/counties?county="+ e.params.data.text,
            }).then(function (data) {
                for (var i = 0; i < data.length; i++) {
                    var obj = data[i];
                 //
                     var option = new Option(obj.constituency_name, obj.constituency_name, true, true);

                    constituency.append(option).trigger('');



                }


            });

        })


        $('#constituency').on("select2:select", function(e) {

            $("#ward").empty().trigger("change");

            console.log( e.params.data.text),

                $.ajax({
                    type: 'GET',
                    url: "/api/wards?constituency_name="+ e.params.data.text,
                }).then(function (data) {
                    for (var i = 0; i < data.length; i++) {
                        var obj = data[i];
                        //
                        var option = new Option(obj.ward_name, obj.ward_name, true, true);

                        wardselect.append(option).trigger('');



                    }


                });

        })



        $('.btn-member').on('click', function (e) {

           alert("clciked");

        })


        // Collapse content
        $('#accordion2').accordion({
            heightStyle: 'content',
            collapsible: true
        });

    });
</script>
@endpush

@endsection
