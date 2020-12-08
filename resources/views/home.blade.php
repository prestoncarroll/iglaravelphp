@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">

            <!-- <img src="{{ URL::to('/public/svg/IMG_7633.PNG')}}" /> -->
            <img src="/images/IMG_7633.PNG">
            <!-- <img src="{{ URL::to('/assets/img/default.jpg') }}"> -->

        </div>
        <div class="col-9">

        </div>
    </div>







    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection