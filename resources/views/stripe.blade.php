@extends('layouts.app')
<style>
    .verify-block{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .hide {
        display: none;
    }

    #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            overflow: hidden;
            background: black;
            opacity: 0.5;
        }
        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid #37517E;
            border-top-color: #fff;
            border-bottom-color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            -webkit-animation: animate-preloader 1s linear infinite;
            animation: animate-preloader 1s linear infinite;
        }
        @-webkit-keyframes animate-preloader {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        @keyframes animate-preloader {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
</style>
@section('content')
<div class="container ">
    <div class="row verify-block">
        <div class="col-8">
            <div class="card" style="padding:20px;">
                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
                @endif
                <div class="d-flex justify-content-between">
                    <h3 class="">Payment Details</h3>
                    <img src="{{asset('assets/app-assets/images/logo/visa_master_logo.png')}}" class="img-fluid" alt="..." style="height: 42px;">
                </div>
                <form role="form" action="{{route('login-subscription')}}" method="POST" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf
                    <div class='form-row row '>
                        <div class='col-12 form-group required'>
                            <label class='form-label'>Name on Card</label>
                            <input class='form-control' size='4' type='text' {{$package->id == 1 ? 'disabled':''}}>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-12 form-group card required border-0'>
                            <label class='form-label'>Card Number</label>
                            <input autocomplete='off' name="card_number" class='form-control card-number' size='20' type='text' {{$package->id == 1 ? 'disabled':''}}>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-12 col-md-4 form-group cvc required'>
                            <label class='form-label'>CVC</label> <input autocomplete='off' name="card_cvc" class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' {{$package->id == 1 ? 'disabled':''}}>
                        </div>
                        <div class='col-12 col-md-4 form-group expiration required'>
                            <label class='form-label'>Expiration Month</label>
                            <input class='form-control card-expiry-month' placeholder='MM' name="card_expiry_month" size='2' type='text' {{$package->id == 1 ? 'disabled':''}}>
                        </div>
                        <div class='col-12 col-md-4 form-group expiration required'>
                            <label class='form-label'>Expiration Year</label>
                            <input class='form-control card-expiry-year' placeholder='YYYY' name="card_expiry_year" size='4' type='text' {{$package->id == 1 ? 'disabled':''}}>
                        </div>
                    </div>
                    <input type="hidden" name="pack_id" value="{{$package->id}}" {{$package->id == 1 ? 'disabled':''}}>
                    <input type="hidden" name="amount" value="{{$package->price}}" {{$package->id == 1 ? 'disabled':''}}>
                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try again.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            @if($package->id == 1)
                            <a href="{{route('continue-free')}}" class="btn btn-primary btn-lg btn-block text-white">Continue Free</a>
                            @else
                            <button class="btn btn-primary btn-lg btn-block" id="payment" type="submit">Pay Now ${{$package->price}}</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="preloader" class="d-none"></div>
@endsection
@section('js')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {

        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {

            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                $('#preloader').removeClass('d-none');
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            $('#preloader').addClass('d-none');
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
@endsection
