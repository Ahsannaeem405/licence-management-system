<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GesCle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/app-assets/images/logo/Layer.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/asset/css/style.css') }}">

   

</head>

<body class="position-relative  ">
    <nav class="navbar navbar-expand-lg navbar-light  w-100 nav_main sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid" src="{{ asset('img.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 gap-md-1 gap-2 mb-lg-0">
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0 " aria-current="page" href="#">How it
                                Works
                            </a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#about-us">Pricing </a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#about-us">Benefits </a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#about-us">Customers </a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#about-us">About Us </a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item btn-2 btn_hover_0">
                            <a class="nav-link  py-md-2 py-1  px-0" href="#">
                                <div class="btn-group">
                                    <button type="button" class="btn btn_hover_0 text-white p-0 dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <i class="fas fa-globe"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                        <li>
                                            <button class="dropdown-item" type="button">English</button>
                                        </li>

                                        <li>
                                            <button class="dropdown-item" type="button">French </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button">Italian</button>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="{{route('login')}}">Login </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container stripe_payment py-md-5 py-3">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class=" credit-card-box border p-md-4 p-3 rounded">
                    <div class="d-flex justify-content-between">
                        <h3 class="">Payment Details</h3>
                        <img src="{{asset('assets/app-assets/images/logo/visa_master_logo.png')}}" class="img-fluid" alt="..." style="height: 42px;">
                    </div>
                    <div class="panel-body ">

                        @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif

                        <form role="form" action="" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf

                            {{-- <input type="hidden" value="{{$package->id}}" name="package_id">
                            <input type="hidden" value="{{$package->price}}" name="amount">
                            <input type="hidden" value="{{$package->days}}" name="days"> --}}
                            <div class='form-row row mt-md-3 mt-2'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='form-label'>Name on Card</label>
                                    <input class='form-control' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row mt-md-3 mt-2'>
                                <div class='col-xs-12 form-group card required border-0'>
                                    <label class='form-label'>Card Number</label>
                                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>

                            <div class='form-row row mt-md-3 mt-2'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='form-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='form-label'>Expiration Month</label>
                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='form-label'>Expiration Year</label>
                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row mt-md-3 mt-2'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    {{-- <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button> --}}
                                    <a href="{{route('register')}}" class="btn btn-primary mt-3 bg_primary" type="submit">Pay Now</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="text-center  py-3 text-lg-start text-white">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 mt-3">
                        <div class="footer_logo">
                            <img src="{{ asset('img.png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <hr class="w-100 clearfix d-md-none" />
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-6 col-lg-6 col-xl-6 mt-3 contact_footer text-end">
                        <h6 class="text-uppercase text-md-end mb-4 font-weight-bold">Contact</h6>
                        <div>
                            <div class="mb-2"><i class="fas fa-home mr-3"></i> France</div>
                            <div class="mb-2"><i class="fas fa-envelope mr-3"></i> contact@gescle.com</div>
                            <div class="mb-2"><i class="fas fa-phone mr-3"></i> 33 000000000</div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="my-3">
            <section class="py-3 pt-0 footer_bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7 col-lg-8 text-center text-md-start">

                        <div class="py-3">
                            © 2023 Copyright:
                            <a class="text-white" href="#" href="https://browntech.com/">GesCle.com</a>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 ml-lg-0 d-flex justify-content-center text-center text-md-end">

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i class="fab fa-google"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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

</html>