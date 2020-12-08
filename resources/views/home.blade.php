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
                <div class="pr-5"><strong> 6 </strong>Posts</div>
                <div class="pr-5"><strong> 120 </strong>Following</div>
                <div class="pr-5"><Strong> 12k </Strong>Followers</div>
            </div>
            <div class="pt-4 font-weight-bold">
                I love to code. code is life. UCLA graduate and a determined Software Engineer!
            </div>

        </div>
    </div>

    <div class="row p-3">
        <div class="col-4">
            <img style="  max-height:290px;" class="w-100 h-100" src="/images/drinks.png">
        </div>
        <div class="col-4">
            <img style="max-height:290px;" class="w-100 h-100" src="/images/phase.png">
        </div>
        <div class="col-4">
            <img style="max-height:290px;" class="w-100 h-100" src="/images/timedQuiz.png">
        </div>
    </div>
    <div class="row p-3">
        <div class="col-4">
            <img style="  max-height:290px;" class="w-100 h-100" src="/images/train.png">
        </div>
        <div class="col-4">
            <img style="max-height:290px;" class="w-100 h-100" src="/images/knight.png">
        </div>
        <div class="col-4">
            <img style="max-height:290px;" class="w-100 h-100" src="/images/giftastic.png">
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