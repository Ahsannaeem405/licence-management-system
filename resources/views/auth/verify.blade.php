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
            <div class="card" style="padding:50px;">
                <div class="card-header"><h2>{{ __('Please Verify Your Email Address') }}</h2></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to send another verify link') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
