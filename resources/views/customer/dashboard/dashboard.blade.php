@extends('customer.layouts.master')
@section('content')
     <!-- BEGIN: Content-->
   <div class="app-content content">
       <div class="content-overlay"></div>
       <div class="header-navbar-shadow"></div>
       <div class="content-wrapper">
           <div class="content-header row">
           </div>
           <div class="content-body">
               <!-- Dashboard Analytics Start -->
               <section id="dashboard-analytics">
                    <div class="row">
                       <div class="col-lg-3 col-md-12 col-sm-12">
                           <div class="card bg-analytics text-white">
                               <div class="card-content">
                                   <div class="card-body text-center" style="height: 240px;">
                                       <img src="{{asset('assets/app-assets/images/elements/decore-left.png')}}" class="img-left" alt="
                               card-img-left">
                                       <img src="{{asset('assets/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="
                                   card-img-right">
                                       <div class="avatar avatar-xl bg-primary shadow mt-0">
                                           <div class="avatar-content">
                                               <i class="feather icon-award white font-large-1"></i>
                                           </div>
                                       </div>
                                       <div class="text-center">
                                           <h1 class="mb-2 text-white">{{__('messages.welcome')}} {{ auth()->user()->name }}</h1>
                                           {{-- <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p> --}}
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1">{{$total_subscription}}</h2>
                                    <p class="mb-0">{{__('messages.total subscriptions')}}</p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1">{{$total_department}}</h2>
                                    <p class="mb-0">{{__('messages.total departments')}}</p>
                                </div>

                                <div class="card-content">
                                    <div id="line-area-chart-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-credit-card text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1">{{$total_license}}</h2>
                                    <p class="mb-0">{{__('messages.total license')}}</p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Departments</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle px-0" type="button" id="dropdownItem3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem3">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div id="customer-chart"></div>
                                    </div>
                                    <ul class="list-group list-group-flush customer-info">
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-primary"></i>
                                                <span class="text-bold-600">IT</span>
                                            </div>
                                            <div class="product-result">
                                                <span>890</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                                <span class="text-bold-600">HR</span>
                                            </div>
                                            <div class="product-result">
                                                <span>258</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-danger"></i>
                                                <span class="text-bold-600">Production</span>
                                            </div>
                                            <div class="product-result">
                                                <span>149</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

               </section>
               <!-- Dashboard Analytics end -->

           </div>
       </div>
   </div>
   <!-- END: Content-->

@endsection