@extends('layouts.app')

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

                    {{ __('You are logged in!') }}

                    @if (auth()->user()->role==1)
                    <p><a href = "/form">CONTINUE</a></p>

                    
                     @elseif (auth()->user()->role==2)
                        <a href = "/forwarder">Continue</a>

                    @elseif (auth()->user()->role==3)
                    <a href = "/circleofficer">Continue</a>
                    
                    @elseif (auth()->user()->role==4)
                    <a href = "/fieldoffice">Continue</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
