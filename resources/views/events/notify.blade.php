@extends('scafold.layout')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
<!--                <div class="card-header">{{ __('Dashboard') }}</div>
-->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card text-white bg-green col-12">

                        <div class="card-body">

                            <h4 class="card-title text-white">PDP Upcoming Events</h4>
                           <div class="d-flex justify-content-between">
                           @foreach($events as $event)
                               <div>
                                   <p class="tx-12"><b>Event Name:</b> {{$event->name}}</p>
                                   <p class="tx-12"><b>Location:</b> {{$event->location}}</p>
                                   <p class="tx-12"><b> Event Date:</b> {{$event->events}}</p>
                                   <p class="tx-12"><b>Details:</b> {{$event->description}}</p> 
                               </div>
                               @endforeach 
                           </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

