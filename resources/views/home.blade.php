@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">


            <img style=" max-height:250px;" class="rounded-circle" src="/images/me2.jpg">


        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>Preston Carroll</h1>
            </div>
            <div class="d-flex">
                <div class="p-2"><strong>Posts </strong></div>
                <div class="p-2"><strong>Following </strong></div>
                <div class="p-2"><Strong>Followers </Strong></div>
            </div>

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