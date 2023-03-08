@extends('layouts.app')
@section('css')
<style>

#password-strength.weak {
    font-weight: bold;
    font-size: 12px;
    color: #dc3545; /* red */
}

#password-strength.good {
    font-weight: bold;
    font-size: 12px;
    color: #ffc107; /* yellow */
}

#password-strength.strong {
    font-weight: bold;
    font-size: 12px;
    color: #28a745; /* green */
}

</style>
@endsection
@section('content')
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-8 col-10 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                <a href="{{route('home')}}">
                                    <img class="mb-2" src="{{asset('assets/app-assets/images/logo/layer.png')}}" alt="logo)" style="width: 40px;">
                                    <div class="d-inline-block">
                                        <h2 class="brand-text mb-0" style="color: #000677;">GesCle</h2>
                                    </div>
                                </a>
                                <img src="{{asset('assets/app-assets/images/pages/register.jpg')}}" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 p-2">
                                    <div class="card-header pt-50 pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Create Account</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Fill the below form to create a new account.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <form action="{{route('register')}}" method="POST">
                                                @csrf
                                                <div class="form-label-group">
                                                    <input type="text" id="inputName" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Name *" required>
                                                    <label for="inputName">Name *</label>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="email" id="inputEmail" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email *" value="{{old('email')}}" required>
                                                    <label for="inputEmail">Email *</label>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputPassword" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password *" required>
                                                    <div id="password-strength"></div>
                                                    <label for="inputPassword">Password*</label>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputConfPassword" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password *" required>
                                                    <label for="inputConfPassword">Confirm Password *</label>
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="inputPhone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number *" required>
                                                    <label for="inputPhone">Phone *</label>
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <input type="hidden" name="package_id" value="{{$_GET['id']}}">
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <fieldset class="checkbox" data-toggle="modal" data-target="#terms_conditions">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" required>
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""> I accept the terms & conditions.</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""> Newsletter offer subscription.</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <a href="{{route('login')}}" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal -->
            <div class="modal fade text-left" id="terms_conditions" tabindex="-1" role="dialog" aria-labelledby="terms_conditions33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="terms_conditions33"> </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h2>Terms and Conditions</h2>
                                <h5>Welcome to License Management !</h5>
                                <p>These terms and conditions outline the rules and regulations for the use of GesCle's Website, located at <a href="https://license.sapphost.com/public/">https://license.sapphost.com/</a>.</p>
                                <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use License Management if you do not agree to take all of the terms and conditions stated on this page.</p>
                                <p>The following terminology applies to these Terms and Conditions, All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
                                <h5>Cookies</h5>
                                <p>We employ the use of cookies. By accessing License Management , you agreed to use cookies in agreement with the GesCle's Privacy Policy.</p>
                                <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
                                <h5>License</h5>
                                <p>Unless otherwise stated, GesCle and/or its licensors own the intellectual property rights for all material on License Management . All intellectual property rights are reserved. You may access this from License Management for your own personal use subjected to restrictions set in these terms and conditions.</p>
                                <h5>You must not:</h5>
                                <ul>
                                    <li>Republish material from License Management</li>
                                    <li>Sell, rent or sub-license material from License Management</li>
                                    <li>Reproduce, duplicate or copy material from License Management</li>
                                    <li>Redistribute content from License Management</li>
                                </ul>
                                <p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the Free Terms and Conditions Generator.</p>
                                <b>Thank You</b>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $('#inputPassword').on('keyup', function() {
        var password = $(this).val();
        var strength = checkPasswordStrength(password);
        var strengthClass = 'weak';
        var strengthText = 'Weak password  ******';

        if (strength >= 2) {
            strengthClass = 'good';
            strengthText = 'Good Password ****';
        }

        if (strength >= 3) {
            strengthClass = 'strong';
            strengthText = 'Strong Password **';
        }

        $('#password-strength').removeClass().addClass(strengthClass).html(strengthText);
    });

    function checkPasswordStrength(password) {
        var strength = 0;

        if (password.length < 6) {
            return strength;
        }

        if (password.match(/[a-z]/)) {
            strength++;
        }

        if (password.match(/[A-Z]/)) {
            strength++;
        }

        if (password.match(/[0-9]/)) {
            strength++;
        }

        if (password.match(/[$@#&!]/)) {
            strength++;
        }

        return strength;
    }
});
</script>
@endsection
