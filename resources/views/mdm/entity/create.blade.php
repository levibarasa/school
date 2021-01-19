

@extends('scafold.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div> <!-- name,motto,address,phone,email,logo-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="dashboard-one.html#">PDP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Manage Events
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#usersModal"  data-target="#usersModal" data-toggle="modal" >New Event</a>

            </div>
        </div>
    </div>
    <div class="container pd-x-0">

    <form data-parsley-validate="" novalidate="" method="POST"  action="{{ route('events.update', $data[0]->id) }}">
                    @method('PUT')
                            @csrf
                            <div class="form-group ">
                                <label for="inputEmail4">Event Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data[0]->name }}" placeholder="name" required>
                            </div>

                            <div class="form-group ">
                                <label for="location">Event Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $data[0]->location }}" placeholder="name" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Event Description</label>
                                <textarea id="description" name="description" value="{{ $data[0]->description }}" class="form-control">{{ $data[0]->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Event Date</label>
                                <input type="text" class="form-control datepicker" value="{{ $data[0]->events }}" name="events" data-date-format="yyyy-mm-dd" id="events" >
                            </div>



                            <button type="submit" class="btn btn-primary tx-13">Save changes</button>

 

                    </form>
                    @endsection









