@extends('scafold.layout')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card text-white bg-primary col-6">

                        <div class="card-body">
                            <h4 class="card-title text-white">Peoples Democratic Party</h4>
                            <p class="tx-12"><b>Name:</b> {{Auth::user()->name}}</p>
                            <p class="tx-12"><b>County:</b> {{Auth::user()->county}}</p>
                            <p class="tx-12"><b>Ward:</b> {{Auth::user()->ward}}</p>
                            <p class="tx-12"><b>Constituency:</b> {{Auth::user()->constituency}}</p>
                            <p class="txt-9">PDP{{sprintf('%06d',Auth::user()->id)}}</p>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

