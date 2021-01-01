@extends('scafold.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="dashboard-one.html#">PDP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Member Approval</li>
                </ol>
            </nav>
        </div>
        
    </div>
    <div class="container pd-x-0">

    <form data-parsley-validate="" novalidate="" method="POST"  action="{{ route('users.update', $data[0]->id) }}">
                    @method('PUT')
                            @csrf
                            <div class="form-group ">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data[0]->name }}" placeholder="name" readonly>
                            </div>

                            <div class="form-group ">
                                <label for="location">Email Address</label>
                                <input type="text" class="form-control" id="email " name="email " value="{{ $data[0]->email  }}" placeholder="Email" readonly>
                            </div>

                            <div class="form-group">
                                <label for="description">Phone Number</label>
                                <input type="text" class="form-control" id="phonenumber " name="phonenumber " value="{{ $data[0]->phonenumber  }}" placeholder="Phone" readonly>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">County</label>
                                <input type="text" class="form-control" value="{{ $data[0]->county }}" name="county"  id="county" readonly>
                            </div>



                            <button type="submit" class="btn btn-primary tx-13">Approve Member</button>

 

                    </form>
                    @endsection








