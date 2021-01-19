@extends('scafold.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="dashboard-one.html#">School Management System</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class</li>
                </ol>
            </nav>
        </div> 
    </div>
    <div class="container pd-x-0">

    <form data-parsley-validate="" novalidate="" method="POST"  action="{{ route('grades.update', $data[0]->id) }}">
                    @method('PUT')
                            @csrf
                            <div class="form-group "> 
                                <label for="inputEmail4">Class Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data[0]->name }}" placeholder="name" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Capacity</label>
                                <input type="text" class="form-control" id="nofstudents" name="nofstudents" value="{{ $data[0]->nofstudents }}" placeholder="name" required> 
                            </div>
                   <button type="submit" class="btn btn-primary tx-13">Save changes</button>

 

                    </form>
                    @endsection








