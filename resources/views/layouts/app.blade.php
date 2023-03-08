<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/app-assets/images/logo/layer.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .toast-error {
     background-color: #E54040 !important;
     }
     .toast-success {
         background-color: #1bba1b !important;
     }
     </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    @yield('css')
    @yield('content')
    @yield('js')
     <!-- BEGIN: Vendor JS-->
     <script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
     <!-- BEGIN Vendor JS-->

     <!-- BEGIN: Page Vendor JS-->
     <!-- END: Page Vendor JS-->

     <!-- BEGIN: Theme JS-->
     <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
     <script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
     <script src="{{asset('assets/app-assets/js/scripts/components.js')}}"></script>
     <!-- END: Theme JS-->

     <!-- BEGIN: Page JS-->
     <!-- END: Page JS-->
    <!-- Toastr  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
    toastr.options = {
    "closeButton": true,
    "progressBar": true
    }

    @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @elseif(Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @endif
    @if($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{$error}}');
        @endforeach
    @endif
 </script>
 </body>
 <!-- END: Body-->

 </html>
