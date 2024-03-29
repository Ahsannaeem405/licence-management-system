<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GesCle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/app-assets/images/logo/layer.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/asset/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/vendors.min.css') }}">
    <style>
        #video1,
        #video2,
        #video3 {
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .toast-error {
     background-color: #E54040 !important;
     }
     .toast-success {
         background-color: #2BD92B !important;
     }
     </style>

</head>

<body class="position-relative  ">
    <nav class="navbar navbar-expand-lg navbar-light  w-100 nav_main sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid" src="{{ asset('img.png') }}"
                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 gap-md-1 gap-2 mb-lg-0">
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0 " aria-current="page" href="#how-it-work">{{__('messages.nav-works')}}</a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#subscription">{{__('messages.nav-pricing')}}</a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#benifits">{{__('messages.nav-benifits')}}</a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#product-slider">{{__('messages.nav-customers')}}</a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#about-us">{{__('messages.nav-about')}}</a>
                        </li>
                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="#contact">{{__('messages.nav-contact')}}</a>
                        </li>
                        <li class="nav-item btn-2 btn_hover_0">
                            <div class="btn-group">
                                <button type="button" class="btn btn_hover_0 text-white dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <li>
                                            <a class="dropdown-item" href="{{route('lang.switch',$lang)}}">
                                                <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                                                {{$language['display']}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                                </ul>
                            </div>
                        </li>
                        {{-- <li class="nav-item btn-2 btn_hover_0"> --}}
                            {{-- <a class="nav-link  py-md-2 py-1  px-0" href="#">
                                <div class="btn-group">
                                    <button type="button" class="btn btn_hover_0 text-white p-0 dropdown-toggle"
                                        data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
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
                            </a> --}}
                        {{-- </li> --}}

                        <li class="nav-item btn-2">
                            <a class="nav-link py-md-2 py-1 text-white px-0" href="{{ route('login') }}">{{__('messages.nav-login')}} </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header class="header_section header position-relative">
        <div class="overflow-hidden">
            <canvas id="nokey" width="1200" height="500"></canvas>
        </div>
        <div class="text-box text-white">
            <h3 class="heading-primary heading_header mb-md-5  mb-3">
                {{__('messages.banner-heading')}}
                <span class="d-block"></span>
            </h3>

            <p class="banner-text mb-md-5 mb-3">
                {{__('messages.banner-paragraph')}}
            </p>
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    {{__('messages.banner-button')}}
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content demo-modal" style="border-radius: 1.1rem; !important">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Book Demo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="{{ route('store-client') }}" method="POST" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control "
                                                data-validation-required-message="This field is required"
                                                placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4 mb-4">
                                        <label> Phone#</label>
                                        <div class="controls">
                                            <input type="text" name="phone" class="form-control  " required
                                                data-validation-containsnumber-regex="(\d)+"
                                                data-validation-containsnumber-message="The numeric field may only contain numeric characters."
                                                placeholder="Enter Numbers only" required>
                                        </div>
                                    </div>

                                    <div class="form-group mt-4 mb-4">
                                        <label>Role</label>
                                        <div class="controls">
                                            <input type="text" name="role" class="form-control "
                                                data-validation-required-message="This field is required"
                                                placeholder="Enter Role" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label> Email</label>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control"
                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                placeholder="@gmail.com" required>

                                        </div>
                                    </div>
                                    <div class="form-group mt-4 mb-4">
                                        <label>Company</label>
                                        <div class="controls">
                                            <input type="text" name="company" class="form-control " required
                                                data-validation-containsnumber-regex="^[a-zA-Z]+$"
                                                data-validation-containsnumber-message="The alpha field may only contain alphabetic characters."
                                                placeholder="Enter Company">

                                        </div>
                                    </div>
                                    <div class="form-group mt-4 mb-4">
                                        <label>Address</label>
                                        <div class="controls">
                                            <input type="text" name="address" class="form-control"
                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                data-validation-containsnumber-message="The regex field format is invalid."
                                                placeholder="Enter Address" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <h6>Preferred mode of contact</h6>
                            <span class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode" value="phone"
                                        required>
                                    <label class="form-check-label" for="flexRadioDefault1">Phone</label>
                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mode" value="email"
                                        required>
                                    <label class="form-check-label" for="flexRadioDefault2">Email</label>
                                </div>
                            </span>
                            <div class="col-md-12 ">
                                <button type="submit" class="btn demo-btn mr-1 mb-1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    </header>

    <!-- how it work -->
    <section class="how-it-works py-md-5 py-3 overflow-hidden" id="how-it-work">
        <div class="container mt-4" data-aos="fade-left">
            <h2 class="section_heading text-center position-relative mb-5 fw-bold">{{__('messages.work-heading')}}</h2>
            <h5 class="text-center position-relative mb-5">{{__('messages.work-sub-heading')}}</h5>
            <div class="row align-items-center">
                <div class="col-md-6 mt-2 mt-md-0 d-flex flex-column gap-4">
                    <div id="video1" class="box p-md-3 p-2 work-block-active">
                        <h3>{{__('messages.work-tab-1')}}</h3>
                        <p class="mb-0">{{__('messages.work-tab-1-text')}}</p>
                    </div>
                    <div class="box p-md-3 p-2 work-block" id="video2">
                        <h3>{{__('messages.work-tab-1')}}</h3>
                        <p class="mb-0">{{__('messages.work-tab-2-text')}}</p>
                    </div>
                    <div class="box p-md-3 p-2 work-block" id="video3">
                        <h3> {{__('messages.work-tab-1')}}</h3>
                        <p class="mb-0">{{__('messages.work-tab-3-text')}}</p>
                    </div>
                </div>
                <div class="col-md-6 mt-2 mt-md-0">
                    <div class="work_video ved1">
                        <img src="{{ asset('assets/asset/img/testimonial.jpg') }}" style="height: 20%; width:100%;">
                    </div>

                    <div class="work_video ved2">
                        <img src="{{ asset('assets/asset/img/header_main.jpg') }}" style="height: 340px; width:100%;">
                    </div>

                    <div class="work_video ved3">
                        <video controls>
                            <source src="{{ asset('assets/asset/img/flower.webm') }}" type="video/mp4">
                            <!-- <source src="movie.ogg" type="video/ogg"> -->
                            Your browser does not support the video tag.
                        </video>
                    </div>


                </div>



            </div>
        </div>
    </section>
    <!-- Price section -->
    <section class="price_section py-md-5 py-3 " id="subscription">
        <div class="container mt-4" data-aos="fade-left">
            <h2 class="section_heading text-center position-relative mb-5 fw-bold"> Subscriptions</h2>
            <div class="row">
                <!-- Free Tier -->
                @foreach ($packages as $package)
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text_primary fw-bolder text-uppercase text-center">
                                    {{ $package->name }}</h5>
                                <h6 class="card-price text-center">${{ $package->price }}<span
                                        class="period">/month</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    @foreach ($package->package_details as $details)
                                        <li>
                                            <span class="fa-li">
                                                @if ($details->status == 1)
                                                    <i class="fas fa-check text-success"></i>
                                                @elseif ($details->status == 0)
                                                    <i class="fas fa-close text-danger"></i>
                                                @endif
                                            </span>{{$details->point_value}} {{$details->point_name}}
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="d-grid">
                                    <a href="{{ route('register') }}?id={{ encrypt($package->id) }}"
                                        class="btn bg_primary text-uppercase">Subscribe Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- Benifits section -->
    <section class="section_our_solution py-md-5 py-3" id="benifits">
        <div class="container mt-4" data-aos="fade-left">
            <h2 class="section_heading text-center position-relative mb-5 fw-bold">{{__('messages.benefits')}}</h2>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="our_solution_category gap-3">
                        <div class="solution_cards_box gap-3">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50"
                                        viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"
                                                            fill="#fae19e" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"
                                                                            fill="#fff9e9" />
                                                                    </g>
                                                                    <path
                                                                        d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"
                                                                        fill="#fff4d6" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"
                                                            fill="#ffeec2" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <path
                                                        d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"
                                                        fill="#fed23a" />
                                                    <path
                                                        d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"
                                                        fill="#54b1ff" />
                                                    <path
                                                        d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"
                                                        fill="#fdf385" />
                                                    <path
                                                        d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"
                                                        fill="#faee6e" />
                                                    <path
                                                        d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"
                                                        fill="#54b1ff" />
                                                    <g>
                                                        <path
                                                            d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"
                                                            fill="#3da7ff" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g fill="#060606">
                                                <path
                                                    d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                <path
                                                    d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                <path
                                                    d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="solu_title">
                                    <h3 class="text_primary">{{__('messages.streamlined license tracking')}}</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        {{__('messages.with your application, users no longer have to manually track and manage their licenses, which can save them a significant amount of time and effort.')}}
                                    </p>
                                    {{-- <button type="button" class="read_more_btn bg_primary">Read More</button> --}}
                                </div>
                            </div>
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50"
                                        viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"
                                                            fill="#fae19e" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"
                                                                            fill="#fff9e9" />
                                                                    </g>
                                                                    <path
                                                                        d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"
                                                                        fill="#fff4d6" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"
                                                            fill="#ffeec2" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <path
                                                        d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"
                                                        fill="#fed23a" />
                                                    <path
                                                        d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"
                                                        fill="#54b1ff" />
                                                    <path
                                                        d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"
                                                        fill="#fdf385" />
                                                    <path
                                                        d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"
                                                        fill="#faee6e" />
                                                    <path
                                                        d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"
                                                        fill="#54b1ff" />
                                                    <g>
                                                        <path
                                                            d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"
                                                            fill="#3da7ff" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g fill="#060606">
                                                <path
                                                    d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                <path
                                                    d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                <path
                                                    d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="solu_title">
                                    <h3 class="text_primary">{{__('messages.user-friendly interface')}} </h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        {{__('messages.interface...')}}
                                    </p>
                                    {{-- <button type="button" class="read_more_btn bg_primary">Read More</button> --}}
                                </div>
                            </div>
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50"
                                        viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"
                                                            fill="#fae19e" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"
                                                                            fill="#fff9e9" />
                                                                    </g>
                                                                    <path
                                                                        d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"
                                                                        fill="#fff4d6" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"
                                                            fill="#ffeec2" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <path
                                                        d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"
                                                        fill="#fed23a" />
                                                    <path
                                                        d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"
                                                        fill="#54b1ff" />
                                                    <path
                                                        d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"
                                                        fill="#fdf385" />
                                                    <path
                                                        d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"
                                                        fill="#faee6e" />
                                                    <path
                                                        d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"
                                                        fill="#54b1ff" />
                                                    <g>
                                                        <path
                                                            d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"
                                                            fill="#3da7ff" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g fill="#060606">
                                                <path
                                                    d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                <path
                                                    d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                <path
                                                    d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="solu_title">
                                    <h3 class="text_primary">{{__('messages.powerful features')}}</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        {{__('messages.features...')}}
                                    </p>
                                    {{-- <button type="button" class="read_more_btn bg_primary">Read More</button> --}}
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="solution_cards_box gap-3 sol_card_top_3">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50"
                                        viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"
                                                            fill="#fae19e" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"
                                                                            fill="#fff9e9" />
                                                                    </g>
                                                                    <path
                                                                        d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"
                                                                        fill="#fff4d6" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"
                                                            fill="#ffeec2" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <path
                                                        d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"
                                                        fill="#fed23a" />
                                                    <path
                                                        d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"
                                                        fill="#54b1ff" />
                                                    <path
                                                        d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"
                                                        fill="#fdf385" />
                                                    <path
                                                        d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"
                                                        fill="#faee6e" />
                                                    <path
                                                        d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"
                                                        fill="#54b1ff" />
                                                    <g>
                                                        <path
                                                            d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"
                                                            fill="#3da7ff" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g fill="#060606">
                                                <path
                                                    d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                <path
                                                    d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                <path
                                                    d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="solu_title">
                                    <h3 class="text_primary">{{__('messages.free 3-month trial')}}</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        {{__('messages.trial...')}}
                                    </p>
                                    {{-- <button type="button" class="read_more_btn bg_primary">Read More</button> --}}
                                </div>
                            </div>
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50"
                                        viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"
                                                            fill="#fae19e" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"
                                                                            fill="#fff9e9" />
                                                                    </g>
                                                                    <path
                                                                        d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"
                                                                        fill="#fff4d6" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"
                                                            fill="#ffeec2" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <path
                                                        d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"
                                                        fill="#fed23a" />
                                                    <path
                                                        d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"
                                                        fill="#54b1ff" />
                                                    <path
                                                        d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"
                                                        fill="#fdf385" />
                                                    <path
                                                        d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"
                                                        fill="#faee6e" />
                                                    <path
                                                        d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"
                                                        fill="#54b1ff" />
                                                    <g>
                                                        <path
                                                            d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"
                                                            fill="#3da7ff" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g fill="#060606">
                                                <path
                                                    d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                <path
                                                    d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                <path
                                                    d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="solu_title">
                                    <h3 class="text_primary">{{__('messages.central location')}}</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        {{__('messages.location...')}}
                                    </p>
                                    {{-- <button type="button" class="read_more_btn bg_primary">Read More</button> --}}
                                </div>
                            </div>
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50"
                                        viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z"
                                                            fill="#fae19e" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z"
                                                                            fill="#fff9e9" />
                                                                    </g>
                                                                    <path
                                                                        d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z"
                                                                        fill="#fff4d6" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z"
                                                            fill="#ffeec2" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <path
                                                        d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z"
                                                        fill="#fed23a" />
                                                    <path
                                                        d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z"
                                                        fill="#54b1ff" />
                                                    <path
                                                        d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z"
                                                        fill="#fdf385" />
                                                    <path
                                                        d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z"
                                                        fill="#faee6e" />
                                                    <path
                                                        d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z"
                                                        fill="#54b1ff" />
                                                    <g>
                                                        <path
                                                            d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z"
                                                            fill="#3da7ff" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g fill="#060606">
                                                <path
                                                    d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                <path
                                                    d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                <path
                                                    d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                <path
                                                    d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                <path
                                                    d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="solu_title">
                                    <h3 class="text_primary">{{__('messages.increases efficiency')}}</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        {{__('messages.efficiency...')}}
                                    </p>
                                    {{-- <button type="button" class="read_more_btn bg_primary">Read More</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- customor logos -->
    <section id="product-slider" class="py-md-5  py-3">
        <div class="container mt-4">
            <h2 class="section_heading text-center position-relative mb-md-5 mb-3 fw-bold">Customers</h2>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <a href="https://www.google.com/"><img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"><img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"><img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                                width="250" alt="" />/

                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.google.com/"> <img
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                                width="250" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us -->
    <section id="about-us" class="about py-md-5 py-4 ">
        <div class="container mt-4 aos-init aos-animate" data-aos="fade-right">
            <h2 class="section_heading text-center position-relative mb-5 fw-bold">{{__('messages.about-heading')}}</h2>
            <h6 class="text-center">{{__('messages.about-sub-heading')}}</h6>
            <div class="row gy-4 mt-2">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">

                    <img src="{{ asset('assets/asset/img/header_main.jpg') }}" class="img-fluid rounded-3"
                        alt=""></a>
                </div>

                <div class="col-lg-6 content order-last order-lg-first">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate"> <i
                                class="bi bi-diagram-3"></i>
                            <div>

                                <p>{{__('messages.about-p-1')}}</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate"> <i
                                class="bi bi-diagram-3"></i>
                            <div>
                                {{-- <h5>Ullamco laboris nisi ut aliquip consequat</h5> --}}
                                <p>{{__('messages.about-p-2')}}</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"> <i
                                class="bi bi-fullscreen-exit"></i>
                            <div>
                                {{-- <h5>Magnam soluta odio exercitationem reprehenderi</h5> --}}
                                <p>{{__('messages.about-p-3')}}</p>
                            </div>
                        </li>
                        {{-- <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate"> <i
                                class="bi bi-broadcast"></i>
                            <div>
                                <p>Thank you for choosing our license management application. We are committed to
                                    providing you with the best service and support possible.</p>
                            </div>
                        </li> --}}
                        {{-- <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate"> <i
                                class="bi bi-broadcast"></i>
                            <div>
                                <p> "We were looking for a solution that would help us to manage our licenses more
                                    efficiently and your application exceeded our expectations. It is so easy to use and
                                    has helped us to stay organized and on top of renewals." </p>
                            </div>
                        </li> --}}
                        {{-- <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate"> <i
                                class="bi bi-broadcast"></i>
                            <div>
                                <p> "As a business that operates in multiple states, managing our licenses was
                                    becoming a real headache. Your application has made it so easy for us to keep track
                                    of all of our licenses, no matter where they are located."</p>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial-area " class="testimonial_section  overflow-hidden text-white py-md-5 py-4">
        <div class="container" data-aos="fade-left">
            <div class="row pb-md-4">

                <div class="col-md-8 offset-md-2 text-center">
                    <h2 class="section_heading  position-relative mb-5 fw-bold">A Word From Our Customers</h2>
                    <p class="pb-3">Thank you for choosing our license management application. We are committed to
                        providing you with the best service and support possible. </p>

                </div>

            </div>
            <div class="testi-wrap">

                <div class="client-single active position-1" data-position="position-1">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment ">
                        <h3 class="text-white">"We were looking for a solution that would help us to manage our
                            licenses more
                            efficiently and your application exceeded our expectations. It is so easy to use and
                            has helped us to stay organized and on top of renewals." </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info ">
                        <h3 class="text-white">Brown Tech Int</h3>
                        <p><a class="text-white" href="#" href="https://brown.com">BTI</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-2" data-position="position-2">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>"As a business that operates in multiple states, managing our licenses was
                            becoming a real headache. Your application has made it so easy for us to keep track
                            of all of our licenses, no matter where they are located."</h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>BTI</h3>
                        <p><a href="#">Lahore</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-3" data-position="position-3">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>"We were looking for a solution that would help us to manage our licenses more
                            efficiently and your application exceeded our expectations. It is so easy to use and
                            has helped us to stay organized and on top of renewals." </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>Johin</h3>
                        <p><a href="#">New York</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-4" data-position="position-4">
                    <div class="client-img">
                        <img src="https://media.licdn.com/dms/image/C4E03AQFbvYtvSeyw-g/profile-displayphoto-shrink_100_100/0?e=1574294400&v=beta&t=49_VH9HRvqymP-VLETlFhFt4idmunZPhIQfALwaTrmA"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>"We were looking for a solution that would help us to manage our licenses more
                            efficiently and your application exceeded our expectations. It is so easy to use and
                            has helped us to stay organized and on top of renewals." </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>Messi</h3>
                        <p><a href="#">Softwate</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-5" data-position="position-5">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>"As a business that operates in multiple states, managing our licenses was
                            becoming a real headache. Your application has made it so easy for us to keep track
                            of all of our licenses, no matter where they are located."</h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>smith</h3>
                        <p><a href="#">IT department</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-6" data-position="position-6">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            alt="">
                    </div>
                    <div class="client-comment">
                        <h3>"As a business that operates in multiple states, managing our licenses was
                            becoming a real headache. Your application has made it so easy for us to keep track
                            of all of our licenses, no matter where they are located." </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>gold</h3>
                        <p><a href="#">Business man</a></p>
                    </div>
                </div>

                <div class="client-single inactive position-7" data-position="position-7">
                    <div class="client-img">
                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299"
                            width="40px" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>"We were looking for a solution that would help us to manage our licenses more
                            efficiently and your application exceeded our expectations. It is so easy to use and
                            has helped us to stay organized and on top of renewals." </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <div class="client-info">
                        <h3>gold smith</h3>
                        <p><a href="#">gold smith</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- customor logos -->
    <section id="product-slider" class="py-md-5 py-3">
        <h2 class="section_heading text-center position-relative mb-5 fw-bold">Partners </h2>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"> <img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"> <img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"> <img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                            width="250" alt="" /></a>
                </div>
                <div class="slide">
                    <a href="https://www.google.com/"><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                            width="250" alt="" /></a>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="section_faq" class="py-md-5 py-3 px-2">
        <h2 class="section_heading text-center position-relative mb-5 fw-bold">FAQ</h2>
        <div class="container px-0">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            Q: {{__('messages.faq-q-1')}}
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> A: {{__('messages.faq-a-1')}}</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            Q: {{__('messages.faq-q-2')}}
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwo" data-bs-parent="#flush-headingTwo">
                        <div class="accordion-body">
                            A: {{__('messages.faq-a-2')}}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Q: {{__('messages.faq-q-3')}}
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#flush-headingThree">
                        <div class="accordion-body"> A: {{__('messages.faq-a-3')}}</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfour">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false"
                            aria-controls="flush-collapsefour">
                            Q: {{__('messages.faq-q-4')}}
                    </h2>
                    <div id="flush-collapsefour" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingfour" data-bs-parent="#flush-collapsefour">
                        <div class="accordion-body"> A: {{__('messages.faq-a-4')}}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfive">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false"
                            aria-controls="flush-collapsefive">
                            Q: {{__('messages.faq-q-5')}}
                        </button>
                    </h2>
                    <div id="flush-collapsefive" class="accordion-collapse collapse"
                        aria-labelledby="flush-collapsefive" data-bs-parent="#flush-collapsefive">
                        <div class="accordion-body"> A: {{__('messages.faq-a-5')}}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingsix">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false"
                            aria-controls="flush-collapsesix">
                            Q: {{__('messages.faq-q-6')}}
                        </button>
                    </h2>
                    <div id="flush-collapsesix" class="accordion-collapse collapse"
                        aria-labelledby="flush-collapsesix" data-bs-parent="#flush-collapsesix">
                        <div class="accordion-body">A: {{__('messages.faq-a-6')}}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingseven">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false"
                            aria-controls="flush-collapseseven">
                            Q: {{__('messages.faq-q-7')}}
                        </button>
                    </h2>
                    <div id="flush-collapseseven" class="accordion-collapse collapse"
                        aria-labelledby="flush-collapseseven" data-bs-parent="#flush-collapseseven">
                        <div class="accordion-body"> A: {{__('messages.faq-a-7')}}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingeight">
                        <button class="accordion-button fw-bold text_primary collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false"
                            aria-controls="flush-collapseeight">
                            Q: {{__('messages.faq-q-8')}}
                        </button>
                    </h2>
                    <div id="flush-collapseeight" class="accordion-collapse collapse"
                        aria-labelledby="flush-collapseeight" data-bs-parent="#flush-collapseeight">
                        <div class="accordion-body">A: {{__('messages.faq-a-8')}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact us -->
    <section id="contact" class="contact section_contact py-md-5 py-4">
        <div class="container aos-init aos-animate mt-4" data-aos="fade-up">
            <div class="section-title text-center">
                <h2 class="section_heading text-center  position-relative mb-5 fw-bold">Contact Us</h2>

            </div>
            <div class="row">
                <div class="col-md-5 d-flex ">
                    <div class="info w-100">
                        <div class="address"> <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>France </p>
                        </div>
                        <div class="email"> <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>contact@gescle.com</p>
                        </div>
                        <div class="phone"> <i class="bi bi-phone"></i>
                            <h4>phone:</h4>
                            <p>+33 000000000</p>
                        </div> <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-7  d-flex ">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6"> <label for="name">Your Name</label> <input
                                    type="text" name="name" class="form-control" id="name"
                                    required=""></div>
                            <div class="form-group col-md-6"> <label for="name">Your Email</label> <input
                                    type="email" class="form-control" name="email" id="email"
                                    required=""></div>
                        </div>
                        <div class="form-group"> <label for="name">Subject</label> <input type="text"
                                class="form-control" name="subject" id="subject" required=""></div>
                        <div class="form-group"> <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required="" data-gramm="false"
                                wt-ignore-input="true"></textarea>
                        </div>

                        <div class="text-center mt-4"><button type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->

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

                    <div class="col-md-5 col-lg-4 ml-lg-0 d-flex justify-content-end text-center text-md-end">

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white"
                            role="button"><i class="fab fa-facebook-f"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white"
                            role="button"><i class="fab fa-twitter"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white"
                            role="button"><i class="fab fa-google"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#" class="text-white"
                            role="button"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>
    <!-- Button trigger modal -->
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/asset/js/ani-particals.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
</html>
<script>
    $(document).ready(function() {
        $('.ved2').hide();
        $('.ved3').hide();

        $('#video1').click(function() {
            $('#video2').removeClass('work-block-active');
            $('#video3').removeClass('work-block-active');
            $('#video1').addClass('work-block-active');
            $('.ved1').show();
            $('.ved2').hide();
            $('.ved3').hide();

        });

        $('#video2').click(function() {
            $('#video1').removeClass('work-block-active');
            $('#video3').removeClass('work-block-active');
            $('#video2').addClass('work-block-active');
            $('.ved1').hide();
            $('.ved2').show();
            $('.ved3').hide();



        });
        $('#video3').click(function() {
            $('#video1').removeClass('work-block-active');
            $('#video2').removeClass('work-block-active');
            $('#video3').addClass('work-block-active');
            $('.ved1').hide();
            $('.ved2').hide();
            $('.ved3').show();


        });
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
        $('.client-single').on('click', function(event) {
            event.preventDefault();

            var active = $(this).hasClass('active');

            var parent = $(this).parents('.testi-wrap');

            if (!active) {
                var activeBlock = parent.find('.client-single.active');

                var currentPos = $(this).attr('data-position');

                var newPos = activeBlock.attr('data-position');

                activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(
                    currentPos);
                activeBlock.attr('data-position', currentPos);

                $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(
                    newPos);
                $(this).attr('data-position', newPos);

            }


        });

    }(jQuery));
</script>
{{-- video  --}}

{{-- end video  --}}
<!-- aos animation -->
<script>
    AOS.init();
</script>
<script>
    var myip;
        $.getJSON("https://api.ipify.org/?format=json", function(e) {
            myip = e.ip;
            $.ajax({
            type:'get',
            url:"{{route('user-visits')}}",
            data:{ip:myip},
            success:function(data)
            {
                // alert(data.success);
            }
        });
    });
</script>
