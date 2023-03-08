@extends('layouts.app')
<style>
    .verify-block{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
</style>
@section('content')
<div class="container verify-block">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding:20px;">
                <div class="card-header"><h2>{{ __('Please Verify Your Email Address') }}</h2></div>
                <div class="card-body">
                    {{ __('Before proceeding, please check your email for a verification code.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{route('resend-verification-code',Auth::user()->id)}}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to send another verification code') }}</button>.
                    </form>
                    <form class="mt-2" action="{{route('send-verification-code')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="password" name="verification_code" type="text" placeholder="Enter 6 digit code" required>
                            <button type="submit" class="mt-2 btn btn-primary" style="float: right;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
