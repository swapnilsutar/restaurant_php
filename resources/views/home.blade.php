@extends('layouts.app')

@section('content')
<div class="container" style="height:70vh;">

    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card"> -->
                <!-- <div class="card-header">{{ __('Dashboard') }}</div>   -->

                <div class="card-session">
                    @if (session('status'))
                            {{ session('status') }}
                    @endif

                        <div class="alert alert-success" role="alert">
                    {{ __('You are logged in!') }}
                        </div> 
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

@endsection
