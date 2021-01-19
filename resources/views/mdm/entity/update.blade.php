@extends('scafold.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="dashboard-one.html#">School Management System</a></li>
                    <li class="breadcrumb-item active" aria-current="page">School Details</li>
                </ol>
            </nav>
        </div> 
    </div>
    <div class="container pd-x-0">

    <form data-parsley-validate="" novalidate="" method="POST"  action="{{ route('entities.update', $data[0]->id) }}">
                    @method('PUT')
                            @csrf
                            <div class="form-group "> 
                                <label for="inputEmail4">School Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data[0]->name }}" placeholder="name" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Motto</label>
                                <textarea id="motto" name="motto" value="{{ $data[0]->motto }}" class="form-control">{{ $data[0]->motto }}</textarea>
                            </div>

                            <div class="form-group ">
                                <label for="location"> Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $data[0]->address }}"  required>
                            </div>

                            <div class="form-group ">
                                <label for="location"> Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $data[0]->phone }}"  required>
                            </div>
                            <div class="form-group ">
                                <label for="location"> Email Address</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $data[0]->email }}"  required>
                            </div>

                             



                            <button type="submit" class="btn btn-primary tx-13">Save changes</button>

 

                    </form>
                    @endsection








